<?php

/**
*
* @package BB3Hide
* @copyright (c) 2015 PPK
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
	'BB3HIDE_CONFIG' => 'Настройки',
	'BB3HIDE_STANDART_BBCODES' => 'Стандартные бб-коды',

	'BB3HIDE_REGISTER_GUEST' => '<i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;<i>Скрытый текст. Для просмотра нужно <a href="%s" class="postlink">зарегистрироваться</a></i>',
	'BB3HIDE_POSTS_GUEST' => '<i class="fa fa-commenting" aria-hidden="true"></i>&nbsp;<i>Скрытый текст. Для просмотра нужно быть <a href="%s" class="postlink">зарегистрированным</a> и иметь сообщений: %d</i>',

	'BB3HIDE_REGISTER' => '<i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;<i>Скрытый текст. Для просмотра нужно зарегистрироваться</i>',
	'BB3HIDE_POSTS' => '<i class="fa fa-commenting" aria-hidden="true"></i>&nbsp;<i>Скрытый текст. Для просмотра нужно иметь сообщений: %d</i>',
	'BB3HIDE_USERS' => '<i class="fa fa-user-secret" aria-hidden="true"></i>&nbsp;<i>Скрытый текст. Доступен только определённым пользователям</i>',
	'BB3HIDE_GROUP' => '<i class="fa fa-user" aria-hidden="true"></i>&nbsp;<i>Скрытый текст. Доступен только пользователям с группой по умолчанию как у автора сообщения</i>',
	'BB3HIDE_GROUPS' => '<i class="fa fa-users" aria-hidden="true"></i>&nbsp;<i>Скрытый текст. Доступен только определённым группам</i>',

	'BB3HIDE_HIDDEN_TEXT' => 'Скрытый текст',
	'BB3HIDE_QUOTE' => '[i]Скрытый текст[/i]',
	'BB3HIDE_QUOTE_PREVIEW' => '<i>Скрытый текст</i>',
	'BB3HIDE_NESTED_SIMILAR_ERROR' => 'Нельзя использовать одинаковые вложенные бб-коды для скрытия текста',

	'BB3HIDE_HIDES_HELPLINE' => 'Скрыть текст от гостей и ботов: [hide]текст[/hide], скрыть текст от пользователей с числом сообщений меньше указанного [hide=число]текст[/hide]',
	'BB3HIDE_HIDE_HELPLINE' => 'Скрыть текст от гостей и ботов: [hide]текст[/hide]',
	'BB3HIDE_HIDEPLUS_HELPLINE' => 'Скрыть текст от пользователей с числом сообщений меньше указанного [hide=число]текст[/hide]',
	'BB3HIDE_GHIDE_HELPLINE' => 'Скрыть текст от пользователей не из вашей группы по умолчанию: [ghide]текст[/ghide]',
	'BB3HIDE_GHIDEPLUS_HELPLINE' => 'Скрыть текст от пользователей не из указанных групп [ghide=номер_группы_1,номер_группы_2]текст[/ghide]',
	'BB3HIDE_UHIDE_HELPLINE' => 'Скрыть текст от пользователей с другими ID: [uhide=1,2,3]текст[/uhide] (будет виден только для пользователей c указанными ID)',


));
