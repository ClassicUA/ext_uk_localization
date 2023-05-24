<?php

/**
*
* @package BB3PostingLog
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
	'ACP_BB3POSTINGLOG' => 'BB3PostingLog',
	'ACP_BB3POSTINGLOG_CONFIG' => 'Настройки',
	'LOG_BB3POSTINGLOG_CONFIG' => '<strong>Изменены настройки BB3PostingLog</strong>',

	'LOG_BB3PL_FORUM_POST' => 'Пользователь &laquo;%2$s&raquo; <strong>создал тему</strong><br />&raquo; %1$s',
	'LOG_BB3PL_FORUM_REPLY' => 'Пользователь &laquo;%2$s&raquo; <strong>создал сообщение в теме</strong><br />&raquo; %1$s',
	'LOG_BB3PL_FORUM_QUOTE' => 'Пользователь &laquo;%2$s&raquo; <strong>ответил в теме</strong><br />&raquo; %1$s',
	'LOG_BB3PL_FORUM_EDIT' => 'Пользователь &laquo;%2$s&raquo; <strong>отредактировал сообщение в теме</strong><br />&raquo; %1$s',

	'LOG_BB3PL_PM_POST' => 'Пользователь &laquo;%1$s&raquo; <strong>создал новое личное сообщение</strong>',
	'LOG_BB3PL_PM_REPLY' => 'Пользователь &laquo;%1$s&raquo; <strong>создал личное сообщение</strong>',
	'LOG_BB3PL_PM_QUOTE' => 'Пользователь &laquo;%1$s&raquo; <strong>ответил на личное сообщение</strong>',
	'LOG_BB3PL_PM_QUOTEPOST' => 'Пользователь &laquo;%1$s&raquo; <strong>ответил личным сообщением на сообщение на форуме</strong>',
	'LOG_BB3PL_PM_EDIT' => 'Пользователь &laquo;%1$s&raquo; <strong>отредактировал личное сообщение</strong>',
	'LOG_BB3PL_PM_FORWARD' => 'Пользователь &laquo;%1$s&raquo; <strong>переслал личное сообщение</strong>',
	'LOG_BB3PL_PM_DELETE' => 'Пользователь &laquo;%1$s&raquo; <strong>удалил личное сообщение(я)</strong>',

	'LOG_BB3PL_MERGE_TOPICS' => '<strong>Объединены темы:</strong> %2$s (%3$s)<br />&raquo; в тему %1$s',
	'LOG_BB3PL_MERGE_POSTS' => '<strong>Перемещены сообщения из темы:</strong> %2$s [IDs: %3$s (%4$s)]<br />&raquo; в тему %1$s',
	'LOG_BB3PL_MOVE_TOPIC' => '<strong>Перемещена тема:</strong> %3$s<br />&raquo; из форума %1$s в форум %2$s',
	'LOG_BB3PL_SPLIT_TOPIC' => '<strong>Отделены сообщения из темы: %2$s</strong> [IDs: %3$s (%4$s)]<br />&raquo; в новую тему %1$s',
));
