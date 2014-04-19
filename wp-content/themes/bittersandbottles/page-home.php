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

		<div id="top-hero">
			<h3>Your bar, hand-picked + delivered.</h3>
			<p>Artisanal Spirits + Classic Cocktail Recipes + Supplies.</p>
			<p>Curated + Delivered to your doorstep every month.</p>
			<p>
				<br />
				<a href="#" class="btn">Get Started</a>
			</p>
		</div>

		<div class="primary-content">
			<div class="main-content centered">
				<h3 class="centered">Delivered to your doorstep, <br />Each + Every Month</h3>
				<div class="bb-process">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homepage/_high_compression/BB-HP-process-01-fw.jpg" />
					<h4>Register</h4>
					<p>Decide which subscription best suits your style, Mixing Cocktails or Sipping Spirits. <a href="#">Sign up today</a>.</p>
				</div>
				<div class="bb-process">				
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homepage/_high_compression/BB-HP-process-02-fw.jpg" />
					<h4>Receive</h4>
					<p>FedEx is at the door. <br />Today is a good day.</p>
				</div>
				<div class="bb-process">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homepage/_high_compression/BB-HP-process-03-fw.jpg" />
					<h4>Reveal</h4>
					<p>Open your box of perfection. It's time to tend bar. <br /><a href="#">Register now.</a></p>
				</div>
			</div>
		</div>

		<div id="sub-hero">
			<div class="primary-content">
				<div class="main-content">			
					<div class="hp-cocktails">
						<h2>Classic Cocktails</h2>
						<h5>Your Home Bar, Selected by Experts</h5>
						<br />
						<a href="#" class="btn">Subscribe Cocktails</a>
					</div>				
				</div>
			</div>
		</div>


		<div id="primary">
			<div id="content" role="main">



				<?php while ( have_posts() ) : the_post(); ?>

					<?php the_content(); ?>

					<?php //comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>