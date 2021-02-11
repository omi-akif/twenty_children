<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('activate_menu_method')) {
    function activate_menu_method($method) {
        // Getting CI class instance.
        $CI = get_instance();
        // Getting router class to active.
        $class = $CI->router->fetch_method();
        return ($class == $method) ? 'current' : '';
    }
}

if(!function_exists('active_menu_class')) {
  	function activate_menu_class($controller) {
	    // Getting CI class instance.
	    $CI = get_instance();
	    // Getting router class to active.
	    $class = $CI->router->fetch_class();
	    return ($class == $controller) ? 'current' : '';
  	}
}

if (!function_exists('backend_activate_menu_method')) {
    function backend_activate_menu_method($method) {
        // Getting CI class instance.
        $CI = get_instance();
        // Getting router class to active.
        $class = $CI->router->fetch_method();
        return ($class == $method) ? 'active' : '';
    }
}

if(!function_exists('backend_active_menu_class')) {
    function backend_activate_menu_class($controller) {
      // Getting CI class instance.
      $CI = get_instance();
      // Getting router class to active.
      $class = $CI->router->fetch_class();
      return ($class == $controller) ? 'active' : '';
    }
}