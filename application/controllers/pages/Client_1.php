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




class Client_1 extends MY_Controller
{

	public function index()
	{
		$data['dir']			= __DIR__;
		$this->template->render('client_1', NULL, $data);
	}

	public function logo_1()
	{
		$data['dir']			= __DIR__;
		$this->template->render('logo_1', NULL, $data);
	}

}
