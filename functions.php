<?php
/**
 * novarca functions and definitions
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package novarca
 */

if ( ! function_exists( 'novarca_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function novarca_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on novarca, use a find and replace
		 * to change 'novarca' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'novarca', get_template_directory() . '/languages' );
		
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
			'menu-1' => esc_html__( 'Primary', 'novarca' ),
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
		add_theme_support( 'custom-background', apply_filters( 'novarca_custom_background_args', array(
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
add_action( 'after_setup_theme', 'novarca_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function novarca_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'novarca_content_width', 640 );
}

add_action( 'after_setup_theme', 'novarca_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function novarca_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'novarca' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'novarca' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

add_action( 'widgets_init', 'novarca_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function novarca_scripts() {
	
	wp_enqueue_style('novarca-opensans', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway&display=swap', '', '', '');
	wp_enqueue_style( 'novarca-fullpage', get_stylesheet_directory_uri() . '/css/fullpage.min.css' );
	wp_enqueue_style( 'novarca-fontawesome', get_stylesheet_directory_uri() . '/css/fontawesome.min.css' );
	// wp_enqueue_style( 'novarca-mfp', get_stylesheet_directory_uri() . '/css/magnific-popup.css' );
	wp_enqueue_style( 'novarca-site', get_stylesheet_directory_uri() . '/css/site.css', '', time(), 'all' );
	
	wp_enqueue_script( 'novarca-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'novarca-jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '20151215', true );
	
	// fullpage
	wp_enqueue_script('novarca-fullpage', get_template_directory_uri() . '/js/fullpage.min.js', array(), '', true );
	
	// stellar
	wp_enqueue_script('novarca-parallax', get_template_directory_uri() . '/js/jquery.stellar.js', array(), '', true );
	
	// magnific-popup
	// wp_enqueue_script('novarca-mfp', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '', true );
	
	// custom script
	wp_enqueue_script( 'novarca-site', get_template_directory_uri() . '/js/site.min.js', array(), '20151215', true );
}

add_action( 'wp_enqueue_scripts', 'novarca_scripts' );

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

/**
 * Load Novarca Custom Post Types
 */
require get_template_directory() . '/inc/novarca-cpt.php';

/**
 * Add page slug name to body class
 */
add_filter( 'body_class', function( $classes ) {
	if ( is_page() ) {
		global $post;
		$classes[] = $post->post_name;
	}
	return $classes;
} );


if( function_exists('acf_add_options_page') ) {
	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title' 	=> 'Theme General Settings',
			'menu_title'	=> 'Theme Settings',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));
	}
}