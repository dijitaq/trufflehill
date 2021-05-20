<?php 
/**
 Template Name: Contact page
 *
 * 
 */
get_header(); ?>

<main role="main" class="position-relative" style="z-index: 2">
	<div class="grid-container pt-13 pb-15">
		<div class="grid-x grid-margin-x">
			<div class="cell text-center">
				<p>To find out how more about Truffle Hill and its products,<br>email us your enquiry and we will reply as soon as possible.</p>
			</div>
		</div>

		<div class="grid-x grid-margin-x align-center">
			<div class="cell medium-6 large-5">
				<input type="text" name="name" placeholder="Name *">

				<input type="email" name="email" placeholder="Email *">

				<input type="text" name="telephone" placeholder="Phone no.">
			</div>

			<div class="cell medium-6 large-5">
				<textarea name="message" placeholder="Message *"></textarea>

				<button type="submit" class="button th-rose">Submit</button>
			</div>
		</div>
	</div>

	<div class="grid-container pb-15">
		<div class="grid-x grid-margin-x">
			<div class="cell text-center">
				<h2>Where we are</h2>
			</div>
		</div>

		<div class="grid-x grid-margin-x">
			<div class="cell medium-6 large-5">
				<p>490 Seven Day Road,<br>Manjimup WA 6258</p>

				<p><strong>Monday - Friday</strong><br>Closed<br><strong>Saturday - Sunday</strong><br>Closed</p>

				<p>We will reopen once it is safe for our team to do so during truffle season. We hope to see you then!</p>
			</div>

			<div class="cell medium-6 large-7">
				<div id="gmap"></div>
			</div>
		</div>
	</div>
</main>

<?php get_template_part( 'parts/content', 'product-category' ); ?>

<?php get_footer(); ?>