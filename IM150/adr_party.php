<?php
/***************************************************************************
 *                                        adr_party.php
 *                                ------------------------
 *        copyright                        :  LagunaCid
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *
 ***************************************************************************/

define('IN_PHPBB', true);
define('IN_ADR_CHARACTER', true);
define('IN_ADR_BATTLE', true);
define('IN_ADR_SHOPS', true);
define('IN_ADR_VAULT', true);
$phpbb_root_path = './';
include_once($phpbb_root_path . 'extension.inc');
include_once($phpbb_root_path . 'common.'.$phpEx);

$loc = 'character';
$sub_loc = 'adr_character';

//
// Start session management
$userdata = session_pagestart($user_ip, PAGE_INDEX);
init_userprefs($userdata);
// End session management
//

include_once($phpbb_root_path . 'adr/includes/adr_global.'.$phpEx);

// Sorry , only logged users ...
if ( !$userdata['session_logged_in'] )
{
    $redirect = "adr_character.$phpEx";
    $redirect .= ( isset($user_id) ) ? '&user_id=' . $user_id : '';
    header('Location: ' . append_sid("login.$phpEx?redirect=$redirect", true));
}

// V: basic checks
$adr_general = adr_get_general_config();

// Includes the tpl and the header
include_once($phpbb_root_path . 'includes/page_header.'.$phpEx);
include_once($phpbb_root_path . 'adr/includes/adr_header.'.$phpEx);

// Who is looking at this page ?
$user_id = $userdata['user_id'];
//V: wtf is $searchid?? or $view_userdata??
//$searchid = $view_userdata['user_id'];
$points = $userdata['user_points'];
$char = adr_get_user_infos($user_id);

adr_enable_check();
adr_ban_check($user_id);
adr_character_created_check($user_id);

// V: Guilds Mod Integration
// Get clan user belongs to!
$guild_id = adr_guild_get_by_user($user_id);
if ($guild_id) $guild = adr_guild_get($guild_id);
if (!$guild_id || empty($guild))
{
	message_die(GENERAL_MESSAGE, 'Adr_Must_be_in_clan_to_party');
}
// Guilds mod END
?>
<table width=90% border=0 align="center" valign="center" bordercolor=black cellpadding="0" cellspacing="0">
<tr><td class="row2" align="center" valign="center">
<?php
// Actions
$action = !empty($_GET['action']) ? $_GET['action'] : '';
if($action == 'leave')
{
	$can = 0;
	// User is a Leader?
	if($char['character_leader'] == 2)
	{
		// Is there any other leaders?
		// V: exclude us...
		$sql = 'SELECT character_id FROM '.ADR_CHARACTERS_TABLE.'
		WHERE character_leader = 2
			AND character_party = '.$char['character_party'].'
			AND character_id != '.$char['character_id'];
		$re = $db->sql_query($sql);
		$row = $db->sql_fetchrow($re);
		if($row['character_id']){$can = 1;}else{$can = 0;}
	}

	if($can == 1)
	{
		$sql = 'UPDATE '.ADR_CHARACTERS_TABLE.' SET character_party = 0, character_leader = 0 WHERE character_id = '.$user_id;
		$re = $db->sql_query($sql) or die('Error on SQL Syntax');
		$message = 'Vous avez quitt� votre groupe avec succ�s';
		$char['character_party'] = 0;
	}
	else
	{
		$message = 'Vous devez choisir un nouveau chef de groupe avant de partir !';
	}

}
if($action == 'disband')
{
	// User is a Leader?
	if($char['character_leader'] == 2)
	{
		$can = 1;
	}
	if($can == 1)
	{
		$sql = 'UPDATE '.ADR_CHARACTERS_TABLE.'
		SET character_party = 0, character_leader = 0
		WHERE character_party = '.$char['character_party'];
		$re = $db->sql_query($sql) or die('Error on SQL Syntax');
		$message = 'Groupe dissout avec succ�s !';
		$char['character_party'] = 0;
	}
	else
	{
		$message = 'Vous devez �tre le chef du groupe pour dissoudre votre groupe.';
	}
}
if($action == 'create')
{
	$can = 1;
	// User is in a party?
	if($char['character_party'] != 0)
	{
		$message = 'Vous devez d\'abord quitter votre groupe';
		$can = 0;
	}
	// Lets Create.
	$sql = "SELECT character_party FROM ".ADR_CHARACTERS_TABLE." ORDER BY character_party DESC LIMIT 1";
	$re = $db->sql_query($sql) or die('SQL Error on line '.__LINE__);
	$row = $db->sql_fetchrow($re);
	$party_id = $row['character_party'] + 1;

	if ($can)
	{
		$sql = 'UPDATE '.ADR_CHARACTERS_TABLE.'
			SET character_party = '.$party_id.', character_leader = 2 WHERE character_id = '.$user_id;
		$re = $db->sql_query($sql) or die('SQL Error on line '.__LINE__);
    $char['character_party'] = $party_id;
		$message = 'Votre groupe a �t� cr�� avec succ�s.';
	}
}

if($action == 'invite')
{
	$id = intval($_GET['id']);
  $invite_guild_id = adr_guild_get_by_user($id);
	if ($invite_guild_id != $guild_id)
	{
		message_die(GENERAL_MESSAGE, 'Adr_party_invite_only_clan');
	}
	$row = adr_get_user_infos($id);
	if (!$row)
	{
		message_die(GENERAL_MESSAGE, 'Adr_party_no_such_char');
	}
	if (in_array($char['character_party'], explode('#', $row['character_invites'])))
	{
		$message = $lang['Adr_party_already_invited'];
	}
	else if ($row['character_party'] == $char['character_party'])
	{
		$message = $lang['Adr_party_already_member'];
	}
	else
	{
		$newstring = $row['character_invites'].'#'.$char['character_party'];
		$sql = 'UPDATE '.ADR_CHARACTERS_TABLE.' SET character_invites = "'.$newstring.'" WHERE character_id = '.$id;
		$re = $db->sql_query($sql) or die('SQL Query Error on line '.__LINE__);
		$message = 'Vous avez invit� '.$row['character_name'].' � rejoindre votre �quipe. '.$row['character_name'].' recevra une notification en arrivant sur cette page.';
	}
}
if($action == 'join')
{
	$party_id = intval($_GET['party']);

	// V: first, check we were invited...
	$invites = $char['character_invites'];
	$has_invite = in_array($party_id, explode('#', $invites));
	if (!$has_invite)
	{
		message_die(GENERAL_MESSAGE, 'Adr_party_not_invited');
	}

	$sql = 'UPDATE '.ADR_CHARACTERS_TABLE.'
	SET character_party = '.$party_id.',
		character_invites = "",
		character_leader = 0
	WHERE character_id = '.$user_id;
	$re = $db->sql_query($sql) or die('SQL Error on line '.__LINE__);
	$message = 'Bienvenue dans le groupe !';

	$char = adr_get_user_infos($user_id);
}
if($action == 'refuse')
{
	$id = $_GET['party'];
	$invites = $char['character_invites'];
	$invites = explode('#',$invites);
	for($i=0;$i<count($invites);$i++)
	{
		if($invites[$i] != $id){$newstring .= $invites[$i].'#';}
	}
	$newstring = substr($newstring,0,(strlen($newstring)-1));
	$sql = 'UPDATE '.ADR_CHARACTERS_TABLE.' SET character_invites = "'.$newstring.'" WHERE character_id = '.$user_id;
	$re = $db->sql_query($sql) or die('SQL Error on line '.__LINE__);
	$message = 'Invitation refus�e.';
	$char['character_party'] = $id;
	$char['character_leader'] = 0;
	$char['character_invites'] = $newstring;
}

if($action == 'promote')
{
	$id = $_GET['id'];
	$sql = 'SELECT character_leader, character_name FROM '.ADR_CHARACTERS_TABLE.' WHERE character_id = '.$id.' AND character_party = '.$char['character_party'];
	$re = $db->sql_query($sql);
	$row = $db->sql_fetchrow($re);
	if($char['character_leader'] > $row['character_leader'] && $char['character_leader'] > 0)
	{
		if($row['character_leader'] > 1){$plus = 2;}else{$plus = $row['character_leader'] + 1;}
		$sql = 'UPDATE '.ADR_CHARACTERS_TABLE.' SET character_leader = '.$plus.' WHERE character_id = '.$id;
		$re = $db->sql_query($sql) or die('SQL Error on line '.__LINE__);
		$message = $row['character_name'].' a �t� promu.';
	}
	else
	{
		$message = 'Impossible de promulguer cet utilisateur.';
	}
}
if($action == 'kick')
{
	$sql = 'SELECT character_leader, character_name FROM '.ADR_CHARACTERS_TABLE.' WHERE character_id = '.intval($_GET['id']);
	$re = $db->sql_query($sql);
	$row = $db->sql_fetchrow($re);
	if($char['character_leader'] > 0
		 && ($char['character_leader'] > $rowset[$i]['character_leader'] || $guild['guild_leader_id'] == $user_id)
		 && $adr_user['character_id'] != $rowset[$i]['character_id'])
	{
		$sql = 'UPDATE '.ADR_CHARACTERS_TABLE.' SET character_leader = 0, character_party = 0 WHERE character_id = '.$id.' AND character_party = '.$char['character_party'];
		$re = $db->sql_query($sql) or die('SQL Error on line '.__LINE__);
		$message = $row['character_name'].' a �t� renvoy� avec succ�s.';
	}
	else
	{
		$message = 'Impossible de renvoyer cet utilisateur.';
	}
}
// Message Table
if (!empty($message))
{
?>
<table width=100% border=0 bordercolor=black cellpadding="0" cellspacing="0">
<tr><td class=row2><a name=party></a><span class=gen><center><b><?=$message?></td></tr>
</table>
<?php
}//end message table

// User is in a party?
if($char['character_party'] == 0)
{
	?>
	<table width=100% bordercolor=black border=0 cellpadding="0" cellspacing="0">
	<th colspan=3>Vous n'�tes pas dans un groupe.</th>
	<tr><td class="row1" colspan=3><center><input type=button class=liteoption value="Cr�er un groupe" onClick="window.location.href='./adr_party.php?action=create#party'"></td></tr>
	<?php

	?>
	</table>
	<?php
	}
	if($char['character_party'] != 0)
	{
		?><table width=100% border=0 bordercolor=black cellpadding="0" cellspacing="0">
		<th colspan=3>Vous �tes dans un groupe.</th>
		<tr><td class="row1" colspan=3><center><input type=button class=liteoption value="Quitter" onClick="window.location.href='./adr_party.php?action=leave#party'">
		<?php if($char['character_leader'] == 2){ ?>
			<input type=button class=liteoption value="Dissoudre" onClick="window.location.href='./adr_party.php?action=disband#party'">
		<?php } ?></td></tr>
		<th colspan=3>Membres :</th>
		<?php
		$sql = 'SELECT character_name, character_id, character_leader, character_level
		FROM '.ADR_CHARACTERS_TABLE.'
			WHERE character_party = '.$char['character_party'].'
			ORDER BY character_leader DESC';
		$re = $db->sql_query($sql);
		$rowset = $db->sql_fetchrowset($re);
		$party_level = 0; // sum of all the members level
		$party_count = count($rowset);
		for($i=0;$i<$party_count;$i++)
		{
			$party_level = $party_level + $rowset[$i]['character_level'];
			if($char['character_leader'] > 0
			 && ($char['character_leader'] > $rowset[$i]['character_leader'] || $guild['guild_leader_id'] == $user_id)
			 && $adr_user['character_id'] != $rowset[$i]['character_id'])
			{
				$kick = '<td class="row1"><center><span class=gen><input type=button class=liteoption value="Renvoyer" onClick="window.location.href=\'./adr_party.php?action=kick&id='.$rowset[$i]['character_id'].'#party\'"></td>';
			}
			else if($char['character_leader'] > 0)
			{
				$kick = '<td class="row1"><center><span class=gen>&nbsp;</td>';
			}
			if($char['character_leader'] >= $rowset[$i]['character_leader']
				&& $rowset[$i]['character_leader'] < 2
				&& $char['character_leader'] != 0)
			{
				$promote = '<td class="row1"><center><span class=gen><input class=liteoption type=button value="Promouvoir" onClick="window.location.href=\'./adr_party.php?action=promote&id='.$rowset[$i]['character_id'].'\'"></td>';
			}
			else if($char['character_leader'] > 0)
			{
				$promote = '<td class="row1"><center><span class=gen>&nbsp;</td>';
			}

			if($rowset[$i]['character_leader'] == 0){$rank = '<span class=gen> (Membre)';}
			if($rowset[$i]['character_leader'] == 1){$rank = '<span class=gen><i> (Officier)';}
			if($rowset[$i]['character_leader'] == 2){$rank = '<span class=gen><b> (Chef)';}
		?>
		<tr><td class="row1"><span class=gen><center><?=$rowset[$i]['character_name']?> - Niveau: <?=$rowset[$i]['character_level']?>  <?=$rank?></td><?=$kick?><?=$promote?></tr>
		<?php
		} // end for members
	?><tr><td class="row1" colspan=3><span class=gen><center>Niveau total : <?=$party_level?> | Nombre de membres : <?=$party_count?> | Niveau moyen : <?=round($party_level/$party_count)?></td></tr></table><?php
	if($char['character_leader'] > 0)
	{
		$sql = 'SELECT * FROM '.ADR_CHARACTERS_TABLE.'
    INNER JOIN '.ADR_GUILD_MEMBER_TABLE.' gm
      ON gm.guild_member_user_id = character_id
      AND gm.guild_member_guild_id = '.$guild_id.'
		WHERE character_party != '.$char['character_party'].'
			ORDER BY character_name';
		$result = $db->sql_query($sql) or message_die(GENERAL_ERROR, 'Cannot query members', '', __LINE__, __FILE__, $sql);
		$user_list = '';
		foreach ($db->sql_fetchrowset($result) as $invitable_char)
		{
			$already_invited = in_array($char['character_party'], explode('#', $invitable_char['character_invites']));
			if (!$already_invited)
			{
				$user_list .= '<option value='.$invitable_char['character_id'].'>'.$invitable_char['character_name'].' (ID: '.$invitable_char['character_id'].')</option>';
			}
		}
		if ($user_list)
		{
			$user_list = '<select name=members>' . $user_list . '</select>';
			?>
			<table width=100% border=0 bordercolor=black cellpadding="0" cellspacing="0">
			<th colspan=3>Inviter un compagnon de votre guilde.</th><th>Actions</th>
			<tr><td class="row1" colspan=3><span class=gen><center><form name=form><?=$user_list?></td><td class="row1" colspan=3><input type=button class=liteoption value="Inviter !" onClick="window.location.href='./adr_party.php?action=invite&amp;id='+form.members.value+'#party'"></form></td></tr>
			</table>
			<?php
		}
	}
}
else if($char['character_invites'] != '')
{
	$invites = split('#',$char['character_invites']);
	for($i=0;$i<count($invites);$i++)
	{
		if($invites[$i] != '')
		{
			$sql = 'SELECT character_name FROM '.ADR_CHARACTERS_TABLE.' WHERE character_party = '.$invites[$i].' AND character_leader = 2 LIMIT 1';
			$re = $db->sql_query($sql);
			$row = $db->sql_fetchrow($re);
			$party_leader = $row['character_name'];
			?>
			<table width=100% border=0 bordercolor=black cellpadding="0" cellspacing="0"><th colspan=3>Invitations</th>

			<tr>
				<td class="row1" width="100%">Groupe de <?=$party_leader?></td>
				<td class="row1">
					<input type=button class=liteoption value="Accepter"
						onClick="window.location.href='./adr_party.php?action=join&party=<?=$invites[$i]?>#party'">
				</td>
				<td class="row1">
					<input type=button class=liteoption value="Refuser"
						onClick="window.location.href='./adr_party.php?action=refuse&party=<?=$invites[$i]?>#party'">
				</td></tr>
			</table>
			<script>alert('You have invitation(s) to join your party!');</script>
		<?php
		}
	}
}
?>
</td></tr>
</table>
<?php
include($phpbb_root_path . 'includes/page_tail.'.$phpEx);
