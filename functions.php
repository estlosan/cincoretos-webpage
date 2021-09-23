<?php
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
}

add_action( 'wp_enqueue_scripts', 'cincoretos_scripts_styles' );

?>