<?php
/**
 * Theme Setup Functions
 *
 * @package Delivix_Custom
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Custom Navigation Walker
 */
class Delivix_Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
    
    public function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu\">\n";
    }
    
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        
        $li_attributes = '';
        $class_names = $value = '';
        
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'nav-item';
        
        if ($args->walker->has_children) {
            $classes[] = 'dropdown';
        }
        
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';
        
        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';
        
        $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
        
        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        
        if ($args->walker->has_children) {
            $attributes .= ' class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"';
        } else {
            $attributes .= ' class="nav-link"';
        }
        
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;
        
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

/**
 * Fallback Menu
 */
function delivix_custom_fallback_menu() {
    echo '<ul class="navbar-nav ms-auto mb-2 mb-lg-0">';
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/')) . '">' . __('Home', 'delivix-custom') . '</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/about')) . '">' . __('About', 'delivix-custom') . '</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/services')) . '">' . __('Services', 'delivix-custom') . '</a></li>';
    echo '<li class="nav-item"><a class="nav-link" href="' . esc_url(home_url('/contact')) . '">' . __('Contact', 'delivix-custom') . '</a></li>';
    echo '</ul>';
}

/**
 * Customizer Settings
 */
function delivix_custom_customize_register($wp_customize) {
    
    // Hero Section
    $wp_customize->add_section('hero_section', array(
        'title' => __('Hero Section', 'delivix-custom'),
        'priority' => 30,
    ));
    
    // Hero Title
    $wp_customize->add_setting('hero_title', array(
        'default' => __('Your Digital Partner', 'delivix-custom'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('hero_title', array(
        'label' => __('Hero Title', 'delivix-custom'),
        'section' => 'hero_section',
        'type' => 'text',
    ));
    
    // Hero Subtitle
    $wp_customize->add_setting('hero_subtitle', array(
        'default' => __('We accelerate ambition, grow brands, build digital products, and craft experiences that bring positive change, value, and innovation.', 'delivix-custom'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('hero_subtitle', array(
        'label' => __('Hero Subtitle', 'delivix-custom'),
        'section' => 'hero_section',
        'type' => 'textarea',
    ));
    
    // Hero Image
    $wp_customize->add_setting('hero_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label' => __('Hero Image', 'delivix-custom'),
        'section' => 'hero_section',
    )));
    
    // Footer Section
    $wp_customize->add_section('footer_section', array(
        'title' => __('Footer', 'delivix-custom'),
        'priority' => 40,
    ));
    
    // Footer Description
    $wp_customize->add_setting('footer_description', array(
        'default' => __('We accelerate ambition, grow brands, build digital products, and craft experiences that bring positive change, value, and innovation.', 'delivix-custom'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    
    $wp_customize->add_control('footer_description', array(
        'label' => __('Footer Description', 'delivix-custom'),
        'section' => 'footer_section',
        'type' => 'textarea',
    ));
}
add_action('customize_register', 'delivix_custom_customize_register');

/**
 * Add Custom CSS to Customizer
 */
function delivix_custom_customizer_css() {
    ?>
    <style type="text/css">
        .hero-section {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--primary-dark) 100%);
        }
        
        .sticky-top {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: var(--z-sticky);
            animation: slideDown 0.3s ease-out;
        }
        
        .header-hidden {
            transform: translateY(-100%);
            transition: transform 0.3s ease-out;
        }
        
        @keyframes slideDown {
            from {
                transform: translateY(-100%);
            }
            to {
                transform: translateY(0);
            }
        }
        
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: var(--z-modal);
            max-width: 400px;
        }
        
        .back-to-top {
            transition: all 0.3s ease;
        }
        
        .back-to-top:hover {
            transform: translateY(-3px);
        }
    </style>
    <?php
}
add_action('wp_head', 'delivix_custom_customizer_css');

/**
 * Custom Post Types
 */
function delivix_custom_post_types() {
    
    // Services Post Type
    register_post_type('services', array(
        'labels' => array(
            'name' => __('Services', 'delivix-custom'),
            'singular_name' => __('Service', 'delivix-custom'),
            'add_new' => __('Add New Service', 'delivix-custom'),
            'add_new_item' => __('Add New Service', 'delivix-custom'),
            'edit_item' => __('Edit Service', 'delivix-custom'),
            'new_item' => __('New Service', 'delivix-custom'),
            'view_item' => __('View Service', 'delivix-custom'),
            'search_items' => __('Search Services', 'delivix-custom'),
            'not_found' => __('No services found', 'delivix-custom'),
            'not_found_in_trash' => __('No services found in trash', 'delivix-custom'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-admin-tools',
        'rewrite' => array('slug' => 'services'),
    ));
    
    // Team Post Type
    register_post_type('team', array(
        'labels' => array(
            'name' => __('Team', 'delivix-custom'),
            'singular_name' => __('Team Member', 'delivix-custom'),
            'add_new' => __('Add New Team Member', 'delivix-custom'),
            'add_new_item' => __('Add New Team Member', 'delivix-custom'),
            'edit_item' => __('Edit Team Member', 'delivix-custom'),
            'new_item' => __('New Team Member', 'delivix-custom'),
            'view_item' => __('View Team Member', 'delivix-custom'),
            'search_items' => __('Search Team Members', 'delivix-custom'),
            'not_found' => __('No team members found', 'delivix-custom'),
            'not_found_in_trash' => __('No team members found in trash', 'delivix-custom'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-groups',
        'rewrite' => array('slug' => 'team'),
    ));
    
    // Testimonials Post Type
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => __('Testimonials', 'delivix-custom'),
            'singular_name' => __('Testimonial', 'delivix-custom'),
            'add_new' => __('Add New Testimonial', 'delivix-custom'),
            'add_new_item' => __('Add New Testimonial', 'delivix-custom'),
            'edit_item' => __('Edit Testimonial', 'delivix-custom'),
            'new_item' => __('New Testimonial', 'delivix-custom'),
            'view_item' => __('View Testimonial', 'delivix-custom'),
            'search_items' => __('Search Testimonials', 'delivix-custom'),
            'not_found' => __('No testimonials found', 'delivix-custom'),
            'not_found_in_trash' => __('No testimonials found in trash', 'delivix-custom'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-format-quote',
        'rewrite' => array('slug' => 'testimonials'),
    ));
}
add_action('init', 'delivix_custom_post_types');

/**
 * Custom Taxonomies
 */
function delivix_custom_taxonomies() {
    
    // Service Categories
    register_taxonomy('service_category', 'services', array(
        'labels' => array(
            'name' => __('Service Categories', 'delivix-custom'),
            'singular_name' => __('Service Category', 'delivix-custom'),
        ),
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'service-category'),
    ));
    
    // Team Departments
    register_taxonomy('team_department', 'team', array(
        'labels' => array(
            'name' => __('Departments', 'delivix-custom'),
            'singular_name' => __('Department', 'delivix-custom'),
        ),
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'department'),
    ));
}
add_action('init', 'delivix_custom_taxonomies');
