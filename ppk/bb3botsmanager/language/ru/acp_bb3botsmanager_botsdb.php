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

	'ACP_BB3BOTSMANAGER_BOTSDB_EXPLAIN' => 'База данных ботов на основе данных сайта <a href="https://udger.com/resources/ua-list">udger.com</a> по состоянию на %s. Семейством обозначается группа ботов принадлежащих одному и тому-же сервису, например YandexBot и YandexMetrika для яндекса или GoogleBot и Googlebot-Image для гугл',

	'ANY_TIME' => 'Любой период',
	'SEEN_TIME' => 'Активность не позднее',

	'SORT_BOT_FAMILY' => 'Семейство',
	'SORT_BOT_VENDOR' => 'Вендор',
	'SORT_LAST_SEEN' => 'Последняя активность',
	'SORT_VARIANTS' => 'Количество ботов',

	'SOURCE_ONLY_FAMILY' => 'Показать только с этим семейством',
	'SOURCE_ONLY_VENDOR' => 'Показать только от этого вендора',
	'SOURCE_ONLY_CLASS' => 'Показать только из этой категории',

	'FAMILY_NAME' => 'Семейство',

	'FAMILY_HOMEPAGE' => 'Домашняя страница',
	'FAMILY_HOMEPAGE_EXPLAIN' => '',

	'VENDOR_NAME' => 'Вендор',
	'VENDOR_NAME_EXPLAIN' => '',

	'BOT_CLASS' => 'Категория',

	'BOT_STATUS' => 'Статус',
	'BOT_STATUS_EXPLAIN' => '',

	'BOT_UA_STRING' => 'Агент',
	'BOT_UA_STRING_EXPLAIN' => '',

	'IP_COUNT' => 'IP адресов',
	'IP_COUNT_EXPLAIN' => '',

	'BOT_IPS' => 'IP адреса',
	'BOT_IPS_EXPLAIN' => '',

	'RESPECT_ROBOTSTXT' => 'Соблюдает правила файла robots.txt',
	'RESPECT_ROBOTSTXT_EXPLAIN' => '',

	'STATUS_ACTIVE' => 'Активен',
	'STATUS_INACTIVE' => 'Не активен',

	'FIRST_SEEN' => 'Первая активность',
	'LAST_SEEN' => 'Последняя активность',

	'BOT_ACTIVE' => 'Активен',
	'SHOW_ALL' => 'Сбросить фильтр',
	'NO_BOTS' => 'Нет записей',

	'VARIANTS' => 'Ботов',
	'VIEW_VARIANTS' => 'Просмотреть ботов',

	'BOT_VIEW' => 'Просмотр ботов',
	'BOT_VIEW_EXPLAIN' => 'Указанные данные основаны на данных сайта <a href="https://udger.com/resources/ua-list">udger.com</a> по состоянию на %s, список IP адресов может быть не полным',

	'ADD_BOT' => 'Добавить бота',
	'ADD_BOT_EXPLAIN' => 'Добавить бота на основе данных',

	'SHOW_ONLY_FAMILY' => 'Только из семейства <b>%s</b>',
	'SHOW_ONLY_VENDOR' => 'Только от вендора <b>%s</b>',
	'SHOW_ONLY_CLASS' => 'Только из категории <b>%s</b>',

));
