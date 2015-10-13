<?php
/**
 * fast functions and definitions.
 * @package fast
 */

if ( ! function_exists( 'fast_setup' ) ) :

function fast_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'fast' ),
		'logged-in-menu'  => esc_html__( 'Logged In Menu', 'fast' ),
		'logged-out-menu'  => esc_html__( 'Logged Out Menu', 'fast' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'fast_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // fast_setup
add_action( 'after_setup_theme', 'fast_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 */
function fast_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fast_content_width', 640 );
}
add_action( 'after_setup_theme', 'fast_content_width', 0 );

/**
 * Register widget area.
 */
function fast_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'fast' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'fast_widgets_init' );

/**
 * Enqueue scripts and styles for the theme.
 */
function fast_scripts() {
	//LOAD style.css via filesystem. Uses Sass to ompile '/assets/scss/style.scss' to: 'styl.css'
	wp_enqueue_style( 'fast-sass', get_stylesheet_uri(), array(), '1.0.0');
	
	//LOAD jQuery.min.js via CDN JS
	wp_enqueue_script( 'fast-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js', array(), '1.0.0', true );
	
	//LOAD Boostrap.min.js via CDN JS
	wp_enqueue_script( 'fast-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js', array(), '1.0.0', true );

	//LOAD navigation.js via filesystem
	wp_enqueue_script( 'fast-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0.0', true );

	//LOAD fast-skip-link-focus.js via filesystem
	//wp_enqueue_script( 'fast-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '1.0.0', true );
	
	//LOAD instantclick.js via CDN JS
	wp_enqueue_script( 'fast-instantclick', 'https://cdnjs.cloudflare.com/ajax/libs/instantclick/3.0.1/instantclick.min.js', array(), '1.0.0', true );
	//CALL instant click into end of footer scripts, for init
	function call_instant_click() {
		echo '<script data-no-instant>InstantClick.init();</script>';
	}
	add_action('wp_footer', 'call_instant_click', 200); //load at end
	
	
	//IF IS singlular & comments are enabled, load comment-reply.js via filesystem
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fast_scripts' );

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/extras.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/jetpack.php';


/**
 * Remove WP Header junk
 */
add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );

function dequeue_jquery_migrate( &$scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');
		$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
	}
}

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3 );

/*Removes prev and next article links*/
add_filter( 'index_rel_link', '__return_false' );
add_filter( 'parent_post_rel_link', '__return_false' );
add_filter( 'start_post_rel_link', '__return_false' );
add_filter( 'previous_post_rel_link', '__return_false' );
add_filter( 'next_post_rel_link', '__return_false' );
