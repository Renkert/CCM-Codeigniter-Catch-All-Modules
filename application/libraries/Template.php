<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



/**
* Template Library
* Not really a library, just a builder to easy get some content
*
* @package  	application\libraries\Template.php
* @category		Library
* @author		EstateDesign DevTeam | Rüdiger Renkert - renkert.net
* @link			https://renkert.net
* @copyright	renkert.net | CCM! | Rüdiger Renkert
* @version		1.0.0
*
*/



class Template
{

    public function render( $view = NULL, $_layout = NULL, $_data = array() ) {
        $data['view']			= $view;
        $data['head'] 			= "includes/topbar";
        $data['left_menu'] 		= "includes/left_menu";
        $data 					= array_merge($data, $_data);
		$layout 				= isset( $_layout ) ? $_layout : 'index';
        ci()->load->view('layouts/' . $layout, $data);
    }

}
