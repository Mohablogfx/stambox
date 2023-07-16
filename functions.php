<?php
if(!defined('STYLESHEET_DIR')){
	define( 'STYLESHEET_DIR', get_template_directory() );
}

if(!defined('STYLESHEET_DIR_URI')){
	define( 'STYLESHEET_DIR_URI', get_template_directory_uri() );
}


if ( ! function_exists( 'stambox_register_nav_menu' ) ) {

	function stambox_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'text_domain' )
		) );
	}
	add_action( 'after_setup_theme', 'stambox_register_nav_menu', 0 );
}

if ( ! function_exists( 'stambox_register_footer_widget' ) ) {

	function stambox_register_footer_widget(){
		$bootstrap_class_widget_footer = "col-xs-12 col-sm-6 col-md-4 col-lg-4 ms-item pull-left";
        register_sidebar(array(
            'name' => __( 'Footer' ),
            'id' => 'footer-stambox',
            'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets' ),
            'before_widget' => '<div id="%1$s" class="'.$bootstrap_class_widget_footer.' %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<div class="widget-title"><div>',
            'after_title' => '</div></div>',
        ));
	}
    add_action('widgets_init','stambox_register_footer_widget');
}

if ( ! function_exists( 'stambox_load_scripts' ) ) {

	function stambox_load_scripts(){
        wp_enqueue_script('stambox-css', STYLESHEET_DIR_URI . '/assets/stylesheets/style.css', array(), );
        wp_enqueue_script('stambox-js', STYLESHEET_DIR_URI . '/assets/javascripts/main.js', array(), '', true);
	}
    add_action('wp_enqueue_scripts', 'stambox_load_scripts');
}