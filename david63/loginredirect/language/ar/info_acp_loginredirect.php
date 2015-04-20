<?php
/**
*
* @package User Login Redirect
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'INVALID_ANNOUNCEMENT_TOPIC'			=> 'موضوع الإعلان غير صحيح.',
	'INVALID_GROUP_TOPIC'					=> 'موضوع المجموعة غير صحيح.',
	'INVALID_WELCOME_TOPIC'					=> 'موضوع الترحيب غير صحيح.',

	'LATEST'								=> 'الأخير',
	'LOG_LOGIN_REDIRECT'					=> '<strong>تم تحديث الخيارات بنجاح</strong>',

	'REDIRECT'								=> 'إعادة توجيه الدخول',

	'REDIRECT_ANNOUNCE'						=> 'اعادة التوجيه إلى الإعلان المُحدد ',
	'REDIRECT_ANNOUNCE_EXPLAIN'				=> 'اعادة توجيه جميع الأعضاء الذين لم يسجلوا دخولهم منذ نشر آخر إعلان.',
	'REDIRECT_ANNOUNCE_MESSAGE_EXPLAIN'		=> 'اظهار رسالة تنبيه للعضو بأنه يتم اعادة تحويله الى آخر اعلان.',
	'REDIRECT_ANNOUNCE_OPTIONS'				=> 'خيارات الإعلان',
	'REDIRECT_ANNOUNCE_PRIORITY'			=> 'تحديد نوع الإعلان ',
	'REDIRECT_ANNOUNCE_PRIORITY_EXPLAIN'	=> 'حدد نوع الإعلان الذي تريد ارساله للأعضاء ( الإعلان المُحدد هنا بواسطتك أو آخر إعلان تم نشره ).',
	'REDIRECT_ANNOUNCE_TOPIC_ID'			=> 'موضوع الإعلان ',
	'REDIRECT_ANNOUNCE_TOPIC_ID_EXPLAIN'	=> 'ادخل رقم موضوع الإعلان الذي تريد إعادة توجيه جميع الأعضاء إلى هذا الموضوع.',
	'REDIRECT_ANY_ANNOUNCE_EXPLAIN'			=> 'اعادة توجيه جميع الأعضاء الذين لم يسجلوا دخولهم منذ نشر الإعلان المُحدد أدناه.',

	'REDIRECT_ENABLED'						=> 'تفعيل ',

	'REDIRECT_GROUP'						=> 'اعادة التوجيه إلى موضوع المجموعة ',
	'REDIRECT_GROUP_ALL'					=> 'كل أعضاء المجموعات ',
	'REDIRECT_GROUP_ALL_EXPLAIN'			=> 'اختيارك "نعم" يعني إلغاء أي مجموعة قمت بتحديدها في الخيار التالي ( اختار مجموعة ).',
	'REDIRECT_GROUP_EXPLAIN'				=> 'إعادة توجيه أعضاء مجموعة , أو كل المجموعات , إلى موضوع مُحدد عند تسجيل الدخول.',
	'REDIRECT_GROUP_ID'						=> 'اختار مجموعة ',
	'REDIRECT_GROUP_MESSAGE_EXPLAIN'		=> 'اظهار رسالة تنبيه للعضو بأنه يتم اعادة تحويله الى موضوع مُحدد.',
	'REDIRECT_GROUP_OPTIONS'				=> 'خيارات المجموعة',
	'REDIRECT_GROUP_TOPIC_ID'				=> 'موضوع المجموعة ',
	'REDIRECT_GROUP_TOPIC_ID_EXPLAIN'		=> 'ادخل رقم الموضوع الذي تريد إعادة توجيه أعضاء المجموعة إلى هذا الموضوع.',

	'REDIRECT_LATEST_ANNOUNCE'				=> 'اعادة التوجيه إلى آخر الإعلان ',

	'REDIRECT_LOGIN'						=> 'إعادة توجيه الدخول',
	'REDIRECT_LOGIN_EXPLAIN'				=> 'من هنا تستطيع إعادة توجيه الأعضاء الجُدد إلى موضوع ترحيبي , أو إعادة توجيه جميع الأعضاء إلى آخر موضوع "إعلان" إذا لم يُشاهده من قبل ,  أو إعادة توجيه كل أعضاء مجموعة/المجموعات إلى موضوع مُحدد عند تسجيل دخولهم.',

	'REDIRECT_MANAGE'						=> 'الإعدادات',

	'REDIRECT_SHOW_MESSAGE'					=> 'اظهار رسالة إعادة التوجيه ',

	'REDIRECT_WELCOME'            			=> 'اعادة التوجيه إلى موضوع الترحيب ',
	'REDIRECT_WELCOME_EXPLAIN'				=> 'إعادة توجيه جميع الأعضاء الجُدد إلى موضوع الترحيب عند تسجيل أول دخول لهم إلى المنتدى.',
	'REDIRECT_WELCOME_MESSAGE_EXPLAIN'		=> 'اظهار رسالة تنبيه للعضو الجديد بأنه يتم اعادة تحويله الى موضوع الترحيب.',
	'REDIRECT_WELCOME_OPTIONS'				=> 'خيارات الترحيب',
	'REDIRECT_WELCOME_TOPIC_ID'				=> 'موضوع الترحيب ',
	'REDIRECT_WELCOME_TOPIC_ID_EXPLAIN'		=> 'ادخل رقم موضوع الترحيب الذي تريد إعادة توجيه جميع الأعضاء الجُدد إلى هذا الموضوع.',

	'SELECTED'								=> 'المُحدد',
));
