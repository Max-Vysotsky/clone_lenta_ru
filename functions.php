<?php
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Left Sidebar', 'lenta_ru' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widget with current course of valut' ),
        'before_widget' => '<div id="%1$s" class="widget curse_widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="bold">',
        'after_title'   => '</h6>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Right Sidebar', 'lenta_ru' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Widget with current course of valut' ),
        'before_widget' => '<div id="%1$s" class="widget curse_widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );


function lenta_ru__customize_register( $wp_customize ) {
     //All our sections, settings, and controls will be added here

    // add input box in control box 

     $wp_customize->add_setting( 'social-network_vk' , array(
      'default'   => 'https://vk.com',
      'transport' => 'refresh',
   ));
      $wp_customize->add_setting( 'social-network_facebook' , array(
      'default'   => 'https://facebook.com',
      'transport' => 'refresh',
   ));
       $wp_customize->add_setting( 'social-network_twitter' , array(
      'default'   => 'https://twitter.com',
      'transport' => 'refresh',
   ));
        $wp_customize->add_setting( 'social-network_ok' , array(
      'default'   => 'https://ok.ru',
      'transport' => 'refresh',
   ));
      $wp_customize->add_setting( 'social-network_youtube' , array(
      'default'   => 'https://www.youtube.com',
      'transport' => 'refresh',
   ));
     $wp_customize->add_setting( 'social-network_telegram' , array(
      'default'   => 'https://t.me/',
      'transport' => 'refresh',
   ));
      $wp_customize->add_setting( 'social-network_instagram' , array(
      'default'   => 'https://www.instagram.com',
      'transport' => 'refresh',
   ));

   // setting control box title and priotiry output

  $wp_customize->add_section( 'social-links' , array(
      'title'      => __( 'social settings', 'lenta_ru' ),
      'priority'   => 30,
  ) );

  $wp_customize->add_control( 'social-network_vk', array(
    'label'      => __( 'vk url of social-network', 'lenta_ru' ),
    'section'    => 'social-links',
    'settings'   => 'social-network_vk',
    'type' => 'text',
  ));
  $wp_customize->add_control( 'social-network_facebook', array(
    'label'      => __( 'facebook url of social-network', 'lenta_ru' ),
    'section'    => 'social-links',
    'settings'   => 'social-network_facebook',
    'type' => 'text',
  ));
 $wp_customize->add_control( 'social-network_twitter', array(
    'label'      => __( 'twitter url of social-network', 'lenta_ru' ),
    'section'    => 'social-links',
    'settings'   => 'social-network_twitter',
    'type' => 'text',
  ));
  $wp_customize->add_control( 'social-network_ok', array(
    'label'      => __( 'odnoklasniki url of social-network', 'lenta_ru' ),
    'section'    => 'social-links',
    'settings'   => 'social-network_ok',
    'type' => 'text',
  ));
  $wp_customize->add_control( 'social-network_youtube', array(
    'label'      => __( 'youtube url of social-network', 'lenta_ru' ),
    'section'    => 'social-links',
    'settings'   => 'social-network_youtube',
    'type' => 'text',
  ));
  $wp_customize->add_control( 'social-network_telegram', array(
    'label'      => __( 'telegram url of social-network', 'lenta_ru' ),
    'section'    => 'social-links',
    'settings'   => 'social-network_telegram',
    'type' => 'text',
  ));
  $wp_customize->add_control( 'social-network_instagram', array(
    'label'      => __( 'instagram url of social-network', 'lenta_ru' ),
    'section'    => 'social-links',
    'settings'   => 'social-network_instagram',
    'type' => 'text',
  ));
// $wp_customize->remove_section( 'fl-header-logo' ); 
}
add_action( 'customize_register', 'lenta_ru__customize_register' );

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'lenta_ru_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function lenta_ru_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on lenta_ru, use a find and replace
		 * to change 'lenta_ru' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lenta_ru', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'lenta_ru' ),
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
				'lenta_ru_custom_background_args',
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
add_action( 'after_setup_theme', 'lenta_ru_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lenta_ru_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lenta_ru_content_width', 640 );
}
add_action( 'after_setup_theme', 'lenta_ru_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lenta_ru_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'lenta_ru' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'lenta_ru' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'lenta_ru_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lenta_ru_scripts() {
  wp_enqueue_style( 'main-reset',get_template_directory_uri() . '/css/reset.css', array(), null, 'all' );
	wp_enqueue_style( 'main-styles',get_template_directory_uri() . '/css/main.css', array(), null, 'all' );
  wp_enqueue_style( 'main-wp-styles',get_template_directory_uri() . '/style.css', array(), null, 'all' );
	wp_style_add_data( 'lenta_ru-style', 'rtl', 'replace' );
	wp_enqueue_script( 'lenta_ru-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lenta_ru_scripts' );

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

