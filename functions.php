<?php
/**
 * PizzaDeli functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package PizzaDeli
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'pizzadeli_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pizzadeli_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on PizzaDeli, use a find and replace
		 * to change 'pizzadeli' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pizzadeli', get_template_directory() . '/languages' );

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
		// register_nav_menus(
		// 	array(
		// 		'menu-1' => esc_html__( 'Main Menu', 'pizzadeli' ),
		// 	)
		// );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'pizzadeli_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'pizzadeli_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pizzadeli_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pizzadeli_content_width', 640 );
}
add_action( 'after_setup_theme', 'pizzadeli_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pizzadeli_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'pizzadeli' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'pizzadeli' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'pizzadeli_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function pizzadeli_scripts() {
	wp_enqueue_style( 'pizzadeli-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_script( 'pizzadeli-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_style( 'pizzadeli-open-iconic-bootstrap', get_template_directory_uri() . '/css/open-iconic-bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'pizzadeli-animate', get_template_directory_uri() . '/css/animate.css', array(), _S_VERSION );
	wp_enqueue_style( 'pizzadeli-owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'pizzadeli-owl-theme-default', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'pizzadeli-magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), _S_VERSION );
	wp_enqueue_style( 'pizzadeli-aos', get_template_directory_uri() . '/css/aos.css', array(), _S_VERSION );
	wp_enqueue_style( 'pizzadeli-ionicons', get_template_directory_uri() . '/css/ionicons.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'pizzadeli-bootstrap-datepicker', get_template_directory_uri() . '/css/bootstrap-datepicker.css', array(), _S_VERSION );
	wp_enqueue_style( 'pizzadeli-jquery-timepicker', get_template_directory_uri() . '/css/jquery.timepicker.css', array(), _S_VERSION );
	wp_enqueue_style( 'pizzadeli-flaticon', get_template_directory_uri() . '/css/flaticon.css', array(), _S_VERSION );
	wp_enqueue_style( 'pizzadeli-icomoon', get_template_directory_uri() . '/css/icomoon.css', array(), _S_VERSION );
	wp_enqueue_style( 'pizzadeli-main', get_template_directory_uri() . '/css/style.css', array(), _S_VERSION );

	if( !is_admin() ){
		wp_register_style('poppins', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');
		wp_enqueue_style('poppins');
	
		wp_register_style('josefin-sans', 'https://fonts.googleapis.com/css?family=Josefin+Sans');
		wp_enqueue_style('josefin-sans');
	
		wp_register_style('nothing-you-could-do', 'https://fonts.googleapis.com/css?family=Nothing+You+Could+Do');
		wp_enqueue_style('nothing-you-could-do');
	}

	wp_enqueue_script( 'pizzadeli-jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pizzadeli-jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate-3.0.1.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pizzadeli-popper', get_template_directory_uri() . '/js/popper.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pizzadeli-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pizzadeli-jquery-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pizzadeli-jquery-waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pizzadeli-jquery-stellar', get_template_directory_uri() . '/js/jquery.stellar.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pizzadeli-owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pizzadeli-jquery-magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pizzadeli-aos', get_template_directory_uri() . '/js/aos.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pizzadeli-jquery-animateNumber', get_template_directory_uri() . '/js/jquery.animateNumber.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pizzadeli-bootstrap-datepicker', get_template_directory_uri() . '/js/bootstrap-datepicker.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pizzadeli-jquery-timepicker', get_template_directory_uri() . '/js/jquery.timepicker.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pizzadeli-scrollax', get_template_directory_uri() . '/js/scrollax.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pizzadeli-maps-googleapis','https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false', array(), _S_VERSION, true );
	wp_enqueue_script( 'pizzadeli-google-map', get_template_directory_uri() . '/js/google-map.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'pizzadeli-main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'pizzadeli_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'PizzaDeli Settings',
		'menu_title'	=> 'PizzaDeli',
		'menu_slug' 	=> 'pizzadeli-settings',
		'capability'	=> 'edit_posts',
		//'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Menu Settings',
		'menu_title'	=> 'Menu',
		'parent_slug'	=> 'pizzadeli-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Informations Settings',
		'menu_title'	=> 'Informations',
		'parent_slug'	=> 'pizzadeli-settings',
	));

		acf_add_options_sub_page(array(
		'page_title' 	=> 'Sliders Settings',
		'menu_title'	=> 'Sliders',
		'parent_slug'	=> 'pizzadeli-settings',
	));
	
}

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');