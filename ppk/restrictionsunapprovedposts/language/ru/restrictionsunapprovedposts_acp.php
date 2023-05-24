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
	'ACP_RESTRICTIONSUNAPPROVEDPOSTS' => 'RestrictionsUnapprovedPosts',

	'RESTRICTIONSUNAPPROVEDPOSTS_POSTS' => 'Ограничение при наличии непроверенных сообщений',
	'RESTRICTIONSUNAPPROVEDPOSTS_POSTS_EXPLAIN' => 'При наличии у пользователя указанного количества непроверенных сообщений запрещать пользователю создавать сообщения на форуме, если указанное здесь число меньше 0, то вместо запрета создания сообщений будет применяться премодерация сообщения',

	'RESTRICTIONSUNAPPROVEDPOSTS_PM' => 'Ограничение для личных сообщений при наличии непроверенных сообщений',
	'RESTRICTIONSUNAPPROVEDPOSTS_PM_EXPLAIN' => 'При наличии у пользователя указанного количества непроверенных сообщений на форуме запрещать пользователю создавать личные сообщения',

	'ACL_CAT_PPKEXT' => 'Расширения PPK',

	'U_RESTRICTIONSUNAPPROVEDPOSTS' => '<span style="font-weight:bold;color:#12612b;">RestrictionsUnapprovedPosts</span>: Применять ограничения при наличии непроверенных сообщений',
));
