<?php

// Woocommerce support

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

// CSS and JS imports

function cincoretos_scripts_styles() {
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1', );

	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Playfair+Display:ital@1&family=Roboto:wght@300&display=swap', [], null);

	wp_enqueue_style( 'cincoretos-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

	wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );

	wp_enqueue_style( 'header', get_template_directory_uri() . '/css/header.css', array(), '1.0.0');
	
	wp_enqueue_style( 'footer', get_template_directory_uri() . '/css/footer.css', array(), '1.0.0');

	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '1.0.0');

	wp_enqueue_style( 'product', get_template_directory_uri() . '/css/product.css', array(), '1.0.0');

	wp_enqueue_script('header-menu', get_stylesheet_directory_uri().'/js/header-menu.js', array(), false, true);
	
	wp_enqueue_script('product-dropdown', get_stylesheet_directory_uri().'/js/product-dropdown.js', array(), false, true);
	
	wp_enqueue_script('image-carousel', get_stylesheet_directory_uri().'/js/image-carousel.js', array(), false, true);

	wp_enqueue_script('quantity-cart-incrementor', get_stylesheet_directory_uri().'/js/quantity-cart-incrementor.js', array(), false, true);

	wp_enqueue_style( 'ionicons', '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css', array(), '1.0.0' );
}

add_action( 'wp_enqueue_scripts', 'cincoretos_scripts_styles' );


// To change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Buy Now', 'woocommerce' ); 
}

// To change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'Buy Now', 'woocommerce' );
}

// MENU

function header_menu() {
	register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'header_menu' );

function footer_menu() {
	register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'footer_menu' );

function footer_RRSS_menu() {
	register_nav_menu('footer-RRSS-menu',__( 'Footer RRSS Menu' ));
}
add_action( 'init', 'footer_RRSS_menu' );

require get_template_directory() . '/inc/wc-modifications.php';