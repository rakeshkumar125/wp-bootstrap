<?php

//Including required Path
include_once get_template_directory().'/inc/wp-bootstrap-navwalker.php.php';
register_nav_menus( array(
	'primary' => 'Main Navigation Menu',
	'footer' => 'Footer Menu',
) );

add_action('wp_enqueue_scripts', 'theme_assets');
function theme_assets(){
	
	//wp_enqueue_script('');
 wp_enqueue_style('bootstrap',get_template_directory_uri()."/css/bootstrap.min.css");
 wp_enqueue_style('theme-css',get_template_directory_uri()."/style.css");
 //wp_enqueue_style('ie10-viewport',get_template_directory_uri()."/css/ie10-viewport-bug-workaround.css");

 wp_enqueue_script('warning-js',get_template_directory_uri()."/js/ie-emulation-modes-warning.js",array('jquery'),'0.1',false);
 wp_enqueue_script('bootstrap-js',get_template_directory_uri()."/js/bootstrap.min.js",array('jquery'),'0.1',false);
 wp_enqueue_script('ie-10-compatiblity',get_template_directory_uri()."/js/ie10-viewport-bug-workaround.js",array('jquery'),'0.1',false);

}

?>