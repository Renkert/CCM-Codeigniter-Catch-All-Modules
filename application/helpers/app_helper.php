<?php defined('BASEPATH') || exit('No direct script access allowed');

//--- EASY INSTANCE ------------------------------------------------------------
if (!function_exists('ci')) {

	function &ci($class=null, &$object=null)
	{
		$CI = get_instance();
		if ($class && $object == null) {
			$class = strtolower($class);
			if ( isset($CI->$class) ) {
				return $CI->$class;
			}
			else {
				$CI->load->library($class);
				return $CI->$class;
			}
		}
		elseif ($class && $object) {
			$CI->$class = &$object;
		}
		return $CI;
	}
}

//--- ASSET URL ----------------------------------------------------------------
if (!function_exists('asset_url')) {

   function asset_url( $what = '' ) {
	   return base_url('assets/'.$what);
   }
}

//--- VIEW ARRAY ---------------------------------------------------------------
if ( ! function_exists('view_array'))
{
	function view_array ( $array )
	{
        $total	 	= count($array);
		$result 	= 	'<ul style="list-style-type: none;">' . PHP_EOL;

		if (is_array($array))
		{
			foreach ($array as $key => $val)
			{
				if ( is_array( $val ) ) {
					$result .= '<li>['.$key.'] => ' . view_array($val) . '</li>' . PHP_EOL;
				}
				else {
					$result .= '<li>['.$key.'] => ' . $val . '</li>' . PHP_EOL;
					//htmlspecialchars((string)$key)
				}
			}
		}
		else
		{
			$result .= '<li>NO ARRAY</li>' . PHP_EOL;
		}
		$result .= 	'</ul>' . PHP_EOL;
		return $result;
	}
}



//--- PRINT ARRAY --------------------------------------------------------------
if ( ! function_exists('print_array'))
{
	function print_array ( $array )
	{
		list($callee) 		= debug_backtrace();

		$result = 	'';
		$result.=	'<!-- Loop! array display in a table -->' . PHP_EOL .
					'<fieldset style="font-family: monospace; color: #62a8ea; margin: 25px;">' . PHP_EOL .
					'<legend style="font-size: 14px">'.$callee['file'].'<span style="color: #DB177E">@ line: '.$callee['line'].'</span></legend>' . PHP_EOL .
					'<pre style="background: #000000; padding: 50px; color: #FFF">';
		$result.=	view_array($array);
		$result.=	'</pre>' . PHP_EOL . '</fieldset>' . PHP_EOL;
		echo $result;
	}
}

//--- EXIT ARRAY --------------------------------------------------------------
if ( ! function_exists('exit_array'))
{
	function exit_array ( $array )
	{
		list($callee) 		= debug_backtrace();

		$result = 	'';
		$result.=	'<!-- Loop! array display in a table -->' . PHP_EOL .
					'<fieldset style="font-family: monospace; color: #62a8ea; margin: 25px;">' . PHP_EOL .
					'<legend style="font-size: 14px">'.$callee['file'].'<span style="color: #DB177E">@ line: '.$callee['line'].'</span></legend>' . PHP_EOL .
					'<pre style="background: #000000; padding: 50px; color: #FFF">';
		$result.=	view_array($array);
		$result.=	'</pre>' . PHP_EOL . '</fieldset>' . PHP_EOL;
		exit($result);
	}
}
