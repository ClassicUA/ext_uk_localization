<?php
/**
*
* @package Upload Extensions
* @copyright (c) 2014 - 2015 Igor Lavrov (https://github.com/LavIgor) and John Peskens (http://ForumHulp.com)
* @translated by Igor Lavrov (https://github.com/LavIgor)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

// Some characters you may want to copy&paste:
// ’ » “ ” …

$help = array(
	array(
		0 => '--',
		1 => 'Основные модули'
	),
	array(
		0 => 'Что даёт функция “Загрузить расширение”?',
		1 => 'Вы можете загружать расширения из разных источников без необходимости использовать FTP-клиент. Когда вы загружаете расширение, которое уже есть на вашей конференции, его устаревшая версия будет автоматически сохранена в выбранной директории на вашей конференции - перейдите в модуль “Управление ZIP-файлами”. Вы также можете сохранить ZIP-файл текущей загружаемой версии расширения - установите флажок “Сохранить загруженный ZIP-файл” до начала процесса загрузки. Чтобы быть уверенными в том, что вы загружаете правильный ZIP-файл расширения, укажите его контрольную сумму в соответствующем поле формы.'
	),
	array(
		0 => 'В чём разница между “Модулем управления расширениями, встроенным в Загрузку Расширений” и стандартным модулем “Управление расширениями”?',
		1 => 'Как и стандартный модуль “Управление расширениями”, “Модуль управления расширениями, встроенный в Загрузку Расширений” - это инструмент вашей конференции phpBB, который позволяет вам управлять всеми вашими расширениями и просматривать информацию о них. Но данный инструмент можно назвать “улучшенной версией” стандартного модуля.<br /><br /><strong>Ключевые преимущества:</strong><ul><li>Все загруженные расширения сортируются в алфавитном порядке, не зависимо от того, какие они: включённые, отключённые или деинсталлированные. Исключение: неисправные расширения.</li><li>Неисправные расширения показываются отдельно на той же странице “Модуля управления расширениями” ниже списка обычных расширений. Причины недоступности показываются для каждого неисправного расширения. Подробный текст предупреждения добавляется к этим причинам, если неисправное расширение установлено на конференции либо если какие-либо данные о нём сохранены в базе данных. Вы можете нажать на строку любого неисправного расширения, чтобы увидеть подробную информацию о нём, точно так же, как можно делать для исправных расширений.</li><li>Любое расширение (если оно исправно) может быть включено одним кликом на переключателе, находящемся слева от имени расширения в списке.</li></ul>'
	),
	array(
		0 => 'Зачем мне нужен модуль “Управление ZIP-файлами”?',
		1 => 'Иногда полезно иметь возможность сохранять архивные ZIP-файлы или делиться ими. Архивами могут быть устаревшие версии загруженных расширений (которые архивируются автоматически для обеспечения сохранности данных), ZIP-файлы, сохранённые вами при загрузке расширений, когда установлен соответствующий флажок, а также любые ZIP-файлы расширений, находящиеся в выбранной директории (обратите внимание на вопрос “Где я могу задать директорию для сохранения ZIP-файлов расширений?” ниже). У вас есть возможности распаковывать, скачивать и удалять эти ZIP-файлы.'
	),
	array(
		0 => 'Как я могу использовать модуль “Удаление расширений”?',
		1 => 'Модуль “Удаление расширений” позволяет вам удалять файлы деинсталлированных расширений с вашего сервера, чтобы вы могли полностью завершить процесс удаления без использования FTP. Когда расширение вам больше не нужно, вы можете окончательно удалить его с конференции. Для этого вы должны сделать следующее:<ul><li>Сначала убедитесь в необходимости удаления конкретного расширения. Рекомендуется сделать резервное копирование файлов и базы данных до любых процедур удаления.</li><li>Затем перейдите в “Модуль управления расширениями, встроенный в Загрузку Расширений”, найдите расширение, которое вы хотите удалить, и убедитесь, что оно отключено: нажмите на переключатель этого расширения, <em>если он зелёный</em>.</li><li>Убедитесь, что данные этого расширения удалены: <em>если отображается красная кнопка корзины</em>, нажмите на неё и подтвердите своё действие.</li><li>После этого перейдите в модуль “Удаление расширений”, нажмите на ссылку “Удалить расширение” в строке вашего расширения и подтвердите своё действие.</li></ul>'
	),
	array(
		0 => '--',
		1 => 'Процесс загрузки'
	),
	array(
		0 => 'Как я могу загрузить расширение с официального сайта phpbb.com?',
		1 => 'На главной странице Загрузки Расширений нажмите на ссылку “Показать предлагаемые расширения с официального сайта phpbb.com”. Выберите расширение, которое вы хотите загрузить, и нажмите на кнопку “Скачать” в строке этого расширения. Примечание: в данном случае получаем игру слов: расширение будет <em>скачано</em> с официального сайта phpbb.com и <em>загружено</em> на ваш сервер.'
	),
	array(
		0 => 'Как мне загрузить расширение с другого удалённого ресурса?',
		1 => 'Скопируйте <strong>прямую</strong> ссылку на ZIP-файл расширения (она должна заканчиваться на <code>.zip</code>) в нужное поле формы “Загрузить расширение” и нажмите на кнопку “Загрузить”.'
	),
	array(
		0 => 'Как мне загрузить расширение с моего локального компьютера?',
		1 => 'Для этого нажмите на кнопку “Обзор...” в форме “Загрузить расширение”, выберите ZIP-файл расширения на вашем компьютере, затем нажмите на кнопку “Загрузить”.'
	),
	array(
		0 => 'Я скопировал ссылку на ZIP-файл расширения в нужное поле и нажал на кнопку “Загрузить”, но мне показывается ошибка. Что не так с этой ссылкой?',
		1 => 'Перед тем как загрузить расширение, убедитесь, что следующие условия выполнены:<ol><li>Ссылка должна быть <strong>прямой</strong>: если вы загружаете файл не с официального сайта phpbb.com, то ссылка должна заканчиваться на <code>.zip</code>.</li><li>Вы должны указать ссылку на сам <strong>ZIP-файл</strong> расширения, а не на страницу с его описанием.</li></ol>'
	),
	array(
		0 => 'Что такое контрольная сумма? Где я могу её взять?',
		1 => 'Контрольная сумма используется для проверки целостности загруженного файла. Она проверяется для того, чтобы убедиться в том, что файл на удалённом сервере и файл, загруженный на ваш сервер, одинаковы. Контрольную сумму обычно можно найти на том же ресурсе, на котором находится исходный файл.'
	),
	array(
		0 => '--',
		1 => 'Модуль управления расширениями, встроенный в Загрузку Расширений'
	),
	array(
		0 => 'Как использовать “Модуль управления расширениями, встроенный в Загрузку Расширений”?',
		1 => 'Статус каждого расширения отображается в виде переключателя.<ul><li>Зелёный переключатель означает, что расширение включено. Когда вы нажимаете на зелёный переключатель, вы <strong>отключаете</strong> расширение.</li><li>Красный переключатель означает, что расширение отключено. Когда вы нажимаете на красный переключатель, вы <strong>включаете</strong> расширение.</li><li>Если расширение, переключатель которого красный, отключено, но какие-либо данные этого расширения сохранены в базе данных, тогда вы можете удалить эти данные, нажав на корзину возле переключателя.<br /><em>Нажатие на корзину - это способ деинсталляции расширения из базы данных. Если вы хотите удалить файлы расширения с сервера, воспользуйтесь Инструментом очистки расширений.</em></li></ul><br />Вы также можете перепроверить версии всех расширений, нажав на соответствующую кнопку, или установить подходящие настройки проверки версий тем же способом, который применим в стандартном модуле “Управление расширениями”.'
	),
	array(
		0 => 'Что насчёт неисправных расширений? Могу ли я деинсталлировать их?',
		1 => 'Да, конечно! Неисправные расширения отображаются в “Модуле управления расширениями, встроенном в Загрузку Расширений” под списком обычных расширений. Вы можете увидеть причины, по которым расширения неисправны, а также посмотреть, сохранены ли какие-либо данные этих расширений в вашей базе данных. Нажмите на строку неисправного расширения, чтобы посмотреть подробную информацию о нём и совершить над ним какие-либо действия.'
	),
	array(
		0 => 'У расширения кнопка переключателя серого цвета. Почему?',
		1 => 'Если кнопка переключателя имеет серый цвет, это значит, что в данный момент вы не можете выполнять какие-либо действия с соответствующим расширением. Возможно, какое-либо действие с этим расширением уже выполняется. Также Загрузка Расширений не может отключить саму себя, поэтому цвет её кнопки переключателя тоже серый.'
	),
	array(
		0 => '--',
		1 => 'Страница подробной информации о расширении'
	),
	array(
		0 => 'Какая информация о моих расширениях показывается?',
		1 => 'Отображаемая информация зависит от разных обстоятельств.<ul><li>Базовое описание, заданное разработчиками расширения в файле <code>composer.json</code> (или предупреждение, если расширение неисправно).</li><li>Номер версии расширения (если расширение исправно).</li><li>Содержимое файла <code>README.md</code> (если он существует в директории расширения).</li><li>Содержимое файла <code>CHANGELOG.md</code> (если он существует в директории расширения).</li><li>Загруженные языковые пакеты расширения.</li><li>Дерево файлов расширения и содержимое этих файлов.</li></ul>'
	),
	array(
		0 => 'Что я могу сделать с расширением, находясь на странице с подробной информацией о нём?',
		1 => 'Вы можете:<ul><li>Включить расширение, если его переключатель красный.</li><li>Отключить расширение, если его переключатель зелёный.</li><li>Удалить данные отключённого расширения из базы данных, если отображается красная кнопка корзины.</li><li>Проверить статус текущей версии расширения, если разработчики расширения предоставили ссылку на файл проверки обновлений. Если версия расширения отображается в зелёном пузырьке, это значит, что загружена последняя на текущий момент версия расширения. Если пузырёк красный - доступна более новая версия расширения. Иначе - невозможно получить информацию о доступных обновлениях.</li><li>Получить обновление для расширения, если вы видите шестерёнку возле пузырька с версией данного расширения. Нажмите на шестерёнку: если отображается кнопка “Обновить” - тогда вы можете нажать на неё, подтвердить своё действие, после чего Загрузка Расширений обновит ваше расширение. Вы также можете увидеть информацию об обновлении, нажав на соответствующую кнопку, если ссылка на эту информацию предоставлена разработчиками расширения. <strong>ПРИМЕЧАНИЕ:</strong> если в вашем браузере выключен JavaScript, эти кнопки будут находиться в блоке подробной информации о расширении.</li><li>Управлять языковыми пакетами расширения. Вы можете загрузить новый языковой пакет для данного расширения - обратите внимание на вопрос ниже. Вы также можете удалить некоторые уже установленные языковые пакеты.</li><li>Скачать пакет расширения (обратите внимание на вопрос “Для каких целей нужен инструмент “Скачать пакет расширения”?” ниже).</li></ul>'
	),
	array(
		0 => 'Какие языковые пакеты я могу загрузить для расширения?',
		1 => 'Вы можете загрузить любые ZIP-файлы, содержащие языковые файлы расширения, если эти ZIP-файлы имеют какую-либо из перечисленных ниже структур:<ul><li><code>КОРЕНЬ_ZIP_ФАЙЛА/языковые_файлы</code>, или</li><li><code>КОРЕНЬ_ZIP_ФАЙЛА/единственная_директория/языковые_файлы</code>, или</li><li><code>КОРЕНЬ_ZIP_ФАЙЛА/единственная_директория/код_ISO/языковые_файлы</code>.</li></ul><br />Для получения более подробной информации о процессе загрузки обратите внимание на раздел “Процесс загрузки” выше.'
	),
	array(
		0 => 'Для каких целей нужен инструмент “Скачать пакет расширения”?',
		1 => 'Загрузка Расширений позволяет вам скачивать правильно сформированные ZIP-файлы любых загруженных на вашу конференцию расширений на свой компьютер. Вы также можете установить соответствующий флажок, чтобы удалить суффикс-маркер предварительной версии, используемый при разработке расширения (например, чтобы сократить время подготовки расширения к загрузке в официальную базу данных расширений). Откройте страницу информации о расширении и перейдите на вкладку “Инструменты”. После этого на экране появится кнопка “Скачать”.'
	),
	array(
		0 => '--',
		1 => 'Управление ZIP-файлами'
	),
	array(
		0 => 'Где я могу задать директорию для сохранения ZIP-файлов расширений?',
		1 => 'В Администраторском разделе: <code>Общие -> Конфигурация сервера -> Настройки сервера -> Параметры путей -> Путь к ZIP-файлам расширений</code>.'
	),
	array(
		0 => 'Каким образом я могу удалить несколько ZIP-файлов расширений одновременно?',
		1 => 'Сначала убедитесь в необходимости данной процедуры; рекомендуется предварительно сделать резервное копирование нужных данных. Затем перейдите в модуль “Управление ZIP-файлами”, отметьте флажками строчки ZIP-файлов, которые вы хотите удалить, нажмите на кнопку “Удалить отмеченные” и подтвердите своё действие.'
	),
	array(
		0 => '--',
		1 => 'Инструмент очистки расширений'
	),
	array(
		0 => 'Что такое “Инструмент очистки расширений”?',
		1 => '“Инструмент очистки расширений” - это синоним модуля “Удаление расширений”, встроенного в Загрузку Расширений, который иногда используется в документации.'
	),
	array(
		0 => 'На моей конференции установлено некоторое расширение, но я не могу его удалить. Почему?',
		1 => 'Расширение, которое вы хотите удалить, должно быть отключено, а его данные должны быть удалены из базы данных, прежде чем вы сможете использовать “Инструмент очистки расширений”. Обратите внимание на вопрос “Как я могу использовать модуль “Удаление расширений”?” выше.'
	),
	array(
		0 => 'Каким образом я могу удалить несколько расширений одновременно?',
		1 => 'Сначала убедитесь в необходимости данной процедуры; рекомендуется предварительно сделать резервное копирование нужных данных. Затем перейдите в модуль “Удаление расширений”, отметьте флажками строчки расширений, которые вы хотите удалить, нажмите на кнопку “Удалить отмеченные” и подтвердите своё действие. <strong>Эти расширения не будут сохранены в ZIP-файлах! Их директории будут окончательно удалены с сервера.</strong>'
	),
	array(
		0 => '--',
		1 => 'Интерактивный интерфейс'
	),
	array(
		0 => 'Какие преимущества у JavaScript-функционала?',
		1 => 'Страницы загружаются быстрее, элементы дизайна быстро меняются после вашего взаимодействия с ними, всплывающие подсказки показываются, чтобы помочь вам. Все эти функции экономят ваше время, и доступны они, только если JavaScript включён в вашем браузере.'
	),
);
