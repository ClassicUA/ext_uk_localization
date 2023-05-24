<?php

/**
*
* @package BB3AddFields
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
	'ADDFIELDS_REQUIRED'=>'Заполните дополнительные поля',
	'ADDFIELDS_REQUIRED_FIELD'=>'поле',
	'ADDFIELDS_REQUIRED_EXISTS'=>'поле <u>%s</u> может содержать вариант только из предложенных',
	'ADDFIELDS_REQUIRED_FIELDS'=>'<u>Подчёркнутые</u> поля являются обязательными для заполнения, для множественных полей в (скобках) указано минимально необходимое количество полей для заполнения',
	'ADDFIELDS_REQUIRED_MIN'=>'минимум %s поля(ей) %s',
	'ADDFIELDS_CHECK_FUNCTION' => 'ошибка заполнения поля <u>%s</u>',
	'ADDFIELDS_MULTIHLP' => 'Для выбора более одного значения удерживайте нажатой клавишу <b>Ctrl</b>',
	'TRACKER_ADDFIELDS'	=> 'Дополнительные поля',
	'TRACKER_ADDFIELDS_EXAMPLE'	=> 'Пример',

	'SELECT_FORUM' => 'Выберите форум',
	'CREATE_TOPIC_NOACCESS' => 'Нет прав или функция отключена.',
));
