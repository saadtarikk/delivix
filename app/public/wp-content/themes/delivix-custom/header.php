<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#main"><?php _e('Skip to content', 'delivix-custom'); ?></a>

    <header id="masthead" class="site-header">
        <!-- Top Bar -->
        <div class="top-bar bg-primary text-white py-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="top-bar-info small">
                            <span class="me-3">
                                <i class="fas fa-phone me-1"></i>
                                <a href="tel:+1234567890" class="text-white text-decoration-none">+1 (234) 567-890</a>
                            </span>
                            <span>
                                <i class="fas fa-envelope me-1"></i>
                                <a href="mailto:info@delivix.com" class="text-white text-decoration-none">info@delivix.com</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="social-links">
                            <a href="#" class="text-white me-2" aria-label="LinkedIn">
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="#" class="text-white me-2" aria-label="Twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-white me-2" aria-label="Facebook">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#" class="text-white" aria-label="Instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        echo '<span class="h4 mb-0 text-primary fw-bold">' . get_bloginfo('name') . '</span>';
                    }
                    ?>
                </a>

                <!-- Mobile Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primaryNavigation" aria-controls="primaryNavigation" aria-expanded="false" aria-label="<?php _e('Toggle navigation', 'delivix-custom'); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation Menu -->
                <div class="collapse navbar-collapse" id="primaryNavigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                        'menu_class'     => 'navbar-nav ms-auto mb-2 mb-lg-0',
                        'fallback_cb'    => 'delivix_custom_fallback_menu',
                        'walker'         => new Delivix_Custom_Walker_Nav_Menu()
                    ));
                    ?>
                    
                    <!-- CTA Button -->
                    <div class="ms-lg-3">
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">
                            <?php _e('Get Started', 'delivix-custom'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section (if on front page) -->
    <?php if (is_front_page()) : ?>
        <section id="main-content" class="relative w-full h-full bg-white overflow-hidden hero-section" role="main">
            <!-- Grid Background Lines -->
            <div class="absolute inset-0 w-full h-full hidden md:block pointer-events-none">
                <div class="h-full grid grid-cols-custom xl:grid-cols-custom">
                    <div class="grid-border"></div>
                    <div class="grid-border"></div>
                    <div class="grid-border"></div>
                    <div class="grid-border"></div>
                    <div class="grid-border"></div>
                    <div class="grid-border"></div>
                </div>
            </div>
            
            <!-- Hero Content Grid -->
            <div class="relative grid hero-grid xl:hero-grid">
                <!-- Row 1: DÉVELOPPEMENT -->
                <div class="hero-text-row-1 xl:hero-text-row-1 flex overflow-hidden" style="--animation-delay: 0s;">
                    <h1 class="hero-title hero-title-row-1" data-fr="DÉVELOPPEMENT" data-en="DEVELOPMENT">
                        DÉVELOPPEMENT
                    </h1>
                </div>
                
                <!-- Row 2: AGENCE -->
                <div class="hero-text-row-2 xl:hero-text-row-2 flex justify-center md:justify-end overflow-hidden" style="--animation-delay: 0.15s;">
                    <h1 class="hero-title" data-fr="AGENCE" data-en="AGENCY">
                        AGENCY
                    </h1>
                </div>
                
                <!-- Row 3: Subtitle -->
                <div class="hero-text-row-3 flex pr-4" style="--animation-delay: 0.3s;">
                    <div class="mt-8 max-w-lg overflow-hidden">
                        <p class="hero-subtitle" data-fr="VOUS AVEZ UNE IDÉE DE PROJET MAIS VOUS ÊTES PERDU AVEC TOUTE LA TECHNIQUE? LAISSEZ-NOUS NOUS EN OCCUPER ET RÉALISER VOTRE PROJET!" data-en="YOU HAVE A PROJECT IDEA BUT YOU'RE LOST WITH ALL THE TECH STUFF? LET US HANDLE IT AND MAKE IT HAPPEN!">
                            YOU HAVE A PROJECT IDEA BUT YOU'RE LOST WITH ALL THE TECH STUFF? LET US HANDLE IT AND MAKE IT HAPPEN!
                        </p>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- Page Header (if not on front page) -->
    <?php if (!is_front_page() && !is_404()) : ?>
        <section class="page-header bg-light py-4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php if (is_page()) : ?>
                            <h1 class="page-title h2 mb-0"><?php the_title(); ?></h1>
                        <?php elseif (is_single()) : ?>
                            <h1 class="page-title h2 mb-0"><?php the_title(); ?></h1>
                        <?php elseif (is_archive()) : ?>
                            <h1 class="page-title h2 mb-0"><?php the_archive_title(); ?></h1>
                        <?php elseif (is_search()) : ?>
                            <h1 class="page-title h2 mb-0">
                                <?php printf(__('Search Results for: %s', 'delivix-custom'), '<span class="text-primary">' . get_search_query() . '</span>'); ?>
                            </h1>
                        <?php endif; ?>
                        
                        <?php if (function_exists('yoast_breadcrumb')) : ?>
                            <nav aria-label="breadcrumb" class="mt-2">
                                <?php yoast_breadcrumb('<ol class="breadcrumb mb-0">', '</ol>'); ?>
                            </nav>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
