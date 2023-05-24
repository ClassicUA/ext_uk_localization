<?php

/**
*
* @package BB3PostsReserve
* @copyright (c) 2019 PPK
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
	'BB3POSTSRESERVE_FORM' => 'Резервирование сообщений',
	'BB3POSTSRESERVE_FORM_EXPLAIN' => 'Зарезервировать указанное количество сообщений в теме',

	'BB3POSTSRESERVE_RESERVED' => 'Зарезервировано.',
));
