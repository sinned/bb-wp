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
				<a href="/products/cocktails-subscription/" class="btn">Get Started</a>
			</p>
		</div>

		<div class="primary">
			<div class="main centered">
					<h3 class="centered">Delivered to your doorstep, <br />Each + Every Month</h3>
					<div class="bb-process">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homepage/_high_compression/BB-HP-process-01-fw.jpg" />
						<h4>Register</h4>
						<p>Decide which subscription best suits your style, Mixing Cocktails or Sipping Spirits. <a href="/products/cocktails-subscription/">Sign up today</a>.</p>
					</div>
					<div class="bb-process">				
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homepage/_high_compression/BB-HP-process-02-fw.jpg" />
						<h4>Receive</h4>
						<p>FedEx is at the door. <br />Today is a good day.</p>
					</div>
					<div class="bb-process">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homepage/_high_compression/BB-HP-process-03-fw.jpg" />
						<h4>Reveal</h4>
						<p>Open your box of perfection. It's time to tend bar. <br /><a href="/products/cocktails-subscription/">Register now.</a></p>
					</div>
			</div>
		</div>

		<div id="sub-hero">
			<div class="primary">
				<div class="main">			
					<div class="hp-cocktails">
						<div style="float:right;text-align:left;padding:10px;">
							<h3>Classic Cocktails</h3>
							<h5>Your Home Bar, Selected by Experts</h5>
							<br />
							<a href="/products/cocktails-subscription/" class="btn">Subscribe Cocktails</a>
						</div>
					</div>		
					<br />
					<div class="hp-box">
						<p>
							Setting up a home bar is a journey. Over the course of a year's cocktail subscription, we'll take you through recipes for 60 noteworth classics, and set up your top shelf home bar. Each delivery builds on its predecessor, adding new bottles to your bar and five new recipes to your repertoire.
						</p>
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