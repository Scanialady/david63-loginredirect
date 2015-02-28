<?php
/**
*
* @package User Login Redirect
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\loginredirect\acp;

class loginredirect_module
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\request\request */
	protected $request;

	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\user */
	protected $user;

	public $u_action;

	function main($id, $mode)
	{
		global $user, $template, $request, $config, $phpbb_log, $db;

		$this->config		= $config;
		$this->request		= $request;
		$this->template		= $template;
		$this->user			= $user;
		$this->phpbb_log	= $phpbb_log;
		$this->db			= $db;

		$this->tpl_name		= 'login_redirect_manage';
		$this->page_title	= $this->user->lang('REDIRECT');
		$form_key			= 'login_redirect';
		add_form_key($form_key);

		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key($form_key))
			{
				trigger_error($this->user->lang('FORM_INVALID') . adm_back_link($this->u_action), E_USER_WARNING);
			}

			// Check that the entered topics are valid
			$this->topic_valid($this->request->variable('redirect_announce_topic_id', ''), $this->user->lang('INVALID_ANNOUNCEMENT_TOPIC'));
			$this->topic_valid($this->request->variable('redirect_welcome_topic_id', ''), $this->user->lang('INVALID_WELCOME_TOPIC'));
			$this->topic_valid($this->request->variable('redirect_group_topic_id', ''), $this->user->lang('INVALID_GROUP_TOPIC'));

			$this->config->set('redirect_announce', $this->request->variable('redirect_announce', 0));
			$this->config->set('redirect_announce_refresh', $this->request->variable('redirect_announce_refresh', 0));
			$this->config->set('redirect_announce_topic_id', $this->request->variable('redirect_announce_topic_id', ''));
			$this->config->set('redirect_any_announce', $this->request->variable('redirect_any_announce', 0));
			$this->config->set('redirect_enabled', $this->request->variable('redirect_enabled', 0));
			$this->config->set('redirect_group', $this->request->variable('redirect_group', 0));
			$this->config->set('redirect_group_all', $this->request->variable('redirect_group_all', 0));
			$this->config->set('redirect_group_id', $this->request->variable('redirect_group_id', 0));
			$this->config->set('redirect_group_refresh', $this->request->variable('redirect_group_refresh', 0));
			$this->config->set('redirect_group_topic_id', $this->request->variable('redirect_group_topic_id', ''));
			$this->config->set('redirect_welcome', $this->request->variable('redirect_welcome', 0));
			$this->config->set('redirect_welcome_refresh', $this->request->variable('redirect_welcome_refresh', 0));
			$this->config->set('redirect_welcome_topic_id', $this->request->variable('redirect_welcome_topic_id', ''));

			$this->phpbb_log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_LOGIN_REDIRECT');
			trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
		}

		$this->template->assign_vars(array(
			'REDIRECT_ANNOUNCE'				=> isset($this->config['redirect_announce']) ? $this->config['redirect_announce'] : '',
			'REDIRECT_ANNOUNCE_REFRESH'		=> isset($this->config['redirect_announce_refresh']) ? $this->config['redirect_announce_refresh'] : '',
			'REDIRECT_ANNOUNCE_TOPIC_ID'	=> isset($this->config['redirect_announce_topic_id']) ? $this->config['redirect_announce_topic_id'] : '',
			'REDIRECT_ANY_ANNOUNCE'			=> isset($this->config['redirect_any_announce']) ? $this->config['redirect_any_announce'] : '',
			'REDIRECT_ENABLED'				=> isset($this->config['redirect_enabled']) ? $this->config['redirect_enabled'] : '',
			'REDIRECT_GROUP'				=> isset($this->config['redirect_group']) ? $this->config['redirect_group'] : '',
			'REDIRECT_GROUP_ALL'			=> isset($this->config['redirect_group_all']) ? $this->config['redirect_group_all'] : '',
			'REDIRECT_GROUP_REFRESH'		=> isset($this->config['redirect_group_refresh']) ? $this->config['redirect_group_refresh'] : '',
			'REDIRECT_GROUP_TOPIC_ID'		=> isset($this->config['redirect_group_topic_id']) ? $this->config['redirect_group_topic_id'] : '',
			'REDIRECT_WELCOME'				=> isset($this->config['redirect_welcome']) ? $this->config['redirect_welcome'] : '',
			'REDIRECT_WELCOME_REFRESH'		=> isset($this->config['redirect_welcome_refresh']) ? $this->config['redirect_welcome_refresh'] : '',
			'REDIRECT_WELCOME_TOPIC_ID'		=> isset($this->config['redirect_welcome_topic_id']) ? $this->config['redirect_welcome_topic_id'] : '',

			'S_REDIRECT_GROUP_OPTIONS'		=> group_select_options($this->config['redirect_group_id'], false, false),

			'U_ACTION'						=> $this->u_action,
		));
	}

	protected function topic_valid($topic_id, $error_message)
	{
		if ($topic_id <> '')
		{
			$sql = 'SELECT topic_id
				FROM ' . TOPICS_TABLE . '
					WHERE topic_id = ' . (int)$topic_id;

			$result	= $this->db->sql_query($sql);
			$row	= $this->db->sql_fetchrow($result);

			$this->db->sql_freeresult($result);

			if (!$row)
			{
				trigger_error($error_message . adm_back_link($this->u_action), E_USER_WARNING);
			}
		}
	}
}

?>