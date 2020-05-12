<?php // Do not close the php tag as it can cause some errors

// Load stylesheet
function load_css(){
	// Bootstrap CSS
	wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css',array(),false,'all');
	wp_enqueue_style('bootstrap');
	// Custom CSS
	wp_register_style('main',get_template_directory_uri() . '/css/main.css',array(),false,'all');
	wp_enqueue_style('main');
}

// Hook
add_action('wp_enqueue_scripts','load_css');

// Load Jquery
function include_jquery(){
	// Makes sure that jquery isn't being loaded in by anything else
	wp_deregister_script('jquery');

	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.5.1.min.js', '', 1, true);
	
	add_action('wp_enqueue_scripts', 'jquery');
}

// Hook 
add_action('wp_enqueue_scripts', 'include_jquery');

// Load JavaScript
function load_js(){
	// Bootstrap requirements
	// wp_enqueue_scripts('jquery');
	wp_register_script('bootstrapjs',get_template_directory_uri() . '/js/bootstrap.min.js','jquery',false,true);
	wp_enqueue_script('bootstrapjs');
	// Custom JS
	wp_register_script('customjs',get_template_directory_uri() . '/js/scripts.js','',1,true);
	wp_enqueue_script('customjs');
}

// Hook
add_action('wp_enqueue_scripts','load_js');

// Theme support 
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Menus
register_nav_menus(
	array(
		// location of menu => What it is called on wordpress customise
		'top-menu' => 'Top Menu Location',
		// 'top-menu' => __('Top Menu', 'theme'),
		'mobile-menu' => 'Mobile Menu Location',
		'footer-menu' => 'Footer Menu Location'
	)
);

// Controls the size of the images rendered in the browser
// ('nameOfImageSize', verticle, horizontal, croppedByWordpress)
add_image_size('smallest', 300, 300, true);
add_image_size('largest', 800, 800, false);