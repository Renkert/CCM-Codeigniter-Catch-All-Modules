<?php defined('BASEPATH') OR exit('No direct script access allowed');



/**
* Home Controller
*
* @package  	application\controllers\Home.php
* @category		Controller
* @author		EstateDesign DevTeam | Rüdiger Renkert - renkert.net
* @link			https://renkert.net
* @copyright	renkert.net | CCM! | Rüdiger Renkert
* @version		1.0.0
*
*/




class Tests extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	function old_remap($method)
	{
		exit($method);
		$param_offset = 2;

		// Default to index
		if ( ! method_exists($this, $method))
		{
			// We need one more param
			$param_offset 	= 1;
			$method 		= 'index';
		}

		// Since all we get is $method, load up everything else in the URI
		$params = array_slice($this->uri->rsegment_array(), $param_offset);


		// Call the determined method with all params
		call_user_func_array(array($this, $method), $params);
	}


	/**
	 * Catch all requests to this page in one mega-function.
	 *
	 * @param string $method The method to call.
	 */
	public function _remap($method)
	{
		//-> This page has been routed to with pages/view/whatever
		if ($this->uri->rsegment(1, '').'/'.$method == 'pages/pages')
		{
			$url_segments = $this->uri->total_rsegments() > 0 ? array_slice($this->uri->rsegment_array(), 2) : null;
		}
		// not routed, so use the actual URI segments
		else
		{
			$url_segments = $this->uri->total_segments() > 0 ? $this->uri->segment_array() : null;
		}

		//exit_array($url_segments);
		$this->test_me($url_segments);
		//$this->router->_validate_request($url_segments);

	}



	public function test_me( $url_segments )
	{

		$class 		= 'docs';
		$method		= 'index';
		$filepath 	= APPPATH . 'controllers/pages/' . $class . '.php';

		if (file_exists($filepath)) {
			include_once ($filepath);
		}

		//require_once( $controller.'.php' );

		$this->_ci_controllers[strtolower($class)] = new $class();
		$controller = $this->_ci_controllers[strtolower($class)];
	}

}
