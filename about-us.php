<?php 
/**
 Template Name: About Us page
 *
 * 
 */
get_header( ); ?>

<main role="main" class="position-relative" style="z-index: 2">
	<div class="grid-container pt-13 pb-1425">
		<div class="grid-x grid-margin-x">
			<div class="cell large-7">
				<h2 class="title font-pacific-beach text-th-gold mt-n3">Not many can say they work with truffles.</h2>
			</div>

			<div class="cell large-5">
				<p>We’re a passionate collective of truffle enthusiasts, horticulturists, agriculturists, export specialists and truffiere hunt experts who love the mystique of the truffle. The magic it brings to a dish, transforming culinary experiences into stories worth sharing.</p>

				<p>And it’s the Black Perigord Truffle at the heart of every great Truffle Hill yarn. Luckily we took the time to get our truffles so right.</p>

				<p>Carefully choosing our beautiful location, the best trees and the right conditions to produce our award winning, acclaimed and exquisite truffles.</p>
			</div>
		</div>
	</div>

	<div class="grid-container">
		<h2 class="text-center">Our History</h2>

		<div class="grid-x pb-10">
			<div class="cell">
				<div id="history-accordion" class="accordion flex-container flex-dir-row">
					<div class="accordion-item flex-container flex-dir-row">
						<a class="accordion-title align-left flex-container">
							<span>1997</span>
						</a>

						<div class="accordion-content">
							<div class="box">
								<p class="lead">1997</p>

								<p>Since the very first Oak Tree was planted in 1997, the passion and dedication, coupled with an extraordinary microclimate, has seen what was once The Truffle & Wine Co. become the largest producer of superior Black Perigord Truffles in the world and a premier truffière</p>
							</div>
						</div>
					</div>

					<div class="accordion-item flex-container">
						<a class="accordion-title flex-container">
							<span>2003</span>
						</a>

						<div class="accordion-content">
							<div class="box">
								<p class="lead">2003</p>
								
								<p>The first distinctly aromatic truffle was unearthed on the 28th of July 2003, a perfect black winter truffle weighing 168 grams. Today, the estate is covered by 40 kilometres of truffle tree rows and 12 hectares of grapevines and is one of the largest producing truffière in the Southern Hemisphere.</p>
							</div>
						</div>
					</div>

					<div class="accordion-item flex-container">
						<a class="accordion-title flex-container">
							<span>2008</span>
						</a>

						<div class="accordion-content">
							<div class="box">
								<p class="lead">2008</p>
								
								<p>Truffle grew from 600kg to more than 5000kg. Exporting over 90% of our crop and supply the world’s best known restaurants.</p>
							</div>
						</div>
					</div>

					<div class="accordion-item flex-container">
						<a class="accordion-title flex-container">
							<span>2012</span>
						</a>

						<div class="accordion-content">
							<div class="box">
								<p class="lead">2012</p>
								
								<p>French black truffles (Tuber Melanosporum) are one of the most highly prized (& priced) food products in the world.</p>
							</div>
						</div>
					</div>

					<div class="accordion-item flex-container">
						<a class="accordion-title flex-container">
							<span>2021</span>
						</a>

						<div class="accordion-content">
							<div class="box">
								<p class="lead">2021</p>
								
								<blockquote>&ldquo;It is our desire to deliver the best quality black winter truffles and wine to the world.&rdquo;</blockquote>

								<cite>Alf Salter, Chairman</cite>

								<p>And to this day nothing has changed except the name. Truffle and Wine Co is now proudly known as Truffle Hill.</p>
							</div>
						</div>
					</div>

					<a class="btn-arrow prev" data-toggle-accordion>
						<i class="fas fa-arrow-circle-left fa-2x disabled"></i>
					</a>

					<a class="btn-arrow next" data-toggle-accordion>
						<i class="fas fa-arrow-circle-right fa-2x"></i>
					</a>
				</div>
			</div>
		</div>

		<div class="grid-x align-center pb-16">
			<div class="cell large-6">
				<blockquote>&ldquo;Walking over the land, its contours, smelling the richness of the soil, the surrounding karri and jarrah forests, we knew this was a very special place. It exudes a quality I can’t identify, a feeling that is almost magical.&rdquo;</blockquote>

				<cite>Alf Salter, Chairman</cite>
			</div>
		</div>

		<div class="grid-x align-center pb-1425">
			<div class="cell large-9">
				<p class="quote font-pacific-beach text-center">&ldquo;To turn every truffle experience into something extraordinary and worthy of sharing&rdquo;.</p>
			</div>
		</div>
	</div>

	<div class="grid-container">
		<div class="grid-x grid-margin-x pb-15">
			<div class="cell large-5">
				<h2 class="quote font-pacific-beach text-th-gold mt-n3">To value everything and everyone around us.</h2>
			</div>

			<div class="cell large-7">
				<p>Our Values haven’t really changed since the very first oak tree planted.</p>

				<p>You see out here you need more than luck with planting something like Black Perigord Truffle. You need an appetite for intrigue, storytelling and perhaps a touch of fastidiousness. Not forgetting a love of food, wine, and certainly not forgetting truffling</p>
			</div>
		</div>
	</div>
</main>

<?php get_template_part( 'parts/content', 'product-category' ); ?>

<?php get_footer(); ?>