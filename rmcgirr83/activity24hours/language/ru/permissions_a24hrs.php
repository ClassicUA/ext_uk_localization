<?php
/**
 *
 * @package - Activity 24 hours
 *
 * @copyright (c) 2020 Rich McGirr (RMcGirr83)
 * @license GNU General Public License, version 2 (GPL-2.0)
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

$lang = array_merge($lang, [
	'ACL_U_A24HRS_VIEW'	=> 'Разрешить просмотр расширения "24-часовая статистика активности"',
]);
