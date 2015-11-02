<?php
/**
*
* @package User Login Redirect
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @translate by alex75 http://www.phpbb-store.it
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
	'INVALID_ANNOUNCEMENT_TOPIC'			=> 'L\'annuncio non è valido.',
	'INVALID_GROUP_TOPIC'					=> 'L\'argomento non è valido.',
	'INVALID_WELCOME_TOPIC'					=> 'Il Topic di benvenuto non è valido',

	'LATEST'								=> 'Ultimo',
	'LOG_LOGIN_REDIRECT'					=> '<strong>Opzioni Login redirect aggiornate</strong>',

	'REDIRECT'								=> 'Login redirect',

	'REDIRECT_ANNOUNCE'						=> 'Reindirizzare ad un annuncio al login',
	'REDIRECT_ANNOUNCE_EXPLAIN'				=> 'Reindirizza tutti gli utenti che non hanno effettuato l\'accesso da quando è stato pubblicato l\'ultimo annuncio.',
	'REDIRECT_ANNOUNCE_MESSAGE_EXPLAIN'		=> 'Visualizzare un messaggio per spiegare all\'utente che verrà reindirizzato a l\'ultimo annuncio.',
	'REDIRECT_ANNOUNCE_OPTIONS'				=> 'Opzioni Annuncio',
	'REDIRECT_ANNOUNCE_PRIORITY'			=> 'Priorità reindirizzamento annunci',
	'REDIRECT_ANNOUNCE_PRIORITY_EXPLAIN'	=> 'Specificare quale annuncio ha la priorità',
	'REDIRECT_ANNOUNCE_TOPIC_ID'			=> 'topic ID dell\'annuncio',
	'REDIRECT_ANNOUNCE_TOPIC_ID_EXPLAIN'	=> 'Inserisci l\'ID dell\' annuncio dove si desidera reindirizzare gli utenti.',
	'REDIRECT_ANY_ANNOUNCE_EXPLAIN'			=> 'Reindirizza tutti gli utenti che non hanno effettuato l\'accesso dopo la pubblicazione dell\'annuncio specificato.',

	'REDIRECT_ENABLED'						=> 'Abilita estensione Login Redirect',

	'REDIRECT_GROUP'						=> 'Group topic redirect',
	'REDIRECT_GROUP_ALL'					=> 'Tutti i membri dei gruppi',
	'REDIRECT_GROUP_ALL_EXPLAIN'			=> 'Impostato su Sì avrà la precedenza su ogni singolo gruppo selezionato di seguito.',
	'REDIRECT_GROUP_EXPLAIN'				=> 'Reindirizza i membri di un gruppo, o di tutti i gruppi, ad un argomento specifico al login.',
	'REDIRECT_GROUP_ID'						=> 'Seleziona gruppi',
	'REDIRECT_GROUP_MESSAGE_EXPLAIN'		=> 'Visualizzare un messaggio che spiega all\'utente che verrà reindirizzato a un argomento specifico.',
	'REDIRECT_GROUP_OPTIONS'				=> 'Opzioni Gruppi',
	'REDIRECT_GROUP_TOPIC_ID'				=> 'topic ID Gruppo',
	'REDIRECT_GROUP_TOPIC_ID_EXPLAIN'		=> 'Inserisci l\'ID del topic dove si desidera reindirizzare i membri del gruppo.',

	'REDIRECT_LATEST_ANNOUNCE'				=> 'Reindirizzare all\'ultimo annuncio al login',

	'REDIRECT_LOGIN'						=> 'Login redirect',
	'REDIRECT_LOGIN_EXPLAIN'				=> 'Qui si può scegliere di reindirizzare  un nuovo utente ad un argomento di benvenuto al primo login dopo la registrazione, che tutti gli utenti vengano reindirizzati all\'ultimo annuncio se non l\'hanno già visto e / o reindirizzare tutti i membri o quelli di un gruppo selezionato a un nuovo messaggio al login.',

	'REDIRECT_MANAGE'						=> 'Configurazione',

	'REDIRECT_SHOW_MESSAGE'					=> 'Mostra messaggio al reindirizzamento',

	'REDIRECT_WELCOME'            			=> 'Reindirizzamento topic di benvenuto',
	'REDIRECT_WELCOME_EXPLAIN'				=> 'Reindirizza tutti i nuovi utenti ad un argomento di benvenuto al primo accesso.',
	'REDIRECT_WELCOME_MESSAGE_EXPLAIN'		=> 'Visualizzare un messaggio che spieghi al nuovo utente che verrà reindirizzato al topic di benvenuto.',
	'REDIRECT_WELCOME_OPTIONS'				=> 'Opzioni Welcome topic',
	'REDIRECT_WELCOME_TOPIC_ID'				=> 'Welcome topic ID',
	'REDIRECT_WELCOME_TOPIC_ID_EXPLAIN'		=> 'Inserisci l\'ID del topic di benvenuto dove si vuole reindirizzare tutti i nuovi utenti',

	'SELECTED'								=> 'Selezionato',
));
