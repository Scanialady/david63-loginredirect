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
	'REDIRECT_ANNOUNCE'					=> 'Przekierowanie logowania do ogłoszenia',
	'REDIRECT_ANNOUNCE_EXPLAIN'			=> 'Wybierz, czy chcesz aby po zalogowaniu przekierowano użytkownika do nowego ogłoszenia.',
	'REDIRECT_ANNOUNCE_MESSAGE_EXPLAIN'	=> 'Wybierz, czy chcesz aby przy przekierowaniu został wyświetlany komunikat.',
	'REDIRECT_ANNOUNCE_OPTIONS'			=> 'Ustawienia ogłoszenia',

	'REDIRECT_ENABLED'					=> 'Status rozszerzenia',

	'REDIRECT_GROUP'					=> 'Przekierowanie logowania do tematu',
	'REDIRECT_GROUP_ALL'				=> 'Przekierowanie wszystkich grup',
	'REDIRECT_GROUP_ALL_EXPLAIN'		=> 'Wybierz "tak" jeśli chcesz, aby przekierowanie dotyczyło wszystkich grup lub wybierz "nie", aby przekierowanie dotyczyło konkretnej grupy (którą możesz wybrać poniżej).',
	'REDIRECT_GROUP_EXPLAIN'			=> 'Wybierz, czy chcesz aby po zalogowaniu przekierowano grupę do tematu.',
	'REDIRECT_GROUP_ID'					=> 'Wybierz grupę',
	'REDIRECT_GROUP_MESSAGE_EXPLAIN'	=> 'Wybierz, czy chcesz aby przy przekierowaniu został wyświetlany komunikat.',
	'REDIRECT_GROUP_OPTIONS'			=> 'Ustawienia grupy',
	'REDIRECT_GROUP_TOPIC_ID'			=> 'ID tematu',
	'REDIRECT_GROUP_TOPIC_ID_EXPLAIN'	=> 'Wprowadź ID do wcześniej stworzonego tematu.',

	'REDIRECT_LOGIN'					=> 'Przekierowanie logowania',
	'REDIRECT_LOGIN_ANNOUNCE_TOPIC'		=> 'Zostałeś zalogowany na forum. Zostaniesz przekierowany do nowego ogłoszenia, które pojawiło się od twojej ostatniej wizyty.',
	'REDIRECT_LOGIN_EXPLAIN'			=> 'Modyfikacja umożliwia przekierowanie użytkownika lub całej grupy po zalogowaniu do wybranego tematu na forum.',
	'REDIRECT_LOGIN_GROUP_TOPIC'		=> 'Zostałeś zalogowany na forum. Zostaniesz przekierowany do nowej wiadomości dla grupy, która pojawiła się od twojej ostatniej wizyty.',
	'REDIRECT_LOGIN_WELCOME_TOPIC'		=> 'Zostałeś zalogowany na forum. Zostaniesz przekierowany do tematu z wiadomością powitalną.',

	'REDIRECT_REFRESH_ANNOUNCE'			=> '%sPrzejdź do ogłoszenia%s',
	'REDIRECT_REFRESH_GROUP' 			=> '%sPrzejdź do wiadomości grupowej%s',
	'REDIRECT_REFRESH_WELCOME'			=> '%sPrzejdź do tematu powitalnego%s',

	'REDIRECT_SHOW_MESSAGE'				=> 'Pokazuj komunikat o przekierowaniu',

	'REDIRECT_WELCOME'            		=> 'Przekierowanie logowania do tematu powitalnego',
	'REDIRECT_WELCOME_EXPLAIN'			=> 'Wybierz, czy chcesz aby użytkownika przy jego pierwszym zalogowaniu przenosiło do tematu powitalnego.',
	'REDIRECT_WELCOME_MESSAGE_EXPLAIN'	=> 'Wybierz, czy chcesz aby przy przekierowaniu został wyświetlany komunikat.',
	'REDIRECT_WELCOME_OPTIONS'			=> 'Ustawienia powitania',
	'REDIRECT_WELCOME_TOPIC_ID'			=> 'ID tematu powitalnego',
	'REDIRECT_WELCOME_TOPIC_ID_EXPLAIN'	=> 'Wprowadź ID do wcześniej stworzonego tematu powitalnego.',



));
