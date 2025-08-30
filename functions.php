<?php
/**
 * Nezabutny Theme Functions
 */

// Theme setup
function nezabutny_theme_setup() {
    // Add theme support for post thumbnails
    add_theme_support('post-thumbnails');
    
    // Add theme support for title tag
    add_theme_support('title-tag');
    
    // Add theme support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    // Register navigation menus
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'nezabutny'),
        'mobile-menu' => __('Mobile Menu', 'nezabutny'),
    ));
}
add_action('after_setup_theme', 'nezabutny_theme_setup');

// Enqueue styles and scripts
function nezabutny_enqueue_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style('nezabutny-style', get_stylesheet_uri(), array(), '1.0.0');
    
    // Enqueue component styles
    wp_enqueue_style('nezabutny-hero', get_template_directory_uri() . '/assets/components/hero-section.css', array(), '1.0.0');
    wp_enqueue_style('nezabutny-about', get_template_directory_uri() . '/assets/components/aboutProject-section.css', array(), '1.0.0');
    wp_enqueue_style('nezabutny-how-it-works', get_template_directory_uri() . '/assets/components/howItWorks-section.css', array(), '1.0.0');
    wp_enqueue_style('nezabutny-sta', get_template_directory_uri() . '/assets/components/sta-section.css', array(), '1.0.0');
    wp_enqueue_style('nezabutny-names', get_template_directory_uri() . '/assets/components/names-section.css', array(), '1.0.0');
    wp_enqueue_style('nezabutny-support', get_template_directory_uri() . '/assets/components/support-section.css', array(), '1.0.0');
    wp_enqueue_style('nezabutny-person', get_template_directory_uri() . '/assets/components/person-section.css', array(), '1.0.0');
    
    // Enqueue Google Fonts
    wp_enqueue_style('nezabutny-fonts', 'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap', array(), null);
    
    // Enqueue Swiper CSS and JS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true);
    
    // Enqueue custom JavaScript
    wp_enqueue_script('nezabutny-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'nezabutny_enqueue_scripts');

// Remove admin bar for better mobile experience
function nezabutny_remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'nezabutny_remove_admin_bar');

// Add custom body classes for better styling control
function nezabutny_body_classes($classes) {
    // Add class for mobile detection
    if (wp_is_mobile()) {
        $classes[] = 'is-mobile';
    }
    
    return $classes;
}
add_filter('body_class', 'nezabutny_body_classes');

// Custom excerpt length
function nezabutny_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'nezabutny_excerpt_length');

// Custom excerpt more text
function nezabutny_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'nezabutny_excerpt_more');

// Disable WordPress emoji scripts for better performance
function nezabutny_disable_emojis() {
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
}
add_action('init', 'nezabutny_disable_emojis');

// Add viewport meta tag for better mobile support
function nezabutny_add_viewport_meta() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">';
}
add_action('wp_head', 'nezabutny_add_viewport_meta', 1);

// Security improvements
function nezabutny_security_improvements() {
    // Remove WordPress version number
    remove_action('wp_head', 'wp_generator');
    
    // Remove RSD link
    remove_action('wp_head', 'rsd_link');
    
    // Remove wlwmanifest link
    remove_action('wp_head', 'wlwmanifest_link');
    
    // Remove feed links
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'feed_links_extra', 3);
}
add_action('init', 'nezabutny_security_improvements');
