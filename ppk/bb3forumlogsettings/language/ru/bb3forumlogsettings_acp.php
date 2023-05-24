<?php

/**
*
* @package BB3ForumLogSettings
* @copyright (c) 2023 PPK
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_BB3FORUMLOGSETTINGS' => 'BB3ForumLogSettings',
	'ACP_BB3FORUMLOGSETTINGS_CONFIG' => 'Настройки',
	'LOG_BB3FORUMLOGSETTINGS_CONFIG' => '<strong>Изменены настройки BB3ForumLogSettings</strong>',


));
