<?php
/***************************************************************************
 *                                 adr_functions_cache.php
 *                            -------------------
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

if(!defined('IN_PHPBB'))
{
	die("Hacking attempt");
}

function adr_update_all_cache_infos()
{
	global $db, $lang, $phpEx, $userdata, $phpbb_root_path, $table_prefix, $board_config;

	// Update cache files which are currently enabled
	// V: actually, cache everything LOLE
	adr_update_alignment_infos();
	adr_update_class_infos();
	adr_update_general_config();
	adr_update_element_infos();
	adr_update_item_quality();
	adr_update_item_type();
  //V: fuck off.
  //adr_update_posters_infos();
	adr_update_race_infos();
	adr_update_skills();
	adr_update_monster_infos();

	// Update last update stamp
	$sql= "UPDATE ". ADR_GENERAL_TABLE . " SET config_value = ".time()." WHERE config_name = 'Adr_cache_last_updated' ";
	if(!($result = $db->sql_query($sql)))
		adr_previous(Adr_character_general_update_error, admin_adr_general, '');
}

/** V: This fucks off.
function adr_get_poster_infos($poster_id)
{
	global $db, $lang, $phpEx, $phpbb_root_path, $board_config, $table_prefix;

	redefine('IN_ADR_CHARACTER', 1);
	include_once($phpbb_root_path . 'adr/includes/adr_constants.'.$phpEx);

	$poster_id = intval($poster_id);

	// All the following code has been made by Ptirhiik
	//@include( $phpbb_root_path . './adr/cache/cache_posters.' . $phpEx );

	if ( !(empty($adr_posters)) )
	{
		$cached_adr_posters = $adr_posters[$poster_id];
	}
	else
	{
		adr_update_posters_infos();

		include( $phpbb_root_path . './adr/cache/cache_posters.' . $phpEx );

		$cached_adr_posters = $adr_posters[$poster_id];
	}

	return $cached_adr_posters;
}

function adr_update_posters_infos()
{
	global $db, $lang, $phpEx, $userdata, $phpbb_root_path, $table_prefix;

	redefine('IN_ADR_CHARACTER', 1);
	$db->clear_cache('adr_chars');
	include_once($phpbb_root_path . 'adr/includes/adr_constants.'.$phpEx);

	$template = new Template($phpbb_root_path);

	$template->set_filenames(array(
		'cache' => 'adr/cache/cache_tpls/cache_posters_def.tpls')
	);

	$sql = "SELECT c.character_id , c.character_level, r.race_name, r.race_img, e.element_name, e.element_img, a.alignment_name, a.alignment_img, cl.class_name , cl.class_img
		FROM  " . ADR_CHARACTERS_TABLE . " c, " . ADR_RACES_TABLE . " r, " . ADR_ELEMENTS_TABLE . " e, " . ADR_ALIGNMENTS_TABLE . " a, " . ADR_CLASSES_TABLE . " cl
		WHERE cl.class_id = c.character_class
		AND r.race_id = c.character_race
		AND e.element_id = c.character_element
		AND a.alignment_id = c.character_alignment ";
	if (!$result = $db->sql_query($sql))
	{
		message_die(GENERAL_ERROR, 'Error Getting Adr Users infos for cache update!', '', __LINE__, __FILE__, $sql);
	}

	$x = 1;
	while ( $row = $db->sql_fetchrow($result) )
	{
    $id = V doesn't know.;
		$cells = array();
		@reset($row);
		while ( list($key, $value) = @each($row) )
		{
			$nkey = intval($key);
			if ( $key != "$nkey" )
			{
				$cells[] = sprintf( "'%s' => '%s'", str_replace("'", "\'", $key), str_replace("'", "\'", $value));
			}
		}
		$s_cells = empty($cells) ? '' : implode(', ', $cells);

		$template->assign_block_vars('cache_row', array(
			'ID'		=> sprintf("'%s'", str_replace("'", "\'", $id)),
			'CELLS'		=> $s_cells,
		));
		$x = ($x + 1);
	}
	$db->clear_cache('adr_chars');
	$template->assign_var_from_handle('cache', 'cache');
	$res = "<?php\n" . $template->_tpldata['.'][0]['cache'] . "\n?" . ">";

	$fname = $phpbb_root_path . './adr/cache/cache_posters'.'.' . $phpEx;
	@chmod($fname, 0666);
	$handle = @fopen($fname, 'w');
	@fwrite($handle, $res);
	@fclose($handle);
}
 */

function adr_get_skill_data($target_skill)
{

	global $db, $lang, $phpEx, $phpbb_root_path, $board_config;

	$target_skill = intval($target_skill);
	redefine('IN_ADR_CHARACTER', 1);
	include_once($phpbb_root_path . 'adr/includes/adr_constants.'.$phpEx);

	// All the following code has been made by Ptirhiik
	@include( $phpbb_root_path . './adr/cache/cache_skills.' . $phpEx );

	if ( !(empty($adr_skills)) )
	{
		while ( list($skill_id , $skill_data) = @each($adr_skills) )
		{
			$cached_adr_skills[$skill_id] = $skill_data;
		}
	}
	else
	{
		adr_update_skills();

		include( $phpbb_root_path . './adr/cache/cache_skills.' . $phpEx );

		while ( list($skill_id , $skill_data) = @each($adr_skills) )
		{
			$cached_adr_skills[$skill_id] = $skill_data;
		}
	}

	if ( $target_skill )
	{
		return $cached_adr_skills[$target_skill];
	}
	else
	{
		return $cached_adr_skills;
	}
}

function adr_update_skills()
{
	global $db, $lang, $phpEx, $userdata, $phpbb_root_path;

	redefine('IN_ADR_CHARACTER', 1);
	include_once($phpbb_root_path . 'adr/includes/adr_constants.'.$phpEx);

	$template = new Template($phpbb_root_path);
	$template->set_filenames(array(
		'cache' => 'adr/cache/cache_tpls/cache_skills_def.tpls')
	);

	$sql = "SELECT * FROM  " . ADR_SKILLS_TABLE . "
		ORDER BY skill_id";
	if (!$result = $db->sql_query($sql, false))
	{
		message_die(GENERAL_ERROR, 'Unable to query skill infos (updating cache)', '', __LINE__, __FILE__, $sql);
	}

	$x = 1;
	while ( $row = $db->sql_fetchrow($result) )
	{
		// V: let's use skill ID instead of incremental id
		$id = $row['skill_id'];
		$cells = array();
		@reset($row);
		while ( list($key, $value) = @each($row) )
		{
			$nkey = intval($key);
			if ( $key != "$nkey" )
			{
				$cells[] = sprintf( "'%s' => '%s'", str_replace("'", "\'", $key), str_replace("'", "\'", $value));
			}
		}
		$s_cells = empty($cells) ? '' : implode(', ', $cells);

		$template->assign_block_vars('cache_row', array(
			'ID'		=> sprintf("'%s'", str_replace("'", "\'", $id)),
			'CELLS'		=> $s_cells,
		));
		// $x = ($x + 1);
	}

	$db->sql_freeresult($result);
	$template->assign_var_from_handle('cache', 'cache');
	$res = "<?php\n" . $template->_tpldata['.'][0]['cache'] . "\n?" . ">";

	$fname = $phpbb_root_path . './adr/cache/cache_skills'.'.' . $phpEx;
	@chmod($fname, 0666);
	$handle = @fopen($fname, 'w');
	@fwrite($handle, $res);
	@fclose($handle);
}

function adr_get_item_quality($item, $type)
{
	global $db, $lang, $phpEx, $phpbb_root_path, $board_config, $table_prefix;

	redefine('IN_ADR_SHOPS', 1);
	include_once($phpbb_root_path . 'adr/includes/adr_constants.'.$phpEx);

	// All the following code has been made by Ptirhiik
	@include($phpbb_root_path . './adr/cache/cache_item_quality.' . $phpEx);

	if(!(empty($adr_item_quality))){
		while(list($item_quality_id , $item_quality_data) = @each($adr_item_quality)){
			$items_quality[$item_quality_id] = $item_quality_data;}
	}
	else
	{
		adr_update_item_quality();

		include( $phpbb_root_path . './adr/cache/cache_item_quality.' . $phpEx );

		while ( list($item_quality_id , $item_quality_data) = @each($adr_item_quality) )
		{
			$items_quality[$item_quality_id] = $item_quality_data;
		}
	}

	$item = intval($item);

	switch($type)
	{
		case 'list':

			$quality = '<select name="item_quality">';
      foreach ($items_quality as $item_quality)
			{
				$selected = ( $item_quality['item_quality_id'] == $item ) ? 'selected="selected"' : '';
				$quality .= '<option value = "'.$item_quality['item_quality_id'].'" '.$selected.'>' . $lang[$item_quality['item_quality_lang']] . '</option>';
			}
			$quality .= '</select>';
			return $quality;

			break;

		case 'search':

			$quality = '<select name="item_quality">';
      foreach ($items_quality as $item_quality)
			{
				$quality .= '<option value = "'.$item_quality['item_quality_id'].'" >' . $lang[$item_quality['item_quality_lang']] . '</option>';
			}
			$quality .= '</select>';
			return $quality;

			break;

		case 'simple':

			$quality = intval($item);
			$quality = $lang[$items_quality[$quality]['item_quality_lang']];
			return $quality;

			break;

		case 'price':

			$item = intval($item);
			$quality = $items_quality[$item]['item_quality_modifier_price'];
			return $quality;
			break;
	}

}

function adr_update_item_quality()
{
	global $db, $lang, $phpEx, $userdata, $phpbb_root_path, $table_prefix;

	$template = new Template($phpbb_root_path);
	redefine('IN_ADR_SHOPS', 1);
	include_once($phpbb_root_path . 'adr/includes/adr_constants.'.$phpEx);

	$template->set_filenames(array(
		'cache' => 'adr/cache/cache_tpls/cache_item_quality_def.tpls')
	);

	$sql = "SELECT * FROM  " . ADR_SHOPS_ITEMS_QUALITY_TABLE;
	if (!$result = $db->sql_query($sql))
	{
		message_die(GENERAL_ERROR, 'Unable to query item quality infos (updating cache)', '', __LINE__, __FILE__, $sql);
	}

	$x = 0;
	while ( $row = $db->sql_fetchrow($result) )
	{
    // V: fixed.
		$id = $row['item_quality_id'];
		$cells = array();
		@reset($row);
		while ( list($key, $value) = @each($row) )
		{
			$nkey = intval($key);
			if ( $key != "$nkey" )
			{
				$cells[] = sprintf( "'%s' => '%s'", str_replace("'", "\'", $key), str_replace("'", "\'", $value));
			}
		}
		$s_cells = empty($cells) ? '' : implode(', ', $cells);

		$template->assign_block_vars('cache_row', array(
			'ID'		=> sprintf("'%s'", str_replace("'", "\'", $id)),
			'CELLS'		=> $s_cells,
			));
		$x = ($x + 1);
	}

	$template->assign_var_from_handle('cache', 'cache');
	$res = "<?php\n" . $template->_tpldata['.'][0]['cache'] . "\n?" . ">";

	$fname = $phpbb_root_path . './adr/cache/cache_item_quality'.'.' . $phpEx;
	@chmod($fname, 0666);
	$handle = @fopen($fname, 'w');
	@fwrite($handle, $res);
	@fclose($handle);
}

function adr_get_item_type($type, $mode)
{
	global $db, $lang, $phpEx, $userdata, $phpbb_root_path, $board_config;

	$type = intval($type);
	redefine('IN_ADR_SHOPS', 1);
	include_once($phpbb_root_path . 'adr/includes/adr_constants.'.$phpEx);

	// All the following code has been made by Ptirhiik
	@include( $phpbb_root_path . './adr/cache/cache_item_type.' . $phpEx );

	if ( !(empty($adr_item_type)) )
	{
		while ( list($item_type_id , $item_type_data) = @each($adr_item_type) )
		{
			$items_type[$item_type_id] = $item_type_data;
		}
	}
	else
	{
		adr_update_item_type();

		include( $phpbb_root_path . './adr/cache/cache_item_type.' . $phpEx );

		while ( list($item_type_id , $item_type_data) = @each($adr_item_type) )
		{
			$items_type[$item_type_id] = $item_type_data;
		}
	}

	switch($mode)
	{
		case 'list':

			$item_type = '<select name="item_type_use">';
      // V: store indexed by name
      $item_types = array();
      // V: change the variable name, so that $selected works. -_-
      foreach ($items_type as $t)
			{
				$selected = ( $t['item_type_id'] == $type ) ? 'selected="selected"' : '';
        $name = adr_get_lang($t['item_type_lang']);
        $item_types[$name] = '<option value = "'.$t['item_type_id'].'" '.$selected.'>' . $name . '</option>';
			}
      // V: sort by name
      ksort($item_types);
      $item_type .= implode('', $item_types);
			$item_type .= '</select>';
			return $item_type;

		case 'search':

			$item_type = '<select name="item_type_use">';
      foreach ($items_type as $item_type)
			{
				$item_type .= '<option value = "'.$item_type['item_type_id'].'" >' . adr_get_lang($item_type['item_type_lang']) . '</option>';
			}
			$item_type .= '</select>';
			return $item_type;

		case 'simple':

			$item_type = adr_get_lang($items_type[$type]['item_type_lang']);
			return $item_type;

		case 'price':

			$item_type = $items_type[$type]['item_type_base_price'];
			return $item_type;
	}
}

function adr_update_item_type()
{
	global $db, $lang, $phpEx, $userdata, $phpbb_root_path, $table_prefix;

	$template = new Template($phpbb_root_path);
	redefine('IN_ADR_SHOPS', 1);
	include_once($phpbb_root_path . 'adr/includes/adr_constants.'.$phpEx);

	$template->set_filenames(array(
		'cache' => 'adr/cache/cache_tpls/cache_item_type_def.tpls')
	);

	$sql = "SELECT * FROM  " . ADR_SHOPS_ITEMS_TYPE_TABLE . '
		ORDER BY item_type_category, item_type_order';
	if(!$result = $db->sql_query($sql)){
		message_die(GENERAL_ERROR, 'Unable to query item type infos (updating cache)', '', __LINE__, __FILE__, $sql);}

	while($row = $db->sql_fetchrow($result))
	{
    // V: fixed. I'd like to punch whoever wrote $id = $x in the first place...
		$id = $row['item_type_id'];
		$cells = array();
    foreach ($row as $key => $value)
		{
			if(!is_integer($key)){
				$cells[] = sprintf( "'%s' => '%s'", str_replace("'", "\'", $key), str_replace("'", "\'", $value));
			}
		}
		$s_cells = empty($cells) ? '' : implode(', ', $cells);

		$template->assign_block_vars('cache_row', array(
			'ID'		=> sprintf("'%s'", $id),
			'CELLS'		=> $s_cells,
			)
		);
	}

	$template->assign_var_from_handle('cache', 'cache');
	$res = "<?php\n" . $template->_tpldata['.'][0]['cache'] . "\n?" . ">";

	$fname = $phpbb_root_path . './adr/cache/cache_item_type'.'.' . $phpEx;
	@chmod($fname, 0666);
	$handle = @fopen($fname, 'w');
	@fwrite($handle, $res);
	@fclose($handle);
}

function adr_get_element_infos($element_id)
{
	global $db, $lang, $phpEx, $phpbb_root_path, $board_config, $table_prefix;

	redefine('IN_ADR_CHARACTER', 1);
	include_once($phpbb_root_path . 'adr/includes/adr_constants.'.$phpEx);
	$element_id = intval($element_id);

	// All the following code has been made by Ptirhiik
	@include( $phpbb_root_path . './adr/cache/cache_elements.' . $phpEx );

	if(!(empty($adr_elements))){
		$cached_adr_elements = $adr_elements[$element_id];
	}
	else
	{
		adr_update_element_infos();
		include($phpbb_root_path . './adr/cache/cache_elements.' . $phpEx);
		$cached_adr_elements = $adr_elements[$element_id];
	}

	return $cached_adr_elements;
}

function adr_update_element_infos()
{
	global $db, $lang, $phpEx, $userdata, $phpbb_root_path, $table_prefix;

	redefine('IN_ADR_CHARACTER', 1);
	include_once($phpbb_root_path . 'adr/includes/adr_constants.'.$phpEx);

	$template = new Template($phpbb_root_path);

	$template->set_filenames(array(
		'cache' => 'adr/cache/cache_tpls/cache_elements_def.tpls')
	);

	$sql = "SELECT * FROM " . ADR_ELEMENTS_TABLE . "
		ORDER BY element_id";
	if (!$result = $db->sql_query($sql)){
				message_die(GENERAL_ERROR, 'Unable to query element infos (updating cache)', '', __LINE__, __FILE__, $sql);
	}

	$x = 1;
	while($row = $db->sql_fetchrow($result))
	{
    // V: fixed. I'd like to punch whoever wrote $id = $x in the first place...
		$id = $row['element_id'];
		$cells = array();
		@reset($row);
		while(list($key, $value) = @each($row)){
			$nkey = intval($key);
			if($key != "$nkey"){
				$cells[] = sprintf( "'%s' => '%s'", str_replace("'", "\'", $key), str_replace("'", "\'", $value));
			}
		}
		$s_cells = empty($cells) ? '' : implode(', ', $cells);

		$template->assign_block_vars('cache_row', array(
			'ID'		=> sprintf("'%s'", str_replace("'", "\'", $id)),
			'CELLS'		=> $s_cells,
		));
		$x = ($x + 1);
	}

	$template->assign_var_from_handle('cache', 'cache');
	$res = "<?php\n" . $template->_tpldata['.'][0]['cache'] . "\n?" . ">";

	$fname = $phpbb_root_path . './adr/cache/cache_elements'.'.' . $phpEx;
	@chmod($fname, 0666);
	$handle = @fopen($fname, 'w');
	@fwrite($handle, $res);
	@fclose($handle);
}

function adr_get_alignment_infos($alignment_id)
{
	global $db, $lang, $phpEx, $phpbb_root_path, $board_config, $table_prefix;

	redefine('IN_ADR_CHARACTER', 1);
	include_once($phpbb_root_path . 'adr/includes/adr_constants.'.$phpEx);
	$alignment_id = intval($alignment_id);

	// All the following code has been made by Ptirhiik
	@include( $phpbb_root_path . './adr/cache/cache_alignments.' . $phpEx );

	if(!(empty($adr_alignments))){
		$cached_adr_alignments = $adr_alignments[$alignment_id];
	}
	else
	{
		adr_update_alignment_infos();
		include($phpbb_root_path . './adr/cache/cache_alignments.' . $phpEx);
		$cached_adr_alignments = $adr_alignments[$alignment_id];
	}

	return $cached_adr_alignments;
}

function adr_update_alignment_infos()
{
	global $db, $lang, $phpEx, $userdata, $phpbb_root_path, $table_prefix;

	redefine('IN_ADR_CHARACTER', 1);

	$template = new Template($phpbb_root_path);

	$template->set_filenames(array(
		'cache' => 'adr/cache/cache_tpls/cache_alignments_def.tpls')
	);

	$sql = "SELECT * FROM " . ADR_ALIGNMENTS_TABLE . "
		ORDER BY alignment_id";
	if (!$result = $db->sql_query($sql)){
		message_die(GENERAL_ERROR, 'Unable to query alignment infos (updating cache)', '', __LINE__, __FILE__, $sql);
	}

	$x = 1;
	while($row = $db->sql_fetchrow($result))
	{
    // V: fixed. I'd like to punch whoever wrote $id = $x in the first place...
		$id = $row['alignment_id'];
		$cells = array();
		@reset($row);
		while(list($key, $value) = @each($row)){
			$nkey = intval($key);
			if($key != "$nkey"){
				$cells[] = sprintf( "'%s' => '%s'", str_replace("'", "\'", $key), str_replace("'", "\'", $value));
			}
		}
		$s_cells = empty($cells) ? '' : implode(', ', $cells);

		$template->assign_block_vars('cache_row', array(
			'ID'		=> sprintf("'%s'", str_replace("'", "\'", $id)),
			'CELLS'		=> $s_cells,
		));
		$x = ($x + 1);
	}

	$template->assign_var_from_handle('cache', 'cache');
	$res = "<?php\n" . $template->_tpldata['.'][0]['cache'] . "\n?" . ">";

	$fname = $phpbb_root_path . './adr/cache/cache_alignments'.'.' . $phpEx;
	@chmod($fname, 0666);
	$handle = @fopen($fname, 'w');
	@fwrite($handle, $res);
	@fclose($handle);
}

function adr_get_class_infos($class_id)
{
	global $db, $lang, $phpEx, $phpbb_root_path, $board_config, $table_prefix;

	redefine('IN_ADR_CHARACTER', 1);
	include_once($phpbb_root_path . 'adr/includes/adr_constants.'.$phpEx);

	// All the following code has been made by Ptirhiik
	@include( $phpbb_root_path . './adr/cache/cache_classes.' . $phpEx );

	if(!empty($adr_classes))
	{
		$cached_adr_classes = $adr_classes[$class_id];
	}
	else
	{
		adr_update_class_infos();
		@include($phpbb_root_path . './adr/cache/cache_classes.' . $phpEx);
		$cached_adr_classes = $adr_classes[$class_id];
	}

	return $cached_adr_classes;
}

function adr_update_class_infos()
{
	global $db, $lang, $phpEx, $userdata, $phpbb_root_path, $table_prefix;

	redefine('IN_ADR_CHARACTER', 1);

	$template = new Template($phpbb_root_path);

	$template->set_filenames(array(
		'cache' => 'adr/cache/cache_tpls/cache_classes_def.tpls')
	);

	$sql = "SELECT * FROM " . ADR_CLASSES_TABLE . "
		ORDER BY class_id";
	if (!$result = $db->sql_query($sql)){
				message_die(GENERAL_ERROR, 'Unable to query class infos (updating cache)', '', __LINE__, __FILE__, $sql);
	}

	$x = 1;
	while($row = $db->sql_fetchrow($result))
	{
    // V: fixed
		$id = $row['class_id'];
		$cells = array();
		@reset($row);
		while(list($key, $value) = @each($row)){
			$nkey = intval($key);
			if($key != "$nkey"){
				$cells[] = sprintf( "'%s' => '%s'", str_replace("'", "\'", $key), str_replace("'", "\'", $value));
			}
		}
		$s_cells = empty($cells) ? '' : implode(', ', $cells);

		$template->assign_block_vars('cache_row', array(
			'ID'		=> sprintf("'%s'", str_replace("'", "\'", $id)),
			'CELLS'		=> $s_cells,
		));
		$x = ($x + 1);
	}

	$template->assign_var_from_handle('cache', 'cache');
	$res = "<?php\n" . $template->_tpldata['.'][0]['cache'] . "\n?" . ">";

	$fname = $phpbb_root_path . './adr/cache/cache_classes'.'.' . $phpEx;
	@chmod($fname, 0666);
	$handle = @fopen($fname, 'w');
	@fwrite($handle, $res);
	@fclose($handle);
}

function adr_get_race_infos($race_id)
{
	global $db, $lang, $phpEx, $phpbb_root_path, $board_config, $table_prefix;

	redefine('IN_ADR_CHARACTER', 1);
	include_once($phpbb_root_path . 'adr/includes/adr_constants.'.$phpEx);

	// All the following code has been made by Ptirhiik
	@include( $phpbb_root_path . './adr/cache/cache_races.' . $phpEx );

	if(!(empty($adr_races))){
		$cached_adr_races = $adr_races[$race_id];
	}
	else
	{
		adr_update_race_infos();
		include($phpbb_root_path . './adr/cache/cache_races.' . $phpEx);
		$cached_adr_races = $adr_races[$race_id];
	}

	return $cached_adr_races;
}

function adr_update_race_infos()
{
	global $db, $lang, $phpEx, $userdata, $phpbb_root_path, $table_prefix;

	redefine('IN_ADR_CHARACTER', 1);
	include_once($phpbb_root_path . 'adr/includes/adr_constants.'.$phpEx);

	$template = new Template($phpbb_root_path);

	$template->set_filenames(array(
		'cache' => 'adr/cache/cache_tpls/cache_races_def.tpls')
	);

	$sql = "SELECT * FROM " . ADR_RACES_TABLE . "
		ORDER BY race_id";
	if (!$result = $db->sql_query($sql)){
		message_die(GENERAL_ERROR, 'Unable to query class infos (updating cache)', '', __LINE__, __FILE__, $sql);
	}

	$x = 1;
	while($row = $db->sql_fetchrow($result))
	{
		$id = $row['race_id'];
		$cells = array();
		@reset($row);
		while(list($key, $value) = @each($row)){
			$nkey = intval($key);
			if($key != "$nkey"){
				$cells[] = sprintf( "'%s' => '%s'", str_replace("'", "\'", $key), str_replace("'", "\'", $value));
			}
		}
		$s_cells = empty($cells) ? '' : implode(', ', $cells);

		$template->assign_block_vars('cache_row', array(
			'ID'		=> sprintf("'%s'", str_replace("'", "\'", $id)),
			'CELLS'		=> $s_cells,
		));
		$x = ($x + 1);
	}

	$template->assign_var_from_handle('cache', 'cache');
	$res = "<?php\n" . $template->_tpldata['.'][0]['cache'] . "\n?" . ">";

	$fname = $phpbb_root_path . './adr/cache/cache_races'.'.' . $phpEx;
	@chmod($fname, 0666);
	$handle = @fopen($fname, 'w');
	@fwrite($handle, $res);
	@fclose($handle);
}

function adr_get_monster_infos($monster_id)
{
	global $db, $lang, $phpEx, $phpbb_root_path, $board_config, $table_prefix;

	redefine('IN_ADR_CHARACTER', 1);
	include_once($phpbb_root_path . 'adr/includes/adr_constants.'.$phpEx);

	// All the following code has been made by Ptirhiik
	@include($phpbb_root_path . './adr/cache/cache_monsters.' . $phpEx);


	if(!(empty($adr_monsters))){
		$cached_adr_monsters = $adr_monsters[$monster_id];
	}
	else
	{
		adr_update_monster_infos();
		include($phpbb_root_path . './adr/cache/cache_monsters.' . $phpEx);
		$cached_adr_monsters = $adr_monsters[$monster_id];
	}

	return $cached_adr_monsters;
}

function adr_update_monster_infos()
{
	global $db, $lang, $phpEx, $userdata, $phpbb_root_path, $table_prefix;

	redefine('IN_ADR_BATTLE', 1);
	include_once($phpbb_root_path . 'adr/includes/adr_constants.'.$phpEx);

	$template = new Template($phpbb_root_path);

	$template->set_filenames(array(
		'cache' => 'adr/cache/cache_tpls/cache_monsters_def.tpls')
	);

//	$sql = "SELECT * FROM " . ADR_BATTLE_MONSTERS_TABLE;
	$sql = "SELECT * FROM ".$table_prefix . 'adr_battle_monsters
		ORDER BY monster_id';
	if (!$result = $db->sql_query($sql)){
		message_die(GENERAL_ERROR, 'Unable to query monster infos (updating cache)', '', __LINE__, __FILE__, $sql);
	}

	$x = 1;
	while($row = $db->sql_fetchrow($result))
	{
		$id = $row['monster_id'];
		$cells = array();
		@reset($row);
		while(list($key, $value) = @each($row)){
			$nkey = intval($key);
			if($key != "$nkey"){
				$cells[] = sprintf( "'%s' => '%s'", str_replace("'", "\'", $key), str_replace("'", "\'", $value));
			}
		}
		$s_cells = empty($cells) ? '' : implode(', ', $cells);

		$template->assign_block_vars('cache_row', array(
			'ID'		=> sprintf("'%s'", str_replace("'", "\'", $id)),
			'CELLS'		=> $s_cells,
		));
	}

	$template->assign_var_from_handle('cache', 'cache');
	$res = "<?php\n" . $template->_tpldata['.'][0]['cache'] . "\n?" . ">";

	$fname = $phpbb_root_path . './adr/cache/cache_monsters'.'.' . $phpEx;
	@chmod($fname, 0666);
	$handle = @fopen($fname, 'w');
	@fwrite($handle, $res);
	@fclose($handle);
}

function adr_get_general_config()
{
	global $db, $lang, $phpEx, $phpbb_root_path, $board_config, $table_prefix;

	include_once($phpbb_root_path . 'adr/includes/adr_constants.'.$phpEx);
	// All the following code has been made by Ptirhiik
	@include( $phpbb_root_path . './adr/cache/cache_config.' . $phpEx);

	if(!(empty($adr_config))){
		while(list($config_name, $config_value) = @each($adr_config)){
			$cached_adr_config[$config_name] = $config_value;}
	}
	else{
		adr_update_general_config();

		include($phpbb_root_path . './adr/cache/cache_config.' . $phpEx);

		while(list($config_name, $config_value) = @each($adr_config)){
			$cached_adr_config[$config_name] = $config_value;
		}
	}

	return $cached_adr_config;
}

function adr_update_general_config()
{
	global $db, $lang, $phpEx, $userdata, $phpbb_root_path, $table_prefix;

	$template = new Template($phpbb_root_path);
	include_once($phpbb_root_path . 'adr/includes/adr_constants.'.$phpEx);

	$template->set_filenames(array(
		'cache' => 'adr/cache/cache_tpls/cache_config_def.tpls')
	);

	$sql = "SELECT * FROM " . ADR_GENERAL_TABLE. "
			ORDER BY config_name ASC";
	if( !$result = $db->sql_query($sql) )
	{
		message_die(GENERAL_ERROR, 'Unable to query config infos (updating cache)', '', __LINE__, __FILE__, $sql);
	}
	while ( $row = $db->sql_fetchrow($result) )
	{
		$id = $row['config_name'];
		$cell_res = $row['config_value'];

		$template->assign_block_vars('cache_row', array(
			'ID'		=> sprintf("'%s'", str_replace("'", "\'", $id)),
			'CELLS'	=> sprintf("'%s'", str_replace("'", "\'", $cell_res)),
			));
	}

	$template->assign_var_from_handle('cache', 'cache');
	$res = "<?php\n" . $template->_tpldata['.'][0]['cache'] . "\n?" . ">";

	$fname = $phpbb_root_path . './adr/cache/cache_config'.'.' . $phpEx;
	@chmod($fname, 0666);
	$handle = @fopen($fname, 'w');
	@fwrite($handle, $res);
	@fclose($handle);
}

function adr_get_item_type_categories($category = 'none'){
	global $categories_text, $categories, $categories_cat, $db, $phpbb_root_path, $phpEx, $lang, $adr_item_type;
	adr_get_item_type(0, '');
	require_once( $phpbb_root_path . './adr/cache/cache_item_type.' . $phpEx );
	
	if ( !isset($adr_item_type) )
	{
		if ( $category != 'none') 
		{
			$category = explode(",",$category);
			for($a=0;$a<=count($category);$a++) $category_list .= "'".$category[$a]."',";
			$where = " AND item_type_category IN (".$category_list." 0)";
		}
		else
		{
			$where = '';
		}

		// Get and display all the items type
		$sql = "SELECT * FROM  " . ADR_SHOPS_ITEMS_TYPE_TABLE . "
			WHERE item_type_id <> 0 $where
			ORDER BY item_type_category, item_type_order ASC";  
		if (!$result = $db->sql_query($sql)) 
		{
			message_die(GENERAL_ERROR, 'Unable to query config infos (updating cache)', '', __LINE__, __FILE__, $sql);
		}
		$items_type = $db->sql_fetchrowset($result);
		
		for ( $t = 0 ; $t < count($items_type) ; $t ++ )
		{
			array_push($categories_text, $items_type[$t]['item_type_lang']);
			array_push($categories, $items_type[$t]['item_type_id']);
			array_push($categories_cat, $items_type[$t]['item_type_category']);
		}
	}
	else
	{
		if($category != 'none') $category = explode(',',$category);
		for ( $t = 0 ; $t < count($adr_item_type) ; $t ++ )
		{
			if($category == 'none')
			{
				array_push($categories_text, $adr_item_type[$t]['item_type_lang']);
				array_push($categories, $adr_item_type[$t]['item_type_id']);
				array_push($categories_cat, $adr_item_type[$t]['item_type_category']);
			}
			elseif(in_array($adr_item_type[$t]['item_type_category'],$category))
			{
				array_push($categories_text, $adr_item_type[$t]['item_type_lang']);
				array_push($categories, $adr_item_type[$t]['item_type_id']);
				array_push($categories_cat, $adr_item_type[$t]['item_type_category']);
			
			}
		}
	}
}
