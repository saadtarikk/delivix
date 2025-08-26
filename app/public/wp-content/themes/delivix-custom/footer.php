    <footer id="colophon" class="site-footer bg-dark text-white">
        <!-- Main Footer -->
        <div class="footer-main py-5">
            <div class="container">
                <div class="row">
                    <!-- Company Info -->
                    <div class="col-lg-4 mb-4">
                        <div class="footer-brand mb-3">
                            <?php
                            if (has_custom_logo()) {
                                the_custom_logo();
                            } else {
                                echo '<h3 class="h4 text-white fw-bold">' . get_bloginfo('name') . '</h3>';
                            }
                            ?>
                        </div>
                        <p class="text-light mb-3">
                            <?php echo get_theme_mod('footer_description', __('We accelerate ambition, grow brands, build digital products, and craft experiences that bring positive change, value, and innovation.', 'delivix-custom')); ?>
                        </p>
                        <div class="social-links">
                            <a href="#" class="text-white me-3" aria-label="LinkedIn">
                                <i class="fab fa-linkedin fa-lg"></i>
                            </a>
                            <a href="#" class="text-white me-3" aria-label="Twitter">
                                <i class="fab fa-twitter fa-lg"></i>
                            </a>
                            <a href="#" class="text-white me-3" aria-label="Facebook">
                                <i class="fab fa-facebook fa-lg"></i>
                            </a>
                            <a href="#" class="text-white" aria-label="Instagram">
                                <i class="fab fa-instagram fa-lg"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Footer Widget Area 1 -->
                    <div class="col-lg-2 col-md-6 mb-4">
                        <?php if (is_active_sidebar('footer-1')) : ?>
                            <?php dynamic_sidebar('footer-1'); ?>
                        <?php else : ?>
                            <h5 class="text-white mb-3"><?php _e('Services', 'delivix-custom'); ?></h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="#" class="text-light text-decoration-none"><?php _e('Web Design', 'delivix-custom'); ?></a></li>
                                <li class="mb-2"><a href="#" class="text-light text-decoration-none"><?php _e('Development', 'delivix-custom'); ?></a></li>
                                <li class="mb-2"><a href="#" class="text-light text-decoration-none"><?php _e('Marketing', 'delivix-custom'); ?></a></li>
                                <li class="mb-2"><a href="#" class="text-light text-decoration-none"><?php _e('Consulting', 'delivix-custom'); ?></a></li>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <!-- Footer Widget Area 2 -->
                    <div class="col-lg-2 col-md-6 mb-4">
                        <?php if (is_active_sidebar('footer-2')) : ?>
                            <?php dynamic_sidebar('footer-2'); ?>
                        <?php else : ?>
                            <h5 class="text-white mb-3"><?php _e('Company', 'delivix-custom'); ?></h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="#" class="text-light text-decoration-none"><?php _e('About Us', 'delivix-custom'); ?></a></li>
                                <li class="mb-2"><a href="#" class="text-light text-decoration-none"><?php _e('Our Team', 'delivix-custom'); ?></a></li>
                                <li class="mb-2"><a href="#" class="text-light text-decoration-none"><?php _e('Careers', 'delivix-custom'); ?></a></li>
                                <li class="mb-2"><a href="#" class="text-light text-decoration-none"><?php _e('Contact', 'delivix-custom'); ?></a></li>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <!-- Footer Widget Area 3 -->
                    <div class="col-lg-2 col-md-6 mb-4">
                        <?php if (is_active_sidebar('footer-3')) : ?>
                            <?php dynamic_sidebar('footer-3'); ?>
                        <?php else : ?>
                            <h5 class="text-white mb-3"><?php _e('Resources', 'delivix-custom'); ?></h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="#" class="text-light text-decoration-none"><?php _e('Blog', 'delivix-custom'); ?></a></li>
                                <li class="mb-2"><a href="#" class="text-light text-decoration-none"><?php _e('Case Studies', 'delivix-custom'); ?></a></li>
                                <li class="mb-2"><a href="#" class="text-light text-decoration-none"><?php _e('Whitepapers', 'delivix-custom'); ?></a></li>
                                <li class="mb-2"><a href="#" class="text-light text-decoration-none"><?php _e('Support', 'delivix-custom'); ?></a></li>
                            </ul>
                        <?php endif; ?>
                    </div>

                    <!-- Newsletter Signup -->
                    <div class="col-lg-2 col-md-6 mb-4">
                        <h5 class="text-white mb-3"><?php _e('Newsletter', 'delivix-custom'); ?></h5>
                        <p class="text-light small mb-3"><?php _e('Stay updated with our latest insights and news.', 'delivix-custom'); ?></p>
                        <form class="newsletter-form">
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="<?php _e('Your email', 'delivix-custom'); ?>" aria-label="<?php _e('Your email', 'delivix-custom'); ?>">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-paper-plane"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom py-3 border-top border-secondary">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="text-light small mb-0">
                            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('All rights reserved.', 'delivix-custom'); ?>
                        </p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <div class="footer-links">
                            <a href="#" class="text-light text-decoration-none small me-3"><?php _e('Privacy Policy', 'delivix-custom'); ?></a>
                            <a href="#" class="text-light text-decoration-none small me-3"><?php _e('Terms of Service', 'delivix-custom'); ?></a>
                            <a href="#" class="text-light text-decoration-none small"><?php _e('Cookie Policy', 'delivix-custom'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="btn btn-primary position-fixed bottom-0 end-0 m-3 d-none" style="z-index: 1000;">
        <i class="fas fa-chevron-up"></i>
    </button>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
