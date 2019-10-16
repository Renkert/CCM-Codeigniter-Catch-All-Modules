<?php defined('BASEPATH') OR exit('No direct script access allowed');



/**
* Template Library
* Not really a library, just a builder to easy get some content
*
* @package  	application\core\MY_Controller.php
* @category		Controller
* @author		EstateDesign DevTeam | Rüdiger Renkert - renkert.net
* @link			https://renkert.net
* @copyright	renkert.net | CCM! | Rüdiger Renkert
* @version		1.0.0
*
*/



class MY_Controller extends CI_Controller
{

	// --- CONSTRUCTOR ---------------------------------------------------------
	public function __construct()
    {
		// --- LOGFILE ---------------------------------------------------------
		log_message('info', "MY_Controller -> Initialized");
        parent::__construct();
	}


}
