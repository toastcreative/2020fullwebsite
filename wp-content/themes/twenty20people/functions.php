<?php
/**
 *  functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package twenty20people
 */

if ( ! function_exists( 'twenty20people_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function twenty20people_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on twenty20people, use a find and replace
	 * to change 'twenty20people' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'twenty20people', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'twenty20people' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'twenty20people_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'twenty20people_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function twenty20people_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'twenty20people_content_width', 640 );
}
add_action( 'after_setup_theme', 'twenty20people_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twenty20people_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'twenty20people' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'twenty20people' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'twenty20people_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function twenty20people_scripts() {
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/styles/bootstrap.min.css');
	
	wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css');

	wp_enqueue_style( 'slick-css', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css');
	
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/styles/animate.css' );

	wp_enqueue_style( 'twenty20people-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery.min.js', array(), '3.1.0', false );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', true );

	wp_enqueue_script( 'slick-js', '//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js', array(), '3.3.7', true );

	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), '1.0', true );

	wp_enqueue_script( 'twenty20people-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'twenty20people-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'twenty20people_scripts' );

/**
* Load Redux framework config file.
*/
require_once (dirname(__FILE__) . '/sample/barebones-config.php');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


require get_template_directory(). '/metabox.php';

add_action( 'init', 'create_post_type' );
	function create_post_type() {

	  // work
	  $projects = array(
			'name' => _x( 'Memberships', 'post type general name' ),
			'singular_name' => _x( 'Membership', 'post type singular name' ),
			'add_new' => _x( 'Add New', 'Membership' ),
			'add_new_item' => __( 'Add new Membership' ),
			'edit_item' => __( 'Edit Membership' ),
			'new_item' => __( 'New Membership' ),
			'view_item' => __( 'View Membership' ),
			'search_items' => __( 'Search Membership' ),
			'not_found' =>  __( 'No Membership found' ),
			'not_found_in_trash' => __( 'No Membership found in trash' ),
			'parent_item_colon' => ''
		);

	  register_post_type('membership',array(
		  'labels' => $projects,
		  'public' => true,
		  'supports' => array(
			'title',
			'editor',
			'page-attributes',
			'thumbnail')
		)
	  );
	 }