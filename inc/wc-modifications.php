<?php 

function cincoretos_wc_modify() {

    remove_theme_support( 'wc-product-gallery-zoom' );
    remove_theme_support( 'wc-product-gallery-lightbox' );
    remove_theme_support( 'wc-product-gallery-slider' );
    
    //Remove all WC styling
	add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
    
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
    //remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
    //remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
    remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
    remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper');
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');

    remove_action('woocommerce_review_before_comment_meta', 'woocommerce_review_display_rating');
    add_action( 'woocommerce_review_comment_text', 'woocommerce_review_display_rating', 5);

    // Remove Spaces in get_the_content()
    remove_filter( 'the_content', 'wpautop' ); 
    remove_filter( 'the_excerpt', 'wpautop' );


/*     function cincoretos_product_gallery_buttons() {
        
    }
    add_action('woocommerce_product_thumbnails', 'cincoretos_product_gallery_buttons', 30);
 */
    function cincoretos_product_open_container() {
        echo '
            <main class="main">
        ';
    }
    add_action('woocommerce_before_main_content', 'cincoretos_product_open_container', 5);


    function cincoretos_product_close_container() {
        echo '
            </main>
        ';
    }
    add_action('woocommerce_after_main_content', 'cincoretos_product_close_container', 15);


    function cincoretos_show_product_description() { 
        echo '<p class="product_description">' . get_the_excerpt() . '</p>';
        echo '<p class="product_tags">' . '15 ml | Vegano | Bote de vidrio con cuenta-gotas | Testado dermatológicamente | 99,51% Ingredientes de origen natural' . '</p>';
    }
    add_action('woocommerce_single_product_summary', 'cincoretos_show_product_description', 55);

    function cincoretos_show_product_open_container() {
        echo '<div class="single_product_summary">';
    }
    add_action('woocommerce_before_single_product_summary', 'cincoretos_show_product_open_container', 5);

    function cincoretos_show_product_close_container() {
        echo '</div>';
    }
    add_action('woocommerce_after_single_product_summary', 'cincoretos_show_product_close_container', 11);

    function cincoretos_show_product_info() {
        echo '
        <div class="products__dropdown">
            <div class="product__dropdown">
                <div class="button__dropdown">
                    <h2 class="product__dropdown-title">¿Por que te gustará?</h2>
                </div>
                <div class="dropdown__content">
                    <div class="dropdown__content-wrapper">
                        <p class="dropdown__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint maxime impedit nemo exercitationem quaerat soluta unde. Quisquam voluptate cum deserunt explicabo repellat exercitationem placeat esse, a earum vero facere ratione.</p>
                    </div>
                </div>
            </div>
            <div class="product__dropdown">
                <div class="button__dropdown">
                    <h2 class="product__dropdown-title">Activos Clave</h2>
                </div>
                <div class="dropdown__content">
                    <div class="dropdown__content-wrapper">
                        <p class="dropdown__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint maxime impedit nemo exercitationem quaerat soluta unde. Quisquam voluptate cum deserunt explicabo repellat exercitationem placeat esse, a earum vero facere ratione.</p>
                    </div>
                </div>
            </div>
            <div class="product__dropdown">
                <div class="button__dropdown">
                    <h2 class="product__dropdown-title">Como usarlo</h2>
                </div>
                <div class="dropdown__content">
                    <div class="dropdown__content-wrapper">
                        <p class="dropdown__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint maxime impedit nemo exercitationem quaerat soluta unde. Quisquam voluptate cum deserunt explicabo repellat exercitationem placeat esse, a earum vero facere ratione.</p>
                    </div>
                </div>
            </div>
            <div class="product__dropdown">
                <div class="button__dropdown">
                    <h2 class="product__dropdown-title">Ingredientes</h2>
                </div>
                <div class="dropdown__content">
                    <div class="dropdown__content-wrapper">
                        <p class="dropdown__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint maxime impedit nemo exercitationem quaerat soluta unde. Quisquam voluptate cum deserunt explicabo repellat exercitationem placeat esse, a earum vero facere ratione.</p>
                    </div>
                </div>
            </div>
        </div><!-- Product dropdown -->
        ';
    }
    add_action('woocommerce_after_single_product_summary', 'cincoretos_show_product_info', 10);
    
    function cincoretos_show_reviews() {
        comments_template();
    }   
    add_action('woocommerce_after_single_product_summary', 'cincoretos_show_reviews', 25);


    function cincoretos_show_increment_quantity() {
        echo '
            <div class="bnt-product-quantity-container">
                <a class="btnAdd btn-product-quantity">+</a>
                <a class="btnLess btn-product-quantity">-</a>
            </div>
        ';
    }
    add_action('woocommerce_after_quantity_input_field', 'cincoretos_show_increment_quantity');
}

add_action( 'wp', 'cincoretos_wc_modify');