<?php 
/*************************************************************************** 
 *                              admin_cron.php 
 *                            ------------------- 
 *   begin                : Thursday, Apr 17, 2003 
 *   copyright            : (C) 2003 Xore 
 *   email                : xore@azuriah.com 
 * 
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
 ***************************************************************************/ 

if ( !empty($setmodules) ) 
{ 
   $file = basename(__FILE__); 
   $module['Pseudocron']['Cron Configuration'] = "$file?mode=config"; 
   return; 
} 

?>