<?php 
/**
 Template Name: Melting Point page
 *
 * 
 */
get_header(); ?>

<main role="main" class="position-relative" style="z-index: 2">
	<div class="grid-container pt-13">
		<div class="grid-x grid-margin-x position-relative">
			<div class="cell small-8 large-6">
				<p>We can’t say we have been around for centuries, however for the time we have been around for we’ve certainly made upfor lost time.</p>

				<p>Meeting and greeting some of the most amazing and talented people, partnering the best of the best. Learning from them, listening to them and having them delight us with their talents and culinary skills. Definitely something worth sharing!</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/melting-pot-1.png" id="melting-pot-image-1">
			</div>
		</div>
	</div>

	<div class="grid-container pt-16">
		<div class="grid-x">
			<div class="cell large-6 position-relative">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/melting-pot-2.png" id="melting-pot-image-2">

				<p class="font-pacific-beach text-th-gold"  id="melting-pot-text-1">Japan</p>
			</div>
		</div>
	</div>

	<div class="grid-container pt-9">
		<div class="grid-x grid-margin-x align-right">
			<div class="cell large-6 position-relative">
				<p class="lead font-pacific-beach text-th-gold">Tetsuya shares his love of food, recipes and keeping things real.</p>

				<p>Over the course of his career, Tetsuya has won acclaim not only in Australia, but also internationally. Restaurant Tetsuya’s featured in The World’s 50 Best Restaurants from the list’s inception in 2002 through to 2013, and Tetsuya has earned international recognition as one of the world’s great chefs, acknowledged by his peers, the media, and diners around the globe.</p>

				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/melting-pot-3.png" id="melting-pot-image-3">
			</div>
		</div>
	</div>

	<div class="grid-container pt-7 pb-15">
		<div class="grid-x grid-margin-x">
			<div class="cell large-6">
				<p class="quote font-pacific-beach text-th-gold">Deliciously Intoxicating</p>

				<p>In 2010, Tetsuya embarked upon an exciting culinary venture in Singapore. His restaurant, Waku Ghin, is located in the spectacular Marina Bay Sands complex, and has received the same exceptional reviews as Tetsuya continues to enjoy for his eponymous restaurant in Sydney.</p>

				<p>In late 2013 he was honoured by the Japanese government, as the first ever internationally based chef to be recognised as one of Japan’s Master of Cuisine.</p>
			</div>

			<div class="cell large-6 text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/melting-pot-4.png">
			</div>
		</div>
	</div>
</main>

<?php get_template_part( 'parts/content', 'product-category' ); ?>

<?php get_footer(); ?>