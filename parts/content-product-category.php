<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
	$orderby = 'term_id';
    $order = 'asc';
    $hide_empty = false ;
    $cat_args = array(
        'hide_empty' => $hide_empty,
    );

    $product_categories = get_terms( 'product_cat', $cat_args );
?>

<aside id="shop-truffle-hill">
	<div class="grid-container">
		<div class="grid-x align-center">
			<div class="cell large-7 pb-4">
				<h2 class="quote font-pacific-beach mb-4">Shop Truffle Hill</h2>

				<p>Indulge in a selection of our very own range of delicious truffle oils, jus’ and aioli’s, fresh black perigord truffle, fabulous wines and gifts for family and friends. </p>
			</div>
		</div>
	</div>

	<div class="grid-container pb-15">
		<div class="grid-x small-up-2 medium-up-4 align-center">
			<?php foreach( $product_categories as $category ) { ?>
				<?php 
				    $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true );

				    $image = wp_get_attachment_url( intval( $thumbnail_id ) );
				?>

			<div class="cell large-4">
				<a href="<?php echo home_url() . '/product-category/' .$category->slug; ?>">
					<img src="<?php echo $image; ?>">

					<span>Shop <?php echo $category->name; ?></span>
				</a>
			</div>
			<?php } ?>
		</div>
	</div>
</aside>