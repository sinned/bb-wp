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
 * @subpackage bittersandbottles
 * @since Twenty Eleven 1.0
 */

get_header(); ?>


	<?php while ( have_posts() ) : the_post(); ?>
		<div class="primary page-header">
			<div class="main">				
				<h3><span class="super-plus">Subscribe</span></h3>
			</div>
		</div>

		<div id="primary">
			<div id="content" role="main" class="pagecontent">
				<div class="cocktails-page">

					<h3 style="text-align: center;">Your Bar, Curated + Delivered</h3>
					<p style="text-align: center;">Subscribe today and let us curate your top shelf.</p>

					<hr />

					<div id="slides">
						<img src="http://i.bittersandbottles.com/wp-content/uploads/2014/05/subscription-wb-mc-ps.jpg" alt="subscription-wb-mc-ps"  />      
						<img src="http://i.bittersandbottles.com/wp-content/themes/bittersandbottles/images/subscriptions/recipes.jpg" alt="Recipes"  />
					</div>

					<?php echo the_content(); ?>
					<?php //comments_template( '', true ); ?>
				</div>

				<div class="row centered">
					<h4 class="subscription_price">$95/month</h4>
				</div>

				<div class="show_subscription_choices centered">
					<button class="btn btn-arrow">Get Started</button>
				</div>

				<div class="subscription_choices centered" style="display:none;">

					<div class="row">
						<div class="col1">Who is this for?</div>
						<div class="col2">
							<select id="choice_isgift">
								<option value="myself">This is for myself</option>
								<option value="gift">This is a Gift</option>
							</select>
							<div class="giftoptions" style="display:none;">		
									<input id="choice_giftname" type="text" placeholder='Enter Gift Recipient Name'>
									<textarea id="choice_giftmessage" placeholder="Enter Gift Message Here"></textarea>
							</div>
						</div>
					</div>

					<div class="row giftoptions" style="display:none;">
						<div class="col1">How many months?</div>
						<div class="col2">
							<select id="choice_giftduration">
								<option value="1">1 month</option>
								<option value="3">3 months</option>
								<option value="6">6 months</option>		
								<option value="12">12 months</option>																
							</select>
						</div>
					</div>					

					<div class="row">
						<div class="col1">And, finally</div>
						<div class="col2">
							<select id="choice_bartools">
								<option value="" id="choice_bartools_question">Do you need bartools?</option>
								<option value="yes">Yes, bartools please.</option>
								<option value="no">No bartools please.</option>
							</select>
						</div>
					</div>

					<div class="row no_border">
						<div class="col1"></div>
						<div class="col2">
							<h3>Price: <span class="price">$95 / month</span></h3>
							<p class="price_disclaimer"><small>(You can cancel at any time.)</small></p>
						</div>
					</div>
					<div class="row">
						<div class="col1"></div>						
						<div class="col2">
							<h6>Ships: <span class="shipdate">2nd week of July</span></h6>
						</div>
					</div>
						<button id="subscribe_process" class="btn btn-arrow">Add to cart</a>

					<form id="buy-subscription" action="https://bittersandbottles.foxycart.com/cart" method="post" accept-charset="utf-8">				
						<input type="hidden" name="name" value="Monthly Cocktails Subscription" />
						<input type="hidden" name="category" value="SUBSCRIPTION" />
						<input type="hidden" name="price" value="95" />
						<input type="hidden" name="code" value="COCKTAILS-MONTHLY-SUBSCRIPTION" />
						<input type="hidden" name="sub_frequency" value="1m" />
						<input type="hidden" name="sub_startdate" value="" />
						<input type="hidden" name="Gift_Message" value="" />
						<input type="hidden" name="shipto" />
						<!-- <input type="hidden" name="empty" value="true" /> -->
					</form>							
				</div>
			</div><!-- #content -->
		</div><!-- #primary -->

	<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>