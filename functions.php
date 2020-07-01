<?php
/**
 * specIn functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package specIn
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'specin_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function specin_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on specIn, use a find and replace
		 * to change 'specin' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'specin', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'specin' ),
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
				'specin_custom_background_args',
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
add_action( 'after_setup_theme', 'specin_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function specin_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'specin_content_width', 640 );
}
add_action( 'after_setup_theme', 'specin_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function specin_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'specin' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'specin' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'specin_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function specin_scripts() {
	wp_enqueue_style( 'specin-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style('specin-main-style', get_template_directory_uri() . '/assets/css/style.css');
	wp_style_add_data( 'specin-style', 'rtl', 'replace' );


	wp_enqueue_script( 'specin-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'specin-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'specin-main-js', get_template_directory_uri() . '/assets/js/bundle.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'specin_scripts' );

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
 * Пользовательские опции - телефон + адрес электронной почты + лицензия
 */
function spInMainOption() {
    add_settings_field(
        'spIn_phone', 'Телефон компании', 'display_phone', 'general'
    );
    add_settings_field(
        'spIn_email', 'Почта компании', 'display_email', 'general'
    );
    add_settings_field(
        'spIn_license', 'Лицензия МЧС', 'display_license', 'general'
    );
    register_setting(
        'general', 'mainPhone'
    );
    register_setting(
        'general', 'mainEmail'
    );
    register_setting(
        'general', 'mainLicense'
    );
}
function display_phone(){
    echo "<input type='text' class='regular-text' name='mainPhone' value='" . esc_attr(get_option('mainPhone')) . "'>";
}
function display_email(){
    echo "<input type='text' class='regular-text' name='mainEmail' value='" . esc_attr(get_option('mainEmail')) . "'>";
}
function display_license() {
    echo "<input type='text' class='regular-text' name='mainLicense' value='" . esc_attr(get_option('mainLicense')) . "'>";
}
add_action('admin_init', 'spInMainOption');


/**
 * Вывод баннера в сервисах услуг
 */
function spInBannerOfServices( $val ){
    echo "<div class=\"col-12\"><div class=\"serviceBlock_desc\">
                    <div class=\"serviceBlock_desc-img\">
                        <div class=\"serviceBlock_desc-imgTop\">
                            <img src=\"". get_field('acf_verh-ya_kartinka_v_banere', $val) . "\" alt=\"\">
                        </div>
                        <div class=\"serviceBlock_desc-imgBottom\">
                            <img src=\"" . get_field('acf_nizhn-ya_kartinka_v_banere', $val) ."\" alt=\"\">
                        </div>
                    </div>
                    <div class=\"serviceBlock_desc-text\">
                        <h4>" . get_field('acfSectionBanerTitle', $val). "</h4>
                        <ul>" . get_field('acf_spisok_v_banere', $val) . "</ul>
                    </div>
                    <a href=\"#order\" class=\"sI-btnSmall\">Узнать стоимость</a>
                </div>
            </div>";
}