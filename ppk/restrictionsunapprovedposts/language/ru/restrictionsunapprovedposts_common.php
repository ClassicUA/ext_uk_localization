<?php

/**
*
* @package RestrictionsUnapprovedPosts
* @copyright (c) 2022 PPK
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
	'RESTRICTIONSUNAPPROVEDPOSTS_ERROR' => 'Ошибка. Вы не можете создавать сообщения на форуме т.к. имеете <b>%d</b> непроверенных сообщений, попробуйте позже',
	'RESTRICTIONSUNAPPROVEDPOSTS_ERROR_PM' => 'Ошибка. Вы не можете создавать личные сообщения на форуме т.к. имеете <b>%d</b> непроверенных сообщений, попробуйте позже',

	'POST_STORED_MOD' => 'Предупреждение. Ваше сообщение появится на форуме только после одобрения модератором, т.к. вы имеете непроверенные сообщения на форуме',

));
