<?php 
/**
 Template Name: Recipes page
 *
 * 
 */
get_header(); ?>

<main role="main" class="position-relative" style="z-index: 2">
	<div class="grid-container pt-13 pb-1325">
		<div class="grid-x grid-margin-x">
			<div class="cell large-10">
				<h2 class="title font-pacific-beach text-th-gold mt-n3 mb-7">&ldquo;Why entertain when you can indulge.&rdquo;</h2>
			</div>
		</div>

		<div class="grid-x grid-margin-x align-right">
			<div class="cell large-6 position-relative">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				<p class="quote font-pacific-beach text-th-gold">&ldquo;An experience for everyone.&rdquo;</p>
			</div>
		</div>
	</div>

	<div class="grid-container pb-19">
		<div class="grid-x grid-margin-x align-center">
			<div class="cell large-6 position-relative">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipes-yolk.jpg">

				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/truffle-products-truffles.png" id="recipes-yolk-1">

				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipes-yolk-2.png" id="recipes-yolk-2">
			</div>
		</div>
	</div>

	<div class="grid-container pb-1725">
		<div class="grid-x grid-margin-x align-right">
			<div class="cell large-4">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

			<div class="cell large-4">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/recipes.jpg">
			</div>
		</div>
	</div>
</main>

<?php get_template_part( 'parts/content', 'product-category' ); ?>

<?php get_footer(); ?>