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

    <!-- Advanced Header with Mega Menu -->
    <header class="menu-header position-fixed w-100">
        <nav class="menu-header--inner navbar navbar-dark navbar-expand-xl d-flex align-content-start align-items-center justify-content-between flex-wrap flex-xl-nowrap flex-row">
            <!-- Brand and Toggle Wrapper -->
            <div class="menu-header--wrapper brand-toggle-wrapper d-flex align-items-center justify-content-between flex-nowrap flex-grow-1 flex-shrink-0">
                <!-- Logo -->
                <span class="menu-header--brand navbar-brand">
                    <?php
                    if (has_custom_logo()) {
                        the_custom_logo();
                    } else {
                        echo '<span class="fw-bold text-white">' . get_bloginfo('name') . '</span>';
                    }
                    ?>
                </span>
                
                <!-- Mobile Toggle -->
                <button class="menu-header--toggle navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu-header--toggle-icon navbar-toggler-icon"></span>
                </button>
            </div>
            
            <!-- Main Menu -->
            <div class="menu-header--main-menu collapse navbar-collapse flex-grow-1 flex-shrink-0" id="mainmenu">
                <ul class="navbar-nav">
                    <!-- About Menu -->
                    <li class="nav-item item-531" data-level="1">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between flex-nowrap" data-level="1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                        <div class="dropdown-menu dropdown-megamenu navbar-light bg-white drop-shadow" data-level="1">
                            <div class="dropdown-menu--inner d-flex align-items-stretch justify-content-between flex-wrap flex-column flex-md-row" data-level="1">
                                <ul class="dropdown-menu--column dropdown-menu--column-menu list-unstyled" data-level="1">
                                    <li class="nav-item item-264" data-level="2">
                                        <a href="/about-us" class="nav-link" data-level="2">
                                            All About Us<br><small>Find out more about who we are, our values and culture, our history, and our incredible team.</small>
                                        </a>
                                        <div class="dropdown-menu--column dropdown-menu--column-inner" data-level="2">
                                            <div class="dropdown-menu--inner" data-level="2">
                                                <ul class="dropdown-menu--list list-unstyled" data-level="2">
                                                    <li class="nav-item item-532" data-level="3">
                                                        <span class="nav-link" data-level="3">Explore</span>
                                                        <div class="dropdown-menu--column dropdown-menu--column-inner" data-level="3">
                                                            <div class="dropdown-menu--inner" data-level="3">
                                                                <ul class="dropdown-menu--list list-unstyled" data-level="3">
                                                                    <li class="nav-item item-568" data-level="4">
                                                                        <a href="/digital-partner" class="nav-link" data-level="4">Your Digital Partner</a>
                                                                    </li>
                                                                    <li class="nav-item item-266" data-level="4">
                                                                        <a href="/our-work" class="nav-link" data-level="4">Our Work</a>
                                                                    </li>
                                                                    <li class="nav-item item-533" data-level="4">
                                                                        <a href="/latest-news" class="nav-link" data-level="4">Latest News</a>
                                                                    </li>
                                                                    <li class="nav-item item-254" data-level="4">
                                                                        <a href="/about-us/meet-the-team" class="nav-link" data-level="4">Meet the Team</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- Overview Column -->
                                <div class="dropdown-menu--column dropdown-menu--column-overview dropdown-menu--overview bg-dark-subtle d-flex flex-column flex-wrap position-relative">
                                    <section>
                                        <div class="container-fluid">
                                            <div class="row pt-nopad pe-nopad pb-nopad ps-nopad mt-nopad me-nopad mb-nopad ms-nopad">
                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 first last">
                                                    <figure>
                                                        <img alt="People looking at data on screen" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/digital-horizons-menu-block.jpg">
                                                        <figcaption></figcaption>
                                                    </figure>
                                                    <p>Download our latest free whitepaper</p>
                                                    <p>Discover the latest trends in digital marketing, development, design, and IT & Technical that are driving business growth in 2025.</p>
                                                    <p><a class="btn btn-link text-white stretched-link" href="/blog/digital-horizons-digital-trends-set-to-redefine-business-strategies-in-2025">Download today</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <!-- Design Menu -->
                    <li class="nav-item item-102" data-level="1">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between flex-nowrap" data-level="1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Design</a>
                        <div class="dropdown-menu dropdown-megamenu navbar-light bg-white drop-shadow" data-level="1">
                            <div class="dropdown-menu--inner d-flex align-items-stretch justify-content-between flex-wrap flex-column flex-md-row" data-level="1">
                                <ul class="dropdown-menu--column dropdown-menu--column-menu list-unstyled" data-level="1">
                                    <li class="nav-item item-103" data-level="2">
                                        <a href="/design" class="nav-link" data-level="2">
                                            All Design<br><small>Get a full overview of our design services</small>
                                        </a>
                                        <div class="dropdown-menu--column dropdown-menu--column-inner" data-level="2">
                                            <div class="dropdown-menu--inner" data-level="2">
                                                <ul class="dropdown-menu--list list-unstyled" data-level="2">
                                                    <li class="nav-item item-260" data-level="3">
                                                        <span class="nav-link" data-level="3">Services</span>
                                                        <div class="dropdown-menu--column dropdown-menu--column-inner" data-level="3">
                                                            <div class="dropdown-menu--inner" data-level="3">
                                                                <ul class="dropdown-menu--list list-unstyled" data-level="3">
                                                                    <li class="nav-item item-261" data-level="4">
                                                                        <a href="/design/web-design" class="nav-link" data-level="4">Web Design</a>
                                                                    </li>
                                                                    <li class="nav-item item-293" data-level="4">
                                                                        <a href="/design/graphic-design" class="nav-link" data-level="4">Graphic Design</a>
                                                                    </li>
                                                                    <li class="nav-item item-294" data-level="4">
                                                                        <a href="/design/branding" class="nav-link" data-level="4">Branding</a>
                                                                    </li>
                                                                    <li class="nav-item item-295" data-level="4">
                                                                        <a href="/design/production" class="nav-link" data-level="4">Production</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- Overview Column -->
                                <div class="dropdown-menu--column dropdown-menu--column-overview dropdown-menu--overview bg-dark-subtle d-flex flex-column flex-wrap position-relative">
                                    <section>
                                        <div class="container-fluid">
                                            <div class="row pt-nopad pe-nopad pb-nopad ps-nopad mt-nopad me-nopad mb-nopad ms-nopad">
                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 first last">
                                                    <figure>
                                                        <img alt="Design Services" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/bf-design-1.jpg">
                                                        <figcaption></figcaption>
                                                    </figure>
                                                    <p>Web Design</p>
                                                    <p>Creating engaging website designs that perfectly encompass the essence of your brand.</p>
                                                    <p><a class="btn btn-link text-white stretched-link" href="/design/web-design">Learn more</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <!-- Development Menu -->
                    <li class="nav-item item-115" data-level="1">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between flex-nowrap" data-level="1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Development</a>
                        <div class="dropdown-menu dropdown-megamenu navbar-light bg-white drop-shadow" data-level="1">
                            <div class="dropdown-menu--inner d-flex align-items-stretch justify-content-between flex-wrap flex-column flex-md-row" data-level="1">
                                <ul class="dropdown-menu--column dropdown-menu--column-menu list-unstyled" data-level="1">
                                    <li class="nav-item item-116" data-level="2">
                                        <a href="/development" class="nav-link" data-level="2">
                                            All Development<br><small>Get a full overview of our development services</small>
                                        </a>
                                        <div class="dropdown-menu--column dropdown-menu--column-inner" data-level="2">
                                            <div class="dropdown-menu--inner" data-level="2">
                                                <ul class="dropdown-menu--list list-unstyled" data-level="2">
                                                    <li class="nav-item item-267" data-level="3">
                                                        <span class="nav-link" data-level="3">Services</span>
                                                        <div class="dropdown-menu--column dropdown-menu--column-inner" data-level="3">
                                                            <div class="dropdown-menu--inner" data-level="3">
                                                                <ul class="dropdown-menu--list list-unstyled" data-level="3">
                                                                    <li class="nav-item item-269" data-level="4">
                                                                        <a href="/development/web-development" class="nav-link" data-level="4">Web Development</a>
                                                                    </li>
                                                                    <li class="nav-item item-296" data-level="4">
                                                                        <a href="/development/software-development" class="nav-link" data-level="4">Software Development</a>
                                                                    </li>
                                                                    <li class="nav-item item-297" data-level="4">
                                                                        <a href="/development/ecommerce-web-development" class="nav-link" data-level="4">eCommerce</a>
                                                                    </li>
                                                                    <li class="nav-item item-298" data-level="4">
                                                                        <a href="/development/mobile-app-development" class="nav-link" data-level="4">App Development</a>
                                                                    </li>
                                                                    <li class="nav-item item-300" data-level="4">
                                                                        <a href="/development/website-support-and-maintenance" class="nav-link" data-level="4">Support & Maintenance</a>
                                                                    </li>
                                                                    <li class="nav-item item-301" data-level="4">
                                                                        <a href="/development/testing" class="nav-link" data-level="4">Testing</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- Overview Column -->
                                <div class="dropdown-menu--column dropdown-menu--column-overview dropdown-menu--overview bg-dark-subtle d-flex flex-column flex-wrap position-relative">
                                    <section>
                                        <div class="container-fluid">
                                            <div class="row pt-nopad pe-nopad pb-nopad ps-nopad mt-nopad me-nopad mb-nopad ms-nopad">
                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 first last">
                                                    <figure>
                                                        <img alt="eCommerce Services" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/bf-development-1.jpg">
                                                        <figcaption></figcaption>
                                                    </figure>
                                                    <p>eCommerce</p>
                                                    <p>Scalable eCommerce solutions to suit your unique business requirements.</p>
                                                    <p><a class="btn btn-link text-white stretched-link" href="/development/ecommerce-web-development">Learn more</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <!-- Marketing Menu -->
                    <li class="nav-item item-275" data-level="1">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between flex-nowrap" data-level="1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Marketing</a>
                        <div class="dropdown-menu dropdown-megamenu navbar-light bg-white drop-shadow" data-level="1">
                            <div class="dropdown-menu--inner d-flex align-items-stretch justify-content-between flex-wrap flex-column flex-md-row" data-level="1">
                                <ul class="dropdown-menu--column dropdown-menu--column-menu list-unstyled" data-level="1">
                                    <li class="nav-item item-276" data-level="2">
                                        <a href="/digital-marketing" class="nav-link" data-level="2">
                                            All Marketing<br><small>Get a full overview of our marketing services</small>
                                        </a>
                                        <div class="dropdown-menu--column dropdown-menu--column-inner" data-level="2">
                                            <div class="dropdown-menu--inner" data-level="2">
                                                <ul class="dropdown-menu--list list-unstyled" data-level="2">
                                                    <li class="nav-item item-324" data-level="3">
                                                        <span class="nav-link" data-level="3">Services</span>
                                                        <div class="dropdown-menu--column dropdown-menu--column-inner" data-level="3">
                                                            <div class="dropdown-menu--inner" data-level="3">
                                                                <ul class="dropdown-menu--list list-unstyled" data-level="3">
                                                                    <li class="nav-item item-359" data-level="4">
                                                                        <a href="/digital-marketing/marketing-strategy" class="nav-link" data-level="4">Marketing Strategy</a>
                                                                    </li>
                                                                    <li class="nav-item item-360" data-level="4">
                                                                        <a href="/digital-marketing/holistic-marketing" class="nav-link" data-level="4">Holistic Marketing</a>
                                                                    </li>
                                                                    <li class="nav-item item-361" data-level="4">
                                                                        <a href="/digital-marketing/seo" class="nav-link" data-level="4">SEO</a>
                                                                    </li>
                                                                    <li class="nav-item item-362" data-level="4">
                                                                        <a href="/digital-marketing/paid-advertising" class="nav-link" data-level="4">Paid Advertising</a>
                                                                    </li>
                                                                    <li class="nav-item item-363" data-level="4">
                                                                        <a href="/digital-marketing/social-media" class="nav-link" data-level="4">Social Media</a>
                                                                    </li>
                                                                    <li class="nav-item item-364" data-level="4">
                                                                        <a href="/digital-marketing/content" class="nav-link" data-level="4">Content</a>
                                                                    </li>
                                                                    <li class="nav-item item-365" data-level="4">
                                                                        <a href="/digital-marketing/conversion-rate-optimisation" class="nav-link" data-level="4">CRO</a>
                                                                    </li>
                                                                    <li class="nav-item item-366" data-level="4">
                                                                        <a href="/digital-marketing/data-analytics-and-reporting" class="nav-link" data-level="4">Data Analytics & Reporting</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- Overview Column -->
                                <div class="dropdown-menu--column dropdown-menu--column-overview dropdown-menu--overview bg-dark-subtle d-flex flex-column flex-wrap position-relative">
                                    <section>
                                        <div class="container-fluid">
                                            <div class="row pt-nopad pe-nopad pb-nopad ps-nopad mt-nopad me-nopad mb-nopad ms-nopad">
                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 first last">
                                                    <figure>
                                                        <img alt="Holistic Marketing" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/bf-marketing-1.jpg">
                                                        <figcaption></figcaption>
                                                    </figure>
                                                    <p>Holistic Marketing</p>
                                                    <p>A flexible approach to digital marketing to meet the changing needs of your business.</p>
                                                    <p><a class="btn btn-link text-white stretched-link" href="/digital-marketing/holistic-marketing">Learn more</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <!-- Technical Menu -->
                    <li class="nav-item item-278" data-level="1">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between flex-nowrap" data-level="1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Technical</a>
                        <div class="dropdown-menu dropdown-megamenu navbar-light bg-white drop-shadow" data-level="1">
                            <div class="dropdown-menu--inner d-flex align-items-stretch justify-content-between flex-wrap flex-column flex-md-row" data-level="1">
                                <ul class="dropdown-menu--column dropdown-menu--column-menu list-unstyled" data-level="1">
                                    <li class="nav-item item-279" data-level="2">
                                        <a href="/technical" class="nav-link" data-level="2">
                                            All Technical<br><small>Get a full overview of our technical services</small>
                                        </a>
                                        <div class="dropdown-menu--column dropdown-menu--column-inner" data-level="2">
                                            <div class="dropdown-menu--inner" data-level="2">
                                                <ul class="dropdown-menu--list list-unstyled" data-level="2">
                                                    <li class="nav-item item-367" data-level="3">
                                                        <span class="nav-link" data-level="3">Services</span>
                                                        <div class="dropdown-menu--column dropdown-menu--column-inner" data-level="3">
                                                            <div class="dropdown-menu--inner" data-level="3">
                                                                <ul class="dropdown-menu--list list-unstyled" data-level="3">
                                                                    <li class="nav-item item-368" data-level="4">
                                                                        <a href="/technical/it-services" class="nav-link" data-level="4">Managed IT Services</a>
                                                                    </li>
                                                                    <li class="nav-item item-514" data-level="4">
                                                                        <a href="/technical/cloud-services" class="nav-link" data-level="4">Cloud Services</a>
                                                                    </li>
                                                                    <li class="nav-item item-370" data-level="4">
                                                                        <a href="/technical/cyber-security" class="nav-link" data-level="4">Cyber Security</a>
                                                                    </li>
                                                                    <li class="nav-item item-371" data-level="4">
                                                                        <a href="/technical/cloud-infrastructure" class="nav-link" data-level="4">IaaS</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- Overview Column -->
                                <div class="dropdown-menu--column dropdown-menu--column-overview dropdown-menu--overview bg-dark-subtle d-flex flex-column flex-wrap position-relative">
                                    <section>
                                        <div class="container-fluid">
                                            <div class="row pt-nopad pe-nopad pb-nopad ps-nopad mt-nopad me-nopad mb-nopad ms-nopad">
                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 first last">
                                                    <figure>
                                                        <img alt="Technical Services" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/bf-technical-1.jpg">
                                                        <figcaption></figcaption>
                                                    </figure>
                                                    <p>IaaS</p>
                                                    <p>Building and managing bespoke cloud hosting environments for your digital systems.</p>
                                                    <p><a class="btn btn-link text-white stretched-link" href="/technical/cloud-infrastructure">Learn more</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <!-- Consultancy Menu -->
                    <li class="nav-item item-281" data-level="1">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between flex-nowrap" data-level="1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Consultancy</a>
                        <div class="dropdown-menu dropdown-megamenu navbar-light bg-white drop-shadow" data-level="1">
                            <div class="dropdown-menu--inner d-flex align-items-stretch justify-content-between flex-wrap flex-column flex-md-row" data-level="1">
                                <ul class="dropdown-menu--column dropdown-menu--column-menu list-unstyled" data-level="1">
                                    <li class="nav-item item-282" data-level="2">
                                        <a href="/consultancy" class="nav-link" data-level="2">
                                            All Consultancy<br><small>Get a full overview of our consultancy services</small>
                                        </a>
                                        <div class="dropdown-menu--column dropdown-menu--column-inner" data-level="2">
                                            <div class="dropdown-menu--inner" data-level="2">
                                                <ul class="dropdown-menu--list list-unstyled" data-level="2">
                                                    <li class="nav-item item-372" data-level="3">
                                                        <span class="nav-link" data-level="3">Services</span>
                                                        <div class="dropdown-menu--column dropdown-menu--column-inner" data-level="3">
                                                            <div class="dropdown-menu--inner" data-level="3">
                                                                <ul class="dropdown-menu--list list-unstyled" data-level="3">
                                                                    <li class="nav-item item-373" data-level="4">
                                                                        <a href="/consultancy/digital-transformation" class="nav-link" data-level="4">Digital Transformation</a>
                                                                    </li>
                                                                    <li class="nav-item item-374" data-level="4">
                                                                        <a href="/consultancy/ai-consultancy" class="nav-link" data-level="4">AI Consultancy</a>
                                                                    </li>
                                                                    <li class="nav-item item-375" data-level="4">
                                                                        <a href="/consultancy/gdpr-consultancy" class="nav-link" data-level="4">Data Protection & GDPR</a>
                                                                    </li>
                                                                    <li class="nav-item item-376" data-level="4">
                                                                        <a href="/consultancy/iso-consultancy" class="nav-link" data-level="4">ISO & Compliance</a>
                                                                    </li>
                                                                    <li class="nav-item item-377" data-level="4">
                                                                        <a href="/consultancy/pci-dss-consultancy" class="nav-link" data-level="4">PCI DSS</a>
                                                                    </li>
                                                                    <li class="nav-item item-516" data-level="4">
                                                                        <a href="/product" class="nav-link" data-level="4">Product</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <!-- Overview Column -->
                                <div class="dropdown-menu--column dropdown-menu--column-overview dropdown-menu--overview bg-dark-subtle d-flex flex-column flex-wrap position-relative">
                                    <section>
                                        <div class="container-fluid">
                                            <div class="row pt-nopad pe-nopad pb-nopad ps-nopad mt-nopad me-nopad mb-nopad ms-nopad">
                                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 first last">
                                                    <figure>
                                                        <img alt="Digital Product Services" src="<?php echo get_template_directory_uri(); ?>/assets/images/menu/bf-consultancy-1.jpg">
                                                        <figcaption></figcaption>
                                                    </figure>
                                                    <p>Product Consultancy</p>
                                                    <p>Discovering the perfect technical solution to bring your product to life.</p>
                                                    <p><a class="btn btn-link text-white stretched-link" href="/product">Learn more</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <!-- MedTech Menu -->
                    <li class="nav-item item-284" data-level="1">
                        <a class="nav-link dropdown-toggle d-flex align-items-center justify-content-between flex-nowrap" data-level="1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">MedTech</a>
                        <div class="dropdown-menu dropdown-megamenu navbar-light bg-white drop-shadow" data-level="1">
                            <div class="dropdown-menu--inner d-flex align-items-stretch justify-content-between flex-wrap flex-column flex-md-row" data-level="1">
                                <ul class="dropdown-menu--column dropdown-menu--column-menu list-unstyled" data-level="1">
                                    <li class="nav-item item-285" data-level="2">
                                        <a href="/medtech" class="nav-link" data-level="2">
                                            All MedTech<br><small>Get a full overview of our medtech services</small>
                                        </a>
                                        <div class="dropdown-menu--column dropdown-menu--column-inner" data-level="2">
                                            <div class="dropdown-menu--inner" data-level="2">
                                                <ul class="dropdown-menu--list list-unstyled" data-level="2">
                                                    <li class="nav-item item-379" data-level="3">
                                                        <span class="nav-link" data-level="3">Services</span>
                                                        <div class="dropdown-menu--column dropdown-menu--column-inner" data-level="3">
                                                            <div class="dropdown-menu--inner" data-level="3">
                                                                <ul class="dropdown-menu--list list-unstyled" data-level="3">
                                                                    <li class="nav-item item-380" data-level="4">
                                                                        <a href="/medtech/medical-device-connectivity" class="nav-link" data-level="4">Medical Device Connectivity</a>
                                                                    </li>
                                                                    <li class="nav-item item-381" data-level="4">
                                                                        <a href="/medtech/medical-software-development" class="nav-link" data-level="4">Medical Software Development</a>
                                                                    </li>
                                                                    <li class="nav-item item-382" data-level="4">
                                                                        <a href="/medtech/healthcare-integrated-systems" class="nav-link" data-level="4">Healthcare Integrated Systems</a>
                                                                    </li>
                                                                    <li class="nav-item item-383" data-level="4">
                                                                        <a href="/medtech/healthcare-cyber-security" class="nav-link" data-level="4">Healthcare Cyber Security</a>
                                                                    </li>
                                                                    <li class="nav-item item-384" data-level="4">
                                                                        <a href="/medtech/healthcare-software-testing" class="nav-link" data-level="4">Healthcare Software Testing</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                
                <!-- Auxiliary Menu (Contact Button) -->
                <div class="menu-header--auxiliary-menu flex-grow-1 d-flex align-items-center justify-content-end flex-shrink-0">
                    <div class="flex-grow-1 flex-xl-grow-0">
                        <ul class="navbar-nav">
                            <li class="nav-item item-321" data-level="1">
                                <a href="/contact" class="nav-link btn btn-white" data-level="1">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section (if on front page) -->
    <?php if (is_front_page()) : ?>
        <section id="main-content" class="relative w-full h-full overflow-hidden hero-section" role="main">
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
