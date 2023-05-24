<?php
/**
*
* info_acp_find [Russian]
*
* @package phpBB Extension - StopForumSpam
* @copyright (c) 2015 Sheer
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACL_M_CHK_SFS'				=> 'Може перевіряти користувачів за базою SFS',
	'ACP_FIND_SPAMER'			=> 'Пошук спамерів',
	'ACP_FIND_SPAMER_EXPLAIN'	=> 'Тут ви можете серед користувачів знайти ймовірних спамерів, заблокувати їх (за ім'ям, IP-адресою та адресою e-mail) і видалити. Пошук здійснюється за IP-адресою, ім'ям користувача та адресою e-mail. Для пошуку використовується база даних ресурсу <a href="https://www.stopforumspam.com" target="_blank">www.stopforumspam.com</a>. ',

	'CHECK_EMAIL'	=> 'проверять e-mail',
	'CHECK_IP'		=> 'Запис про IP-адресу відсутній, але записи про ім\'я користувача та адресу e-mail виявлено.<br />Перевірте IP-адреси, з яких користувач залишав повідомлення, на сайті <a href = "https://www.stopforumspam.com" target="_blank">www.stopforumspam.com</a><br />Найімовірніше, що це спамер! ',
	'CHECK_NICK'	=> 'перевіряти ім\'я користувача',
	'CHK_FAIL_EXPLAIN'	=> 'Якщо рядок у списку виділено цим кольором, значить не вдалося отримати дані з сервера <a href = "https://www.stopforumspam.com" target = "_blank">stopforumspam.com</a>.',
	'CONFIRM_DELETE'=> 'Ви дійсно бажаєте видалити цих користувачів?',
	'DELETE_SELECTED'=>'Видалити відмічене',
	'EM_IS_FIND'	=> 'Знайдено запис про адресу e-mail або ім\'я користувача. <b>Можливо це спамер</b>! Клацніть мишкою на значок і проведіть повну перевірку.',
	'EM_NOT_FIND'	=> 'Запис про IP-адресу виявлено в базі даних <a href = "https://www.stopforumspam.com" target = "_blank">stopforumspam</a> або втрачено в базі даних конференції, але записів про адресу e-mail або ім\'я користувача не знайдено. Можливо це не спамер.  ',
	'EXEC_TIME'		=> 'Час пошуку на цій сторінці: %s секунд',
	'F_EXPLAIN'		=> 'Використовуйте в якості шаблону <b>*</b>, наприклад <b>*mail.ru</b> або <b>*.169.*.*</b>',
	'FILTER'		=> 'Фільтр',
	'FIND'			=> 'Запис виявлено.',
	'FULL_CHECK'	=> 'Провести повну перевірку користувача',
	'IS_FIND'		=> 'Знайдено запис про адресу e-mail та ім\'я користувача. <b>Це напевно спамер</b>!<br />Клацніть мишкою на значок і, якщо бажаєте, надішліть дані про користувача в базу даних <a href = "https://www.stopforumspam.com" target = "_blank">stopforumspam</a>.',
	'LIST_USERS'	=> 'Користувачів: %s',
	'NAME'			=> 'Нік',
	'NO_AUTH'		=> 'У вас немає прав для виконання цієї операції',
	'NO_POSTS_ONLY' => 'тільки серед тих, хто не залишив жодного повідомлення',
	'NONE_SELECTED'	=> 'Нічого не вибрано!',
	'NOT_FIND'		=> 'Користувачів за вказаний період і з цими умовами пошуку не виявлено.',
	'NOT_FULL_SEARCH'	=> 'Виявлено запис про IP-адресу. Підозрілий користувач. Увімкніть режими "<b>перевіряти e-mail"</b> та "<b>перевіряти ім\'я користувача</b>". Скористайтеся цими режимами так само в разі, якщо запис про IP було втрачено. Клацніть мишкою на значок і проведіть повну перевірку.',
	'ORDER'			=> 'Упорядкувати',
	'PER_ALL_TIME'	=> 'весь час',
	'PER_DAY'		=> 'день',
	'PER_MOUNTH'	=> 'місяць',
	'PER_WEEK'		=> 'тиждень',
	'PER_YEAR'		=> 'рік',
	'SAVE'			=> 'Зберегти',
	'SEARCH_OPTION'	=> 'Шукати за',
	'SELECT_SORT'	=> 'Поле сортування',
	'SORT_EMAIL'	=> 'Адреса e-mail',
	'SORT_IP'		=> 'IP-адреса',
	'SORT_POST'		=> 'Повідомлення',
	'SUCSESS_DELETE'=> 'Користувач(і) успішно видалений(і). Резервні копії зроблено.',
	'USER_CHK'		=> 'Записів у базі даних не виявлено, однак, якщо ви вважаєте, що це спамер, клікніть мишкою на значок, якщо бажаєте надіслати дані про користувача в базу даних <a href = "https://www.stopforumspam.com" target = "_blank">stopforumspam</a>.',
	'USER_EMAIL'	=> 'Адреса e-mail',
	'USER_NAME'		=> 'Ім\'я користувача',
	'UNACTIVE'		=> 'тільки серед неактивованих користувачів',
	'WARNING_MESSAGE'	=> '<h3>Будьте уважні, дія незворотна! </h3><p>Проте після виконання операції буде зроблено резервну копію для таблиці <b>users</b> для кожного окремо взятого користувача. Копії записуються в папку <c>store</c></p>',
));
