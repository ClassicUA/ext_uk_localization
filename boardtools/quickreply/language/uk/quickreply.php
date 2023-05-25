<?php
/**
 *
 * @package       QuickReply Reloaded
 * @copyright (c) 2014 - 2021 Татьяна5 and LavIgor
 * @license       http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'QR_ATTACH_NOTICE'                 => 'До цієї відповіді прикріплено принаймні одне вкладення.',
	'QR_BBCODE'                        => 'BBCode',
	'QR_CANCEL_SUBMISSION'             => 'Скасувати надсилання',
	'QR_CTRL_ENTER'                    => 'Ви також можете надіслати свою відповідь, одночасно натиснувши клавіші Ctrl і Enter на клавіатурі.',
	'QR_FORM_HIDE'                     => 'Згорнути форму швидкої відповіді',
	'QR_FULLSCREEN'                    => 'Повноекранний редактор',
	'QR_FULLSCREEN_EXIT'               => 'Вийти з повноекранного режиму',
	'QR_INSERT_TEXT'                   => 'Вставити цитату у вікно відповіді',
	'QR_QUICKQUOTE'                    => 'Швидка цитата',
	'QR_QUICKQUOTE_TITLE'              => 'Відповісти зі швидкою цитатою',
	'QR_LOADING'                       => 'Завантаження',
	'QR_LOADING_ATTACHMENTS'           => 'Очікування закінчення завантаження вкладень...',
	'QR_LOADING_NEW_FORM_TOKEN'        => 'Тимчасова мітка форми застаріла і була оновлена.<br />Повторне відправлення форми...',
	'QR_LOADING_NEW_POSTS'             => 'У тему було додано щонайменше одне нове повідомлення.<br />Ваше повідомлення не було надіслано, тому що, можливо, ви захочете змінити його текст.<br />Отримання нових повідомлень...',
	'QR_LOADING_PREVIEW'               => 'Обробка попереднього перегляду...',
	'QR_LOADING_SUBMITTED'             => 'Ваше повідомлення було успішно відправлено.<br />Обробка результату...',
	'QR_LOADING_SUBMITTING'            => 'Надсилання вашої відповіді...',
	'QR_LOADING_WAIT'                  => 'Очікування відповіді сервера...',
	'QR_MORE'                          => 'Інші дії',
	'QR_NO_FULL_QUOTE'                 => 'Будь ласка, виділіть частину повідомлення, яку хочете процитувати.',
	'QR_PREVIEW_CLOSE'                 => 'Закрити блок попереднього перегляду',
	'QR_PROFILE'                       => 'Перейти в профіль',
	'QR_QUICKNICK'                     => 'Звернутися за нікнеймом',
	'QR_QUICKNICK_TITLE'               => 'Вставити ім\'я користувача у вікно швидкої відповіді',
	'QR_REPLY_IN_PM'                   => 'Відповісти в ЛС',
	'QR_TYPE_REPLY'                    => 'Введіть свою відповідь тут...',
	'QR_WARN_BEFORE_UNLOAD'            => 'Введена вами відповідь не була відправлена і може бути втрачена!',
	'QR_READ_NEXT'                     => 'Читати далі',
	// begin mod Translit
	'QR_TRANSLIT_TEXT'                 => 'Трансліт',
	'QR_TRANSLIT_TEXT_TO_RU'           => 'на українську', // can be changed to your language here and below
	'QR_TRANSLIT_TEXT_TOOLTIP'         => 'Для миттєвого відображення українською мовою натисніть на кнопку',
	'QR_TRANSLIT_FROM'                 => 'je,jo,ayu,ay,aj,oju,oje,oja,oj,uj,yi,ya,ja,ju,yu,ja,y,zh,i\',shch,sch,ch,sh,ea,a,b,v,w,g,d,e,z,i,k,l,m,n,o,p,r,s,t,u,f,x,c,\'e,\',`,j,h', // language specific adaptation required (do not use spaces or line breaks), use commas as separators here and below
    'QR_TRANSLIT_TO'                   => 'э,ё,aю,ай,ай,ою,ое,оя,ой,уй,ый,я,я,ю,ю,я,ы,ж,й,щ,щ,ч,ш,э,а,б,в,в,г,д,е,з,и,к,л,м,н,о,п,р,с,т,у,ф,х,ц,э,ь,ъ,й,х',
    'QR_TRANSLIT_FROM_CAPS'            => 'Yo,Jo,Ey,Je,Ay,Oy,Oj,Uy,Uj,Ya,Ja,Ju,Yu,Ja,Y,Zh,I\',Sch,Ch,Sh,Ea,Tz,A,B,V,W,G,D,E,Z,I,K,L,M,N,O,P,R,S,T,U,F,X,C,EA,J,H',
    'QR_TRANSLIT_TO_CAPS'              => 'Ё,Ё,Ей,Э,Ай,Ой,Ой,Уй,Уй,Я,Я,Ю,Ю,Я,Ы,Ж,Й,Щ,Ч,Ш,Э,Ц,А,Б,В,В,Г,Д,Е,З,И,К,Л,М,Н,О,П,Р,С,Т,У,Ф,Х,Ц,Э,Й,Х',,
	// end mod Translit
	// begin mod CapsLock Transform
	'QR_TRANSFORM_TEXT'                => 'Зміна регістру тексту',
	'QR_TRANSFORM_TEXT_TOOLTIP'        => 'Для зміни регістру виділіть частину тексту і натисніть потрібну кнопку',
	'QR_TRANSFORM_TEXT_LOWER'          => '&#9660; абв',
	'QR_TRANSFORM_TEXT_UPPER'          => '&#9650; АБВ',
	'QR_TRANSFORM_TEXT_INVERS'         => '&#9660;&#9650; аБВ',
	'QR_TRANSFORM_TEXT_LOWER_TOOLTIP'  => 'нижній регістр',
	'QR_TRANSFORM_TEXT_UPPER_TOOLTIP'  => 'ВЕРХНІЙ РЕГІСТР',
	'QR_TRANSFORM_TEXT_INVERS_TOOLTIP' => 'іНВЕРСІЯ рЕГІСТРА',
	// end mod CapsLock Transform
));
