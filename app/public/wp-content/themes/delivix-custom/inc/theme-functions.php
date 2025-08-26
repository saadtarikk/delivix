<?php
/**
 * Theme Functions and Utilities
 *
 * @package Delivix_Custom
 * @version 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Get Custom Logo URL
 */
function delivix_custom_get_logo_url() {
    if (has_custom_logo()) {
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        return $logo[0];
    }
    return false;
}

/**
 * Get Custom Logo Alt Text
 */
function delivix_custom_get_logo_alt() {
    if (has_custom_logo()) {
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo_alt = get_post_meta($custom_logo_id, '_wp_attachment_image_alt', true);
        return $logo_alt ?: get_bloginfo('name');
    }
    return get_bloginfo('name');
}

/**
 * Get Post Reading Time
 */
function delivix_custom_get_reading_time($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $content = get_post_field('post_content', $post_id);
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200); // Average reading speed: 200 words per minute
    
    return $reading_time;
}

/**
 * Get Related Posts
 */
function delivix_custom_get_related_posts($post_id = null, $limit = 3) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $categories = wp_get_post_categories($post_id);
    $tags = wp_get_post_tags($post_id);
    
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => $limit,
        'post__not_in' => array($post_id),
        'meta_query' => array(
            'relation' => 'OR',
            array(
                'key' => '_thumbnail_id',
                'compare' => 'EXISTS'
            )
        )
    );
    
    if ($categories) {
        $args['category__in'] = $categories;
    }
    
    if ($tags) {
        $tag_ids = array();
        foreach ($tags as $tag) {
            $tag_ids[] = $tag->term_id;
        }
        $args['tag__in'] = $tag_ids;
    }
    
    $related_posts = new WP_Query($args);
    
    return $related_posts;
}

/**
 * Get Social Share Links
 */
function delivix_custom_get_social_share_links($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $url = urlencode(get_permalink($post_id));
    $title = urlencode(get_the_title($post_id));
    $excerpt = urlencode(get_the_excerpt($post_id));
    
    $social_links = array(
        'facebook' => array(
            'url' => "https://www.facebook.com/sharer/sharer.php?u={$url}",
            'icon' => 'fab fa-facebook-f',
            'label' => __('Share on Facebook', 'delivix-custom')
        ),
        'twitter' => array(
            'url' => "https://twitter.com/intent/tweet?url={$url}&text={$title}",
            'icon' => 'fab fa-twitter',
            'label' => __('Share on Twitter', 'delivix-custom')
        ),
        'linkedin' => array(
            'url' => "https://www.linkedin.com/sharing/share-offsite/?url={$url}",
            'icon' => 'fab fa-linkedin-in',
            'label' => __('Share on LinkedIn', 'delivix-custom')
        ),
        'whatsapp' => array(
            'url' => "https://wa.me/?text={$title}%20{$url}",
            'icon' => 'fab fa-whatsapp',
            'label' => __('Share on WhatsApp', 'delivix-custom')
        ),
        'email' => array(
            'url' => "mailto:?subject={$title}&body={$excerpt}%20{$url}",
            'icon' => 'fas fa-envelope',
            'label' => __('Share via Email', 'delivix-custom')
        )
    );
    
    return $social_links;
}

/**
 * Get Post Views Count
 */
function delivix_custom_get_post_views($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $count_key = 'post_views_count';
    $count = get_post_meta($post_id, $count_key, true);
    
    if ($count == '') {
        delete_post_meta($post_id, $count_key);
        add_post_meta($post_id, $count_key, '0');
        return 0;
    }
    
    return $count;
}

/**
 * Set Post Views Count
 */
function delivix_custom_set_post_views($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    
    $count_key = 'post_views_count';
    $count = get_post_meta($post_id, $count_key, true);
    
    if ($count == '') {
        $count = 0;
        delete_post_meta($post_id, $count_key);
        add_post_meta($post_id, $count_key, '0');
    } else {
        $count++;
        update_post_meta($post_id, $count_key, $count);
    }
}

/**
 * Track Post Views
 */
function delivix_custom_track_post_views() {
    if (is_single() && !is_user_logged_in()) {
        delivix_custom_set_post_views();
    }
}
add_action('wp_head', 'delivix_custom_track_post_views');

/**
 * Get Popular Posts
 */
function delivix_custom_get_popular_posts($limit = 5, $days = 30) {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => $limit,
        'meta_key' => 'post_views_count',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
        'date_query' => array(
            array(
                'after' => "{$days} days ago"
            )
        )
    );
    
    $popular_posts = new WP_Query($args);
    
    return $popular_posts;
}

/**
 * Get Author Bio
 */
function delivix_custom_get_author_bio($author_id = null) {
    if (!$author_id) {
        $author_id = get_the_author_meta('ID');
    }
    
    $author_bio = get_the_author_meta('description', $author_id);
    $author_website = get_the_author_meta('user_url', $author_id);
    $author_avatar = get_avatar($author_id, 96);
    
    return array(
        'bio' => $author_bio,
        'website' => $author_website,
        'avatar' => $author_avatar
    );
}

/**
 * Get Author Social Links
 */
function delivix_custom_get_author_social_links($author_id = null) {
    if (!$author_id) {
        $author_id = get_the_author_meta('ID');
    }
    
    $social_links = array();
    
    // Check for common social media fields
    $social_fields = array(
        'twitter' => get_the_author_meta('twitter', $author_id),
        'facebook' => get_the_author_meta('facebook', $author_id),
        'linkedin' => get_the_author_meta('linkedin', $author_id),
        'instagram' => get_the_author_meta('instagram', $author_id),
        'github' => get_the_author_meta('github', $author_id),
        'youtube' => get_the_author_meta('youtube', $author_id)
    );
    
    foreach ($social_fields as $platform => $url) {
        if ($url) {
            $social_links[$platform] = $url;
        }
    }
    
    return $social_links;
}

/**
 * Get Post Navigation
 */
function delivix_custom_get_post_navigation() {
    $prev_post = get_previous_post();
    $next_post = get_next_post();
    
    $navigation = array();
    
    if ($prev_post) {
        $navigation['prev'] = array(
            'id' => $prev_post->ID,
            'title' => get_the_title($prev_post->ID),
            'url' => get_permalink($prev_post->ID),
            'thumbnail' => get_the_post_thumbnail_url($prev_post->ID, 'thumbnail')
        );
    }
    
    if ($next_post) {
        $navigation['next'] = array(
            'id' => $next_post->ID,
            'title' => get_the_title($next_post->ID),
            'url' => get_permalink($next_post->ID),
            'thumbnail' => get_the_post_thumbnail_url($next_post->ID, 'thumbnail')
        );
    }
    
    return $navigation;
}

/**
 * Get Breadcrumbs
 */
function delivix_custom_get_breadcrumbs() {
    $breadcrumbs = array();
    
    // Home
    $breadcrumbs[] = array(
        'title' => __('Home', 'delivix-custom'),
        'url' => home_url('/'),
        'current' => false
    );
    
    if (is_home() && !is_front_page()) {
        $breadcrumbs[] = array(
            'title' => get_the_title(get_option('page_for_posts')),
            'url' => get_permalink(get_option('page_for_posts')),
            'current' => true
        );
    } elseif (is_single()) {
        if (is_singular('post')) {
            $categories = get_the_category();
            if ($categories) {
                $category = $categories[0];
                $breadcrumbs[] = array(
                    'title' => $category->name,
                    'url' => get_category_link($category->term_id),
                    'current' => false
                );
            }
        }
        
        $breadcrumbs[] = array(
            'title' => get_the_title(),
            'url' => get_permalink(),
            'current' => true
        );
    } elseif (is_page()) {
        $ancestors = get_post_ancestors(get_the_ID());
        if ($ancestors) {
            $ancestors = array_reverse($ancestors);
            foreach ($ancestors as $ancestor) {
                $breadcrumbs[] = array(
                    'title' => get_the_title($ancestor),
                    'url' => get_permalink($ancestor),
                    'current' => false
                );
            }
        }
        
        $breadcrumbs[] = array(
            'title' => get_the_title(),
            'url' => get_permalink(),
            'current' => true
        );
    } elseif (is_category()) {
        $breadcrumbs[] = array(
            'title' => single_cat_title('', false),
            'url' => get_category_link(get_queried_object_id()),
            'current' => true
        );
    } elseif (is_tag()) {
        $breadcrumbs[] = array(
            'title' => single_tag_title('', false),
            'url' => get_tag_link(get_queried_object_id()),
            'current' => true
        );
    } elseif (is_author()) {
        $breadcrumbs[] = array(
            'title' => get_the_author(),
            'url' => get_author_posts_url(get_the_author_meta('ID')),
            'current' => true
        );
    } elseif (is_search()) {
        $breadcrumbs[] = array(
            'title' => sprintf(__('Search Results for: %s', 'delivix-custom'), get_search_query()),
            'url' => '',
            'current' => true
        );
    } elseif (is_404()) {
        $breadcrumbs[] = array(
            'title' => __('Page Not Found', 'delivix-custom'),
            'url' => '',
            'current' => true
        );
    }
    
    return $breadcrumbs;
}

/**
 * Get Search Form
 */
function delivix_custom_get_search_form() {
    $form = '<form role="search" method="get" class="search-form" action="' . home_url('/') . '">';
    $form .= '<div class="input-group">';
    $form .= '<input type="search" class="form-control" placeholder="' . __('Search...', 'delivix-custom') . '" value="' . get_search_query() . '" name="s" />';
    $form .= '<button class="btn btn-primary" type="submit">';
    $form .= '<i class="fas fa-search"></i>';
    $form .= '</button>';
    $form .= '</div>';
    $form .= '</form>';
    
    return $form;
}

/**
 * Get Pagination
 */
function delivix_custom_get_pagination($query = null) {
    if (!$query) {
        global $wp_query;
        $query = $wp_query;
    }
    
    $big = 999999999;
    $pagination = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $query->max_num_pages,
        'prev_text' => '<i class="fas fa-chevron-left"></i> ' . __('Previous', 'delivix-custom'),
        'next_text' => __('Next', 'delivix-custom') . ' <i class="fas fa-chevron-right"></i>',
        'type' => 'array',
        'end_size' => 1,
        'mid_size' => 2
    ));
    
    if ($pagination) {
        $output = '<nav aria-label="' . __('Posts navigation', 'delivix-custom') . '">';
        $output .= '<ul class="pagination justify-content-center">';
        
        foreach ($pagination as $link) {
            $output .= '<li class="page-item">';
            $output .= $link;
            $output .= '</li>';
        }
        
        $output .= '</ul>';
        $output .= '</nav>';
        
        return $output;
    }
    
    return '';
}

/**
 * Get Comment Form
 */
function delivix_custom_get_comment_form() {
    $commenter = wp_get_current_commenter();
    $req = get_option('require_name_email');
    $html_req = ($req ? " required='required'" : '');
    
    $fields = array(
        'author' => '<div class="form-group mb-3"><label for="author">' . __('Name', 'delivix-custom') . ($req ? ' <span class="required">*</span>' : '') . '</label><input id="author" name="author" type="text" class="form-control" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $html_req . ' /></div>',
        'email' => '<div class="form-group mb-3"><label for="email">' . __('Email', 'delivix-custom') . ($req ? ' <span class="required">*</span>' : '') . '</label><input id="email" name="email" type="email" class="form-control" value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $html_req . ' /></div>',
        'url' => '<div class="form-group mb-3"><label for="url">' . __('Website', 'delivix-custom') . '</label><input id="url" name="url" type="url" class="form-control" value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /></div>'
    );
    
    $comment_field = '<div class="form-group mb-3"><label for="comment">' . __('Comment', 'delivix-custom') . ' <span class="required">*</span></label><textarea id="comment" name="comment" class="form-control" rows="5" required="required"></textarea></div>';
    
    $submit_button = '<button type="submit" class="btn btn-primary">' . __('Post Comment', 'delivix-custom') . '</button>';
    
    $args = array(
        'fields' => $fields,
        'comment_field' => $comment_field,
        'submit_button' => $submit_button,
        'class_form' => 'comment-form',
        'title_reply' => __('Leave a Comment', 'delivix-custom'),
        'title_reply_to' => __('Reply to %s', 'delivix-custom'),
        'cancel_reply_link' => __('Cancel Reply', 'delivix-custom'),
        'label_submit' => __('Post Comment', 'delivix-custom'),
        'format' => 'html5'
    );
    
    return comment_form($args);
}

/**
 * Get Comment List
 */
function delivix_custom_get_comment_list($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    
    $comment_class = 'comment';
    if ($depth > 1) {
        $comment_class .= ' comment-reply';
    }
    
    ?>
    <li <?php comment_class($comment_class); ?> id="comment-<?php comment_ID(); ?>">
        <article class="comment-body">
            <footer class="comment-meta">
                <div class="comment-author vcard">
                    <?php echo get_avatar($comment, 60, '', '', array('class' => 'rounded-circle me-2')); ?>
                    <cite class="fn"><?php comment_author_link(); ?></cite>
                </div>
                
                <div class="comment-metadata">
                    <time datetime="<?php comment_time('c'); ?>">
                        <?php printf(__('%1$s at %2$s', 'delivix-custom'), get_comment_date(), get_comment_time()); ?>
                    </time>
                    <?php edit_comment_link(__('(Edit)', 'delivix-custom'), ' <span class="edit-link">', '</span>'); ?>
                </div>
            </footer>
            
            <div class="comment-content">
                <?php comment_text(); ?>
            </div>
            
            <div class="reply">
                <?php comment_reply_link(array_merge($args, array('add_below' => 'div-comment', 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
            </div>
        </article>
    </li>
    <?php
}

/**
 * Add Custom Body Classes
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
    
    // Add post type classes
    if (is_singular()) {
        $classes[] = 'singular-' . get_post_type();
    }
    
    // Add archive classes
    if (is_archive()) {
        $classes[] = 'archive-' . get_post_type();
    }
    
    // Add search class
    if (is_search()) {
        $classes[] = 'search-results';
    }
    
    // Add 404 class
    if (is_404()) {
        $classes[] = 'error-404';
    }
    
    return $classes;
}
add_filter('body_class', 'delivix_custom_body_classes');

/**
 * Add Custom Post Classes
 */
function delivix_custom_post_classes($classes, $class, $post_id) {
    // Add featured post class
    if (is_sticky($post_id)) {
        $classes[] = 'featured-post';
    }
    
    // Add has thumbnail class
    if (has_post_thumbnail($post_id)) {
        $classes[] = 'has-thumbnail';
    }
    
    return $classes;
}
add_filter('post_class', 'delivix_custom_post_classes', 10, 3);
