<?php

/**
 *
 * Forum Language. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Saeed Hubaishan, http://salafitech.net
 * @license GNU General Public License, version 2 (GPL-2.0)
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
	'FORUM_LANGUAGE'			=> 'Мова форуму',
	'DEFAULT_LANGUAGE'			=> 'Мова за замовчуванням',
	'FL_AFTER_LANGUAGE_PACK_DELETED' => 'І всі форуми, що використовують цю мову, були скинуті на мову за замовчуванням.',
));
