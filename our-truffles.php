<?php 
/**
 Template Name: Our Truffles page
 *
 * 
 */
get_header(); ?>

<main role="main" class="position-relative" style="z-index: 2">
	<div class="grid-container pt-13 pb-8">
		<div class="grid-x grid-margin-x">
			<div class="cell large-12">
				<h2 class="title font-pacific-beach text-th-gold mt-n3 mb-7">&ldquo;There's nothing better in the world.&rdquo;</h2>
			</div>
		</div>

		<div class="grid-x grid-margin-x">
			<div class="cell large-6 position-relative">
				<blockquote>&ldquo;Truffles from Manjimup deserve to be rated on this scale with 10½ out of 10.&rdquo;</blockquote>
				<cite>Chef Ralf Bos</cite>

				<p>Our world-class truffles are favoured by the most exclusive Michelin Star Chefs and are featured on menus throughout Australia, Germany, Spain, Denmark, the UK, the USA, Japan, Hong Kong, Singapore, Thailand and Indonesia.</p>

				<p>There has always been an air of mystique, intrigue and general lack of understanding about truffles in Australia and for that matter the world. So we thought why not unravel some of the mystique and misunderstandings and satisfy peoples’ curiosity. But don’t be fooled, not all Truffles are created equal. There are those that want to mass produce and take the flare, the mystique away and there are those that want to stay true to what makes a truly valuable Black Perigord Truffle.</p>

				<p>The delicate use of the fresh truffle ingredient in fine food and wine can simply create the perfect evening at home or at your favourite restaurant.</p>
			</div>
		</div>

		<div class="grid-x grid-margin-x align-right mt-medium-n12">
			<div class="cell large-6 position-relative flex-container align-bottom">
				<div style="display: block; width: 100%">
					<p class="quote font-pacific-beach text-th-gold">&ldquo;An experience for everyone.&rdquo;</p>

					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-truffles-truffles.jpg">
				</div>
			</div>
		</div>
	</div>

	<div class="grid-container pb-15" id="storing-truffles">
		<div class="grid-x grid-margin-x">
			<div class="cell large-5 position-relative">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-truffles-storing-truffles.jpg">

				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-truffles-storing-truffles-1.png" class="storing-truffles-1">
			</div>

			<div class="cell large-7">
				<h2>Storing your fresh truffles</h2>

				<p>To help keep them longer, up to about 5 - 7 days, gently wrap them in absorbent paper (such as a paper
towel) and store in a dry glass/plastic jar/container in the crisper compartment not the cold part of the refrigerator. The absorbent paper should be changed daily, and the jar must be kept dry. Truffles have a beautifully strong aroma which will quickly permeate any other foods in the fridge, so it's important to store them in their own container. If you wish you can store truffles with fresh eggs or ice which will absorb some of the aroma and flavor and can be enjoyed as a bonus!!</p>

				<p>The Truffle Hill team developed a process to enable each truffle to maintain freshness and quality, so you can enjoy bringing your dishes to life with our exquisite truffles in your own home. The most important words of advice are, &ldquo;Enjoy the Truffles&rdquo;.</p>
			</div>
		</div>
	</div>
</main>

<?php get_template_part( 'parts/content', 'product-category' ); ?>

<?php get_footer(); ?>