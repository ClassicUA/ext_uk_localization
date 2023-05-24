<?php

/**
*
* @package BB3BotsManager
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
	'TOTAL_LOGS' => 'Всего записей: <strong>%d</strong>',

	'ACP_BB3BOTSMANAGER_BOTSLOG_EXPLAIN' => 'Лог посещений ботов, в логе фиксируются посещение ботами главной страницы форума. Семейством обозначается группа ботов принадлежащих одному и тому-же сервису, например YandexBot и YandexMetrika для яндекса или GoogleBot и Googlebot-Image для гугл. Иконкой <i class="fa fa-check-square" aria-hidden="true"></i> обозначаются боты семейства, название, заголовки агента или IP адреса которых полностью совпадают с добавленным на форум ботом, иконкой <i class="fa fa-check-square-o" aria-hidden="true"></i> совпадающие частично, в заголовке агента серым цветом выделяется совпадение соответствия агента добавленного бота',

	'ANY_TIME' => 'Любой период',
	'VISIT_TIME' => 'Посещение не позднее',

	'SORT_BOT_FAMILY' => 'Семейство',
	'SORT_BOT_IP' => 'IP-адрес бота',
	'SORT_LAST_VISIT' => 'Последнее посещение',
	'SORT_FIRST_VISIT' => 'Первое посещение',
	'SORT_VISITS' => 'Количество посещений',
	'SORT_BOT_NAME' => 'Название',

	'SOURCE_ONLY_FAMILY' => 'Показать только с этим семейством',
	'SOURCE_ONLY_IP' => 'Показать только с этим IP',
	'SOURCE_ONLY_NAME' => 'Показать только с этим названием',

	'BOT_FAMILY' => 'Семейство',
	'BOT_UA_HEADERS' => 'Заголовки агента',
	'SHOW_ALL' => 'Сбросить фильтр',

	'FIRST_VISIT' => 'Первое посещение',
	'VISITS' => 'Посещений',

	'ADD_BOT' => 'Добавить бота',
	'ADD_BOT_EXPLAIN' => 'Добавить бота на основе данных посещения',

	'SHOW_ONLY_BOT_FAMILY' => 'Только из семейства <b>%s</b>',
	'SHOW_ONLY_BOT_IP' => 'Только с IP <b>%s</b>',
	'SHOW_ONLY_BOT_ID' => 'Только с совпадением <b>%s</b>',
	'SHOW_ONLY_BOT_NAME' => 'Только с названием <b>%s</b>',

	'BOTS_ADDED' => 'Есть совпадение',
	'BOTS_NAMED' => 'Есть название',

	'ADDED_ONLY' => 'Да',
	'NOTADDED_ONLY' => 'Нет',

	'NAMED_ONLY' => 'Да',
	'NOTNAMED_ONLY' => 'Нет',

	'BOT_MATCH' => 'Отметить совпадение',
	'BOT_MATCH_SELECT' => array(
		'partially' => 'Частичное',
		'full' => 'Полное',
	),

	'SAME_AS_BOT' => 'с ботом на форуме',
	'SAME_AS_BOT_SELECT' => array(
		'by_family' => 'По семейству',
		'by_name' => 'По названию',
		'by_family_or_name' => 'По семейству или названию',
		'by_agent' => 'По заголовку агента',
		'by_ip' => 'По IP адресу',
	),
));
