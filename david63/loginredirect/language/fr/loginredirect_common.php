<?php
/**
*
* User login redirect extension for the phpBB Forum Software package.
* French translation by Galixte (http://www.galixte.com)
*
* @copyright (c) 2015 david63
* @license GNU General Public License, version 2 (GPL-2.0)
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
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'REDIRECT_LOGIN_ANNOUNCE_TOPIC'		=> 'Vous êtes à présent connecté sur le forum. Une nouvelle annonce a été publiée depuis votre dernière visite, vous allez être redirigé vers celle-ci.',
	'REDIRECT_LOGIN_GROUP_TOPIC'		=> 'Vous êtes à présent connecté sur le forum. Un message de groupe a été publié depuis votre dernière visite, vous allez être redirigé vers celui-ci.',
	'REDIRECT_LOGIN_WELCOME_TOPIC'		=> 'Vous êtes à présent connecté sur le forum. Ceci étant votre première visite, vous allez être redirigé vers notre sujet de bienvenue.',

	'REDIRECT_REFRESH_ANNOUNCE'			=> '%sSe rendre vers le sujet de l’annonce%s',
	'REDIRECT_REFRESH_GROUP' 			=> '%sSe rendre vers le sujet du groupe%s',
	'REDIRECT_REFRESH_WELCOME'			=> '%sSe rendre vers le sujet de bienvenue%s',
));
