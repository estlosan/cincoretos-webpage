<?php
if( ! function_exists('wc_get_products') ) return;

// definimos las variables de paginación y filtro
$paged                   = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
$ordering                = WC()->query->get_catalog_ordering_args();
$ordering['orderby']     = array_shift(explode(' ', $ordering['orderby']));
$ordering['orderby']     = stristr($ordering['orderby'], 'price') ? 'meta_value_num' : $ordering['orderby'];
$products_per_page       = apply_filters('loop_shop_per_page', wc_get_default_products_per_row() * wc_get_default_product_rows_per_page());

// Construimos la consulta usando diferentes argumentos, sólo necesitaremos los Ids de los productos
$custom_products       = wc_get_products(array(
	'status'               => 'publish',
	'visibility'           => 'visible',
	'limit'                => $products_per_page,
	'page'                 => $paged,
	'paginate'             => true,
	'return'               => 'ids',
	'orderby'              => $ordering['orderby'],
	'order'                => $ordering['order'],
));

// Establecemos las propiedades globales para el bucle
wc_set_loop_prop('current_page', $paged);
wc_set_loop_prop('is_paginated', true);
wc_set_loop_prop('page_template', get_page_template_slug());


// Construcción del bucle de WooCommerce teniendo en cuenta los hooks
if($custom_products) {
	do_action('woocommerce_before_shop_loop');
	woocommerce_product_loop_start();
	// Recorremos todos los Ids obtenidos
	foreach($custom_products->products as $item) {
		$post_object = get_post($item);
		// Establecemos la variable global al post actual
		setup_postdata($GLOBALS['post'] =& $post_object);
		// Mostramos el producto usando la plantilla por defecto de WC
		wc_get_template_part('content', 'product');
	}
	wp_reset_postdata();
	woocommerce_product_loop_end();
	do_action('woocommerce_after_shop_loop');
} else {
	do_action('woocommerce_no_products_found');
}
do_action( 'woocommerce_after_main_content' );

?>