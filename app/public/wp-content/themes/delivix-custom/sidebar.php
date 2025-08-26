<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Delivix_Custom
 * @version 1.0.0
 */

if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<aside id="secondary" class="widget-area">
    <?php dynamic_sidebar('sidebar-1'); ?>
    
    <!-- Default Sidebar Content if no widgets -->
    <?php if (!is_active_sidebar('sidebar-1')) : ?>
        
        <!-- Search Widget -->
        <section class="widget widget_search mb-4">
            <h3 class="widget-title h5"><?php _e('Search', 'delivix-custom'); ?></h3>
            <?php echo delivix_custom_get_search_form(); ?>
        </section>

        <!-- About Widget -->
        <section class="widget widget_about mb-4">
            <h3 class="widget-title h5"><?php _e('About', 'delivix-custom'); ?></h3>
            <div class="widget-content">
                <p><?php echo get_theme_mod('footer_description', __('We accelerate ambition, grow brands, build digital products, and craft experiences that bring positive change, value, and innovation.', 'delivix-custom')); ?></p>
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn-outline-primary btn-sm">
                    <?php _e('Learn More', 'delivix-custom'); ?>
                </a>
            </div>
        </section>

        <!-- Recent Posts Widget -->
        <section class="widget widget_recent_posts mb-4">
            <h3 class="widget-title h5"><?php _e('Recent Posts', 'delivix-custom'); ?></h3>
            <div class="widget-content">
                <?php
                $recent_posts = wp_get_recent_posts(array(
                    'numberposts' => 5,
                    'post_status' => 'publish'
                ));
                
                if ($recent_posts) :
                    echo '<ul class="list-unstyled">';
                    foreach ($recent_posts as $post) :
                        ?>
                        <li class="recent-post-item mb-2">
                            <a href="<?php echo esc_url(get_permalink($post['ID'])); ?>" class="text-decoration-none">
                                <div class="d-flex align-items-start">
                                    <?php if (has_post_thumbnail($post['ID'])) : ?>
                                        <div class="flex-shrink-0 me-2">
                                            <?php echo get_the_post_thumbnail($post['ID'], 'thumbnail', array('class' => 'img-fluid rounded', 'style' => 'width: 60px; height: 60px; object-fit: cover;')); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1 text-dark"><?php echo esc_html($post['post_title']); ?></h6>
                                        <small class="text-muted">
                                            <i class="fas fa-calendar-alt me-1"></i>
                                            <?php echo get_the_date('', $post['ID']); ?>
                                        </small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php
                    endforeach;
                    echo '</ul>';
                else :
                    echo '<p class="text-muted">' . __('No recent posts found.', 'delivix-custom') . '</p>';
                endif;
                ?>
            </div>
        </section>

        <!-- Categories Widget -->
        <section class="widget widget_categories mb-4">
            <h3 class="widget-title h5"><?php _e('Categories', 'delivix-custom'); ?></h3>
            <div class="widget-content">
                <?php
                $categories = get_categories(array(
                    'orderby' => 'count',
                    'order' => 'DESC',
                    'number' => 10
                ));
                
                if ($categories) :
                    echo '<ul class="list-unstyled">';
                    foreach ($categories as $category) :
                        ?>
                        <li class="category-item mb-2">
                            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="text-decoration-none d-flex justify-content-between align-items-center">
                                <span class="text-dark"><?php echo esc_html($category->name); ?></span>
                                <span class="badge bg-secondary rounded-pill"><?php echo $category->count; ?></span>
                            </a>
                        </li>
                        <?php
                    endforeach;
                    echo '</ul>';
                else :
                    echo '<p class="text-muted">' . __('No categories found.', 'delivix-custom') . '</p>';
                endif;
                ?>
            </div>
        </section>

        <!-- Tags Widget -->
        <section class="widget widget_tag_cloud mb-4">
            <h3 class="widget-title h5"><?php _e('Popular Tags', 'delivix-custom'); ?></h3>
            <div class="widget-content">
                <?php
                $tags = get_tags(array(
                    'orderby' => 'count',
                    'order' => 'DESC',
                    'number' => 20
                ));
                
                if ($tags) :
                    echo '<div class="tag-cloud">';
                    foreach ($tags as $tag) :
                        $font_size = 12 + ($tag->count / 10);
                        ?>
                        <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" 
                           class="badge bg-light text-dark text-decoration-none me-1 mb-1"
                           style="font-size: <?php echo $font_size; ?>px;">
                            <?php echo esc_html($tag->name); ?>
                        </a>
                        <?php
                    endforeach;
                    echo '</div>';
                else :
                    echo '<p class="text-muted">' . __('No tags found.', 'delivix-custom') . '</p>';
                endif;
                ?>
            </div>
        </section>

        <!-- Newsletter Widget -->
        <section class="widget widget_newsletter mb-4">
            <h3 class="widget-title h5"><?php _e('Newsletter', 'delivix-custom'); ?></h3>
            <div class="widget-content">
                <p class="small text-muted mb-3"><?php _e('Stay updated with our latest insights and news.', 'delivix-custom'); ?></p>
                <form class="newsletter-form">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="<?php _e('Your email', 'delivix-custom'); ?>" aria-label="<?php _e('Your email', 'delivix-custom'); ?>" required>
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Contact Widget -->
        <section class="widget widget_contact mb-4">
            <h3 class="widget-title h5"><?php _e('Contact Info', 'delivix-custom'); ?></h3>
            <div class="widget-content">
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="fas fa-map-marker-alt text-primary me-2"></i>
                        <span class="text-muted"><?php _e('Your Address Here', 'delivix-custom'); ?></span>
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-phone text-primary me-2"></i>
                        <a href="tel:+1234567890" class="text-decoration-none text-muted">+1 (234) 567-890</a>
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-envelope text-primary me-2"></i>
                        <a href="mailto:info@delivix.com" class="text-decoration-none text-muted">info@delivix.com</a>
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-clock text-primary me-2"></i>
                        <span class="text-muted"><?php _e('Mon - Fri: 9:00 AM - 6:00 PM', 'delivix-custom'); ?></span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Social Media Widget -->
        <section class="widget widget_social_media mb-4">
            <h3 class="widget-title h5"><?php _e('Follow Us', 'delivix-custom'); ?></h3>
            <div class="widget-content">
                <div class="social-links">
                    <a href="#" class="btn btn-outline-primary btn-sm me-2 mb-2" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="btn btn-outline-primary btn-sm me-2 mb-2" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-outline-primary btn-sm me-2 mb-2" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="btn btn-outline-primary btn-sm me-2 mb-2" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="btn btn-outline-primary btn-sm me-2 mb-2" aria-label="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </section>

    <?php endif; ?>
</aside><!-- #secondary -->
