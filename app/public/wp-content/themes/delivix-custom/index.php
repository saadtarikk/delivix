<?php
/**
 * The main template file
 *
 * @package Delivix_Custom
 * @version 1.0.0
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php if (have_posts()) : ?>
                    <header class="page-header mb-4">
                        <?php if (is_home() && !is_front_page()) : ?>
                            <h1 class="page-title"><?php single_post_title(); ?></h1>
                        <?php elseif (is_search()) : ?>
                            <h1 class="page-title">
                                <?php printf(__('Search Results for: %s', 'delivix-custom'), '<span>' . get_search_query() . '</span>'); ?>
                            </h1>
                        <?php elseif (is_404()) : ?>
                            <h1 class="page-title"><?php _e('Page Not Found', 'delivix-custom'); ?></h1>
                        <?php elseif (is_archive()) : ?>
                            <h1 class="page-title"><?php the_archive_title(); ?></h1>
                            <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
                        <?php endif; ?>
                    </header>

                    <div class="posts-grid">
                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('post-card mb-4'); ?>>
                                <div class="card h-100 shadow-sm">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="card-img-top">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail('card-medium', array('class' => 'img-fluid')); ?>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    
                                    <div class="card-body">
                                        <header class="entry-header">
                                            <?php if (is_sticky() && is_home() && !is_paged()) : ?>
                                                <span class="badge bg-primary mb-2"><?php _e('Featured', 'delivix-custom'); ?></span>
                                            <?php endif; ?>
                                            
                                            <h2 class="entry-title h5">
                                                <a href="<?php the_permalink(); ?>" rel="bookmark">
                                                    <?php the_title(); ?>
                                                </a>
                                            </h2>
                                            
                                            <div class="entry-meta text-muted small mb-2">
                                                <span class="posted-on">
                                                    <i class="fas fa-calendar-alt me-1"></i>
                                                    <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                                        <?php echo esc_html(get_the_date()); ?>
                                                    </time>
                                                </span>
                                                
                                                <?php if (has_category()) : ?>
                                                    <span class="categories ms-3">
                                                        <i class="fas fa-folder me-1"></i>
                                                        <?php the_category(', '); ?>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </header>

                                        <div class="entry-summary">
                                            <?php the_excerpt(); ?>
                                        </div>

                                        <footer class="entry-footer">
                                            <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary btn-sm">
                                                <?php _e('Read More', 'delivix-custom'); ?>
                                                <i class="fas fa-arrow-right ms-1"></i>
                                            </a>
                                        </footer>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>

                    <?php
                    // Pagination
                    the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => '<i class="fas fa-chevron-left"></i> ' . __('Previous', 'delivix-custom'),
                        'next_text' => __('Next', 'delivix-custom') . ' <i class="fas fa-chevron-right"></i>',
                        'class' => 'pagination justify-content-center'
                    ));
                    ?>

                <?php else : ?>
                    <div class="no-posts text-center py-5">
                        <i class="fas fa-search fa-3x text-muted mb-3"></i>
                        <h2><?php _e('No Posts Found', 'delivix-custom'); ?></h2>
                        <p class="text-muted"><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'delivix-custom'); ?></p>
                        <?php get_search_form(); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-lg-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
