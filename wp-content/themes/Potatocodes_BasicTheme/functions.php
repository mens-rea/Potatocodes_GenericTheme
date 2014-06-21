<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    //Setup Primary Navigation
    add_action( 'after_setup_theme', 'wpt_setup' );
        if ( ! function_exists( 'wpt_setup' ) ):
            function wpt_setup() {  
                register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
            } 
        endif;

    //registering bootstrap functions
    function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
    }
    add_action( 'init', 'wpt_register_js' );
    function wpt_register_css() {
        wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'bootstrap.min' );
    }
    add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

    //custom post type for homeslider

    add_action( 'init', 'create_post_type' );
        function create_post_type() {
            register_post_type("Home_Slider",
            array(
                'labels' => array('name' => __("Home Slider"), 'singular_name' => __("Home Slider")),
                'public' => true,
                'has_archive' => true,
                'supports' => array('title', 'editor', 'thumbnail')
            )
          );
        }
    add_theme_support( 'post-thumbnails' );

    // Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');

?>