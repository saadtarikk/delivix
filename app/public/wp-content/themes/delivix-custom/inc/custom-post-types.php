<?php
/**
 * Custom Post Types
 *
 * @package Delivix_Custom
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Portfolio Post Type
 */
function delivix_custom_portfolio_post_type() {
    register_post_type('portfolio', array(
        'labels' => array(
            'name' => __('Portfolio', 'delivix-custom'),
            'singular_name' => __('Portfolio Item', 'delivix-custom'),
            'add_new' => __('Add New Portfolio Item', 'delivix-custom'),
            'add_new_item' => __('Add New Portfolio Item', 'delivix-custom'),
            'edit_item' => __('Edit Portfolio Item', 'delivix-custom'),
            'new_item' => __('New Portfolio Item', 'delivix-custom'),
            'view_item' => __('View Portfolio Item', 'delivix-custom'),
            'search_items' => __('Search Portfolio', 'delivix-custom'),
            'not_found' => __('No portfolio items found', 'delivix-custom'),
            'not_found_in_trash' => __('No portfolio items found in trash', 'delivix-custom'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'menu_icon' => 'dashicons-portfolio',
        'rewrite' => array('slug' => 'portfolio'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'delivix_custom_portfolio_post_type');

/**
 * Case Studies Post Type
 */
function delivix_custom_case_studies_post_type() {
    register_post_type('case_studies', array(
        'labels' => array(
            'name' => __('Case Studies', 'delivix-custom'),
            'singular_name' => __('Case Study', 'delivix-custom'),
            'add_new' => __('Add New Case Study', 'delivix-custom'),
            'add_new_item' => __('Add New Case Study', 'delivix-custom'),
            'edit_item' => __('Edit Case Study', 'delivix-custom'),
            'new_item' => __('New Case Study', 'delivix-custom'),
            'view_item' => __('View Case Study', 'delivix-custom'),
            'search_items' => __('Search Case Studies', 'delivix-custom'),
            'not_found' => __('No case studies found', 'delivix-custom'),
            'not_found_in_trash' => __('No case studies found in trash', 'delivix-custom'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'menu_icon' => 'dashicons-analytics',
        'rewrite' => array('slug' => 'case-studies'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'delivix_custom_case_studies_post_type');

/**
 * Blog Post Type (if you want a separate blog from regular posts)
 */
function delivix_custom_blog_post_type() {
    register_post_type('blog', array(
        'labels' => array(
            'name' => __('Blog', 'delivix-custom'),
            'singular_name' => __('Blog Post', 'delivix-custom'),
            'add_new' => __('Add New Blog Post', 'delivix-custom'),
            'add_new_item' => __('Add New Blog Post', 'delivix-custom'),
            'edit_item' => __('Edit Blog Post', 'delivix-custom'),
            'new_item' => __('New Blog Post', 'delivix-custom'),
            'view_item' => __('View Blog Post', 'delivix-custom'),
            'search_items' => __('Search Blog', 'delivix-custom'),
            'not_found' => __('No blog posts found', 'delivix-custom'),
            'not_found_in_trash' => __('No blog posts found in trash', 'delivix-custom'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'author', 'comments'),
        'menu_icon' => 'dashicons-admin-post',
        'rewrite' => array('slug' => 'blog'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'delivix_custom_blog_post_type');

/**
 * Portfolio Categories Taxonomy
 */
function delivix_custom_portfolio_taxonomies() {
    register_taxonomy('portfolio_category', 'portfolio', array(
        'labels' => array(
            'name' => __('Portfolio Categories', 'delivix-custom'),
            'singular_name' => __('Portfolio Category', 'delivix-custom'),
            'search_items' => __('Search Portfolio Categories', 'delivix-custom'),
            'all_items' => __('All Portfolio Categories', 'delivix-custom'),
            'parent_item' => __('Parent Portfolio Category', 'delivix-custom'),
            'parent_item_colon' => __('Parent Portfolio Category:', 'delivix-custom'),
            'edit_item' => __('Edit Portfolio Category', 'delivix-custom'),
            'update_item' => __('Update Portfolio Category', 'delivix-custom'),
            'add_new_item' => __('Add New Portfolio Category', 'delivix-custom'),
            'new_item_name' => __('New Portfolio Category Name', 'delivix-custom'),
            'menu_name' => __('Portfolio Categories', 'delivix-custom'),
        ),
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'portfolio-category'),
        'show_in_rest' => true,
    ));

    register_taxonomy('portfolio_tag', 'portfolio', array(
        'labels' => array(
            'name' => __('Portfolio Tags', 'delivix-custom'),
            'singular_name' => __('Portfolio Tag', 'delivix-custom'),
            'search_items' => __('Search Portfolio Tags', 'delivix-custom'),
            'all_items' => __('All Portfolio Tags', 'delivix-custom'),
            'edit_item' => __('Edit Portfolio Tag', 'delivix-custom'),
            'update_item' => __('Update Portfolio Tag', 'delivix-custom'),
            'add_new_item' => __('Add New Portfolio Tag', 'delivix-custom'),
            'new_item_name' => __('New Portfolio Tag Name', 'delivix-custom'),
            'menu_name' => __('Portfolio Tags', 'delivix-custom'),
        ),
        'hierarchical' => false,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'portfolio-tag'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'delivix_custom_portfolio_taxonomies');

/**
 * Case Study Categories Taxonomy
 */
function delivix_custom_case_study_taxonomies() {
    register_taxonomy('case_study_category', 'case_studies', array(
        'labels' => array(
            'name' => __('Case Study Categories', 'delivix-custom'),
            'singular_name' => __('Case Study Category', 'delivix-custom'),
            'search_items' => __('Search Case Study Categories', 'delivix-custom'),
            'all_items' => __('All Case Study Categories', 'delivix-custom'),
            'parent_item' => __('Parent Case Study Category', 'delivix-custom'),
            'parent_item_colon' => __('Parent Case Study Category:', 'delivix-custom'),
            'edit_item' => __('Edit Case Study Category', 'delivix-custom'),
            'update_item' => __('Update Case Study Category', 'delivix-custom'),
            'add_new_item' => __('Add New Case Study Category', 'delivix-custom'),
            'new_item_name' => __('New Case Study Category Name', 'delivix-custom'),
            'menu_name' => __('Case Study Categories', 'delivix-custom'),
        ),
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'case-study-category'),
        'show_in_rest' => true,
    ));

    register_taxonomy('case_study_industry', 'case_studies', array(
        'labels' => array(
            'name' => __('Industries', 'delivix-custom'),
            'singular_name' => __('Industry', 'delivix-custom'),
            'search_items' => __('Search Industries', 'delivix-custom'),
            'all_items' => __('All Industries', 'delivix-custom'),
            'edit_item' => __('Edit Industry', 'delivix-custom'),
            'update_item' => __('Update Industry', 'delivix-custom'),
            'add_new_item' => __('Add New Industry', 'delivix-custom'),
            'new_item_name' => __('New Industry Name', 'delivix-custom'),
            'menu_name' => __('Industries', 'delivix-custom'),
        ),
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'industry'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'delivix_custom_case_study_taxonomies');

/**
 * Blog Categories Taxonomy (if using separate blog post type)
 */
function delivix_custom_blog_taxonomies() {
    register_taxonomy('blog_category', 'blog', array(
        'labels' => array(
            'name' => __('Blog Categories', 'delivix-custom'),
            'singular_name' => __('Blog Category', 'delivix-custom'),
            'search_items' => __('Search Blog Categories', 'delivix-custom'),
            'all_items' => __('All Blog Categories', 'delivix-custom'),
            'parent_item' => __('Parent Blog Category', 'delivix-custom'),
            'parent_item_colon' => __('Parent Blog Category:', 'delivix-custom'),
            'edit_item' => __('Edit Blog Category', 'delivix-custom'),
            'update_item' => __('Update Blog Category', 'delivix-custom'),
            'add_new_item' => __('Add New Blog Category', 'delivix-custom'),
            'new_item_name' => __('New Blog Category Name', 'delivix-custom'),
            'menu_name' => __('Blog Categories', 'delivix-custom'),
        ),
        'hierarchical' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'blog-category'),
        'show_in_rest' => true,
    ));

    register_taxonomy('blog_tag', 'blog', array(
        'labels' => array(
            'name' => __('Blog Tags', 'delivix-custom'),
            'singular_name' => __('Blog Tag', 'delivix-custom'),
            'search_items' => __('Search Blog Tags', 'delivix-custom'),
            'all_items' => __('All Blog Tags', 'delivix-custom'),
            'edit_item' => __('Edit Blog Tag', 'delivix-custom'),
            'update_item' => __('Update Blog Tag', 'delivix-custom'),
            'add_new_item' => __('Add New Blog Tag', 'delivix-custom'),
            'new_item_name' => __('New Blog Tag Name', 'delivix-custom'),
            'menu_name' => __('Blog Tags', 'delivix-custom'),
        ),
        'hierarchical' => false,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'blog-tag'),
        'show_in_rest' => true,
    ));
}
add_action('init', 'delivix_custom_blog_taxonomies');

/**
 * Flush rewrite rules on theme activation
 */
function delivix_custom_flush_rewrite_rules() {
    delivix_custom_portfolio_post_type();
    delivix_custom_case_studies_post_type();
    delivix_custom_blog_post_type();
    delivix_custom_portfolio_taxonomies();
    delivix_custom_case_study_taxonomies();
    delivix_custom_blog_taxonomies();
    flush_rewrite_rules();
}
add_action('after_switch_theme', 'delivix_custom_flush_rewrite_rules');

/**
 * Custom columns for portfolio
 */
function delivix_custom_portfolio_columns($columns) {
    $new_columns = array();
    $new_columns['cb'] = $columns['cb'];
    $new_columns['thumbnail'] = __('Thumbnail', 'delivix-custom');
    $new_columns['title'] = $columns['title'];
    $new_columns['portfolio_category'] = __('Category', 'delivix-custom');
    $new_columns['portfolio_tag'] = __('Tags', 'delivix-custom');
    $new_columns['date'] = $columns['date'];
    
    return $new_columns;
}
add_filter('manage_portfolio_posts_columns', 'delivix_custom_portfolio_columns');

/**
 * Custom column content for portfolio
 */
function delivix_custom_portfolio_column_content($column, $post_id) {
    switch ($column) {
        case 'thumbnail':
            if (has_post_thumbnail($post_id)) {
                echo get_the_post_thumbnail($post_id, 'thumbnail');
            } else {
                echo '<span class="no-thumbnail">' . __('No Image', 'delivix-custom') . '</span>';
            }
            break;
        case 'portfolio_category':
            $terms = get_the_terms($post_id, 'portfolio_category');
            if ($terms && !is_wp_error($terms)) {
                $term_names = array();
                foreach ($terms as $term) {
                    $term_names[] = $term->name;
                }
                echo implode(', ', $term_names);
            }
            break;
        case 'portfolio_tag':
            $terms = get_the_terms($post_id, 'portfolio_tag');
            if ($terms && !is_wp_error($terms)) {
                $term_names = array();
                foreach ($terms as $term) {
                    $term_names[] = $term->name;
                }
                echo implode(', ', $term_names);
            }
            break;
    }
}
add_action('manage_portfolio_posts_custom_column', 'delivix_custom_portfolio_column_content', 10, 2);

/**
 * Make portfolio columns sortable
 */
function delivix_custom_portfolio_sortable_columns($columns) {
    $columns['portfolio_category'] = 'portfolio_category';
    $columns['portfolio_tag'] = 'portfolio_tag';
    return $columns;
}
add_filter('manage_edit-portfolio_sortable_columns', 'delivix_custom_portfolio_sortable_columns');
