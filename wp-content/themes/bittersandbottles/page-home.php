<?php
/**
 * Template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php if (get_the_content()) { ?>
			<div class="primary" style="padding:0;">
				<div class="main" style="padding:0;">
					<?php the_content(); ?>
					<?php //comments_template( '', true ); ?>
				</div><!-- #content -->
			</div><!-- #primary -->
			<?php } // end-if ?>
		<?php endwhile; // end of the loop. ?>


		<div id="top-hero" class="hero">
		</div>

		<div class="primary">
			<div class="main centered">

				<h3 class="centered">Build your home bar, and learn how to use it.</h3>
				<p class="centered">The Best Quality Ingredients and Supplies + Classic Cocktail Recipes + Education
				<br />Delivered to your doorstep every month
				<p class="centered">
					<a href="/cocktails/" class="btn btn-arrow">Cocktail at Home</a>
				</p>

				<br />
					<div class="bb-process">
						<a href="/travel-size-alcohol/"><img src="/wp-content/themes/bittersandbottles/images/homepage/coasters.jpg" alt="Cocktails On The Go" /></a>
						<h4>Cocktails on the Go with Travel Size Alcohol</h4>
					</div>
					<div class="bb-process">				
						<a href="/holiday-gift-guide/"><img src="/wp-content/themes/bittersandbottles/images/homepage/holiday.jpg" alt="Holiday Gift Guide" /></a>
						<h4>Holiday Gift Guide</h4>
					</div>
					<div class="bb-process">
						<a href="/about/"><img src="/wp-content/themes/bittersandbottles/images/homepage/shop.jpg" alt="Visit Our Shop"/></a>
						<h4>Visit Our Shop</h4>
					</div>
			</div>
		</div>

		<div id="knock-hero" class="hero">
			<a href="/visit-us" style="color:#000000;text-decoration:none;">
				<img src="http://i.bittersandbottles.com/wp-content/themes/bittersandbottles/images/homepage/door-store.jpg" alt="Come and knock on our door" />
			</a>
		</div>

		<div id="insta-hero" class="hero">
			<div class="primary">
				<div class="main">
						<div class="hp-instagrid-head">
							<a href="http://www.instagram.com/bittersandbottles/">@bittersandbottles</a> on 
							<img style="width:80px;margin-bottom:-10px;" src="http://i.bittersandbottles.com/wp-content/themes/bittersandbottles/images/homepage/instagram.png" alt="Instagram" />
						</div>
						<div class="hp-instagrid">
							<!-- www.intagme.com -->
							<iframe src="http://www.intagme.com/in/?u=Yml0dGVyc2FuZGJvdHRsZXN8aW58MTI1fDd8Mnx8eWVzfDV8dW5kZWZpbmVkfHllcw==" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:980px; height: 260px" ></iframe>						
						</div>
				</div>
			</div>		
			<br />
		</div>
<?php get_footer(); ?>