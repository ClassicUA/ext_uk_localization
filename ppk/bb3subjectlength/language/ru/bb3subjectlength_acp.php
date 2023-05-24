<?php

/**
*
* @package BB3SubjectLength
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
	'ACP_BB3SUBJECTLENGTH' => 'BB3SubjectLength',

	'PPKBB_SUBJECT_MAXLENGTH'	=> 'Длина поля заголовок',
	'PPKBB_SUBJECT_MAXLENGTH_EXPLAIN'	=> 'Максимальная длина поля <i>заголовок</i> при создании и редактировании сообщения, не более 250 символов, 0 - по умолчанию (120-124 символа)',

	'PPKBB_SUBJECT_REMOVE'	=> 'Удалять префикс',
	'PPKBB_SUBJECT_REMOVE_EXPLAIN'	=> 'Удалять префикс <strong>Re:</strong> из заголовка (будет работать только для вновь создаваемых или редактируемых сообщений)',

	'PPKBB_SUBJECT_STATIC'	=> 'Запрет изменения заголовка',
	'PPKBB_SUBJECT_STATIC_EXPLAIN'	=> 'Не позволять изменять тему заголовка при ответах (будет работать только для вновь создаваемых или редактируемых сообщений)',

	'PPKBB_SUBJECT_REPLACE'	=> 'Замена заголовка',
	'PPKBB_SUBJECT_REPLACE_EXPLAIN'	=> 'Заменять заголовки тем в списке форумов и странице сообщений, в указанных местах в качестве заголовка темы будет отображаться название из первого сообщения в теме (вместо оригинального названия темы может отображаться другое название если к теме были присоединены другие сообщения или тема целиком), данная опция в отличии от предыдущей только подменяет название заголовка без изменения в базе данных и работает для уже созданных сообщений',

	'PPKBB_SUBJECT_TEXTLENGTH'	=> 'Длина заголовка',
	'PPKBB_SUBJECT_TEXTLENGTH_EXPLAIN'	=> 'Длина заголовка на странице списка форумов, 0 - по умолчанию (30 символов)',
));
