<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RED_Starter_Theme
 */

if ( ! function_exists( 'red_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function red_starter_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );
	add_image_size ( 'square', 500, 500, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // red_starter_setup
add_action( 'after_setup_theme', 'red_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function red_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'red_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'red_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function red_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'red_starter_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function red_starter_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'red_starter_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function red_starter_scripts() {
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), null, true);

	wp_enqueue_script( 'script', get_template_directory_uri() . '/build/js/script.min.js', array(), '20170824', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'red_starter_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Footer', 'wpf' ),
        'id' => 'footer-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}

add_action( 'widgets_init', 'theme_slug_widgets_init' );

function add_search_box ( $items, $args ) {
	
	// only on primary menu
	if( 'primary' === $args -> theme_location )
		$items .= '<li class="menu-item menu-item-search">' . get_search_form( FALSE ) . '</li>';
	
	return $items;
}

add_filter( 'wp_nav_menu_items', 'add_search_box', 10, 2 );

function get_banner_image() {
	if(get_field("banner") && !is_post_type_archive( 'adventures' ))
	{
		if (is_front_page())
		{
			$align = 'top';
			$gradient = 'linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), ';
		}
		elseif (is_page('about'))
		{
			$align = 'bottom';
			$gradient = 'linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), ';
		}
		else
		{
			$align = 'bottom';
			$gradient = '';
		}

		return 'class="banner-image-on" style="background: '.$gradient.'url('.get_field("banner").') no-repeat center '.$align.'; background-size: cover;"';
	}
	else
	{
		return 'class="banner-image-off"';
	}
}

function get_banner_logo() {
	if (is_front_page()) {
		// return '<img src="'.get_bloginfo('template_url').'/assets/images/inhabitent-logo-full.svg'.'" style="width: 22rem; padding: 15rem 0 15rem 0;" />';
		return '<img src="'.get_bloginfo('template_url').'/assets/images/inhabitent-logo-full.svg'.'" style="width: 22rem;" />';
	}
	elseif (is_page('about')) {
		return '<p style="font-size: 3.75rem; color: white; margin: 0; padding: 23rem 0 23rem 0;"><b>ABOUT</b></p>';
	}
	else
	{
		return "";
	}
}

function get_banner_home() {
	if (is_front_page() || (get_field("banner") && !is_post_type_archive( 'adventures' ))) {
		return '<img src="'.get_bloginfo('template_url').'/assets/images/inhabitent-logo-tent-white.svg'.'" style="width: 4rem; padding: 0 0 47rem 0;"/>';
	}
	else
	{
		return '<img src="'.get_bloginfo('template_url').'/assets/images/inhabitent-logo-tent.svg'.'" style="width: 4rem;"/>';
	}
}

function get_search_icon() {
	if (is_front_page() || (get_field("banner") && !is_post_type_archive( 'adventures' ))) {
		return '<img src="'.get_bloginfo('template_url').'/assets/images/search-icon-png-white.png'.'" class="search-icon" />';
	}
	else
	{
		return '<img src="'.get_bloginfo('template_url').'/assets/images/search-icon-png-green.png'.'" class="search-icon" />';
	}
}

function get_adventure_image($image) {
	return 'style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('.$image.') no-repeat center bottom; background-size: cover;"';
}
