<?php

/**
*
* @package BB3PostingLog
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
	'ACP_BB3POSTINGLOG' => 'BB3PostingLog',

	'ACP_BB3POSTINGLOG_CONFIG' => 'Настройки',
	'ACP_BB3POSTINGLOG_CONFIG_EXPLAIN' => 'Настройки BB3PostingLog',

	'ACP_BB3POSTINGLOG_FORUM' => 'Дополнительные логи тем',

	'BB3POSTINGLOG_FORUM_POST' => 'Лог создания темы',
	'BB3POSTINGLOG_FORUM_POST_EXPLAIN' => '',

	'BB3POSTINGLOG_FORUM_REPLY' => 'Лог создания сообщения в теме',
	'BB3POSTINGLOG_FORUM_REPLY_EXPLAIN' => '',

	'BB3POSTINGLOG_FORUM_QUOTE' => 'Лог ответа в теме',
	'BB3POSTINGLOG_FORUM_QUOTE_EXPLAIN' => '',

	'BB3POSTINGLOG_FORUM_EDIT' => 'Лог редактирования сообщения в теме',
	'BB3POSTINGLOG_FORUM_EDIT_EXPLAIN' => '',

	'ACP_BB3POSTINGLOG_PM' => 'Дополнительные логи личных сообщений',

	'BB3POSTINGLOG_PM_POST' => 'Лог создания нового личного сообщения',
	'BB3POSTINGLOG_PM_POST_EXPLAIN' => '',

	'BB3POSTINGLOG_PM_REPLY' => 'Лог создания личного сообщения',
	'BB3POSTINGLOG_PM_REPLY_EXPLAIN' => '',

	'BB3POSTINGLOG_PM_QUOTE' => 'Лог ответа на личное сообщение',
	'BB3POSTINGLOG_PM_QUOTE_EXPLAIN' => '',

	'BB3POSTINGLOG_PM_QUOTEPOST' => 'Лог ответа создания личного сообщения на сообщение на форуме',
	'BB3POSTINGLOG_PM_QUOTEPOST_EXPLAIN' => '',

	'BB3POSTINGLOG_PM_EDIT' => 'Лог редактирования личного сообщения',
	'BB3POSTINGLOG_PM_EDIT_EXPLAIN' => '',

	'BB3POSTINGLOG_PM_FORWARD' => 'Лог пересылки личного сообщения',
	'BB3POSTINGLOG_PM_FORWARD_EXPLAIN' => '',

	'BB3POSTINGLOG_PM_DELETE' => 'Лог удаления личного сообщения',
	'BB3POSTINGLOG_PM_DELETE_EXPLAIN' => '',

	'ACP_BB3POSTINGLOG_ADDIT' => 'Расширенные логи форума',

	'BB3POSTINGLOG_REWRITE' => 'Перезаписывать встроенный лог',
	'BB3POSTINGLOG_REWRITE_EXPLAIN' => 'Если включено: при логировании указанных событий стандартный лог форума будет перезаписываться логом расширения (действует только для опций ниже), если выключено: лог события будет записываться дважды',

	'BB3POSTINGLOG_MERGE_TOPICS' => 'Лог объединения тем',
	'BB3POSTINGLOG_MERGE_TOPICS_EXPLAIN' => '',

	'BB3POSTINGLOG_MERGE_POSTS' => 'Лог перемещения сообщений в другую тему',
	'BB3POSTINGLOG_MERGE_POSTS_EXPLAIN' => '',

	'BB3POSTINGLOG_MOVE_TOPICS' => 'Лог перемещения тем',
	'BB3POSTINGLOG_MOVE_TOPICS_EXPLAIN' => '',

	'BB3POSTINGLOG_SPLIT_TOPIC' => 'Лог отделения сообщений в новую тему',
	'BB3POSTINGLOG_SPLIT_TOPIC_EXPLAIN' => '',

	'BB3POSTINGLOG_FOUNDERS_ONLY' => 'Изменение настроек доступно только пользователям с правами основателя',

));
