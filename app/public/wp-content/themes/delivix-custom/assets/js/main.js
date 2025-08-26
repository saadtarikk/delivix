/**
 * Delivix Custom Theme - Main JavaScript
 * 
 * @package Delivix_Custom
 * @version 1.0.0
 */

(function($) {
    'use strict';

    // DOM Ready
    $(document).ready(function() {
        initTheme();
    });

    // Window Load
    $(window).on('load', function() {
        initAnimations();
    });

    // Window Scroll
    $(window).on('scroll', function() {
        handleScroll();
    });

    // Window Resize
    $(window).on('resize', function() {
        handleResize();
    });

    /**
     * Initialize Theme
     */
    function initTheme() {
        initNavigation();
        initBackToTop();
        initSmoothScroll();
        initTooltips();
        initPopovers();
        initCarousels();
        initAnimations();
        initForms();
        initLazyLoading();
    }

    /**
     * Initialize Navigation
     */
    function initNavigation() {
        // Sticky Header
        const header = $('.site-header');
        const headerHeight = header.outerHeight();
        let lastScrollTop = 0;

        $(window).on('scroll', function() {
            const scrollTop = $(this).scrollTop();
            
            if (scrollTop > headerHeight) {
                header.addClass('sticky-top');
            } else {
                header.removeClass('sticky-top');
            }

            // Hide/show header on scroll
            if (scrollTop > lastScrollTop && scrollTop > headerHeight) {
                header.addClass('header-hidden');
            } else {
                header.removeClass('header-hidden');
            }

            lastScrollTop = scrollTop;
        });

        // Mobile Menu Toggle
        $('.navbar-toggler').on('click', function() {
            $(this).toggleClass('active');
        });

        // Dropdown Hover (Desktop)
        if ($(window).width() > 992) {
            $('.dropdown').hover(
                function() {
                    $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
                },
                function() {
                    $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
                }
            );
        }

        // Close mobile menu when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.navbar').length) {
                $('.navbar-collapse').collapse('hide');
                $('.navbar-toggler').removeClass('active');
            }
        });
    }

    /**
     * Initialize Back to Top Button
     */
    function initBackToTop() {
        const backToTop = $('#back-to-top');
        const showThreshold = 300;

        $(window).on('scroll', function() {
            if ($(this).scrollTop() > showThreshold) {
                backToTop.removeClass('d-none').addClass('d-block');
            } else {
                backToTop.removeClass('d-block').addClass('d-none');
            }
        });

        backToTop.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 800, 'easeInOutQuart');
        });
    }

    /**
     * Initialize Smooth Scroll
     */
    function initSmoothScroll() {
        $('a[href^="#"]').on('click', function(e) {
            const target = $(this.getAttribute('href'));
            
            if (target.length) {
                e.preventDefault();
                const offsetTop = target.offset().top - 100; // Account for sticky header
                
                $('html, body').animate({
                    scrollTop: offsetTop
                }, 800, 'easeInOutQuart');
            }
        });
    }

    /**
     * Initialize Tooltips
     */
    function initTooltips() {
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    }

    /**
     * Initialize Popovers
     */
    function initPopovers() {
        const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
        popoverTriggerList.map(function(popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl);
        });
    }

    /**
     * Initialize Carousels
     */
    function initCarousels() {
        // Initialize Flickity carousels
        $('.carousel').each(function() {
            const $carousel = $(this);
            const options = {
                cellAlign: 'left',
                contain: true,
                pageDots: true,
                prevNextButtons: true,
                wrapAround: true,
                autoPlay: $carousel.data('autoplay') || false,
                autoPlaySpeed: $carousel.data('speed') || 3000
            };

            $carousel.flickity(options);
        });

        // Custom carousel navigation
        $('.carousel-nav').on('click', function(e) {
            e.preventDefault();
            const target = $(this).data('target');
            const direction = $(this).data('direction');
            const $carousel = $(target);
            const flkty = $carousel.data('flickity');

            if (flkty) {
                if (direction === 'prev') {
                    flkty.previous();
                } else if (direction === 'next') {
                    flkty.next();
                }
            }
        });
    }

    /**
     * Initialize GSAP Animations
     */
    function initAnimations() {
        // Register ScrollTrigger plugin
        gsap.registerPlugin(ScrollTrigger);

        // Hero Section Animations
        gsap.from('.hero-title', {
            duration: 1,
            y: 50,
            opacity: 0,
            ease: 'power2.out',
            delay: 0.2
        });

        gsap.from('.hero-subtitle', {
            duration: 1,
            y: 30,
            opacity: 0,
            ease: 'power2.out',
            delay: 0.4
        });

        gsap.from('.hero-buttons', {
            duration: 1,
            y: 30,
            opacity: 0,
            ease: 'power2.out',
            delay: 0.6
        });

        gsap.from('.hero-image', {
            duration: 1.2,
            x: 50,
            opacity: 0,
            ease: 'power2.out',
            delay: 0.3
        });

        // Scroll-triggered animations
        gsap.utils.toArray('.fade-in').forEach(element => {
            gsap.from(element, {
                duration: 0.8,
                y: 50,
                opacity: 0,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: element,
                    start: 'top 80%',
                    end: 'bottom 20%',
                    toggleActions: 'play none none reverse'
                }
            });
        });

        gsap.utils.toArray('.slide-in-left').forEach(element => {
            gsap.from(element, {
                duration: 0.8,
                x: -50,
                opacity: 0,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: element,
                    start: 'top 80%',
                    end: 'bottom 20%',
                    toggleActions: 'play none none reverse'
                }
            });
        });

        gsap.utils.toArray('.slide-in-right').forEach(element => {
            gsap.from(element, {
                duration: 0.8,
                x: 50,
                opacity: 0,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: element,
                    start: 'top 80%',
                    end: 'bottom 20%',
                    toggleActions: 'play none none reverse'
                }
            });
        });

        // Parallax effects
        gsap.utils.toArray('.parallax').forEach(element => {
            gsap.to(element, {
                yPercent: -20,
                ease: 'none',
                scrollTrigger: {
                    trigger: element,
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: true
                }
            });
        });

        // Stagger animations for lists
        gsap.utils.toArray('.stagger-list').forEach(element => {
            const items = element.querySelectorAll('li, .item');
            gsap.from(items, {
                duration: 0.6,
                y: 30,
                opacity: 0,
                stagger: 0.1,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: element,
                    start: 'top 80%',
                    end: 'bottom 20%',
                    toggleActions: 'play none none reverse'
                }
            });
        });
    }

    /**
     * Initialize Forms
     */
    function initForms() {
        // Contact form validation
        $('.contact-form').on('submit', function(e) {
            e.preventDefault();
            
            const $form = $(this);
            const $submitBtn = $form.find('button[type="submit"]');
            const originalText = $submitBtn.text();
            
            // Basic validation
            let isValid = true;
            $form.find('input[required], textarea[required]').each(function() {
                if (!$(this).val().trim()) {
                    isValid = false;
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                }
            });

            if (!isValid) {
                showNotification('Please fill in all required fields.', 'error');
                return;
            }

            // Show loading state
            $submitBtn.prop('disabled', true).text('Sending...');

            // Simulate form submission (replace with actual AJAX)
            setTimeout(function() {
                $submitBtn.prop('disabled', false).text(originalText);
                showNotification('Thank you! Your message has been sent successfully.', 'success');
                $form[0].reset();
            }, 2000);
        });

        // Newsletter form
        $('.newsletter-form').on('submit', function(e) {
            e.preventDefault();
            
            const $form = $(this);
            const $input = $form.find('input[type="email"]');
            const email = $input.val().trim();

            if (!isValidEmail(email)) {
                showNotification('Please enter a valid email address.', 'error');
                return;
            }

            // Show success message
            showNotification('Thank you for subscribing to our newsletter!', 'success');
            $form[0].reset();
        });
    }

    /**
     * Initialize Lazy Loading
     */
    function initLazyLoading() {
        // Lazy load images
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }
    }

    /**
     * Handle Scroll Events
     */
    function handleScroll() {
        // Add scroll class to body
        if ($(window).scrollTop() > 50) {
            $('body').addClass('scrolled');
        } else {
            $('body').removeClass('scrolled');
        }

        // Update active navigation item
        updateActiveNavigation();
    }

    /**
     * Handle Resize Events
     */
    function handleResize() {
        // Reinitialize components on resize
        initCarousels();
        
        // Update GSAP ScrollTrigger
        ScrollTrigger.refresh();
    }

    /**
     * Update Active Navigation
     */
    function updateActiveNavigation() {
        const scrollTop = $(window).scrollTop();
        const sections = $('section[id]');
        
        sections.each(function() {
            const section = $(this);
            const sectionTop = section.offset().top - 100;
            const sectionBottom = sectionTop + section.outerHeight();
            const sectionId = section.attr('id');
            
            if (scrollTop >= sectionTop && scrollTop < sectionBottom) {
                $('.navbar-nav a[href="#' + sectionId + '"]').addClass('active');
            } else {
                $('.navbar-nav a[href="#' + sectionId + '"]').removeClass('active');
            }
        });
    }

    /**
     * Show Notification
     */
    function showNotification(message, type = 'info') {
        const notification = $(`
            <div class="notification notification-${type} alert alert-${type === 'error' ? 'danger' : type} alert-dismissible fade show" role="alert">
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `);

        // Add to page
        $('body').append(notification);

        // Auto remove after 5 seconds
        setTimeout(function() {
            notification.alert('close');
        }, 5000);
    }

    /**
     * Validate Email
     */
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    /**
     * Utility Functions
     */
    const utils = {
        // Debounce function
        debounce: function(func, wait, immediate) {
            let timeout;
            return function() {
                const context = this, args = arguments;
                const later = function() {
                    timeout = null;
                    if (!immediate) func.apply(context, args);
                };
                const callNow = immediate && !timeout;
                clearTimeout(timeout);
                timeout = setTimeout(later, wait);
                if (callNow) func.apply(context, args);
            };
        },

        // Throttle function
        throttle: function(func, limit) {
            let inThrottle;
            return function() {
                const args = arguments;
                const context = this;
                if (!inThrottle) {
                    func.apply(context, args);
                    inThrottle = true;
                    setTimeout(() => inThrottle = false, limit);
                }
            };
        },

        // Get viewport dimensions
        getViewport: function() {
            return {
                width: Math.max(document.documentElement.clientWidth, window.innerWidth || 0),
                height: Math.max(document.documentElement.clientHeight, window.innerHeight || 0)
            };
        }
    };

    // Expose utils globally
    window.delivixUtils = utils;

})(jQuery);
