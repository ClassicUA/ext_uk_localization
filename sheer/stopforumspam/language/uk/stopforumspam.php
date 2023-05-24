<?php
/**
*
* @package phpBB Extension - Stop spamer register
* @copyright (c) 2017 Sheer
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

$lang = array_merge($lang, array(
	'ADD'			=> 'Додати',
	'ADD_AND_DELETE'=> 'Видалити користувача і додати дані',
	'ADD_DATA'		=> 'Додати дані в базу <a href = "https://www.stopforumspam.com" target = "_blank">stopforumspam</a>',
	'CONNECTION_ERROR'	=> 'Не вдалося отримати дані з сервера <a href = "https://www.stopforumspam.com" target = "_blank">stopforumspam.com</a>',
	'DONE'			=> '<b>Інформацію додано до бази даних www.stopforunspam.com<br />Дякуємо за співпрацю!</b>',
	'EMAIL_FIND'	=> 'Запис про адресу e-mail виявлено <b>%s</b> раз(ів).',
	'EMAIL_NOT_FIND'=> 'Запис про адресу e-mail не виявлено.',
	'ENTER_APY'		=> 'Введіть код API',
	'FAIL_ADD_DATA'	=> 'Не вдалося додати дані - можливо вказано недійсний код API.',
	'GET_APY_KEY'	=> 'Отримати код API',
	'IP_FIND'		=> 'Запис про IP-адресу виявлено <b>%s</b> раз(ів).',
	'IP_NOT_FIND'	=> 'Запис про IP-адресу не виявлено.',
	'NICK_FIND'		=> 'Запис про ім\'я користувача виявлено <b>%s</b> раз(ів).',
	'NICK_NOT_FIND'	=> 'Запис про ім\'я користувача не виявлено.',
	'NOT_SPAMMER'	=> 'Швидше за все це не спамер',
	'OTHER_IP'		=> 'IP-адреси, з яких користувач відправляв повідомлення',
	'POSSIBLE_NOT'	=> 'Можливо це не спамер',
	'POSSIBLE_YES'	=> 'Швидше за все це спамер',
	'READ_COMMENT'	=> 'Запис про IP-адресу було втрачено.',
	'RESUME'		=> 'Резюме',
	'SFS'			=> 'Це спамер?',
	'SFS_INFO'		=> 'Відповідь stopforunspam.com',
	'SPAM'			=> 'Спамер',
	'SPAMMER'		=> 'Це спамер!',
	'SUCSESS_DELETE'=> 'Користувача успішно видалено. Резервну копію зроблено.',
	'CHECK_IP'		=> 'Запис про IP-адресу відсутній, але записи про ім\'я користувача та адресу e-mail виявлено.<br />Перевірте IP-адреси, з яких користувач залишав повідомлення, на сайті <a href = "https://www.stopforumspam.com" target="_blank">www.stopforumspam.com</a><br />Найімовірніше, що це спамер! ',
));
