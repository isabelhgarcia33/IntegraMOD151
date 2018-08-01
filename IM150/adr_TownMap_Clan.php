<?php 
/***************************************************************************
 *				adr_TownMap_Clan.php
 *				------------------------
 *	begin 			: 19/11/2004
 *	copyright			: One_Piece
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
define('IN_ADR_TOWNMAP', true);
define('IN_TOWNMAP_INFOBOX', true);
define('IN_TOWNMAP_CLAN', true);
define('IN_TOWNMAP_COPYRIGHT', true);
define('IN_ADR_BATTLE', true);
define('IN_ADR_CHARACTER', true);
$phpbb_root_path = './'; 
include($phpbb_root_path . 'extension.inc'); 
include($phpbb_root_path . 'common.'.$phpEx);
include($phpbb_root_path . 'adr/includes/adr_global.'.$phpEx);

$loc = 'town';
$sub_loc = 'adr_TownMap_Clan';

// V: update! now using guilds. fuck clans!

// V: note that this page is unused because
// there's nothing in the FAQ about clans (which is the only reason this page
//  with its 2 links is here)
exit('PAGE CURRENTLY UNUSED. Move along ...');

//
// Start session management
$userdata = session_pagestart($user_ip, PAGE_ADR); 
init_userprefs($userdata); 
// End session management
//

$user_id = $userdata['user_id'];

// Sorry , only logged users ...
if ( !$userdata['session_logged_in'] )
{
	$redirect = "adr_TownMap_Clan.$phpEx";
	$redirect .= ( isset($user_id) ) ? '&user_id=' . $user_id : '';
	header('Location: ' . append_sid("login.$phpEx?redirect=$redirect", true));
}
adr_enable_check();
adr_ban_check($user_id);
adr_character_created_check($user_id);

// Includes the tpl and the header and the choice of the season
adr_template_file('adr_TownMap_Clan_body.tpl');
include($phpbb_root_path . 'includes/page_header.'.$phpEx);
include($phpbb_root_path . 'adr/includes/adr_header.'.$phpEx);

$saison = 'Carte' . $board_config['adr_seasons'];

// Deny access if the user is into a battle
$sql = " SELECT * FROM  " . ADR_BATTLE_LIST_TABLE . " 
	WHERE battle_challenger_id = $user_id
	AND battle_result = 0
	AND battle_type = 1 ";
if( !($result = $db->sql_query($sql)) )
{
	message_die(GENERAL_ERROR, 'Could not query battle list', '', __LINE__, __FILE__, $sql);
}
$bat = $db->sql_fetchrow($result);

if ( is_numeric($bat['battle_id']) )
{
	adr_previous( Adr_battle_progress , adr_battle , '' );
}


// Get the general config
$adr_general = adr_get_general_config();

// Deny access if user is imprisioned
if($userdata['user_cell_time']){
	adr_previous(Adr_shops_no_thief, adr_cell, '');}
// Get the user infos
$adr_char = adr_get_user_infos($user_id);

// Fix the values

$InfoClan = $HTTP_POST_VARS['InfoClan'];

if ( $InfoClan )
{
	adr_previous( Adr_TownMap_Clan_Infos , adr_TownMap_Clan , '' );
}

else

{
	$template->assign_vars(array(

		'SAISON' => $saison,
		'L_TOWNMAP_CLAN' => $lang['TownMap_Clan'],
		'L_CLAN' => $lang['TownMap_Clan_Lien'],
		'L_FAQ' => $lang['TownMap_Clan_faq'],
		'L_TOWNBOUTONINFO' => $lang['Adr_TownMap_Bouton_Infos'],
		'L_TOWNBOUTONRETOUR' => $lang['Adr_TownMap_Bouton_Retour'],
		'L_CLANPRESENTATION' => $lang['Adr_TownMap_Clan_Presentation'],
		'L_CLANENTREE' => $lang['TownMap_Clan_Entree'],
		'L_TOWNMAPCOPYRIGHT' => $lang['TownMap_Copyright'],
	      'L_COPYRIGHT' => $lang['Adr_copyright'],
	      'U_COPYRIGHT' => append_sid("adr_copyright.$phpEx"),
		'U_TOWNBOUTONRETOUR' => append_sid("adr_zones.$phpEx"),
		'U_TOWNMAP_CLAN' => append_sid("adr_clans.$phpEx"), //V: shouldn't be needed...
		// 'U_CLAN' => append_sid("adr_clans.$phpEx"),
		'U_CLAN' => append_sid("adr_clans.$phpEx"),
		'U_FAQ' => append_sid("adr_character_faq.$phpEx"),
		'U_TOWNMAPCOPYRIGHT' => append_sid("TownMap_Copyright.$phpEx"),
		'S_CHARACTER_ACTION' => append_sid("adr_TownMap_Clan.$phpEx"),
	));
}


$template->pparse('body');
include($phpbb_root_path . 'includes/page_tail.'.$phpEx);
 
?> 
