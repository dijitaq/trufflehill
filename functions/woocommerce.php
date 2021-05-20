<?php

if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'custom-thumb', 100, 100, true ); // 100 wide and 100 high
}

add_action( 'after_setup_theme', 'woocommerce_support' );
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

function woocommerce_support() {
 
   	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 400,
		'gallery_thumbnail_image_width' => 400,
		'single_image_width' => 600,
	) );
 
}

/********** WOOCOMMERCE **********/
// archive-product.php
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);


// content-product.php
function th_template_loop_product_thumbnail() {
	global $product;

	$image = wp_get_attachment_url( intval( $product->image_id ) );

	echo '<img src="' . $image . '"/>';
}

function th_template_loop_product_title() {
	echo '<p class="text-center text-th-gold">' . get_the_title() . '</p>';
}


remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action( 'woocommerce_shop_loop_item_title', 'th_template_loop_product_title', 10);

//remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
//add_action( 'woocommerce_before_shop_loop_item_title', 'th_template_loop_product_thumbnail', 10 );

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );


/***** SINGLE PRODUCT *****/
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 10);
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 20);

add_action( 'th_single_product_title', 'th_template_single_title' );

function th_template_single_title() {
	echo '<h1 class="text-th-gold">' . get_the_title() . '</h1>';
}
/***** SINGLE PRODUCT *****/