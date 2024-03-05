<?php
/**
 * lalamdesign functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lalamdesign
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! defined( 'BUILD_URI' ) ) {
	// Replace the version number of the theme on each release.
	define( 'BUILD_URI', get_template_directory_uri() . '/build' );
}

if ( ! defined( 'ASSETS_URI' ) ) {
    // Replace the version number of the theme on each release.
    define( 'ASSETS_URI', get_template_directory_uri() . '/assets' );
}


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lalamdesign_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on lalamdesign, use a find and replace
		* to change 'lalamdesign' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'lalamdesign', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'lalamdesign' ),
		)
	);

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
			'lalamdesign_custom_background_args',
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
add_action( 'after_setup_theme', 'lalamdesign_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lalamdesign_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lalamdesign_content_width', 640 );
}
add_action( 'after_setup_theme', 'lalamdesign_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lalamdesign_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'lalamdesign' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'lalamdesign' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'lalamdesign_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lalamdesign_scripts() {
	wp_enqueue_style( 'lalamdesign-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'lalamdesign-style', 'rtl', 'replace' );

	wp_enqueue_script( 'lalamdesign-navigation', BUILD_URI . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

    // Enqueue styles
    wp_enqueue_style('animate-css', ASSETS_URI. '/animate/animate.min.css');
    wp_enqueue_style('spin-css', BUILD_URI . '/css/spin.css');
    wp_enqueue_style('nunito-font', 'https://fonts.googleapis.com/css?family=Nunito');
    wp_enqueue_style('niramit-font', 'https://fonts.googleapis.com/css?family=Niramit&display=swap&subset=vietnamese');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.css');
    wp_enqueue_style('animate-css-custom', BUILD_URI . '/css/animate.css');
    wp_enqueue_style('app-css', BUILD_URI . '/css/app.css');
    wp_enqueue_style('projectdetail-css', BUILD_URI . '/css/projectdetail.css');

    // Enqueue scripts
    wp_enqueue_script('jquery', BUILD_URI . '/js/jquery.min.js', array(), null, true);
    wp_enqueue_script('wow-js', ASSETS_URI . '/wow/wow.min.js', array(), null, true);
    wp_enqueue_script('custom-wow-init', BUILD_URI . '/js/wow-init.js', array('wow-js'), null, true);
}
add_action( 'wp_enqueue_scripts', 'lalamdesign_scripts' );

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
