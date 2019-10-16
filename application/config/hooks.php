<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

// Allows us to perform good redirects to previous pages.
$hook['post_controller'][] = array(
	'class'         => 'MY_hooks',
	'function'      => 'set_previous_page',
	'filename'      => 'MY_hooks.php',
	'filepath'      => 'hooks',
	'params'        => ''
);
