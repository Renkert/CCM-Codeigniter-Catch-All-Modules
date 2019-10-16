<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Application Hooks
 *
 * This class provides a set of methods used for the CodeIgniter hooks.
 * http://www.codeigniter.com/user_guide/general/hooks.html
 *
 *
 */

class MY_hooks
{
	/**
	 * Stores the CodeIgniter core object.
	 *
	 * @access private
	 * @var object
	 */
	private $CI;


	/**
	 * Costructor
	 */
	public function __construct()
	{
		$this->CI =& get_instance();
		log_message('info', "[MY_hooks] -> Initialized");
	}


	/**
	 * Stores the name of the current uri in the session as 'previous_page'.
	 * This allows redirects to take us back to the previous page without
	 * relying on inconsistent browser support or spoofing.
	 *
	 * Called by the "post_controller" hook.
	 *
	 * @access public
	 * @return void
	 */
	public function set_previous_page()
	{
		if (!class_exists('CI_Session'))
		{
			$this->CI->load->library('session');
		}
		$this->CI->session->set_userdata('previous_page', current_url());
	}
}
