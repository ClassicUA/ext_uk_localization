<?php
/**
 *
 * @package       QuickReply Reloaded
 * @copyright (c) 2014 - 2021 Татьяна5 and LavIgor
 * @license       http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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

$lang = array_merge($lang, array(
	'QR_CHANGE_QUICKNICK_STRING' => 'Переключити спливаюче меню при кліці по ніку на рядок "Звернутися по ніку" під аватаром',
	'QR_ENABLE_AJAX_PAGINATION'  => 'Не очищати форму швидкої відповіді під час перегляду теми',
	'QR_ENABLE_SCROLL'           => 'Увімкнути автоматичне прокручування сторінки під час перегляду теми',
	'QR_ENABLE_SOFT_SCROLL'      => 'Увімкнути плавне прокручування сторінки й анімацію під час перегляду теми та після швидкої відповіді',
	'QR_ENABLE_WARNING'          => 'Попереджати, якщо введена швидка відповідь може бути втрачена',
	'QR_FIX_EMPTY_FORM'          => 'Дозволити фіксувати форму швидкої відповіді, коли вона порожня',
));
