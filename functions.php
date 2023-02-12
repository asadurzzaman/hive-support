<?php
/**
 * hive support functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hive_support
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hive_support_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on hive support, use a find and replace
		* to change 'hive-support' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'hive-support', get_template_directory() . '/languages' );

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
			'main-menu' => esc_html__( 'Primary', 'hive-support' ),
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
			'hive_support_custom_background_args',
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
	add_image_size('blog-post', 450, 306, true);
	add_image_size('blog-post-big', 450, 306, true);
	add_image_size('blog-widget', 90, 92, true);
}
add_action( 'after_setup_theme', 'hive_support_setup' );
 
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hive_support_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hive_support_content_width', 640 );
}
add_action( 'after_setup_theme', 'hive_support_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hive_support_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'hive-support' ),
			'id'            => 'blog-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'hive-support' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar One', 'hive-support' ),
			'id'            => 'footer-sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'hive-support' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar Two', 'hive-support' ),
			'id'            => 'footer-sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'hive-support' ),
			'before_widget' => '<div class="footer_widget widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="footer_widget__title">',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar Three', 'hive-support' ),
			'id'            => 'footer-sidebar-3',
			'description'   => esc_html__( 'Add widgets here.', 'hive-support' ),
			'before_widget' => '<div class="footer_widget widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="footer_widget__title">',
			'after_title'   => '</h4>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Sidebar Four', 'hive-support' ),
			'id'            => 'footer-sidebar-4',
			'description'   => esc_html__( 'Add widgets here.', 'hive-support' ),
			'before_widget' => '<div class="footer_widget widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="footer_widget__title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'hive_support_widgets_init' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Enqueue Style and Js file.
 */
require get_template_directory() . '/inc/enqueue.php';

/**
 * Widget Development.
 */
require get_template_directory() . '/inc/widget.php';

/**
 * Widget Development.
 */
require get_template_directory() . '/inc/comment-helper.php';

/**
 * Shordcode Development.
 */
require get_template_directory() . '/inc/shordcode.php';

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
 * kirki installer .
 */
require get_template_directory() . '/inc/class-kirki-installer-section.php';

/**
 * kirki installer .
 */
require get_template_directory() . '/inc/kirki.php';

