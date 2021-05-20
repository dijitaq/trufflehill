<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

 <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>
			
	<body <?php body_class(); ?>>
		
		<header id="main-header" class="header" role="banner">	
			<div class="grid-container">
				<div class="grid-x align-right">
					<div class="cell small-8 medium-4 text-left">
						<h1 class="text-left medium-text-center"><a href="<?php echo home_url(); ?>">Truffle Hill</a></h1>
					</div>

					<div class="flex-container cell small-4 align-middle align-right">
						<a>Shop</a>

						<a>Book a tour</a>

						<a href="<?php echo home_url(); ?>/cart">
							<i class="fas fa-shopping-cart"></i>

							<?php 

								$cart_count = WC()->cart->get_cart_contents_count();

								if ($cart_count) {
									echo '<span class="cart-count">' . $cart_count . '</span>';
								}

							?>
						</a>

						<a data-toggle="off-canvas"><i class="fas fa-bars"></i></a>
					</div>
				</div>
			</div>
		</header> <!-- end .header -->

		<div class="off-canvas-wrapper position-relative">
			<!-- Load off-canvas container. Feel free to remove if not using. -->			
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>
				<div class="grid-line"></div>
				<div class="grid-line"></div>