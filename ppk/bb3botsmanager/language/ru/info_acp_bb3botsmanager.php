<?php

/**
*
* @package BB3BotsManager
* @copyright (c) 2015 PPK
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
	'BB3BOTSMANAGER' => 'BB3BotsManager',
	'ACP_BB3BOTSMANAGER_BOTSLIST' => 'Поисковые боты',
	'ACP_BB3BOTSMANAGER_BOTSLOG' => 'Лог посещений',
	'ACP_BB3BOTSMANAGER_BOTSDB' => 'База данных ботов',
	'ACP_BB3BOTSMANAGER_CONFIG' => 'Настройки',
	'FILTER' => 'Фильтр',

	'LOG_CLEAR_BB3BOTSMANAGER_BOTSLOG_ALL' => 'BB3BotsManager: <strong>удалены все записи</strong> из лога посещений',
	'LOG_CLEAR_BB3BOTSMANAGER_BOTSLOG' => 'BB3BotsManager: <strong>удалены записи (%s)</strong> из лога посещений',
	'LOG_UPDATE_BB3BOTSMANAGER_BOTSDB' => 'BB3BotsManager: <strong>обновлена</strong> база данных ботов',

));
