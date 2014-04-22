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
			<h3>Your bar, hand-picked + delivered.</h3>
			<p>Artisanal Spirits + Classic Cocktail Recipes + Supplies.</p>
			<p>Curated + Delivered to your doorstep every month.</p>
			<p>
				<br />
				<a href="/cocktails/" class="btn">Get Started</a>
			</p>
		</div>

		<div class="primary">
			<div class="main centered">
					<h3 class="centered">Delivered to your doorstep, <br />Each + Every Month</h3>
					<div class="bb-process">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homepage/_high_compression/BB-HP-process-01-fw.jpg" alt="Register" />
						<h4>Register</h4>
						<p>Decide which subscription best suits your style, Mixing Cocktails or Sipping Spirits. <a href="/cocktails/">Sign up today</a>.</p>
					</div>
					<div class="bb-process">				
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homepage/_high_compression/BB-HP-process-02-fw.jpg" alt="Receive" />
						<h4>Receive</h4>
						<p>FedEx is at the door. <br />Today is a good day.</p>
					</div>
					<div class="bb-process">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homepage/_high_compression/BB-HP-process-03-fw.jpg" alt="Reveal"/>
						<h4>Reveal</h4>
						<p>Open your box of perfection. It&rsquo;s time to tend bar. <br /><a href="/cocktails/">Register now.</a></p>
					</div>
			</div>
		</div>

		<div id="sub-hero" class="hero">
			<div class="primary">
				<div class="main">			
					<div class="hp-cocktails">
						<div style="float:right;text-align:left;padding:10px;">
							<h3>Classic Cocktails</h3>
							<h5>Your Home Bar, Selected by Experts</h5>
							<br />
							<a href="/cocktails/" class="btn">Subscribe Cocktails</a>
						</div>
					</div>		
					<br />
					<div class="hp-box">
						<p>
							Setting up a home bar is a journey. Over the course of a year&rsquo;s cocktail subscription, we&rsquo;ll take you through recipes for 60 noteworthy classics, and set up your top shelf home bar. Each delivery builds on its predecessor, adding new bottles to your bar and five new recipes to your repertoire.
						</p>
					</div>		
				</div>
			</div>
		</div>

		<div class="primary">
			<div class="main centered">
				<h3 class="centered">Don't Take Our Word For It. <br />The Critics Have Spoken.</h3>
				<p class="quote">&ldquo;The best gift on the planet! My buddy had just got his long overdue promotion at the William Morris Agency (see ya later mailroom!), and I knew there was no better way to send my props from across the States than with a box of Top Shelf! Highly Recommended!&rdquo;</p>
				<p class="quoteby">Kanye West<br /><small>Steamboat Springs, CO</small></p>
			
				<br clear="both" />
				<hr />
				<div class="centered">
					<img class="seriously" src="<?php echo get_stylesheet_directory_uri(); ?>/images/homepage/_high_compression/BB-HP-seriously-img-fw.jpg" alt="Seriously, we take quality seriously." />
				</div>
				<div class="seriously">
					<h3>Seriously, we take <br />quality seriously.</h3>
					<p>Bitters + Bottles is a small team of liquor experts whose mission is for you to enjoy and serve the world's best spirits and cocktails at home. We find the highest quality spirits and ingredients, from the best producers, and bring them to your doorstep every month.</p>
				</div>

			</div>
		</div>	

		<div id="ship-hero" class="hero">
			<div class="primary">
				<div class="main centered">			
					<h3 class="centered">Protective Packaging <br />and Free Shipping</h3>
					<p>We use an innovative packaging product that surrounds bottles with a protective wall of air. The clear film is recyclable with 90% source reduction. We then pack the air-wrapped bottles tightly in your box. And if something doesn&rsquo;t arrive safely. We&rsquo;ll replace it.</p>	
				</div>
			</div>
		</div>			

		<div class="primary">
			<div class="main centered">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homepage/_high_compression/BB-HP-sns-box-fw.jpg" alt="Still not sure?" />
				<h3>Still not sure?</h3>
				<p>
					At Bitters + Bottles we believe strongly in everything that we serve and ship. We work tirelessly to select only the best spirits and worthwhile classic cocktail recipes. Every month will bring you closer to the perfect home bar. Even the monthly deliveries that aren&rsquo;t your favorites will help make your home bar complete.
					<br /><br />
				<p>
					<a href="/contact/" class="btn">Ask Us A Question</a>
				</p>
			</div>
		</div>

		<div id="knock-hero" class="hero">
			<h3 class="centered">Come and Knock on Our Door</h3>
			<div class="primary">
				<div class="main">					
					<p>
						We&rsquo;ve been waiting for you. Come visit our shop in South San Francisco, where we have all of the spirits, mixers, barware and glassware you need to supplement your subscription. Swing by, we&rsquo;d love to meet you. We are open <span style="color:#a52f1d;">Tuesday to Saturday, 11am &rsquo;til 7pm</span>. We&rsquo;re more than happy to help you select what you need to complete your bar, or as a gift to complete a friend&rsquo;s bar/barware and glassware make wonderful gifts.
					</p>
				</div>
			</div>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homepage/_high_compression/BB-HP-store-w-border-fw.jpg" alt="Come and knock on our door" />
		</div>

		<div id="insta-hero" class="hero">
			<div class="primary">
				<div class="main">
						<div class="hp-instagrid-head">
							<a href="http://www.instagram.com/bittersandbottles/">@bittersandbottles</a> on 
							<img style="width:80px;margin-bottom:-10px;" src="<?php echo get_stylesheet_directory_uri(); ?>/images/homepage/instagram.png" alt="Instagram" />
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