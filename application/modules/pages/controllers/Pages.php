<?php defined('BASEPATH') OR exit('No direct script access allowed');



/**
* Pages Controller
*
* @package  	application\modules\pages\controllers\Pages.php
* @category		Module Controller
* @author		EstateDesign DevTeam | Rüdiger Renkert - renkert.net
* @link			https://renkert.net
* @copyright	renkert.net | CCM! | Rüdiger Renkert
* @version		1.0.0
*
*/




class Pages extends MY_Controller
{

	public $_pages 	= array('about', 'info/internal/about', 'privacy_policy', 'careers', 'careers/london/designer');
	public $previous_page;



	public function __construct()
	{
		parent::__construct();

		if (!class_exists('CI_Session')) {
			$this->load->library('session');
		}
		$this->previous_page = $this->session->userdata('previous_page');
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

		$this->index($url_segments);
	}



	/**
	 * Page method
	 * @param array $url_segments The URL segments.
	 */

	public function index( $url_segments )
	{
		//--> If the URI has been passed as an array, implode to create a string of uri segments
		is_array($url_segments) && $url_segments = trim(implode('/', $url_segments), '/');

		//--> $uri gets shortened so we save the original
		$original_uri 	= $url_segments;


		//--> I simulate a database call at this moment
		$page 			= in_array( $original_uri , $this->_pages) ? $original_uri : '';

		//echo $page;
		//$page 			= $this->pages_model->find_by('uri', $original_uri);

		if(	isset($page) && !empty($page) ) {
			$data = array();
			$this->template->render( $page , NULL, $data);
		}
		else {
			$data['page'] = $original_uri;
			$this->template->render( '404', 'error', $data );
		}

	}

}
