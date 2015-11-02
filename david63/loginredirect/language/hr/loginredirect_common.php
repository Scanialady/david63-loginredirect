<?php
/**
*
* @package User Login Redirect
* @copyright (c) 2014 david63
* Croatian translation by Ančica Sečan (http://ancica.sunceko.net)
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
'REDIRECT_ANNOUNCE'=>'Preusmjeravanje na Obavijesti',
'REDIRECT_ANNOUNCE_EXPLAIN'=>'Preusmjerava sve korisnike/ce (a) koji/e se nisu prijavili/e na forum, od postanja zadnje Obavijesti, na zadnje postanu Obavijest.',
'REDIRECT_ANNOUNCE_MESSAGE_EXPLAIN'=>'Ukoliko je omogućeno, korisniku/ci će, po preusmjerenju, biti prikazana poruka s razlogom preusmjeravanja [(a) na zadnje postanu Obavijest].',
'REDIRECT_ANNOUNCE_OPTIONS'=>'Opcije Obavijesti',
'REDIRECT_ENABLED'=>'Omogući preusmjeravanje “po” prijavljivanju',
'REDIRECT_GROUP'=>'Preusmjeravanje na određenu temu',
'REDIRECT_GROUP_ALL'=>'Kompletno Članstvo',
'REDIRECT_GROUP_ALL_EXPLAIN'=>'Ukoliko je omogućeno, individualan/i odabir/i ispod bit će prepisan/i.',
'REDIRECT_GROUP_EXPLAIN'=>'Preusmjerava sve članove/ice određene grupe odnosno svih grupa na određenu temu.',
'REDIRECT_GROUP_ID'=>'Izaberi grupu',
'REDIRECT_GROUP_MESSAGE_EXPLAIN'=>'Ukoliko je omogućeno, korisniku/ci će, po preusmjerenju, biti prikazana poruka s razlogom preusmjeravanja [(a) na određenu temu].',
'REDIRECT_GROUP_OPTIONS'=>'Opcije Grupa',
'REDIRECT_GROUP_TOPIC_ID'=>'ID teme',
'REDIRECT_GROUP_TOPIC_ID_EXPLAIN'=>'Upiši ID teme (a) na koju želiš preusmjeriti sve članove/ice određene grupe odnosno svih grupa.',
'REDIRECT_LOGIN'=>'Preusmjeravanje “po” prijavljivanju',
'REDIRECT_LOGIN_ANNOUNCE_TOPIC'=>'Uspješno si se prijavio/la.<br />Obzirom da je od tvog zadnjeg posjeta postana, najmanje jedna, nova Obavijest, bit ćeš preusmjeren/a na zadnje postanu Obavijest.',
'REDIRECT_LOGIN_EXPLAIN'=>'Ovdje možeš podesiti preusmjeravanja korisnika/ca na određene teme/poruke [i to]:<br />
<em>registrirane korisnike/ce</em> (a) koji/e se nisu prijavili/e na forum, od postanja zadnje Obavijesti, na zadnje postanu Obavijest;<br /><em>članove/ice određene grupe odnosno svih grupa</em> na određenu temu;<br /><em>novo registrirane korisnike/ce</em> (a) koji/e su se prvi put prijavili/e na forum, od Registracije, na poruku Dobrodošlice.',
'REDIRECT_LOGIN_GROUP_TOPIC'=>'Uspješno si se prijavio/la.<br />Obzirom da je od tvog zadnjeg posjeta postana, najmanje jedna, nova poruka vezana uz grupe, bit ćeš preusmjeren/a na određenu temu odnosno zadnje postanu poruku vezanu uz grupe.',
'REDIRECT_LOGIN_WELCOME_TOPIC'=>'Uspješno si se prijavio/la.<br />Obzirom da je ovo tvoj prvi posjet forumu, bit ćeš preusmjeren/a na poruku Dobrodošlice.',
'REDIRECT_REFRESH_ANNOUNCE'=>'Klikni %sovdje%s za odlazak na zadnje postanu Obavijest.',
'REDIRECT_REFRESH_GROUP' =>'Klikni %sovdje%s za odlazak na određenu temu odnosno zadnje postanu poruku vezanu uz grupe.',
'REDIRECT_REFRESH_WELCOME'=>'Klikni %sovdje%s za odlazak na poruku Dobrodošlice.',
'REDIRECT_SHOW_MESSAGE'=>'Prikaži poruku preusmjeravanja',
'REDIRECT_WELCOME'=>'Preusmjeravanje na poruku Dobrodošlice',
'REDIRECT_WELCOME_EXPLAIN'=>'Preusmjerava sve korisnike/ce (a) koji/e su se prvi put prijavili/e na forum, od Registracije, na poruku Dobrodošlice.',
'REDIRECT_WELCOME_MESSAGE_EXPLAIN'=>'Ukoliko je omogućeno, korisniku/ci će, po preusmjerenju, biti prikazana poruka s razlogom preusmjeravanja [(a) na poruku Dobrodošlice].',
'REDIRECT_WELCOME_OPTIONS'=>'Opcije Dobrodošlice',
'REDIRECT_WELCOME_TOPIC_ID'=>'ID teme',
'REDIRECT_WELCOME_TOPIC_ID_EXPLAIN'=>'Upiši ID teme Dobrodošlice (a) na koju želiš preusmjeriti novo registrirane korisnike/ce.',
));
