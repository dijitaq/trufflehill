<?php 
/**
 Template Name: Product category page
 *
 * 
 */
get_header(); ?>

<main role="main" class="position-relative pt-13" style="z-index: 2">
	<div class="grid-container pt-13 pb-16">
		<div class="grid-x grid-margin-x">
			<div class="cell large-7">
				<h2 class="title font-pacific-beach text-th-gold mt-n3">&ldquo;Entertainment at home is where it's at.&rdquo;</h2>
			</div>
		</div>

		<div class="grid-x grid-margin-x align-right mt-n9">
			<div class="cell large-8 position-relative">
				<p>We’re a passionate collective of truffle enthusiasts, horticulturists, agriculturists, export specialists and truffiere hunt experts who love the mystique of the truffle. The magic it brings to a dish, transforming culinary experiences into stories worth sharing.</p>

				<p class="quote font-pacific-beach text-th-gold text-right">&ldquo;An experience for everyone.&rdquo;</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/truffle-products-truffles.png" class="truffle-products-truffles">
			</div>
		</div>
	</div>

	<div class="grid-container products pb-15">
		<h2 class="text-th-gold text-center">Truffle Oils</h2>

		<div class="grid-x">
			<div class="cell large-4 product truffle-oil">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/truffle-oil-40ml.png">

				<p>Truffle Oil<br>40ml</p>
			</div>

			<div class="cell large-4 product truffle-oil">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/truffle-oil-100ml.png">

				<p>Truffle Oil<br>100ml</p>
			</div>

			<div class="cell large-4 product truffle-oil">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/truffle-oil-40ml.png">

				<p>Truffle Oil<br>40ml</p>
			</div>
		</div>
	</div>
</main>

<?php get_template_part( 'parts/content', 'product-category' ); ?>

<?php get_footer(); ?>