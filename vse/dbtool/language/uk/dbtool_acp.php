<?php
/**
*
* Database Optimize & Repair Tool [Russian]
* Translated by vovanchig@gmail.com, reviewed by Kot Matroskin (https://mindreader.hacktest.net/en/)
*
* @copyright (c) 2013 Matt Friedman
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
	'ACP_OPTIMIZE_REPAIR'			=> 'Оптимізувати й полагодити',
	'ACP_OPTIMIZE_REPAIR_EXPLAIN'	=> 'Тут ви можете провести обслуговування своїх таблиць у БД. Для великих баз це може зайняти кілька хвилин. Дія <strong>Оптимізувати</strong> дефрагментує базу і може поліпшити продуктивність. <strong>Виправити</strong> має використовуватися тільки якщо у вас є причина вважати, що у вашій базі є зіпсовані або биті таблиці. Примітка: <strong>InnoDB</strong> таблиці не підтримують виправлення.',
	'OPTIMIZE_REPAIR_OPTIONS'		=> 'Опції БД',
	'DISABLE_BOARD'					=> 'Вимкнути форум',
	'DISABLE_BOARD_EXPLAIN'			=> 'Ви можете вимкнути конференцію на час обслуговування. Конференцію буде ввімкнено після закінчення процесу.',
	'OPTIMIZE'			=> 'Оптимізувати',
	'OPTIMIZE_SUCCESS'	=> 'Оптимізацію обраних таблиць завершено.',
	'REPAIR'			=> 'Виправити',
	'REPAIR_SUCCESS'	=> 'Виправлення виконано.',
	'CHECK'				=> 'Перевірити',
	'CHECK_SUCCESS'		=> 'Перевірка завершена.<br />Якщо ви не побачили "OK" або "Table is already up to date", ви можете запустити виправлення таблиці.',
	'WARNING'			=> 'Увага',
	'WARNING_EXPLAIN'	=> 'Ця утиліта поставляється БЕЗ ГАРАНТІЇ і користувачі повинні створити резервну копію всієї своєї бази даних на випадок збою. Перед продовженням переконайтеся, що у вас є резервна копія бази даних!',
	'WARNING_MYSQL'		=> 'Ця функція працює тільки з базами даних MySQL.',
	'MARK_OVERHEAD'		=> 'Відзначити таблиці з оверхедом',
	'PROCESSING'		=> 'Обробка запиту... Зачекайте....',
	'TH_NAME'			=> 'Ім\'я таблиці',
	'TH_TYPE'			=> 'Тип',
	'TH_SIZE'			=> 'Розмір',
	'TH_TOTAL'			=> 'Всього',
	'TH_OVERHEAD'		=> 'Оверхед',
	'TABLE_ERROR'		=> 'Ви маєте вибрати хоча б одну таблицю.',
	'TABLE_EMPTY'		=> 'Цей механізм зберігання таблиць не підтримується.',
	'CLI_DBTOOL_EXPLAIN'	=> 'Перевірка, оптимізація та відновлення таблиць бази даних.',
	'CLI_DBTOOL_ARG_TABLE'	=> '[За бажанням] Ви можете вказати одну таблицю за назвою для виконання операції.',
	'CLI_DBTOOL_CONTINUE'	=> 'Бажаєте продовжити?',
	'CLI_DBTOOL_OPERATION'	=> 'Виберіть операцію для виконання',
	'CLI_DBTOOL_RESULTS'	=> '%s Результати',
	'CLI_DBTOOL_LOCK_ERROR'	=> 'Операція не може бути виконана, операція з базою даних вже виконується іншим процесом. Спробуйте ще раз через годину.',
));
