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

	'ACP_PHPBB3FIXES_CONFIG' => 'Налаштування',
	'ACP_PHPBB3FIXES_CONFIG_EXPLAIN' => 'Налаштування phpBB3Fixes',

	'PHPBB3FIXES_DELETE_PERMANENT_CHECKED' => 'Видалити безповоротно за замовчуванням',
	'PHPBB3FIXES_DELETE_PERMANENT_CHECKED_EXPLAIN' => 'Відзначати пункт "Видалити безповоротно" на сторінці видалення повідомлення за замовчуванням',

	'PHPBB3FIXES_DISPLAY_TOPIC_VIEWS' => 'Кількість переглядів теми',
	'PHPBB3FIXES_DISPLAY_TOPIC_VIEWS_EXPLAIN' => 'Відображати кількість перегляд теми на сторінці теми',

	'PHPBB3FIXES_FIX_SITE_LOGO' => 'Логотип сайту',
	'PHPBB3FIXES_FIX_SITE_LOGO_EXPLAIN' => 'Відображати вказане зображення замість стандартного логотипа (тільки для стилю prosilver), аболютне посилання на зображення (<i>http://domain.tld/image.png</i>) або відносна, без початкового слешу (<i>ext/ppk/phpbb3fixes/image.png</i>), логотип відображатиметься в його оригінальному розмірі',

	'PHPBB3FIXES_FIX_SPLIT_VIEW' => 'Відокремлення теми починаючи з обраного повідомлення',
	'PHPBB3FIXES_FIX_SPLIT_VIEW_EXPLAIN' => 'Виправляти вибір списку, що випадає, у модераторському розділі під час відповідного вибору та надсилання форми (під час вибору "Відокремити тему починаючи з обраного повідомлення" та надсилання форми, помилково обирають "Відокремити вибрані повідомлення").',

	'PHPBB3FIXES_FIX_U_CANONICAL' => 'Канонічний URL на сторінці теми',
	'PHPBB3FIXES_FIX_U_CANONICAL_EXPLAIN' => 'Додавати в канонічне посилання на сторінці теми ідентифікатор форуму, замість посилання <i>http://domain.tld/viewtopic.php?t={ИДЕНТИФИКАТОР_ТЕМЫ}</i> відображатиметься посилання <i>http://domain.tld/viewtopic.php?f={ИДЕНТИФИКАТОР_ФОРУМА}&amp;amp;t={ИДЕНТИФИКАТОР_ТЕМЫ}</i> (канонічним посиланням називається URL сторінки, яку пошукові системи вважають головною серед її копій)',

	'PHPBB3FIXES_FIX_U_INDEX' => 'Посилання на головну сторінку',
	'PHPBB3FIXES_FIX_U_INDEX_EXPLAIN' => 'Не відображати в посиланні на головну сторінку форуму назву сторінки, замість посилання <i>http://domain.tld/index.php</i> відображатиметься посилання <i>http://domain.tld/</i>',

	'PHPBB3FIXES_DISPLAY_FORUM_DESC' => 'Опис форуму',
	'PHPBB3FIXES_DISPLAY_FORUM_DESC_EXPLAIN' => 'Відображати опис форуму на сторінці списку тем, на сторінці списку тем виводиться опис форуму, але за замовчуванням він прихований',
));
