<?php
/**
*
* @package User Login Redirect
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'REDIRECT_ANNOUNCE'					=> 'Girişte Duyuruya yönlendir',
	'REDIRECT_ANNOUNCE_EXPLAIN'			=> 'Son duyuru gönderildikten sonra hiç giriş yapmamış kullanıcıları duyuruya yönlendir.',
	'REDIRECT_ANNOUNCE_MESSAGE_EXPLAIN'	=> 'Kullanıcıya son duyuruya yönlendirildiğine dair bir mesaj göster.',
	'REDIRECT_ANNOUNCE_OPTIONS'			=> 'Duyuru seçenekleri',

	'REDIRECT_ENABLED'					=> 'Kullanıcı giriş yönlendirme açık',

	'REDIRECT_GROUP'					=> 'Grup konu yönelndirme',
	'REDIRECT_GROUP_ALL'				=> 'Tüm grupların üyeleri',
	'REDIRECT_GROUP_ALL_EXPLAIN'		=> 'Bunu Evet olarak seçerseniz aşağıda seçili bireysel gurpların ayarlarının üstüne yazılacak.',
	'REDIRECT_GROUP_EXPLAIN'			=> 'Bir grubu veya tüm grupları giriş yaparken belirli bir konuya yönlendirir.',
	'REDIRECT_GROUP_ID'					=> 'Grup seç',
	'REDIRECT_GROUP_MESSAGE_EXPLAIN'	=> 'Kullanıcıya belirli bir konuya yönlendirildiğini belirten bir mesaj göster.',
	'REDIRECT_GROUP_OPTIONS'			=> 'Grup seçenekleri',
	'REDIRECT_GROUP_TOPIC_ID'			=> 'Grup konu IDsi',
	'REDIRECT_GROUP_TOPIC_ID_EXPLAIN'	=> 'Grup üyelerini yönelndirmek istediğin konunun IDsini gir.',

	'REDIRECT_LOGIN'					=> 'Giriş yönlendirmesi',
	'REDIRECT_LOGIN_ANNOUNCE_TOPIC'		=> 'Başarıyla giriş yaptınız. Şu an son ziyaretinizden sonra gönderilmiş olan Duyuruya yönlendirileceksiniz.',
	'REDIRECT_LOGIN_EXPLAIN'			=> 'Buradan yeni bir kullanıcının kayıt olduktan sonra ilk giriş yaptığında bir Hoşgeldin Konusuna yönlendirilmesini, eğer görmedilerse tüm kullanıcıları son duyuru konusuna, veya bir grubun üyelerini giriş yaptıklarında yeni gönderilmiş grup mesajına yönlendirebilirsiniz.',
	'REDIRECT_LOGIN_GROUP_TOPIC'		=> 'Başarıyla giriş yaptınız. Şu an son ziyaretinizden sonra gönderilmiş olan yeni bir grup mesajı mevcut ve ona yönlendirileceksiniz.',
	'REDIRECT_LOGIN_WELCOME_TOPIC'		=> 'Başarıyla giriş yaptınız. Bu sizin foruma ilk girişiniz olduğu için Hoşgeldin Konusuna yönelndirileceksiniz.',

	'REDIRECT_REFRESH_ANNOUNCE'			=> '%sDuyuru konusuna ilerle%s',
	'REDIRECT_REFRESH_GROUP' 			=> '%sGrup konusuna ilerle%s',
	'REDIRECT_REFRESH_WELCOME'			=> '%sHoşgeldiniz Konusuna ilerle%s',

	'REDIRECT_SHOW_MESSAGE'				=> 'Bir yönlendirme mesajı göster',

	'REDIRECT_WELCOME'            		=> 'Hoşgeldiniz konusuna yönlendir',
	'REDIRECT_WELCOME_EXPLAIN'			=> 'Siteye ilk kez giriş yapacak tüm yeni kullanıcıları Hoşgeldiniz Konusuna yönlendir.',
	'REDIRECT_WELCOME_MESSAGE_EXPLAIN'	=> 'Yeni kullanıcılara Hoşgeldiniz konusuna yönlendirildiğini belirten bir mesaj göster.',
	'REDIRECT_WELCOME_OPTIONS'			=> 'Hoşgeldiniz seçenekleri',
	'REDIRECT_WELCOME_TOPIC_ID'			=> 'Hoşgeldiniz konusu IDsi',
	'REDIRECT_WELCOME_TOPIC_ID_EXPLAIN'	=> 'Tüm yeni kullanıcıların yönlendirilmesini istediğiniz Hoşgeldiniz Konusunun IDsini girin.',



));
