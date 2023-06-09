<?php

/**
*
* @package BB3ForumLogSettings
* @copyright (c) 2023 PPK
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
	'ACP_BB3FORUMLOGSETTINGS' => 'BB3ForumLogSettings',

	'ACP_BB3FORUMLOGSETTINGS_CONFIG' => 'Настройки',
	'ACP_BB3FORUMLOGSETTINGS_CONFIG_EXPLAIN' => 'Настройки BB3ForumLogSettings',

	'ACP_BB3FORUMLOGSETTINGS_GLOBAL' => 'Глобальные настройки логов',
	'ACP_BB3FORUMLOGSETTINGS_ADMIN' => 'Настройки лога администраторов',
	'ACP_BB3FORUMLOGSETTINGS_MOD' => 'Настройки лога модераторов',
	'ACP_BB3FORUMLOGSETTINGS_USER' => 'Настройки лога пользователей',
	'ACP_BB3FORUMLOGSETTINGS_CRITICAL' => 'Настройки лога ошибок',

	'BB3FORUMLOGSETTINGS_GLOBAL_ADMIN' => 'Лог администраторов',
	'BB3FORUMLOGSETTINGS_GLOBAL_ADMIN_EXPLAIN' => 'Включить глобально все события лога администраторов, при выборе "Да" или "Нет" данная опция глобально действует на все события которые указаны ниже в соответствующем блоке, при выборе "Использовать настройки расширения" будут действовать настройки соответствующего блока для каждого события отдельно',
	'BB3FORUMLOGSETTINGS_GLOBAL_ADMIN_OTHER' => 'Другие события лога администраторов',
	'BB3FORUMLOGSETTINGS_GLOBAL_ADMIN_OTHER_EXPLAIN' => 'Включить события лога администраторов которых нет в соответствующем блоке ниже (например события лога какого-либо расширения)',
	'BB3FORUMLOGSETTINGS_GLOBAL_MOD' => 'Лог модераторов',
	'BB3FORUMLOGSETTINGS_GLOBAL_MOD_EXPLAIN' => 'Включить глобально все события лога модераторов, при выборе "Да" или "Нет" данная опция глобально действует на все события которые указаны ниже в соответствующем блоке, при выборе "Использовать настройки расширения" будут действовать настройки соответствующего блока для каждого события отдельно',
	'BB3FORUMLOGSETTINGS_GLOBAL_MOD_OTHER' => 'Другие события лога модераторов',
	'BB3FORUMLOGSETTINGS_GLOBAL_MOD_OTHER_EXPLAIN' => 'Включить события лога модераторов которых нет в соответствующем блоке ниже (например события лога какого-либо расширения)',
	'BB3FORUMLOGSETTINGS_GLOBAL_USER' => 'Лог пользователей',
	'BB3FORUMLOGSETTINGS_GLOBAL_USER_EXPLAIN' => 'Включить глобально все события лога пользователей, при выборе "Да" или "Нет" данная опция глобально действует на все события которые указаны ниже в соответствующем блоке, при выборе "Использовать настройки расширения" будут действовать настройки соответствующего блока для каждого события отдельно',
	'BB3FORUMLOGSETTINGS_GLOBAL_USER_OTHER' => 'Другие события лога пользователей',
	'BB3FORUMLOGSETTINGS_GLOBAL_USER_OTHER_EXPLAIN' => 'Включить события лога пользователей которых нет в соответствующем блоке ниже (например события лога какого-либо расширения)',
	'BB3FORUMLOGSETTINGS_GLOBAL_CRITICAL' => 'Лог ошибок',
	'BB3FORUMLOGSETTINGS_GLOBAL_CRITICAL_EXPLAIN' => 'Включить глобально все события лога ошибок, при выборе "Да" или "Нет" данная опция глобально действует на все события которые указаны ниже в соответствующем блоке, при выборе "Использовать настройки расширения" будут действовать настройки соответствующего блока для каждого события отдельно',
	'BB3FORUMLOGSETTINGS_GLOBAL_CRITICAL_OTHER' => 'Другие события лога ошибок',
	'BB3FORUMLOGSETTINGS_GLOBAL_CRITICAL_OTHER_EXPLAIN' => 'Включить события лога ошибок которых нет в соответствующем блоке ниже (например события лога какого-либо расширения)',

	'BB3FLS_LOG_ACL_ADD_ADMIN_GLOBAL_A_' => '<strong>Добавлены или изменены администраторы</strong><br />» %s',
	'BB3FLS_LOG_ACL_ADD_FORUM_LOCAL_F_' => '<strong>Добавлен или изменён доступ к форуму</strong> для %1$s<br />» %2$s',
	'BB3FLS_LOG_ACL_ADD_GROUP_GLOBAL_A_' => '<strong>Добавлены или изменены администраторские права групп</strong><br />» %s',
	'BB3FLS_LOG_ACL_ADD_GROUP_GLOBAL_M_' => '<strong>Добавлены или изменены супермодераторские права групп</strong><br />» %s',
	'BB3FLS_LOG_ACL_ADD_GROUP_GLOBAL_U_' => '<strong>Добавлены или изменены пользовательские права групп</strong><br />» %s',
	'BB3FLS_LOG_ACL_ADD_GROUP_LOCAL_F_' => '<strong>Добавлен или изменён доступ групп к форуму</strong> из %1$s<br />» %2$s',
	'BB3FLS_LOG_ACL_ADD_GROUP_LOCAL_M_' => '<strong>Добавлен или изменён модераторский доступ групп к форуму</strong> из %1$s<br />» %2$s',
	'BB3FLS_LOG_ACL_ADD_MOD_GLOBAL_M_' => '<strong>Добавлены или изменены супермодераторы</strong><br />» %s',
	'BB3FLS_LOG_ACL_ADD_MOD_LOCAL_M_' => '<strong>Добавлены или изменены модераторы</strong> для %1$s<br />» %2$s',
	'BB3FLS_LOG_ACL_ADD_USER_GLOBAL_A_' => '<strong>Добавлены или изменены администраторские права пользователей</strong><br />» %s',
	'BB3FLS_LOG_ACL_ADD_USER_GLOBAL_M_' => '<strong>Добавлены или изменены супермодераторские права пользователей</strong><br />» %s',
	'BB3FLS_LOG_ACL_ADD_USER_GLOBAL_U_' => '<strong>Добавлены или изменены пользовательские права пользователей</strong><br />» %s',
	'BB3FLS_LOG_ACL_ADD_USER_LOCAL_F_' => '<strong>Добавлен или изменён доступ пользователей к форуму</strong> из %1$s<br />» %2$s',
	'BB3FLS_LOG_ACL_ADD_USER_LOCAL_M_' => '<strong>Добавлен или изменён доступ модератора к форуму</strong> из %1$s<br />» %2$s',
	'BB3FLS_LOG_ACL_DEL_ADMIN_GLOBAL_A_' => '<strong>Удалены администраторы</strong><br />» %s',
	'BB3FLS_LOG_ACL_DEL_FORUM_LOCAL_F_' => '<strong>Удалён доступ пользователя/группы к форуму</strong> из %1$s<br />» %2$s',
	'BB3FLS_LOG_ACL_DEL_MOD_GLOBAL_M_' => '<strong>Удалены супермодераторы</strong><br />» %s',
	'BB3FLS_LOG_ACL_DEL_MOD_LOCAL_M_' => '<strong>Удалены модераторы</strong> из %1$s<br />» %2$s',
	'BB3FLS_LOG_ACL_RESTORE_PERMISSIONS' => '<strong>Возвращены свои права доступа после использования прав пользователя</strong><br />» %s',
	'BB3FLS_LOG_ACL_TRANSFER_PERMISSIONS' => '<strong>Перенесены права доступа пользователя</strong><br />» %s',
	'BB3FLS_LOG_ADMIN_AUTH_FAIL' => '<strong>Неудачная попытка входа в качестве администратора</strong>',
	'BB3FLS_LOG_ADMIN_AUTH_SUCCESS' => '<strong>Успешный вход в качестве администратора</strong>',
	'BB3FLS_LOG_APPROVE_TOPIC' => '<strong>Одобрена тема</strong><br />» %s',
	'BB3FLS_LOG_ATTACHMENTS_DELETED' => '<strong>Удалены вложения пользователя</strong><br />» %s',
	'BB3FLS_LOG_ATTACH_EXTGROUP_ADD' => '<strong>Добавлена группа расширений</strong><br />» %s',
	'BB3FLS_LOG_ATTACH_EXTGROUP_DEL' => '<strong>Удалена группа расширений</strong><br />» %s',
	'BB3FLS_LOG_ATTACH_EXTGROUP_EDIT' => '<strong>Изменена группа расширений</strong><br />» %s',
	'BB3FLS_LOG_ATTACH_EXT_ADD' => '<strong>Добавлено или изменено расширение вложений</strong><br />» %s',
	'BB3FLS_LOG_ATTACH_EXT_DEL' => '<strong>Удалено расширение вложений</strong><br />» %s',
	'BB3FLS_LOG_ATTACH_EXT_UPDATE' => '<strong>Обновлено расширение вложений</strong><br />» %s',
	'BB3FLS_LOG_ATTACH_FILEUPLOAD' => '<strong>Невложенный файл прикреплён к сообщению</strong><br />» ID %1$d — %2$s',
	'BB3FLS_LOG_ATTACH_ORPHAN_DEL' => '<strong>Невложенные файлы удалены</strong><br />» %s',
	'BB3FLS_LOG_AUTO_PRUNE' => '<strong>Произведена автоочистка форумов</strong><br />» %s',
	'BB3FLS_LOG_A_ROLE_ADD' => '<strong>Добавлена администраторская роль</strong><br />» %s',
	'BB3FLS_LOG_A_ROLE_EDIT' => '<strong>Изменена администраторская роль</strong><br />» %s',
	'BB3FLS_LOG_A_ROLE_REMOVED' => '<strong>Удалена администраторская роль</strong><br />» %s',
	'BB3FLS_LOG_BAN_EMAIL' => '<strong>Заблокирован email-адрес</strong> по причине "<em>%1$s</em>"<br />» %2$s',
	'BB3FLS_LOG_BAN_EXCLUDE_EMAIL' => '<strong>Исключён email-адрес из списка заблокированных</strong> по причине "<em>%1$s</em>"<br />» %2$s ',
	'BB3FLS_LOG_BAN_EXCLUDE_IP' => '<strong>Исключён IP-адрес из списка заблокированных</strong> по причине "<em>%1$s</em>"<br />» %2$s ',
	'BB3FLS_LOG_BAN_EXCLUDE_USER' => '<strong>Исключён пользователь из списка заблокированных</strong> по причине "<em>%1$s</em>"<br />» %2$s ',
	'BB3FLS_LOG_BAN_IP' => '<strong>Заблокирован IP-адрес</strong> по причине "<em>%1$s</em>"<br />» %2$s',
	'BB3FLS_LOG_BAN_USER' => '<strong>Заблокирован пользователь</strong> по причине "<em>%1$s</em>"<br />» %2$s ',
	'BB3FLS_LOG_BBCODE_ADD' => '<strong>Добавлен новый BBCode</strong><br />» %s',
	'BB3FLS_LOG_BBCODE_CONFIGURATION_ERROR' => '<strong>Ошибка при настройке BBCode</strong>: %1$s<br />» %2$s',
	'BB3FLS_LOG_BBCODE_DELETE' => '<strong>Удалён BBCode</strong><br />» %s',
	'BB3FLS_LOG_BBCODE_EDIT' => '<strong>Изменён BBCode</strong><br />» %s',
	'BB3FLS_LOG_BOT_ADDED' => '<strong>Добавлен новый бот</strong><br />» %s',
	'BB3FLS_LOG_BOT_DELETE' => '<strong>Удалён бот</strong><br />» %s',
	'BB3FLS_LOG_BOT_UPDATED' => '<strong>Обновлён существующий бот</strong><br />» %s',
	'BB3FLS_LOG_BUMP_TOPIC' => '<strong>Поднята тема</strong><br />» %s',
	'BB3FLS_LOG_CLEAR_ADMIN' => '<strong>Очищен лог администратора</strong>',
	'BB3FLS_LOG_CLEAR_CRITICAL' => '<strong>Очищен лог ошибок</strong>',
	'BB3FLS_LOG_CLEAR_MOD' => '<strong>Очищен лог модератора</strong>',
	'BB3FLS_LOG_CLEAR_USER' => '<strong>Очищен лог пользователя</strong><br />» %s',
	'BB3FLS_LOG_CLEAR_USERS' => '<strong>Очищены логи пользователей</strong>',
	'BB3FLS_LOG_CONFIG_ATTACH' => '<strong>Изменены настройки вложений</strong>',
	'BB3FLS_LOG_CONFIG_AUTH' => '<strong>Изменены настройки аутентификации</strong>',
	'BB3FLS_LOG_CONFIG_AVATAR' => '<strong>Изменены настройки аватар</strong>',
	'BB3FLS_LOG_CONFIG_COOKIE' => '<strong>Изменены настройки cookies</strong>',
	'BB3FLS_LOG_CONFIG_EMAIL' => '<strong>Изменены настройки почты</strong>',
	'BB3FLS_LOG_CONFIG_FEATURES' => '<strong>Изменены возможности конференции</strong>',
	'BB3FLS_LOG_CONFIG_FEED' => '<strong>Изменены настройки каналов новостей</strong>',
	'BB3FLS_LOG_CONFIG_LOAD' => '<strong>Изменены настройки нагрузки на сервер</strong>',
	'BB3FLS_LOG_CONFIG_MESSAGE' => '<strong>Изменены настройки личных сообщений</strong>',
	'BB3FLS_LOG_CONFIG_POST' => '<strong>Изменены настройки сообщений</strong>',
	'BB3FLS_LOG_CONFIG_REGISTRATION' => '<strong>Изменены настройки регистрации пользователей</strong>',
	'BB3FLS_LOG_CONFIG_SEARCH' => '<strong>Изменены настройки поиска</strong>',
	'BB3FLS_LOG_CONFIG_SECURITY' => '<strong>Изменены настройки безопасности</strong>',
	'BB3FLS_LOG_CONFIG_SERVER' => '<strong>Изменены настройки сервера</strong>',
	'BB3FLS_LOG_CONFIG_SETTINGS' => '<strong>Изменены настройки конференции</strong>',
	'BB3FLS_LOG_CONFIG_SIGNATURE' => '<strong>Изменены настройки подписей</strong>',
	'BB3FLS_LOG_CONFIG_VISUAL' => '<strong>Изменены настройки средств против спам-ботов</strong>',
	'BB3FLS_LOG_DB_BACKUP' => '<strong>Резервное копирование базы данных</strong>',
	'BB3FLS_LOG_DB_DELETE' => '<strong>Удаление резервной копии базы данных</strong>',
	'BB3FLS_LOG_DB_RESTORE' => '<strong>Восстановление базы данных</strong>',
	'BB3FLS_LOG_DELETE_POST' => '<strong>Удалено сообщение «%1$s», созданное пользователем «%2$s», по причине</strong><br />» %3$s',
	'BB3FLS_LOG_DELETE_SHADOW_TOPIC' => '<strong>Удалена ссылка на перенесённую тему</strong><br />» %s',
	'BB3FLS_LOG_DELETE_TOPIC' => '<strong>Удалена тема «%1$s», созданная пользователем «%2$s», по причине</strong><br />» %3$s',
	'BB3FLS_LOG_DISALLOW_ADD' => '<strong>Запрещено имя</strong><br />» %s',
	'BB3FLS_LOG_DISALLOW_DELETE' => '<strong>Разрешено имя</strong>',
	'BB3FLS_LOG_DOWNLOAD_EXCLUDE_IP' => '<strong>Исключён IP-адрес/хост из списка скачивания</strong><br />» %s',
	'BB3FLS_LOG_DOWNLOAD_IP' => '<strong>Добавлен IP-адрес/хост в список скачивания</strong><br />» %s',
	'BB3FLS_LOG_DOWNLOAD_REMOVE_IP' => '<strong>Удалён IP-адрес/хост из списка скачивания</strong><br />» %s',
	'BB3FLS_LOG_ERROR_CAPTCHA' => '<strong>Ошибка CAPTCHA</strong><br />» %s',
	'BB3FLS_LOG_ERROR_EMAIL' => '<strong>Ошибка почты</strong><br />» %s',
	'BB3FLS_LOG_ERROR_JABBER' => '<strong>Ошибка Jabber</strong><br />» %s',
	'BB3FLS_LOG_EXT_DISABLE' => '<strong>Расширение отключено</strong><br />» %s',
	'BB3FLS_LOG_EXT_ENABLE' => '<strong>Расширение включено</strong><br />» %s',
	'BB3FLS_LOG_EXT_PURGE' => '<strong>Удалены данные расширения</strong><br />» %s',
	'BB3FLS_LOG_EXT_UPDATE' => '<strong>Расширение обновлено</strong><br />» %s',
	'BB3FLS_LOG_FORK' => '<strong>Скопирована тема</strong><br />» из форума %s',
	'BB3FLS_LOG_FORUM_ADD' => '<strong>Создан форум</strong><br />» %s',
	'BB3FLS_LOG_FORUM_COPIED_PERMISSIONS' => '<strong>Скопированы права доступа</strong> из форума «%1$s» в форум<br />» %2$s',
	'BB3FLS_LOG_FORUM_DEL_FORUM' => '<strong>Удалён форум</strong><br />» %s',
	'BB3FLS_LOG_FORUM_DEL_FORUMS' => '<strong>Удалён форум с подфорумами</strong><br />» %s',
	'BB3FLS_LOG_FORUM_DEL_MOVE_FORUMS' => '<strong>Удалён форум и перемещены подфорумы</strong> в %1$s<br />» %2$s',
	'BB3FLS_LOG_FORUM_DEL_MOVE_POSTS' => '<strong>Удалён форум и перемещены сообщения</strong> в %1$s<br />» %2$s',
	'BB3FLS_LOG_FORUM_DEL_MOVE_POSTS_FORUMS' => '<strong>Удалён форум с подфорумами, перемещены сообщения</strong> в %1$s<br />» %2$s',
	'BB3FLS_LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS' => '<strong>Удалён форум, перемещены сообщения</strong> в %1$s <strong>и подфорумы</strong> в %2$s<br />» %3$s',
	'BB3FLS_LOG_FORUM_DEL_POSTS' => '<strong>Удалён форум с сообщениями</strong><br />» %s',
	'BB3FLS_LOG_FORUM_DEL_POSTS_FORUMS' => '<strong>Удалён форум с сообщениями и подфорумами</strong><br />» %s',
	'BB3FLS_LOG_FORUM_DEL_POSTS_MOVE_FORUMS' => '<strong>Удалён форум с сообщениями, перемещены подфорумы</strong> в %1$s<br />» %2$s',
	'BB3FLS_LOG_FORUM_EDIT' => '<strong>Изменена информация о форуме</strong><br />» %s',
	'BB3FLS_LOG_FORUM_MOVE_DOWN' => '<strong>Перемещён форум</strong> %1$s <strong>под</strong> %2$s',
	'BB3FLS_LOG_FORUM_MOVE_UP' => '<strong>Перемещён форум</strong> %1$s <strong>над</strong> %2$s',
	'BB3FLS_LOG_FORUM_SYNC' => '<strong>Синхронизирован форум</strong><br />» %s',
	'BB3FLS_LOG_F_ROLE_ADD' => '<strong>Добавлена форумная роль</strong><br />» %s',
	'BB3FLS_LOG_F_ROLE_EDIT' => '<strong>Изменена форумная роль</strong><br />» %s',
	'BB3FLS_LOG_F_ROLE_REMOVED' => '<strong>Удалена форумная роль</strong><br />» %s',
	'BB3FLS_LOG_GENERAL_ERROR' => '<strong>Произошла общая ошибка:</strong> %1$s <br />» %2$s',
	'BB3FLS_LOG_GROUP_CREATED' => '<strong>Создана группа пользователей</strong><br />» %s',
	'BB3FLS_LOG_GROUP_DEFAULTS' => '<strong>Группа “%1$s” установлена по умолчанию для пользователей</strong><br />» %2$s',
	'BB3FLS_LOG_GROUP_DELETE' => '<strong>Удалена группа</strong><br />» %s',
	'BB3FLS_LOG_GROUP_DEMOTED' => '<strong>Сняты лидеры в группе</strong> %1$s<br />» %2$s',
	'BB3FLS_LOG_GROUP_PROMOTED' => '<strong>Назначены лидеры в группе</strong> %1$s<br />» %2$s',
	'BB3FLS_LOG_GROUP_REMOVE' => '<strong>Удалены пользователи из группы</strong> %1$s<br />» %2$s',
	'BB3FLS_LOG_GROUP_UPDATED' => '<strong>Обновлена информация о группе</strong><br />» %s',
	'BB3FLS_LOG_IMAGE_GENERATION_ERROR' => '<strong>Ошибка при создании изображения</strong><br />» Ошибка в %1$s в строке %2$s: %3$s',
	'BB3FLS_LOG_INACTIVE_ACTIVATE' => '<strong>Активированы пользователи</strong><br />» %s',
	'BB3FLS_LOG_INACTIVE_DELETE' => '<strong>Удалены неактивированные пользователи</strong><br />» %s',
	'BB3FLS_LOG_INACTIVE_REMIND' => '<strong>Отправлены email-напоминания неактивированным пользователям</strong><br />» %s',
	'BB3FLS_LOG_INSTALL_CONVERTED' => '<strong>Конференция %1$s сконвертирована в phpBB %2$s</strong>',
	'BB3FLS_LOG_INSTALL_INSTALLED' => '<strong>Установлен phpBB %s</strong>',
	'BB3FLS_LOG_IP_BROWSER_FORWARDED_CHECK' => '<strong>Неудачная проверка сессии по IP-адресу/браузеру/X_FORWARDED_FOR</strong><br />»IP-адрес пользователя "<em>%1$s</em>" проверен по IP-адресу сессии "<em>%2$s</em>", строка браузера пользователя "<em>%3$s</em>" проверена по строке браузера сессии "<em>%4$s</em>" и строка X_FORWARDED_FOR пользователя "<em>%5$s</em>" проверена по строке X_FORWARDED_FOR сессии "<em>%6$s</em>".',
	'BB3FLS_LOG_JAB_CHANGED' => '<strong>Изменена учётная запись Jabber</strong>',
	'BB3FLS_LOG_JAB_PASSCHG' => '<strong>Изменён пароль Jabber</strong>',
	'BB3FLS_LOG_JAB_REGISTER' => '<strong>Зарегистрирована учётная запись Jabber</strong>',
	'BB3FLS_LOG_JAB_SETTINGS_CHANGED' => '<strong>Изменены настройки Jabber</strong>',
	'BB3FLS_LOG_LANGUAGE_FILE_REPLACED' => '<strong>Заменён языковой файл</strong><br />» %s',
	'BB3FLS_LOG_LANGUAGE_FILE_SUBMITTED' => '<strong>Отправлен языковой файл и помещён в папку store</strong><br />» %s',
	'BB3FLS_LOG_LANGUAGE_PACK_DELETED' => '<strong>Удалён языковой пакет</strong><br />» %s',
	'BB3FLS_LOG_LANGUAGE_PACK_INSTALLED' => '<strong>Установлен языковой пакет</strong><br />» %s',
	'BB3FLS_LOG_LANGUAGE_PACK_UPDATED' => '<strong>Обновлена информация о языковом пакете</strong><br />» %s',
	'BB3FLS_LOG_LOCK' => '<strong>Закрыта тема</strong><br />» %s',
	'BB3FLS_LOG_LOCK_POST' => '<strong>Заблокировано сообщение</strong><br />» %s',
	'BB3FLS_LOG_MASS_EMAIL' => '<strong>Произведена массовая рассылка почты</strong><br />» %s',
	'BB3FLS_LOG_MCP_CHANGE_POSTER' => '<strong>Изменён автор темы "%1$s"</strong><br />» с %2$s на %3$s',
	'BB3FLS_LOG_MERGE' => '<strong>Объединены сообщения</strong> в тему<br />» %s',
	'BB3FLS_LOG_MODS_ADDED' => '<strong>Добавлены новые лидеры в группу</strong> %1$s<br />» %2$s',
	'BB3FLS_LOG_MODULE_ADD' => '<strong>Добавлен модуль</strong><br />» %s',
	'BB3FLS_LOG_MODULE_DISABLE' => '<strong>Отключён модуль</strong><br />» %s',
	'BB3FLS_LOG_MODULE_EDIT' => '<strong>Изменён модуль</strong><br />» %s',
	'BB3FLS_LOG_MODULE_ENABLE' => '<strong>Включён модуль</strong><br />» %s',
	'BB3FLS_LOG_MODULE_MOVE_DOWN' => '<strong>Перемещение модуля</strong><br />» «%1$s» под «%2$s»',
	'BB3FLS_LOG_MODULE_MOVE_UP' => '<strong>Перемещение модуля</strong><br />» «%1$s» над «%2$s»',
	'BB3FLS_LOG_MODULE_REMOVED' => '<strong>Удалён модуль</strong><br />» %s',
	'BB3FLS_LOG_MOVE' => '<strong>Перемещена тема</strong><br />» из %1$s в %2$s',
	'BB3FLS_LOG_MOVED_TOPIC' => '<strong>Перемещена тема</strong><br />» %s',
	'BB3FLS_LOG_M_ROLE_ADD' => '<strong>Добавлена модераторская роль</strong><br />» %s',
	'BB3FLS_LOG_M_ROLE_EDIT' => '<strong>Изменена модераторская роль</strong><br />» %s',
	'BB3FLS_LOG_M_ROLE_REMOVED' => '<strong>Удалена модераторская роль</strong><br />» %s',
	'BB3FLS_LOG_PLUPLOAD_TIDY_FAILED' => '<strong>Невозможно открыть %1$s для очистки, проверьте права доступа.</strong><br />Исключение: %2$s<br />Дополнительные сведения: %3$s',
	'BB3FLS_LOG_PM_REPORT_CLOSED' => '<strong>Закрыта жалоба на личное сообщение</strong><br />» %s',
	'BB3FLS_LOG_PM_REPORT_DELETED' => '<strong>Удалена жалоба на личное сообщение</strong><br />» %s',
	'BB3FLS_LOG_POST_APPROVED' => '<strong>Одобрение сообщения</strong><br />» %s',
	'BB3FLS_LOG_POST_DISAPPROVED' => '<strong>Отклонение сообщения «%1$s» автора «%3$s» по причине</strong><br />» %2$s',
	'BB3FLS_LOG_POST_EDITED' => '<strong>Редактирование сообщения в теме «%1$s», созданного пользователем «%2$s», по причине</strong><br />» %3$s',
	'BB3FLS_LOG_POST_RESTORED' => '<strong>Восстановлено сообщение</strong><br />» %s',
	'BB3FLS_LOG_PROFILE_FIELD_ACTIVATE' => '<strong>Активировано поле профиля</strong><br />» %s',
	'BB3FLS_LOG_PROFILE_FIELD_CREATE' => '<strong>Добавлено поле профиля</strong><br />» %s',
	'BB3FLS_LOG_PROFILE_FIELD_DEACTIVATE' => '<strong>Деактивировано поле профиля</strong><br />» %s',
	'BB3FLS_LOG_PROFILE_FIELD_EDIT' => '<strong>Изменено поле профиля</strong><br />» %s',
	'BB3FLS_LOG_PROFILE_FIELD_REMOVED' => '<strong>Удалено поле профиля</strong><br />» %s',
	'BB3FLS_LOG_PRUNE' => '<strong>Очищены форумы</strong><br />» %s',
	'BB3FLS_LOG_PRUNE_SHADOW' => '<strong>Произведена автоочистка ссылок на перенесённые темы</strong><br />» %s',
	'BB3FLS_LOG_PRUNE_USER_DEAC' => '<strong>Деактивированы пользователи</strong><br />» %s',
	'BB3FLS_LOG_PRUNE_USER_DEL_ANON' => '<strong>Удалены пользователи, их сообщения оставлены</strong><br />» %s',
	'BB3FLS_LOG_PRUNE_USER_DEL_DEL' => '<strong>Удалены пользователи с их сообщениями</strong><br />» %s',
	'BB3FLS_LOG_PURGE_CACHE' => '<strong>Очистка кэша</strong>',
	'BB3FLS_LOG_PURGE_SESSIONS' => '<strong>Очистка сессий</strong>',
	'BB3FLS_LOG_RANK_ADDED' => '<strong>Добавлено звание</strong><br />» %s',
	'BB3FLS_LOG_RANK_REMOVED' => '<strong>Удалено звание</strong><br />» %s',
	'BB3FLS_LOG_RANK_UPDATED' => '<strong>Обновлено звание</strong><br />» %s',
	'BB3FLS_LOG_REASON_ADDED' => '<strong>Добавлена причина жалобы/отклонения</strong><br />» %s',
	'BB3FLS_LOG_REASON_REMOVED' => '<strong>Удалена причина жалобы/отклонения</strong><br />» %s',
	'BB3FLS_LOG_REASON_UPDATED' => '<strong>Обновлена причина жалобы/отклонения</strong><br />» %s',
	'BB3FLS_LOG_REFERER_INVALID' => '<strong>Проверка рефёрера не удалась </strong><br />»Рефёрер: “<em>%1$s</em>”. Запрос был отклонён, сессия удалена.',
	'BB3FLS_LOG_REPORT_CLOSED' => '<strong>Закрытие жалобы</strong><br />» %s',
	'BB3FLS_LOG_REPORT_DELETED' => '<strong>Удаление жалобы</strong><br />» %s',
	'BB3FLS_LOG_RESET_DATE' => '<strong>Сброшена дата запуска конференции</strong>',
	'BB3FLS_LOG_RESET_ONLINE' => '<strong>Сброшен рекорд посещаемости</strong>',
	'BB3FLS_LOG_RESTORE_TOPIC' => '<strong>Восстановлена тема «%1$s», созданная пользователем</strong><br />» %2$s',
	'BB3FLS_LOG_RESYNC_FILES_STATS' => '<strong>Синхронизирована статистика вложений</strong>',
	'BB3FLS_LOG_RESYNC_POSTCOUNTS' => '<strong>Синхронизированы счётчики сообщений пользователей</strong>',
	'BB3FLS_LOG_RESYNC_POST_MARKING' => '<strong>Синхронизированы свои темы</strong>',
	'BB3FLS_LOG_RESYNC_STATS' => '<strong>Синхронизирована статистика сообщений, тем и пользователей</strong>',
	'BB3FLS_LOG_SEARCH_INDEX_CREATED' => '<strong>Созданы поисковые индексы для</strong><br />» %s',
	'BB3FLS_LOG_SEARCH_INDEX_REMOVED' => '<strong>Удалены поисковые индексы для</strong><br />» %s',
	'BB3FLS_LOG_SOFTDELETE_POST' => '<strong>Удалено в корзину сообщение «%1$s», созданное пользователем «%2$s», по причине</strong><br />» %3$s',
	'BB3FLS_LOG_SOFTDELETE_TOPIC' => '<strong>Удалена в корзину тема «%1$s», созданная пользователем «%2$s», по причине</strong><br />» %3$s',
	'BB3FLS_LOG_SPHINX_ERROR' => '<strong>Ошибка Sphinx</strong><br />В» %s',
	'BB3FLS_LOG_SPLIT_DESTINATION' => '<strong>Перемещены разделённые сообщения</strong><br />» в %s',
	'BB3FLS_LOG_SPLIT_SOURCE' => '<strong>Разделены сообщения</strong><br />» из %s',
	'BB3FLS_LOG_STYLE_ADD' => '<strong>Добавлен стиль</strong><br />» %s',
	'BB3FLS_LOG_STYLE_DELETE' => '<strong>Удалён стиль</strong><br />» %s',
	'BB3FLS_LOG_STYLE_EDIT_DETAILS' => '<strong>Изменён стиль</strong><br />» %s',
	'BB3FLS_LOG_STYLE_EXPORT' => '<strong>Экспортирован стиль</strong><br />» %s',
	'BB3FLS_LOG_TEMPLATE_ADD_DB' => '<strong>Добавлен шаблон в базу данных</strong><br />» %s',
	'BB3FLS_LOG_TEMPLATE_ADD_FS' => '<strong>Добавлен шаблон на сервер</strong><br />» %s',
	'BB3FLS_LOG_TEMPLATE_CACHE_CLEARED' => '<strong>Удалена кэшированная версия файлов шаблона <em>%1$s</em></strong><br />» %2$s',
	'BB3FLS_LOG_TEMPLATE_DELETE' => '<strong>Удалён шаблон</strong><br />» %s',
	'BB3FLS_LOG_TEMPLATE_EDIT' => '<strong>Изменён шаблон <em>%1$s</em></strong><br />» %2$s',
	'BB3FLS_LOG_TEMPLATE_EDIT_DETAILS' => '<strong>Изменена информация о шаблоне</strong><br />» %s',
	'BB3FLS_LOG_TEMPLATE_EXPORT' => '<strong>Экспортирован шаблон</strong><br />» %s',
	'BB3FLS_LOG_TEMPLATE_REFRESHED' => '<strong>Обновлён шаблон</strong><br />» %s',
	'BB3FLS_LOG_THEME_ADD_DB' => '<strong>Добавлена тема в базу данных</strong><br />» %s',
	'BB3FLS_LOG_THEME_ADD_FS' => '<strong>Добавлена тема на сервер</strong><br />» %s',
	'BB3FLS_LOG_THEME_DELETE' => '<strong>Удалена тема</strong><br />» %s',
	'BB3FLS_LOG_THEME_EDIT' => '<strong>Изменена тема <em>%1$s</em></strong>',
	'BB3FLS_LOG_THEME_EDIT_DETAILS' => '<strong>Изменена информация о теме</strong><br />» %s',
	'BB3FLS_LOG_THEME_EDIT_FILE' => '<strong>Изменение темы оформления стиля <em>%1$s</em></strong><br />» Изменён файл <em>%2$s</em>',
	'BB3FLS_LOG_THEME_EXPORT' => '<strong>Экспортирована тема</strong><br />» %s',
	'BB3FLS_LOG_THEME_REFRESHED' => '<strong>Обновлена тема</strong><br />» %s',
	'BB3FLS_LOG_TOPIC_APPROVED' => '<strong>Одобрение темы</strong><br />» %s',
	'BB3FLS_LOG_TOPIC_DISAPPROVED' => '<strong>Отклонение темы «%1$s» автора «%3$s» по причине</strong><br />%2$s',
	'BB3FLS_LOG_TOPIC_RESTORED' => '<strong>Восстановлена тема</strong><br />» %s',
	'BB3FLS_LOG_TOPIC_RESYNC' => '<strong>Синхронизированы счётчики темы</strong><br />» %s',
	'BB3FLS_LOG_TOPIC_TYPE_CHANGED' => '<strong>Изменён тип темы</strong><br />» %s',
	'BB3FLS_LOG_UNBAN_EMAIL' => '<strong>Разблокирован email-адрес</strong><br />» %s',
	'BB3FLS_LOG_UNBAN_IP' => '<strong>Разблокирован IP-адрес</strong><br />» %s',
	'BB3FLS_LOG_UNBAN_USER' => '<strong>Разблокирован пользователь</strong><br />» %s',
	'BB3FLS_LOG_UNLOCK' => '<strong>Открыта тема</strong><br />» %s',
	'BB3FLS_LOG_UNLOCK_POST' => '<strong>Разблокировано сообщение</strong><br />» %s',
	'BB3FLS_LOG_UPDATE_DATABASE' => '<strong>Обновлена база данных с версии %1$s до версии %2$s</strong>',
	'BB3FLS_LOG_UPDATE_PHPBB' => '<strong>Обновлён phpBB с версии %1$s до версии %2$s</strong>',
	'BB3FLS_LOG_USERS_ADDED' => '<strong>Добавлены пользователи в группу</strong> %1$s<br />» %2$s',
	'BB3FLS_LOG_USERS_APPROVED' => '<strong>Одобрены кандидаты в группу</strong> %1$s<br />» %2$s',
	'BB3FLS_LOG_USERS_PENDING' => '<strong>Пользователи запросили вступления в группу «%1$s» и ожидают одобрения</strong><br />» %2$s',
	'BB3FLS_LOG_USER_ACTIVE' => '<strong>Активирован пользователь</strong><br />» %s',
	'BB3FLS_LOG_USER_ACTIVE_USER' => '<strong>Активирована учётная запись пользователя</strong>',
	'BB3FLS_LOG_USER_BAN_EMAIL' => '<strong>Заблокирован email-адрес через раздел Управление пользователями</strong> по причине "<em>%1$s</em>"<br />» %2$s',
	'BB3FLS_LOG_USER_BAN_IP' => '<strong>Заблокирован IP-адрес через раздел Управление пользователями</strong> по причине "<em>%1$s</em>"<br />» %2$s',
	'BB3FLS_LOG_USER_BAN_USER' => '<strong>Заблокирован пользователь через раздел Управление пользователями</strong> по причине "<em>%1$s</em>"<br />» %2$s',
	'BB3FLS_LOG_USER_DELETED' => '<strong>Удалён пользователь</strong><br />» %s',
	'BB3FLS_LOG_USER_DEL_ATTACH' => '<strong>Удалены все вложения пользователя</strong><br />» %s',
	'BB3FLS_LOG_USER_DEL_AVATAR' => '<strong>Удалена аватара пользователя</strong><br />» %s',
	'BB3FLS_LOG_USER_DEL_AVATAR_USER' => '<strong>Удалена аватара пользователя</strong>',
	'BB3FLS_LOG_USER_DEL_OUTBOX' => '<strong>Очищена папка «Исходящие» пользователя</strong><br />» %s',
	'BB3FLS_LOG_USER_DEL_POSTS' => '<strong>Удалены все сообщения пользователя</strong><br />» %s',
	'BB3FLS_LOG_USER_DEL_SIG' => '<strong>Удалена подпись пользователя</strong><br />» %s',
	'BB3FLS_LOG_USER_DEL_SIG_USER' => '<strong>Удалена подпись пользователя</strong>',
	'BB3FLS_LOG_USER_FEEDBACK' => '<strong>Добавлена заметка о пользователе</strong><br />» %s',
	'BB3FLS_LOG_USER_GENERAL' => '<strong>Добавлен элемент:</strong><br />» %s',
	'BB3FLS_LOG_USER_GROUP_CHANGE' => '<strong>Пользователь изменил группу по умолчанию</strong><br />» %s',
	'BB3FLS_LOG_USER_GROUP_DEMOTE' => '<strong>Пользователь снят с лидеров группы</strong><br />» %s',
	'BB3FLS_LOG_USER_GROUP_JOIN' => '<strong>Пользователь вступил в группу</strong><br />» %s',
	'BB3FLS_LOG_USER_GROUP_JOIN_PENDING' => '<strong>Пользователь подал запрос на вступление в группу и должен быть одобрен</strong><br />» %s',
	'BB3FLS_LOG_USER_GROUP_RESIGN' => '<strong>Пользователь отказался от членства в группе</strong><br />» %s',
	'BB3FLS_LOG_USER_INACTIVE' => '<strong>Деактивирован пользователь</strong><br />» %s',
	'BB3FLS_LOG_USER_INACTIVE_USER' => '<strong>Деактивирована учётная запись пользователя</strong>',
	'BB3FLS_LOG_USER_LOCK' => '<strong>Пользователь закрыл свою тему</strong><br />» %s',
	'BB3FLS_LOG_USER_MOVE_POSTS' => '<strong>Перемещены сообщения пользователя</strong><br />» «%1$s» в форум «%2$s»',
	'BB3FLS_LOG_USER_MOVE_POSTS_USER' => '<strong>Перемещены все сообщения в форум "%s"</strong>',
	'BB3FLS_LOG_USER_NEW_PASSWORD' => '<strong>Изменён пароль пользователя</strong><br />» %s',
	'BB3FLS_LOG_USER_REACTIVATE' => '<strong>Принудительная повторная активация учётной записи пользователя</strong><br />» %s',
	'BB3FLS_LOG_USER_REACTIVATE_USER' => '<strong>Принудительная повторная активация учётной записи пользователя</strong>',
	'BB3FLS_LOG_USER_REMOVED_NR' => '<strong>Удалён флаг новой регистрации пользователя</strong><br />» %s',
	'BB3FLS_LOG_USER_UNLOCK' => '<strong>Пользователь открыл свою тему</strong><br />» %s',
	'BB3FLS_LOG_USER_UPDATE_EMAIL' => '<strong>Пользователем "%1$s" изменён email-адрес</strong><br />» с «%2$s» на «%3$s»"',
	'BB3FLS_LOG_USER_UPDATE_NAME' => '<strong>Изменено имя пользователя</strong><br />» с «%1$s» на «%2$s»',
	'BB3FLS_LOG_USER_USER_UPDATE' => '<strong>Обновлена информация о пользователе</strong><br />» %s',
	'BB3FLS_LOG_USER_WARNING' => '<strong>Вынесено предупреждение пользователю</strong><br />» %s',
	'BB3FLS_LOG_USER_WARNING_BODY' => '<strong>Пользователю вынесено следующее предупреждение</strong><br />» %s',
	'BB3FLS_LOG_U_ROLE_ADD' => '<strong>Добавлена пользовательская роль</strong><br />» %s',
	'BB3FLS_LOG_U_ROLE_EDIT' => '<strong>Изменена пользовательская роль</strong><br />» %s',
	'BB3FLS_LOG_U_ROLE_REMOVED' => '<strong>Удалена пользовательская роль</strong><br />» %s',
	'BB3FLS_LOG_WARNINGS_DELETED' => array(
		1 => '<strong>Удалено предупреждение пользователя</strong><br />» %1$s',
		2 => '<strong>Удалено %2$d предупреждения пользователя</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
		3 => '<strong>Удалено %2$d предупреждений пользователя</strong><br />» %1$s',
	),
	'BB3FLS_LOG_WARNINGS_DELETED_ALL' => '<strong>Удалены все предупреждения у пользователя</strong><br />» %s',
	'BB3FLS_LOG_WARNING_DELETED' => '<strong>Удалено предупреждение у пользователя</strong><br />» %s',
	'BB3FLS_LOG_WORD_ADD' => '<strong>Добавлен цензор слов</strong><br />» %s',
	'BB3FLS_LOG_WORD_DELETE' => '<strong>Удалён цензор слов</strong><br />» %s',
	'BB3FLS_LOG_WORD_EDIT' => '<strong>Изменён цензор слов</strong><br />» %s',

	'BB3FORUMLOGSETTINGS_FOUNDERS_ONLY' => 'Изменение настроек доступно только пользователям с правами основателя',
	'BB3FLS_BY_CONFIG' => 'Использовать настройки расширения',
));
