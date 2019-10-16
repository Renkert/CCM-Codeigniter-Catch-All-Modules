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




class Docs extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	

	public function index()
	{
		$this->template->render('docs');
	}

}
