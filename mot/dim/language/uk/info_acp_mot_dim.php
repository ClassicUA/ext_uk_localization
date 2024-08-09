<?php
/**
*
* @package MoT DIM v1.0.0
* @copyright (c) 2024 Mike-on-Tour
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if ( !defined('IN_PHPBB') )
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACP_MOT_DIM'						=> 'Видалення неактивних користувачів',
	'ACP_MOT_DIM_SETTINGS'				=> 'Налаштування',

	'ACP_MOT_DIM_SETTINGS_EXPL'			=> 'Тут ви можете змінити налаштування цього розширення.',
	'ACP_MOT_DIM_VERSION'				=> '<img src="https://img.shields.io/badge/Version-%1$s-green.svg?style=plastic"><br>&copy; 2024 by Mike-on-Tour',

	'ACP_MOT_DIM_GENERAL_SETTINGS'		=> 'Основні налаштування',
	'ACP_MOT_DIM_ENABLE'				=> 'Увімкнути розширення',
	'ACP_MOT_DIM_ENABLE_EXPL'			=> 'За допомогою цього перемикача ви можете ввімкнути або вимкнути це розширення.<br><span style="color:red">
											Перш ніж увімкнути, ви повинні бути впевнені, що конфігурація, яку ви можете встановити за допомогою наступних пунктів, відповідає вашим потребам і не
											не видаляє користувачів, яких ви не хочете видаляти!</span>',

	'ACP_MOT_DIM_DELETE_SETTINGS'		=> 'Налаштування видалення',
	'ACP_MOT_DIM_DAYS_DELETE'			=> 'Кількість днів до видалення',
	'ACP_MOT_DIM_DAYS_DELETE_EXP'		=> 'Виберіть кількість днів з моменту реєстрації, через яку користувачі будуть видалятися, якщо вони не активували свій обліковий запис, не входили
											на форум і нічого не публікували.',
	'ACP_MOT_DIM_ENABLE_SLEEPER'		=> 'Включити сплячих',
	'ACP_MOT_DIM_ENABLE_SLEEPER_EXPL'	=> 'Якщо увімкнено (за замовчуванням), сплячі користувачі (користувачі, які після активації облікового запису жодного разу не входили в систему) будуть включені до видалення.',
	'ACP_MOT_DIM_ENABLE_ZEROPOST'		=> 'Incorporate zeroposters',
	'ACP_MOT_DIM_ENABLE_ZEROPOST_EXPL'	=> 'If enabled (default) zeroposters (members who were logged in at least once but never have posted) will be incorporated into deletion.',
	'ACP_MOT_DIM_PROTECTED_USERS'		=> 'Захищені користувачі',
	'ACP_MOT_DIM_PROTECTED_USERS_EXPL'	=> 'Введіть імена користувачів, яких ви хочете захистити від видалення.<br>
											Щоб видалити користувача з цього списку, просто видаліть рядок з відповідним іменем користувача.<br><strong>Кожне ім\'я користувача ПОВИННО бути в окремому рядку!</strong>',
	'ACP_MOT_DIM_PROTECTED_GROUPS'		=> 'Захищені групи',
	'ACP_MOT_DIM_PROTECTED_GROUPS_EXPL'	=> 'Виберіть <strong>групу(и)</strong> за замовчуванням, членів якої потрібно захистити від нагадувань і видалення. Вже вибрані групи
											виділені.<br>Натиснувши і утримуючи клавішу "Ctrl", ви можете вибрати більше однієї групи, клацнувши відповідні назви.',
	'ACP_MOT_DIM_CHECK_RESULT'			=> 'Тестування',
	'ACP_MOT_DIM_CHECK_RESULT_EXPL'		=> 'Після натискання кнопки праворуч відкриється нове вікно, в якому відобразиться таблиця з усіма членами, які будуть видалені, якщо застосувати наведену вище конфігурацію. Таким чином, ви можете перевірити, чи дадуть вибрані налаштування бажаний результат, перш ніж увімкнути розширення.<br>Майте на увазі, що спочатку вам потрібно зберегти налаштування!',

	'ACP_MOT_DIM_CRON_SETTINGS'			=> 'Налаштування Cron',
	'ACP_MOT_DIM_CRON_INTERVAL'			=> 'Інтервал часу між двома запусками cron',
	'ACP_MOT_DIM_CRON_INTERVAL_EXPL'	=> 'Тут ви можете вибрати час між двома запусками завдання cron, у тому числі вибрати години або дні як одиницю виміру цього проміжку.',
	'MOT_DIM_UNIT_HOUR'					=> 'Година (години, годин)',
	'MOT_DIM_UNIT_DAY'					=> 'День (дні, днів)',
	'ACP_MOT_DIM_LAST_CRON_RUN'			=> 'Останній запуск cron',

	'ACP_MOT_DIM_SETTING_SAVED'			=> 'Налаштування для цього розширення успішно збережено.',

	'ACP_MOT_DIM_SUBMIT_CHANGES'		=> 'Надіслати зміни',
]);
