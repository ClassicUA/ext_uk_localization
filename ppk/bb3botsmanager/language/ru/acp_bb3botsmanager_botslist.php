<?php

/**
*
* @package BB3BotsManager
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
	'TOTAL_LOGS' => 'Всего записей: <strong>%d</strong>',

	'BOT_BLOCKED' => 'Блокировать бота',
	'BOT_BLOCKED_EXPLAIN' => '',

	'BLOCK_PERMANENTLY' => 'Блокировать постоянно',
	'BLOCK_TEMPORARILY' => 'Блокировать по времени',

	'BOTS_UNBLOCK' => 'Не блокировать',
	'BOTS_BLOCK' => 'Блокировка',
	'BOTS_STATE' => 'Состояние',
	'BOTS_IP' => 'IP адрес',

	'ACTIVE_ONLY' => 'Включён',
	'NOTACTIVE_ONLY' => 'Отключён',

	'WIP_ONLY' => 'Есть',
	'WOIP_ONLY' => 'Нет',

	'ANY_TIME' => 'Любой период',
	'VISIT_TIME' => 'Посещение не позднее',

	'SHOW_ALL' => 'Сбросить фильтр',
	'NO_BOTS' => 'Нет записей',
	'BOT_NOT_FOUND' => 'Бот не найден',

	'SHOW_ONLY_BOT_ACTIVE' => 'Только <b>включённые</b>',
	'SHOW_ONLY_BOT_NOTACTIVE' => 'Только <b>отключённые</b>',
	'SHOW_ONLY_BOT_BLOCKED_PERMANENTLY' => 'Только с <b>постоянной блокировкой</b>',
	'SHOW_ONLY_BOT_BLOCKED_TEMPORARILY' => 'Только с <b>блокировкой по времени</b>',
	'SHOW_ONLY_BOT_NOT_BLOCKED' => 'Только <b>без блокировки</b>',
	'SHOW_ONLY_BOT_STYLE' => 'Только с стилем <b>%s</b>',
	'SHOW_ONLY_BOT_LANG' => 'Только с языком <b>%s</b>',
	'SHOW_ONLY_BOT_IP' => 'Только с IP адресом <b>%s</b>',

	'RETURN_TO_LIST' => '<a href="%s">Вернуться к списку ботов</a>',
	'RETURN_TO_BOTS_LOG' => '<a href="%s">Вернуться к логу посещений</a>',
	'RETURN_TO_BOTS_DB' => '<a href="%s">Вернуться к базе данных ботов</a>',
	'APPLY_TO_ALL' => 'Применить ко всем',

	'ERR_BOT_NAME_LENGTH' => 'Максимальная длина названия бота 255 символов',
	'ERR_BOT_AGENT_LENGTH' => 'Максимальная длина соответствия агенту 255 символов',
	'ERR_BOT_IP_LENGTH' => 'Максимальная длина IP адреса 255 символов',
	'ERR_BOT_SAME_AGENT' => 'Бот с указанным соответствием агенту и IP адресом уже добавлен (%s)',
	'ERR_BOTS_SAME_AGENT' => 'Обнаружены боты с одинаковыми соответствиями агенту: %s, поле "соответствие агенту" должно быть уникальным или для ботов нужно указывать разные IP адреса',
));
