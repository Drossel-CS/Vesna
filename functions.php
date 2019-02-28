<?php
/**
 * Vesna functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Vesna
 */

if ( ! function_exists( 'vesna_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function vesna_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Vesna, use a find and replace
		 * to change 'vesna' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'vesna', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'vesna' ),
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
		add_theme_support( 'custom-background', apply_filters( 'vesna_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'vesna_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vesna_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'vesna_content_width', 640 );
}
add_action( 'after_setup_theme', 'vesna_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vesna_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'vesna' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'vesna' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Brands', 'vesna' ),
		'id'            => 'brands-1',
		'description'   => esc_html__( 'Add widgets here.', 'vesna' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-menu-1', 'vesna' ),
		'id'            => 'footer-menu-1',
		'description'   => esc_html__( 'Add widgets here.', 'vesna' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-menu-2', 'vesna' ),
		'id'            => 'footer-menu-2',
		'description'   => esc_html__( 'Add widgets here.', 'vesna' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-menu-3', 'vesna' ),
		'id'            => 'footer-menu-3',
		'description'   => esc_html__( 'Add widgets here.', 'vesna' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer-menu-4', 'vesna' ),
		'id'            => 'footer-menu-4',
		'description'   => esc_html__( 'Add widgets here.', 'gustoe' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
	) );
}
add_action( 'widgets_init', 'vesna_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vesna_scripts_styles() {
	wp_enqueue_style( 'vesna-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery-update', get_template_directory_uri() . '/js/jquery-2.2.4.min.js', array(), '2.2.4', true );
	
	wp_enqueue_script( 'vesna-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'vesna-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_style( 'hamburgers', get_stylesheet_directory_uri() . '/css/css/hamburgers.css' );

}
add_action( 'wp_enqueue_scripts', 'vesna_scripts_styles' );

/**
 * Shortcode activation
 */
add_filter('widget_text', 'shortcode_unautop');
add_filter('widget_text', 'do_shortcode');



/*
==================================================
Include Fontello icon
==================================================
*/

function wp_load_fontello() { 
	wp_enqueue_style( 'wp-fontello', get_stylesheet_directory_uri() . '/css/css/fontello.css' );
	 
	}
	add_action( 'wp_enqueue_scripts', 'wp_load_fontello' );

/*
* Custom Google font
*/
add_action('wp_enqueue_scripts', 'add_google_fonts');
function add_google_fonts(){
	wp_enqueue_style('google_web_fonts','https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900|Open+Sans:400,400i,600,600i,700,700i,800,800i&amp;subset=latin-ext');
}

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

