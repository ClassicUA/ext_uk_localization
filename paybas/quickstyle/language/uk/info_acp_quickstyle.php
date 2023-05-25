<?php
/**
 *
 * @package Quick Style
 * Russian translation by rxu
 *
 * @copyright (c) 2015 PayBas
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * Based on the original Prime Quick Style by Ken F. Innes IV (primehalo)
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
	'QUICK_STYLE'						=> 'Швидкий стиль',
	'QUICK_STYLE_EXPLAIN'				=> 'Додає список стилів, що випадає, в заголовок кожної сторінки для швидкого перемикання між стилями.',
	'QUICK_STYLE_SETTINGS'				=> 'Налаштування швидкого стилю',
	'QUICK_STYLE_DEFAULT_LOC'			=> 'Використання стилів за замовчуванням.',
	'QUICK_STYLE_DEFAULT_LOC_EXPLAIN'	=> 'За замовчуванням, розширення ставить перемикач стилів праворуч від навігації в заголовку. Встановлення цього значення в "ні" дасть вам змогу ввімкнути десь у вашому стилі.',
	'QUICK_STYLE_ALLOW_GUESTS'			=> 'Дозволити гостям змінювати стилі',
	'QUICK_STYLE_ALLOW_GUESTS_EXPLAIN'	=> 'Це налаштування дасть змогу гостям змінювати стилі. Оскільки вони не авторизовані на форумі, використовуватимуться куки, щоб пам\'ятати їхній стиль.',
	'QUICK_STYLE_OVERRIDE_ENABLED'		=> 'Для налаштування перевизначення стилю користувача ввімкнено на цьому форумі.Перемикач стилів не працюватиме, поки ви не вимкнете його.',
));
