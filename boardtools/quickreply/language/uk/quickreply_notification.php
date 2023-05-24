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
	// Translate according to plural rules.
	'NOTIFICATION_QUICKNICK' => [
		1 => '<strong>Звернення за нікнеймом</strong> від користувача %1$s у повідомленні:',
		2 => '<strong>Звернення за нікнеймом</strong> від користувачів %1$s у повідомленні:',
		3 => '<strong>Звернення за нікнеймом</strong> від користувачів %1$s у повідомленні:',
	],

	'NOTIFICATION_TYPE_QUICKNICK' => 'До вас звернулися за нікнеймом у повідомленні',

	'QR_BBPOST' => 'Джерело цитати',
));
