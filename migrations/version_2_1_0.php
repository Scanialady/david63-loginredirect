<?php
/**
*
* @package User Login Redirect
* @copyright (c) 2014 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

namespace david63\loginredirect\migrations;

use \phpbb\db\migration\migration;

class version_2_1_0 extends migration
{
	static public function depends_on()
	{
		return array('\david63\loginredirect\migrations\version_1_1_0');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('redirect_always', 0)),
			array('config.add', array('redirect_global', 0)),

			array('config.remove', array('version_loginredirect')),
		);
	}
}
