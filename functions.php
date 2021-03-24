<?php

function mywp_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'mywp_theme_support');

function mywp_menus(){
    $locations = array(
        'primary' => "Desktop Primary Leftside Bar",
        'footer' => "Footer Menu",
    );

    register_nav_menus($locations);
}

add_action('init', 'mywp_menus');

 function hdaya_reg_css(){
     wp_enqueue_style('mywp-css', get_template_directory_uri() . "/style.css", array('mywp-bootstrap'), '1.2', 'all');
     wp_enqueue_style('mywp-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
     wp_enqueue_style('mywp-ajax', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
 }

 add_action('wp_enqueue_scripts', 'hdaya_reg_css');

 function hdaya_reg_js(){
    wp_enqueue_script('mywp-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1');
    wp_enqueue_script('mywp-popperjs', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0');
    wp_enqueue_script('mywp-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1');
    wp_enqueue_script('mywp-jss', get_template_directory_uri(). "/assets/js/main.js", array(), '1.0');
    wp_enqueue_script('mywp-jKuery', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js', array(), '5.0.0');
    wp_enqueue_script("this.bootstrap","https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js",array(), '5.0.0');

    
}

add_action('wp_enqueue_scripts', 'hdaya_reg_js');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function mywp_widarea() {

	register_sidebar( array(
		'name'          => 'Left Sidebar Area',
		'id'            => 'sidebar_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'mywp_widarea' );

/**
 * Register our footers and widgetized areas.
 *
 */
function mywp_footarea() {

	register_sidebar( array(
		'name'          => 'Footer Widget Area',
		'id'            => 'footer_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'mywp_footarea' );
?>