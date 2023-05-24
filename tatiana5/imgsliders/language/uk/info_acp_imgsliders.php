<?php
/**
 *
 * @package       Imgsliders
 * @copyright (c) 2021 Татьяна5
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
	'ACP_IMGSLIDERS_TITLE'					=> 'Слайдери зображень',
	'ACP_IMGSLIDERS_TITLE_EXPLAIN'			=> 'Налаштування',
	//
	'ACP_IMSLIDERS_CLASS'					=> 'Вибір слайдера',
	'ACP_IMGSLIDERS_MIN_SIZE'				=> 'Мінімальний розмір',
	'ACP_IMGSLIDERS_MIN_SIZE_EXPLAIN'		=> 'Зображення, менші за вказаний розмір, не відображатимуться в слайдері.',
	'ACP_IMGSLIDERS_MAX_SIZE'				=> 'Максимальний розмір',
	'ACP_IMGSLIDERS_MAX_SIZE_EXPLAIN'		=> 'Зображення, більші за вказаний розмір (за будь-яким із параметрів ширина/висота), будуть зменшуватися до нього. Для вимкнення зменшення введіть 0.',
	//
	'ACP_IMGSLIDERS_FANCYBOX'				=> 'Fancybox',
	'ACP_IMGSLIDERS_PHOTOSWIPE'				=> 'PhotoSwipe',
));
