<?php

/**
*
* @package phpBB3Fixes
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
	'ACP_PHPBB3FIXES' => 'phpBB3Fixes',

	'ACP_PHPBB3FIXES_CONFIG' => 'Настройки',
	'ACP_PHPBB3FIXES_CONFIG_EXPLAIN' => 'Настройки phpBB3Fixes',

	'PHPBB3FIXES_DELETE_PERMANENT_CHECKED' => 'Удалить безвозвратно по умолчанию',
	'PHPBB3FIXES_DELETE_PERMANENT_CHECKED_EXPLAIN' => 'Отмечать пункт "Удалить безвозвратно" на странице удаления сообщения по умолчанию',

	'PHPBB3FIXES_DISPLAY_TOPIC_VIEWS' => 'Количество просмотров темы',
	'PHPBB3FIXES_DISPLAY_TOPIC_VIEWS_EXPLAIN' => 'Отображать количество просмотр темы на странице темы',

	'PHPBB3FIXES_FIX_SITE_LOGO' => 'Логотип сайта',
	'PHPBB3FIXES_FIX_SITE_LOGO_EXPLAIN' => 'Отображать указанное изображение вместо стандартного логотипа (только для стиля prosilver), аболютная ссылка на изображение (<i>http://domain.tld/image.png</i>) или относительная, без начального слеша (<i>ext/ppk/phpbb3fixes/image.png</i>), логотип будет отображаться в его оригинальном размере',

	'PHPBB3FIXES_FIX_SPLIT_VIEW' => 'Отделение темы начиная с выбранного сообщения',
	'PHPBB3FIXES_FIX_SPLIT_VIEW_EXPLAIN' => 'Исправлять выбор выпадающего списка в модераторском разделе при соответствующем выборе и отправке формы (при выборе "Отделить тему начиная с выбранного сообщения" и отправке формы, ошибочно выбирается "Отделить выбранные сообщения")',

	'PHPBB3FIXES_FIX_U_CANONICAL' => 'Канонический URL на странице темы',
	'PHPBB3FIXES_FIX_U_CANONICAL_EXPLAIN' => 'Добавлять в каноническую ссылку на странице темы идентификатор форума, вместо ссылки <i>http://domain.tld/viewtopic.php?t={ИДЕНТИФИКАТОР_ТЕМЫ}</i> будет отображаться ссылка <i>http://domain.tld/viewtopic.php?f={ИДЕНТИФИКАТОР_ФОРУМА}&amp;amp;t={ИДЕНТИФИКАТОР_ТЕМЫ}</i> (канонической ссылкой называется URL страницы, которую поисковые системы считают главной среди ее копий)',

	'PHPBB3FIXES_FIX_U_INDEX' => 'Ссылка на главную страницу',
	'PHPBB3FIXES_FIX_U_INDEX_EXPLAIN' => 'Не отображать в ссылке на главную страницу форума название страницы, вместо ссылки <i>http://domain.tld/index.php</i> будет отображаться ссылка <i>http://domain.tld/</i>',

	'PHPBB3FIXES_DISPLAY_FORUM_DESC' => 'Описание форума',
	'PHPBB3FIXES_DISPLAY_FORUM_DESC_EXPLAIN' => 'Отображать описание форума на странице списка тем, на странице списка тем выводится описание форума но по умолчанию оно скрыто',
));
