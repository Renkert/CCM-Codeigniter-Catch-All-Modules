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




class Projects extends MY_Controller
{

	public function index()
	{
		$data['dir']			= __DIR__;
		$this->template->render('projects', NULL, $data);
	}

	public function design()
	{
		$data['dir']			= __DIR__;
		$this->template->render('design', NULL, $data);
	}

	public function consulting()
	{
		$data['dir']			= __DIR__;
		$this->template->render('consulting', NULL, $data);
	}

}
