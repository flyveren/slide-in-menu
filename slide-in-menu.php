<?php
/*
Plugin Name: Slide in Menu
Plugin URI: http://www.flyveren.com
Description: A slide in menu plugin for twentytwelve theme
Version: 1.0
Author: -Flyveren-
Author URI: http://www.flyveren.com
License: GPL2
*/

/*
Share the hell out of it - no copyrights
*/
?>


<?php 
if(!class_exists('Slide_in_Menu')){
		class Slide_in_Menu{
			
			// construct the plugin object			
			public function __construct(){
				
				// register actions
				
				}// end public __construct
				
			// Activate the plugin
			public static function activate(){
				
				// do nothing
				
				}// end public static function activate()
			
			// Deactivate the plugin
			public static function deactivate(){
				
				// do nothing
				
				}// end public static function deactivate()
								
		}// end class Slide_in_Menu
}// end Slide_in_Menu if(!class_exists(..)
	

// calling the constructor
if(class_exists('Slide_in_Menu')){
	// Installation and uninstallations hooks
	register_activation_hook(__FILE__, array('Slide_in_Menu', 'activate'));
	register_deactivation_hook(__FILE__, array('Slide_in_Menu','deactivate'));
	
	// Instantiate the plugin class
	$slide_in_menu = new Slide_in_Menu();	
}
?>


<?php
function my_scripts_method() {
	wp_enqueue_script(
		'slideinmenuscript',
		plugins_url( '/js/slide_in_menu.js' , __FILE__ )		
	);
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );
?>


