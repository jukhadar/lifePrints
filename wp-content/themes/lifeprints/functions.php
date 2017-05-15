<?php 
	
	function lifePrints_resources(){

		wp_enqueue_style('style', get_stylesheet_uri());
		wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css',false,'1.1','all');
		wp_enqueue_style( 'skeleton', get_template_directory_uri() . '/css/skeleton.css',false,'1.1','all');
		wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css',false,'1.1','all');
	}
add_action('wp_enqueue_scripts','lifePrints_resources');



register_nav_menus( array(
	'primary' => 'Primary Menu',
	'footer' => 'Footer Menu',
) );


function lifeprints_setup(){
	//Add featured image support
	add_theme_support('post-thumbnails');
} 
add_action('after_setup_theme', 'lifeprints_setup');