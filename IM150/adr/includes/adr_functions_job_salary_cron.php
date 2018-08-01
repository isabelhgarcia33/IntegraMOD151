<?php
/***************************************************************************
 *                       adr_functions_job_salary_cron.php
 *                            -------------------
 *   begin                : 09/11/2004
 *   copyright            : Seteo-Bloke
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

if ( !defined('IN_PHPBB') )
{
	die("Hacking attempt");
}

include_once($phpbb_root_path . 'adr/includes/adr_functions_communicate.'.$phpEx);

function adr_job_salary_check( $user_id )
{
	global $db , $adr_general , $lang , $phpEx , $phpbb_root_path , $board_config, $table_prefix ;

	$user_id = intval($user_id);

  $character = adr_get_user_infos($user_id);
	if (!$character)
	{
		return;
	}

	if ( $adr_general['job_salary_enable'] != 0 && $character['character_job_id'] != 0 )
	{
		// Fix current time
		$current_time = time();

		// Character values
		$character_id = $character['character_id'];
		$character_job_id = $character['character_job_id'];
		$character_job_start = $character['character_job_start'];
		$character_job_pm = $character['character_job_pm'];
		$character_job_end = $character['character_job_end'];
		$last_paid = ( $current_time - $character['character_job_last_paid'] ) / 86400;

		// Select job details
		$sql = " SELECT * FROM " . ADR_JOB_TABLE . "
			WHERE job_id = $character_job_id ";
		if( !($result = $db->sql_query($sql)) )
		{
			message_die(GENERAL_ERROR, 'Could not query user job table', '', __LINE__, __FILE__, $sql);
		}
		$job = $db->sql_fetchrow($result);

		// Job values
		$salary = $job['job_salary'];
		$item_reward = $job['job_item_reward_id'];
		$sp_reward = $job['job_sp_reward'];

		if ( $current_time < $character_job_end && $last_paid >= $job['job_payment_intervals'] )
		{
			// Add salary to user
			$sql = "UPDATE " . USERS_TABLE . "
				SET user_points = user_points + $salary
				WHERE user_id = $character_id ";
			if ( !($result = $db->sql_query($sql)) )
			{
				message_die(GENERAL_ERROR, 'Error updating daily salary' , "", __LINE__, __FILE__, $csql); 
			}

			$sql = "UPDATE " . ADR_CHARACTERS_TABLE . "
				SET character_job_earned = character_job_earned + $salary,
					character_job_total_earned = character_job_total_earned + $salary,
					character_job_last_paid = $current_time
				WHERE character_id = $character_id ";
			if ( !($result = $db->sql_query($sql)) ) 
			{ 
				message_die(GENERAL_ERROR, 'Could not update character table' , "", __LINE__, __FILE__, $csql); 
			}

			// Send PM notification if enabled by user
			if ( $character_job_pm != 0 )
			{
				$subject = $lang['Adr_job_pm_paid'];
				$message = sprintf($lang['Adr_job_pm_paid_msg'] , $job['job_salary'] , $board_config['points_name'] , $job['job_name'] );
				adr_send_pm ( $character_id , $subject , $message );
			}
		}

		elseif ( $current_time >= $character_job_end )
		{
			$job_slots = ( $job['job_slots_available'] + 1 ) > $job['job_slots_max'] ? $job['job_slots_max'] : $job['job_slots_available'] + 1;

			// Add job slot back again
			$sql = "UPDATE " . ADR_JOB_TABLE . "
				SET job_slots_available = $job_slots
				WHERE job_id = $character_job_id ";
			if ( !($result = $db->sql_query($sql)) ) 
			{ 
				message_die(GENERAL_ERROR, 'Error updating job slots' , "", __LINE__, __FILE__, $csql); 
			}

			// Job duration has ended
			$sql = "UPDATE " . ADR_CHARACTERS_TABLE . "
				SET character_job_id = 0,
					character_job_start = 0,
					character_job_end = 0,
					character_job_last_paid = 0,
					character_job_completed = character_job_completed + 1,
					character_xp = character_xp + '".$job['job_exp']."'
				WHERE character_id = $character_id ";
			if ( !($result = $db->sql_query($sql)) )
			{ 
				message_die(GENERAL_ERROR, $lang['Job_salary_update_error'] , "", __LINE__, __FILE__, $csql); 
			}

			// Check if there is an SP reward
			if ( $sp_reward != 0 )
			{
				adr_add_sp( $character_id , $sp_reward );
			}

			// Check if there is a item reward
			if ( $item_reward != 0 )
			{
        adr_shop_insert_item($item_reward, adr_next_item_id($user_id), $user_id, 1);
			}
		
			if ( $character_job_pm != 0 )
			{
				$subject = $lang['Adr_job_pm_finish'];	
				$message = sprintf($lang['Adr_job_pm_finish_msg'] , $job['job_name'] );

				if ( $job['job_exp'] != 0 )
				{
					$message .= sprintf($lang['Adr_job_pm_finish_msg1'] , $job['job_exp'] ).'<br /><br />';
				}
				if ( $job['job_sp_reward'] != 0 )
				{
					$message .= sprintf($lang['Adr_job_pm_finish_msg3'] , $job['job_sp_reward'] ).'<br /><br />';
				}

				if ( $job['job_item_reward_id'] != 0 )
				{
					// Grab item reward details
					$sql = " SELECT item_name FROM " . ADR_SHOPS_ITEMS_TABLE . "
						WHERE item_owner_id = 1
						AND item_id = '".$job['job_item_reward_id']."' ";
					if( !($result = $db->sql_query($sql)) )
					{
						message_die(GENERAL_ERROR, 'Could not query user stats page', '', __LINE__, __FILE__, $sql);
					}
					$item = $db->sql_fetchrow($result);

					$message .= sprintf($lang['Adr_job_pm_finish_msg2'] , adr_get_lang($item['item_name']) ).'<br /><br />';
				}
				adr_send_pm ( $character_id , $subject , $message );
			}
		}
	}
}

?>
