<?php
/**
 * atomicwallet functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package atomicwallet
 */

if (!function_exists('atomicwallet_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function atomicwallet_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on atomicwallet, use a find and replace
		 * to change 'atomicwallet' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('atomicwallet', get_template_directory() . '/languages');
		add_action('wp_enqueue_scripts','setupscroll');
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		add_image_size('390', 390, 240, true);

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'main-menu' => esc_html__('Main menu', 'atomicwallet'),
		));

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add post type support
		require_once get_template_directory() . '/inc/post-types.php';

		// Customize options
		require_once get_template_directory() . '/inc/customize.php';

		// Socials
		require_once get_template_directory() . '/inc/socials.php';
	}
endif;
add_action('after_setup_theme', 'atomicwallet_setup');

/**
 * Enqueue scripts and styles.
 */



function atomicwallet_scripts()
{
	wp_enqueue_style('min',  get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style('wp-styles',  get_template_directory_uri() . '/css/wp-styles.css');
	wp_enqueue_style('header',  get_template_directory_uri() . '/css/header.css');
	

	if (is_category(1) || is_single()) {
		wp_enqueue_style('list', get_template_directory_uri() . '/css/list.css');
		wp_enqueue_style('item-page', get_template_directory_uri() . '/test/css/item-page.css');
	}

	if (is_front_page()) {
		wp_enqueue_style('media', get_template_directory_uri() . '/css/media.css');
		wp_enqueue_style('aos', get_template_directory_uri() . '/css/aos.css');
		wp_enqueue_style('item-page-blog', get_template_directory_uri() . '/css/item-page-blog.css');
	}

	if (is_page() || is_tax('supportcategory')) {
		wp_enqueue_style('item-page', get_template_directory_uri() . '/test/css/item-page.css');
		wp_enqueue_style('media', get_template_directory_uri() . '/css/media.css');
	}

	wp_enqueue_style('media-test-blog',  get_template_directory_uri() . '/css/media-test-blog.css');

	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', [], null, true);
		wp_enqueue_script('jquery');
	}
	wp_enqueue_script('touch-swipe', get_template_directory_uri() . '/js/jquery.touchSwipe.js', array('jquery'), '', true);

	if (!is_page_template('page-ripple-tpl.php') && !is_page_template('page-but-card-tpl.php') && !is_page_template('page-coin-price-tpl.php') && !is_page_template('page-assets-tpl.php') && !is_page_template('page-rrice-pre-tpl.php')){
		wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true);
		wp_enqueue_script('scroll', get_template_directory_uri() . '/js/scroll.js', array('jquery'), '', true);
	}
	wp_enqueue_script('scroll', get_template_directory_uri() . '/js/scroll.js', array('jquery'), '', true);
	if (is_page_template('page-ripple-tpl.php')) {
		wp_enqueue_style('item-page-custom', get_template_directory_uri() . '/css/item-page-custom.css');
		wp_dequeue_style('item-page');
		wp_enqueue_script('custom-page-app', get_template_directory_uri() . '/js/custom-page-app.js', array('jquery'), '', true);
	}

	if (is_page_template('page-but-card-tpl.php') || is_page_template('page-coin-price-tpl.php')) {
		wp_enqueue_style('wallet-custom', get_template_directory_uri() . '/css/wallet.css');
		wp_enqueue_script('custom-page-app', get_template_directory_uri() . '/js/custom-page-app.js', array('jquery'), '', true);
	}

	if (is_page_template('page-assets-tpl.php')) {
		wp_enqueue_style('assets-custom', get_template_directory_uri() . '/css/assets.css');
		wp_enqueue_style('assets-media-custom', get_template_directory_uri() . '/css/assets-media.css');
		wp_enqueue_script('custom-assets', get_template_directory_uri() . '/js/assets.js', array('jquery'), '', true);
	}

	if (!is_page_template('sitemap.php')) {
		wp_enqueue_style('sitemap', get_template_directory_uri() . '/css/sitemap.css');
	}


	if (!is_page_template('coin-price.php')) {
		wp_enqueue_style('price', get_template_directory_uri() . '/css/price.css');
		wp_enqueue_script('chart', get_template_directory_uri() . '/js/chart.js');
	}
	

	

	if (is_page_template('page-rrice-pre-tpl.php')) {
		wp_enqueue_style('wallet-custom', get_template_directory_uri() . '/css/wallet.css');
		wp_enqueue_script('custom-page-app', get_template_directory_uri() . '/js/custom-page-app.js', array('jquery'), '', true);
	}

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}

add_action('wp_enqueue_scripts', 'atomicwallet_scripts');


add_action('widgets_init','register_mywidgets');


function register_mywidgets(){
    register_sidebar(array(
        'name' => 'Crypto sidebar',
        'id' => 'cryptolist_sidebar'
    ));
}



function popular_loop($populars, $part)
{
	echo '<div class="article-item">';
	if ($part == 1) {
		foreach ($populars as $key => $popular)
			if ($key <= 5)
				include get_template_directory() . '/template-parts/support/popular.php';
	}

	if ($part == 2) {
		foreach ($populars as $key => $popular)
			if ($key >= 6)
				include get_template_directory() . '/template-parts/support/popular.php';
	}

	echo '</div>';
}
