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
						<div class="col1">Step 1</div>
						<div class="col2">
							<select>
								<option value="">Select Your Recipient</option>
								<option>This is a Gift</option>
								<option>This is for myself</option>
							</select>
						</div>
					</div>

					<div class="row giftoptions" style="display:none;">
							<select name="Gift_Title">
								<option value="">Title</option>
								<option>Dr.</option>
								<option>Ms.</option>
								<option>Mr.</option>
							</select>
							<input type="text" name="shipto" placeholder='Enter Gift Recipient Name'>
							<textarea name="Gift_Message" placeholder="Enter Gift Message Here"></textarea>
					</div>

					<div class="row">
						<div class="col1">Step 2</div>
						<div class="col2">
							<select>
								<option value="">Select Subscription Duration</option>
								<option>1 month</option>
								<option>3 months</option>
								<option>6 months</option>		
								<option>12 months</option>																
							</select>
						</div>
					</div>					

					<div class="row">
						<div class="col1">Step 3</div>
						<div class="col2">
							<select>
								<option value="">Do you need bartools?</option>
								<option>Yes</option>
								<option>No</option>
							</select>
						</div>
					</div>


					<form id="buy-subscription" action="https://bittersandbottles.foxycart.com/cart" method="post" accept-charset="utf-8">				

					<input type="hidden" name="name" value="Monthly Cocktails Subscription" />
					<input type="hidden" name="category" value="SUBSCRIPTION" />
					<input type="hidden" name="price" value="95" />
					<input type="hidden" name="code" value="COCKTAILS-MONTHLY" />
					<input type="hidden" name="sub_frequency" value="1m" />
					<input type="hidden" name="sub_startdate" value="" />
					<!-- <input type="hidden" name="empty" value="true" /> -->
					<button id="subscribe_process" class="btn btn-arrow">Add to cart</a>
					</form>							
				</div>
			</div><!-- #content -->
		</div><!-- #primary -->

	<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>