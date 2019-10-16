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


	/**
	 * Catch all requests to this page in one mega-function.
	 *
	 * @param string $method The method to call.
	 */
	public function _remap($method)
	{
		//-> This page has been routed to with pages/view/whatever
		if ($this->uri->rsegment(1, '').'/'.$method == 'pages/view')
		{
			$url_segments = $this->uri->total_rsegments() > 0 ? array_slice($this->uri->rsegment_array(), 2) : null;
		}
		// not routed, so use the actual URI segments
		else
		{
			$url_segments = $this->uri->total_segments() > 0 ? $this->uri->segment_array() : null;
		}

		$this->test_me($url_segments);
	}



	public function test_me( $url_segments )
	{
		print_array($url_segments);
	}

}
