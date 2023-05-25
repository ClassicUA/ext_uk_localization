<?php
/**
*
* Topic Preview [Russian]
*
* @copyright (c) 2013 Matt Friedman
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'TOPIC_PREVIEW'					=> 'Topic Preview: попередній перегляд тем',
	'TOPIC_PREVIEW_EXPLAIN'			=> 'Розширення Topic Preview дає змогу відобразити невеликий фрагмент першого повідомлення під час наведення курсору миші на назву теми.',
	'TOPIC_PREVIEW_SETTINGS'		=> 'Загальні параметри',
	'TOPIC_PREVIEW_LENGTH'			=> 'Довжина тексту',
	'TOPIC_PREVIEW_LENGTH_EXPLAIN'	=> 'Кількість символів, яка буде відображена у спливаючій підказці для попереднього перегляду теми (за замовчуванням 150). Введіть 0 для вимкнення функції попереднього перегляду.',
	'TOPIC_PREVIEW_STRIP'			=> 'BB-коди для приховування',
	'TOPIC_PREVIEW_STRIP_EXPLAIN'	=> 'Перелік BB-кодів, які треба видалити з попереднього перегляду (наприклад, spoiler або hidden). Для зазначення кількох BB-кодів використовуйте символ | для розділення. Наприклад: spoiler|hide|code',
	'TOPIC_PREVIEW_AVATARS'			=> 'Увімкнути відображення аватарів',
	'TOPIC_PREVIEW_LAST_POST'		=> 'Додатково відображати "Останнє повідомлення»',
	'CHARS'							=> 'символів',

	'TOPIC_PREVIEW_STYLE_SETTINGS'	=> 'Параметри стилю',
	'TOPIC_PREVIEW_WIDTH'			=> 'Ширина спливаючої підказки (у пікселях)',
	'TOPIC_PREVIEW_DELAY'			=> 'Затримка перед показом спливаючої підказки (у мілісекундах)',
	'TOPIC_PREVIEW_DRIFT'			=> 'Ефект зміщення (у пікселях)',
	'TOPIC_PREVIEW_DRIFT_EXPLAIN'	=> 'Величина зміщення по вертикалі під час анімації зникнення спливаючої підказки (негативні значення змінюють напрямок анімації).',
	'TOPIC_PREVIEW_THEME'			=> 'Тема для стилю %s',
	'TOPIC_PREVIEW_THEME_EXPLAIN'	=> 'Тема оформлення спливаючої підказки для стилю %s.',
	'THEME'							=> '',
	'MILLISECOND'					=> 'мс',
));
