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
					<a href="/cocktails/" class="btn btn-arrow">Get Started</a>
				</p>

					<div class="bb-process">
						<img src="http://i.bittersandbottles.com/wp-content/themes/bittersandbottles/images/homepage/register.jpg" alt="Register" />
						<h4>Subscribe</h4>
						<p><a href="/cocktails/">Sign up</a>. Your first box ships on the 15th of each month.</p>
					</div>
					<div class="bb-process">				
						<img src="http://i.bittersandbottles.com/wp-content/themes/bittersandbottles/images/homepage/receive.jpg" alt="Receive" />
						<h4>Receive</h4>
						<p>FedEx shows up at your door with all you need to start shaking things up!</p>
					</div>
					<div class="bb-process">
						<img src="http://i.bittersandbottles.com/wp-content/themes/bittersandbottles/images/homepage/reveal.jpg" alt="Reveal"/>
						<h4>Mix</h4>
						<p>The hardest part is deciding which cocktail to make first. </p>
					</div>
			</div>
		</div>

		<div id="sub-hero" class="hero">
			<div class="primary">
				<div class="main">			
					<div class="hp-cocktails">
							<div>
								<h3>Classic Cocktails</h3>
								<h5>Your Home Bar, Selected by Experts</h5>
								<br />
								<a href="/cocktails/" class="btn btn-arrow">Subscribe</a>
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
				<h3 class="centered">Spirited Reviews</h3>

<div class="banner">
    <ul>
    		<li>
    			<p class="quote">&ldquo;
    				It's easy to find the most expensive sipping whiskeys at the large liquor stores around town. But to find the best to shake into a Manhattan can take an investment of trial and error. So for the budding mixologist, a monthly subscription to new, South SF-based start-up Bitters and Bottles is a must.
    				&rdquo;</p>
    			<p class="quoteby"><a href="http://sf.racked.com/archives/2014/01/27/bitters-and-bottles-delivers-the-perfect-home-bar-to-your-door.php">Racked</a></p>
    		</li>
        <li>
					<p class="quote">&ldquo;
						…For some fellas, navigating the labyrinthine world of hooch — especially if you want to build an impeccable home bar — requires more than just bottle delivery.  So for that, we’d like to introduce Bitters + Bottles, a just-launched Golden State concern now shipping quality spirits (and the mixology know-how to go with them) to New York imbibers. B+B knows the aforementioned home bar isn’t built in one fell swoop. Their solution: subscribe for monthly deliveries and flesh it out over time.
						&rdquo;
					</p>
					<p class="quoteby"><a href="http://www.insidehook.com/new-york/bitters-and-bottles/">Inside Hook</a></p>
        </li>
        <li>
        	<p class="quote">&ldquo;
        		Witness the miraculous adult bounty of Bitters + Bottles, your new munitions depot for all things home bar and bottled spirit.
        		&rdquo;</p>
        	<p class="quoteby"><a href="http://www.urbandaddy.com/sfo/leisure/31367/Bitters_Bottles_A_Rather_Attractive_Place_with_So_Much_Liquor_San_Francisco_SFO_Store">Urban Daddy</a></p>
        </li>
        <li>
        	<p class="quote">&ldquo;
        		The co-owners of [...] Bitters &amp; Bottles, a liquor store in a spare South San Francisco storefront rescued after decades of neglect, are a little like Stacy and Clinton of What Not to Wear&mdash;only less judge-y and far, far more pro-vermouth.
        		&rdquo;</p>
        	<p class="quoteby"><a href="http://www.tastingtable.com/entry_detail/sf/15643/Bitters_and_Bottles_Liquor_Store_Online_Cocktail_Subscripti.htm#ixzz3ENLLTLvG">Tasting Table</a></p>
        </li>
    </ul>
</div>


				
			
				<br clear="both" />
				<hr />
				<div class="centered">
					<img class="seriously" src="http://i.bittersandbottles.com/wp-content/themes/bittersandbottles/images/homepage/cheers-circle.jpg" alt="Seriously, we take quality seriously." />
				</div>
				<div class="seriously">
					<h3>The Top Shelf. <br />The Right Shelf.</h3>
					<p>Bitters + Bottles is a small team of liquor experts whose mission is for you to enjoy and serve the world's best spirits and cocktails at home. We find the highest quality spirits and ingredients, from the best producers, and bring them to your doorstep every month.</p>
				</div>

			</div>
		</div>	

		<div id="ship-hero" class="hero">
			<div class="primary">
				<div class="main centered">			
					<h3 class="centered">Protective Packaging <br />and Free Shipping</h3>
					<p>We use an innovative packaging product that surrounds bottles with a protective wall of air. The clear film is recyclable with 90% source reduction. We then pack the air-wrapped bottles tightly in your box. And if something doesn&rsquo;t arrive safely, we&rsquo;ll replace it.</p>	
				</div>
			</div>
			<img src="http://i.bittersandbottles.com/wp-content/themes/bittersandbottles/images/homepage/34-packaging-mailer.jpg" alt="A protective wall of air" />
		</div>			

		<div class="primary">
			<div class="main centered">
				<img src="http://i.bittersandbottles.com/wp-content/themes/bittersandbottles/images/homepage/_high_compression/BB-HP-sns-box-fw.jpg" alt="Still not sure?" />
				<h3>Still not sure?</h3>
				<p>
					At Bitters + Bottles we believe strongly in everything that we serve and ship. We work tirelessly to select only the best spirits and worthwhile classic cocktail recipes. Every month will bring you closer to the perfect home bar. Even the monthly deliveries that aren&rsquo;t your favorites will help make your home bar complete.
					<br /><br />
				<p>
					<a href="/contact/" class="btn btn-arrow">Ask Us A Question</a>
				</p>
			</div>
		</div>

		<div id="knock-hero" class="hero">
			<a href="/visit-us" style="color:#000000;text-decoration:none;">
				<h3 class="centered">SHOP THE WHOLE STORE?  <br />JOIN US FOR A TASTING?</h3>
				<div class="primary">
					<div class="main">					
						<p>
							A subscription and online shop is just the beginning. We are a boutique spirits shop and home barware store. With over 1,000 bottles of spirits, plus all bitters, barware, and glassware you need to complete your home bar, we are your one stop shop for all your mixing and sipping needs.
							<br/><br/>
							We are located in the heart of South San Francisco’s Old Town, rich in community, heritage and history. 
							<br/><br/>
							Our shop was built in the early 1900’s, and we are only the second tenants. The store was run by a single family for generations, and served as a community hardware and liquor store. After being shuttered for two decades, months of sanding and painting have revitalized the original redwood floors, restored the 1920’s service counters, and refreshed the mid-century cold box. We are so excited to also preserve the spirit of the space by serving as an independent barware and spirits shop for the local DIY mixologist.
							<br/><br/>
							We feel honored to be a part of the South San Francisco revitalization and would love to welcome so you can judge for yourself. CHEERS!
						</p>
					</div>
				</div>
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