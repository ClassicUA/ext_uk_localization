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

	'ACP_BB3BOTSMANAGER_CONFIG' => 'Настройки',
	'ACP_BB3BOTSMANAGER_CONFIG_EXPLAIN' => '',

	'BB3BOTSMANAGER_COLLECT_UA' => 'Автоопределение и логирование посещений',
	'BB3BOTSMANAGER_COLLECT_UA_EXPLAIN' => 'Автоматически определять ботов и логировать их посещение используя указанные способы, в разделе "Лог посещений" будут отображаться боты посещавшие форум (только с не повторяющимися агентами), для опредения ботов используется база данных ботов с сайта <a href="https://udger.com/resources/ua-list">udger.com</a> и модуль <a href="https://github.com/JayBizzle/Crawler-Detect/">crawler-detect</a>, для способа <i>crawler-detect</i> будет определятся только семейство бота. Учитывается посещение только главной страницы форума, для работы функции необходимо выбрать хотя-бы один способ определения',

	'SELECT_COLLECT_UA'=>array(
		'udger.com'=>'Данные udger.com',
		'crawler-detect'=>'Модуль crawler-detect',
	),

	'SELECT_BOT_BLOCK_ACTION'=>array(
		'register'=>'Регистрация',
		'login'=>'Вход',
	),

	'BB3BOTSMANAGER_BOT_BLOCK_ACTION' => 'Запрет действий для ботов',
	'BB3BOTSMANAGER_BOT_BLOCK_ACTION_EXPLAIN' => 'Запретить указанные действия для ботов добавленных на форум, по умолчанию ссылки на страницы для указанных действий скрыты от ботов, но доступны для посещения и действий, данная опция это запрещает (может быть полезно для спам-ботов использующих известные библиотеки для доступа к сайтам)',

	'BB3BOTSMANAGER_ADDIT_HEADERS' => 'Дополнительные заголовки для определения',
	'BB3BOTSMANAGER_ADDIT_HEADERS_EXPLAIN' => 'Для определения ботов по умолчанию используется заголовок HTTP_USER_AGENT, для более точного определения дополнительно можно использовать указанные заголовки (только для способа <i>crawler-detect</i>)',

	'BB3BOTSMANAGER_ENABLE_BLOCK' => 'Блокировка ботов',
	'BB3BOTSMANAGER_ENABLE_BLOCK_EXPLAIN' => 'Блокировать ботов отмеченных в разделе поисковых ботов',

	'BB3BOTSMANAGER_BLOCK_TIME' => 'Временная блокировка',
	'BB3BOTSMANAGER_BLOCK_TIME_EXPLAIN' => 'Время блокировки ботов по времени, боты при посещении форума в указанный промежуток времени будут блокироваться если они отмечены в разделе поисковых ботов с блокировкой по времени (время в формате ЧЧ:ММ, учитывается время сервера, текущее: '.date('H:i', time()).')',

	'BLOCK_TIME_FROM' => 'с',
	'BLOCK_TIME_TO' => 'до',

	'BB3BOTSMANAGER_BOTSDB_UPDATE' => 'Обновление базы данных ботов',
	'BB3BOTSMANAGER_BOTSDB_UPDATE_EXPLAIN' => 'Обновление может занять определённое время, не обновляйте страницу во время процесса обновления',

	'BOTSDB_UPDATED' => 'База данных ботов обновлена',

	'BOTSDB_UPDATE' => 'Обновить базу данных ботов',
	'BOTSDB_UPDATE_VERSION' => 'Обновление не требуется, текущая версия: %s',
	'BOTSDB_UPDATE_NEW_VERSION' => 'Доступно обновление базы данных ботов, ваша версия: %s, последняя версия: %s',

	'BOTSDB_UPDATE_INFO' => array(
		'bots_family' => array(
			'new' => 'Добавлено семейств ботов',
			'old' => 'Удалено семейств ботов',
			'update' => 'Обновлено семейств ботов',
		),
		'bots_variants' => array(
			'new' => 'Добавлено групп ботов',
			'old' => 'Удалено групп ботов',
			'update' => 'Обновлено групп ботов',
			'new_bots' => 'Добавлено ботов',
			'old_bots' => 'Удалено ботов',
			'update_bots' => 'Обновлено ботов',
		),
		'current' => array(
			'family_count' => 'Семейств ботов',
			'bots_count' => 'Ботов',
		),
	),
));
