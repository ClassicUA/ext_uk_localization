<?php
/**
*
* Extension Manager Plus. An extension for the phpBB Forum Software package.
*
* @copyright (c) 2022, LukeWCS, https://www.wcsaga.org
* @license GNU General Public License, version 2 (GPL-2.0-only)
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
//
// Some characters you may want to copy&paste:
// ’ « » “ ” … „ “

$lang = array_merge($lang, array(
	// language pack author
	'EXTMGRPLUS_LANG_DESC'					=> 'Ukrainian',
	'EXTMGRPLUS_LANG_VER' 					=> '1.1.0',
	'EXTMGRPLUS_LANG_AUTHOR'	 			=> 'Oleksii Lysenko (Classic)',

	// settings
	'EXTMGRPLUS_SECTION_SETTINGS'			=> 'Налаштування (Plus)',
	'EXTMGRPLUS_LOG'						=> 'Запис у журналі',
	'EXTMGRPLUS_LOG_EXPLAIN'				=> 'Тут ви можете вказати, чи потрібно додавати запис до журналу адміністратора для дій "Увімкнути вибране" та "Вимкнути вибране".',
	'EXTMGRPLUS_CONFIRMATION'				=> 'Підтвердження',
	'EXTMGRPLUS_CONFIRMATION_EXPLAIN'		=> 'Тут ви можете вказати, чи потрібно запитувати та підтверджувати дії "Увімкнути вибране" та "Вимкнути вибране".',
	'EXTMGRPLUS_CHECKBOX_MODE'				=> 'Встановіть прапорці',
	'EXTMGRPLUS_CHECKBOX_MODE_EXPLAIN'		=> 'Якщо ви виберете "Встановити всі", всі прапорці будуть встановлені автоматично. Якщо ви виберете "Запам\'ятати останній стан", стан усіх прапорців буде збережено при виконанні дії "Увімкнути вибране" або "Вимкнути вибране". Крім того, стан усіх прапорців також можна зберегти за допомогою посилання "%s Зберегти".',
	'EXTMGRPLUS_CHECKBOX_MODE_OFF'			=> 'Вимкнути',
	'EXTMGRPLUS_CHECKBOX_MODE_ALL'			=> 'Встановити всі',
	'EXTMGRPLUS_CHECKBOX_MODE_LAST'			=> 'Remember last state',
	'EXTMGRPLUS_ORDER_AND_IGNORE'			=> 'Order and Ignore',
	'EXTMGRPLUS_ORDER_AND_IGNORE_EXPLAIN'	=> 'Якщо ви увімкнете цю опцію, дія "Увімкнути вибране" буде стосуватися групи замовлень, а дії "Увімкнути вибране" і "Вимкнути вибране" - властивості "Ігнорувати".',
	'EXTMGRPLUS_SELF_DISABLE'				=> 'Дозволити самодеактивацію',
	'EXTMGRPLUS_SELF_DISABLE_EXPLAIN'		=> 'Якщо ви ввімкнете цю опцію, "Extension Manager Plus" також зможе деактивувати себе в дії "Вимкнути вибране", оскільки це розширення можна буде вибрати, як і будь-яке інше.',

	// settings expert
	'EXTMGRPLUS_SECTION_EXPERT_SETTINGS'	=> 'Експертні налаштування',
	'EXTMGRPLUS_MIGRATION_COL'				=> 'Показати стовпчик з новими міграціями',
	'EXTMGRPLUS_MIGRATION_COL_EXPLAIN'		=> 'Якщо ця опція увімкнена, то відображається додатковий стовпчик, в якому вказано кількість нових міграцій. Кількість відображається як для "Відключених розширень", так і для "Не встановлених розширень".',
	'EXTMGRPLUS_MIGRATIONS'					=> 'Дозволити розширення з новими міграціями',
	'EXTMGRPLUS_MIGRATIONS_EXPLAIN'			=> 'Якщо цю опцію увімкнено, ви також можете активувати ті розширення, для яких є нові міграції, за допомогою дії "Увімкнути вибране". Це стосується оновлених розширень, які містять папку "migrations". Без цієї опції такі розширення потрібно активувати вручну, що рекомендується.',

	// settings reset
	'EXTMGRPLUS_SECTION_RESET'				=> 'Скидання',
	'EXTMGRPLUS_DEFAULTS'					=> 'Скидання налаштувань',
	'EXTMGRPLUS_DEFAULTS_EXP'				=> 'Повертає всі налаштування до стандартних. (Не впливає на "Порядок" та "Ігнорувати стовпці").',
	'EXTMGRPLUS_BUTTON_DEFAULTS'			=> 'За замовчуванням',

	// settings order and ignore
	'EXTMGRPLUS_ORDER'						=> 'Порядок',
	'EXTMGRPLUS_ORDER_EXPLAIN'				=> '%s У цьому стовпчику ви можете визначити групи замовлень у діапазоні від 0 до 99 для дії "Увімкнути вибрані". Це дозволяє активувати розширення, від яких залежать інші розширення, перед ними, щоб уникнути повідомлень про помилки. Першими активуються номери, що належать до такої групи, починаючи з групи 0, потім групи 1 і так далі. Нарешті, в останню чергу активуються ті, що не належать до групи.',
	'EXTMGRPLUS_IGNORE'						=> 'Ігнорувати.',
	'EXTMGRPLUS_IGNORE_EXPLAIN'				=> '%s У цій колонці ви можете вказати, які розширення слід ігнорувати під час дій "Увімкнути вибране" та "Вимкнути вибране". Ігноровані внутрішні номери більше не можуть бути обрані у списку номерів. Якщо для ігнорованого внутрішнього номера була визначена група замовлень, то вона зберігається, але більше не має ніякого значення.',
	'EXTMGRPLUS_ORDER_AND_IGNORE_SAVE'		=> 'Зберегти',

	// info table
	'EXTMGRPLUS_AVAILABLE_EXTENSIONS'		=> 'Всього розширень',
	'EXTMGRPLUS_LAST_VERSIONCHECK'			=> 'Остання перевірка версії',
	'EXTMGRPLUS_AVAILABLE_UPDATES'			=> 'Доступні оновлення',

	// ext manager
	'EXTMGRPLUS_ALL_DISABLE'				=> 'Вимкнути вибране',
	'EXTMGRPLUS_ALL_ENABLE'					=> 'Увімкнути вибране',
	'EXTMGRPLUS_EXTENSIONS_NOT_INSTALLED'	=> 'Not installed Extensions',

	// tooltips
	'EXTMGRPLUS_TOOLTIP_HAS_MIGRATION'		=> 'Це розширення має нові міграції, які застосовуються при активації розширення.',
	'EXTMGRPLUS_TOOLTIP_BUTTON_DISABLE'		=> 'Вимкнути всі вибрані розширення.',
	'EXTMGRPLUS_TOOLTIP_BUTTON_ENABLE'		=> 'Увімкнути всі вибрані розширення.',
	'EXTMGRPLUS_TOOLTIP_ORDER'				=> 'Група порядку в діапазоні 0-99.',
	'EXTMGRPLUS_TOOLTIP_IGNORE'				=> 'Ігнорувати розширення.',
	'EXTMGRPLUS_TOOLTIP_SELECT_ALL'			=> 'Виберіть або скасуйте всі розширення.',
	'EXTMGRPLUS_TOOLTIP_SELECT'				=> 'Виберіть розширення.',

	// columns
	'EXTMGRPLUS_COL_MIGRATIONS'				=> 'Нові міграції',
	'EXTMGRPLUS_COL_SELECT'					=> 'Виберіть',
	'EXTMGRPLUS_COL_ORDER'					=> 'Порядок',
	'EXTMGRPLUS_COL_IGNORE'					=> 'Ігнорувати.',

	// misc
	'EXTMGRPLUS_LINK_ORDER_AND_IGNORE'		=> 'Order & Ignore',
	'EXTMGRPLUS_LINK_SAVE_CHECKBOXES'		=> 'Зберегти',
	'EXTMGRPLUS_EXTENSION_PLURAL'			=> [
											0 => '0 розширень',
											1 => '1 розширення',
											2 => '%u розширень',
	],

	// messages
	'EXTMGRPLUS_MSG_CONFIRM_DISABLE'		=> 'Ви впевнені, що хочете вимкнути %s?',
	'EXTMGRPLUS_MSG_CONFIRM_ENABLE'			=> 'Ви впевнені, що хочете увімкнути %s?',
	'EXTMGRPLUS_MSG_CONFIRM_MIGRATIONS'		=> 'Ви впевнені, що хочете дозволити активацію розширень з новими міграціями?',
	'EXTMGRPLUS_MSG_SETTINGS_SAVED'			=> 'ExtMgrPlus: налаштування успішно збережено',
	'EXTMGRPLUS_MSG_ORDER_AND_IGNORE_SAVED'	=> 'ExtMgrPlus: Впорядкування та ігнорування стовпчиків успішно збережено',
	'EXTMGRPLUS_MSG_CHECKBOXES_SAVED'		=> 'ExtMgrPlus: Вибір прапорців успішно збережено',
	'EXTMGRPLUS_MSG_PROCESS_ABORTED'		=> 'ExtMgrPlus: Операція "%s" була перервана наступним розширенням:',
	'EXTMGRPLUS_MSG_DEACTIVATION'			=> 'ExtMgrPlus: %1$u of %2$u enabled extensions have been disabled.',
	'EXTMGRPLUS_MSG_ACTIVATION'				=> 'ExtMgrPlus: %1$u of %2$u disabled extensions have been enabled.',
	'EXTMGRPLUS_MSG_ACTIVATION_FAILED'		=> 'Наступні розширення не вдалося активувати:',
	'EXTMGRPLUS_MSG_SAFE_TIME_EXCEEDED'		=> 'Допустимий діапазон (%u секунд) максимального часу виконання PHP перевищено.',
	'EXTMGRPLUS_MSG_LANGUAGEPACK_OUTDATED'	=> 'Примітка: Мовний пакет для розширення <strong>%1$s</strong> більше не є актуальним. (встановлено: %2$s / потрібно: %3$s)',
	'EXTMGRPLUS_MSG_SELF_DISABLE'			=> 'Примітка: Розширення "Extension Manager Plus" також буде вимкнено.',
));
