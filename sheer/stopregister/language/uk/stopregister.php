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
	'ACP_STOPFORUMSPAM'			=> 'Перевірка за БД www.stopforumspam.com',
	'IP_STOP'					=> 'Вашу IP-адресу внесено до чорного списку сервісу <a href="https://www.stopforumspam.com" target = "_blank">www.stopforumspam.com</a>',
	'NICK_STOP'					=> 'Обране вами ім\'я внесено до чорного списку сервісу <a href="http://www.stopforumspam.com" target = "_blank">www.stopforumspam.com</a><br />Спробуйте підібрати інше',
	'EMAIL_STOP'				=> 'Зазначену адресу e-mail внесено до чорного списку сервісу <a href="https://www.stopforumspam.com" target = "_blank">www.stopforumspam.com</a><br />Спробуйте використати інший',
	'REPORT_STOP'				=> 'Якщо ви вважаєте, що це сталося через непорозуміння, надішліть <a href="https://www.stopforumspam.com/removal" target = "_blank">запит на видалення даних із бази даних stopforumspam.com</a>',
	'ALLOW_STOPFORUMSPAM'		=> 'Увімкнути',
	'ALLOW_STOPFORUMSPAM_EXPLAIN'=> 'Якщо увімкнено, то IP-адресу, ім\'я користувача та адресу e-mail буде перевірено за базою даних www.stopforumspam.com<br />Вимкнення <b>всіх трьох</b> нижченаведених параметрів рівносильно вимкненню цього параметра.',
	'ALLOW_REG_LOG'				=> 'Вести журнал реєстрацій',
	'CHECK_SPAM_IP'				=> 'Перевіряти за IP-адресою',
	'CHECK_USERNAME'			=> 'Перевіряти ім\'я користувача',
	'CHECK_SPAM_EMAIL'			=> 'Перевіряти адресу e-mail',
	'SFSL_PRUNE_DAY'=> 'Автоочищення журналу',
	'SFSL_PRUNE_DAY_EXPLAIN'=> 'За який час у добі зберігати дані. Нульове значення відключає автоматичне очищення лога.',
));
