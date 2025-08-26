<?php
/**
 * Delivix Custom Theme Functions
 *
 * @package Delivix_Custom
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function delivix_custom_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    
    // Add theme support for WooCommerce
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'delivix-custom'),
        'footer' => __('Footer Menu', 'delivix-custom'),
        'mobile' => __('Mobile Menu', 'delivix-custom')
    ));
    
    // Add image sizes
    add_image_size('hero-large', 1920, 800, true);
    add_image_size('hero-medium', 1200, 600, true);
    add_image_size('card-large', 600, 400, true);
    add_image_size('card-medium', 400, 300, true);
    add_image_size('card-small', 300, 200, true);
}
add_action('after_setup_theme', 'delivix_custom_setup');

/**
 * Enqueue Scripts and Styles
 */
function delivix_custom_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('delivix-custom-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', array(), '5.3.0');
    
    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap', array(), null);
    
    // Enqueue Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');
    
    // Enqueue main JavaScript
    wp_enqueue_script('delivix-custom-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
    
    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array(), '5.3.0', true);
    
    // Enqueue GSAP
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js', array(), '3.12.2', true);
    wp_enqueue_script('gsap-scroll-trigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js', array('gsap'), '3.12.2', true);
    
    // Enqueue Flickity
    wp_enqueue_style('flickity', 'https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.min.css', array(), '2.3.0');
    wp_enqueue_script('flickity', 'https://cdnjs.cloudflare.com/ajax/libs/flickity/2.3.0/flickity.pkgd.min.js', array(), '2.3.0', true);
    
    // Localize script for AJAX
    wp_localize_script('delivix-custom-main', 'delivix_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('delivix_nonce')
    ));
}
add_action('wp_enqueue_scripts', 'delivix_custom_scripts');

/**
 * Enqueue Admin Scripts and Styles
 */
function delivix_custom_admin_scripts() {
    wp_enqueue_style('delivix-custom-admin', get_template_directory_uri() . '/assets/css/admin.css', array(), '1.0.0');
    wp_enqueue_script('delivix-custom-admin', get_template_directory_uri() . '/assets/js/admin.js', array('jquery'), '1.0.0', true);
}
add_action('admin_enqueue_scripts', 'delivix_custom_admin_scripts');

/**
 * Register Widget Areas
 */
function delivix_custom_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'delivix-custom'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'delivix-custom'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget Area 1', 'delivix-custom'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here.', 'delivix-custom'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget Area 2', 'delivix-custom'),
        'id'            => 'footer-2',
        'description'   => __('Add widgets here.', 'delivix-custom'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget Area 3', 'delivix-custom'),
        'id'            => 'footer-3',
        'description'   => __('Add widgets here.', 'delivix-custom'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'delivix_custom_widgets_init');

/**
 * Custom Excerpt Length
 */
function delivix_custom_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'delivix_custom_excerpt_length');

/**
 * Custom Excerpt More
 */
function delivix_custom_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'delivix_custom_excerpt_more');

/**
 * Add Custom Image Sizes to Media Library
 */
function delivix_custom_image_sizes($sizes) {
    $addsizes = array(
        'hero-large' => 'Hero Large',
        'hero-medium' => 'Hero Medium',
        'card-large' => 'Card Large',
        'card-medium' => 'Card Medium',
        'card-small' => 'Card Small'
    );
    $newsizes = array_merge($sizes, $addsizes);
    return $newsizes;
}
add_filter('image_size_names_choose', 'delivix_custom_image_sizes');

/**
 * Custom Body Classes
 */
function delivix_custom_body_classes($classes) {
    // Add page-specific classes
    if (is_page()) {
        $classes[] = 'page-' . get_post_field('post_name', get_post());
    }
    
    // Add template-specific classes
    if (is_page_template()) {
        $template = get_page_template_slug();
        $classes[] = 'template-' . str_replace('.php', '', $template);
    }
    
    return $classes;
}
add_filter('body_class', 'delivix_custom_body_classes');

/**
 * Security Enhancements
 */
function delivix_custom_security() {
    // Remove WordPress version from head
    remove_action('wp_head', 'wp_generator');
    
    // Remove Windows Live Writer manifest
    remove_action('wp_head', 'wlwmanifest_link');
    
    // Remove RSD link
    remove_action('wp_head', 'rsd_link');
    
    // Remove shortlink
    remove_action('wp_head', 'wp_shortlink_wp_head');
    
    // Remove adjacent posts links
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
}
add_action('init', 'delivix_custom_security');

/**
 * Custom Login Logo
 */
function delivix_custom_login_logo() {
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
    
    if ($logo) {
        echo '<style type="text/css">
            #login h1 a {
                background-image: url(' . $logo[0] . ') !important;
                background-size: contain !important;
                width: 320px !important;
                height: 80px !important;
            }
        </style>';
    }
}
add_action('login_head', 'delivix_custom_login_logo');

/**
 * Custom Login Logo URL
 */
function delivix_custom_login_logo_url() {
    return home_url();
}
add_filter('login_headerurl', 'delivix_custom_login_logo_url');

/**
 * Custom Login Logo Title
 */
function delivix_custom_login_logo_url_title() {
    return get_bloginfo('name');
}
add_filter('login_headertext', 'delivix_custom_login_logo_url_title');

/**
 * Include Additional Theme Files
 */
require get_template_directory() . '/inc/theme-setup.php';
require get_template_directory() . '/inc/custom-post-types.php';
require get_template_directory() . '/inc/custom-fields.php';
require get_template_directory() . '/inc/theme-functions.php';
