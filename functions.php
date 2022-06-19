<?php

// Add Theme Support
function applemedia_theme_support() {
    // Nav Menus
    register_nav_menus(array(
        'main' => __('Main Menu'),
        'footer' => __('Footer Menu')
    ));

    // Add Woocommerce
    add_theme_support( 'woocommerce' );

    // Remove Shopt Title
    add_filter('woocommerce_show_page_title', '__return_false');

    // Add Woocommerce Support
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}

add_action('after_setup_theme', 'applemedia_theme_support');

// Add Styles and Scripts

function applemedia_styles_scripts() {
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_register_script('GSAP', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js', '', 1, 'all');
    wp_register_script('custom', get_template_directory_uri() . '/assets/js/app.js', '', 1, 'all');

    wp_enqueue_style('stylesheet');
    wp_enqueue_script('GSAP');
    wp_enqueue_script('custom');
    
}

add_action('wp_enqueue_scripts', 'applemedia_styles_scripts');

function woocommerce_template_product_description() {
    woocommerce_get_template('single-product/tabs/description.php');
}

add_action('woocommerce_single_product_summary', 'woocommerce_template_product_description', 20);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
