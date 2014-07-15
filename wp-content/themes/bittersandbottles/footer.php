<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div class="primary">
			<div class="main">

			<?php
				/*
				 * A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>
				<div id="sharebuttons">
					<p>
						Follow Us:
					</p>
					<ul>
						<li><a href="http://www.twitter.com/bittersbottles/">Twitter</a></li>
						<li class="pinterest"><a href="http://www.pinterest.com/bittersandbottles/">Pinterest</a></li>
						<li class="facebook"><a href="http://www.facebook.com/bittersandbottles/">Facebook</a></li>
						<li class="instagram"><a href="http://www.instagram.com/bittersandbottles/">Instagram</a></li>
					</ul>
				</div>

				<div id="footeraccess">
					<?php wp_nav_menu( array( 'menu' => 'Footer Menu' ) ); ?>
				</div>

				<div id="site-generator">
					&copy; 2014 Bar Antz LLC
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

<?php if (!isset($notcheckout)) { ?>
  <div id="ageModal" style="display:none;">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/global/bb-logo.png" alt="Bitters+Bottles" />
    <h3 style="font-weight:300;">Are you over 21 years of age?</h3>
    <br />
    <a href="#" class="btn">Yes</a>
    <a href="#" class="btn">No</a>
  </div>
  <script type="text/javascript" charset="utf-8">
  if (typeof(fcc) != 'undefined') {
    fcc.events.cart.preprocess.add(function(e, arr) {
      if (arr['cart'] == 'checkout' || arr['cart'] == 'updateinfo' || arr['output'] == 'json') {
        return true;
      }
      if (arr['cart'] == 'checkout_paypal_express') {
        _gaq.push(['_trackPageview', '/paypal_checkout']);
        return true;
      }
      _gaq.push(['_trackPageview', '/cart']);
      return true;
    });
    fcc.events.cart.process.add_pre(function(e, arr) {
      var pageTracker = _gat._getTrackerByName();
      jQuery.getJSON('https://' + storedomain + '/cart?' + fcc.session_get() + '&h:ga=' + escape(pageTracker._getLinkerUrl('', true)) + '&output=json&callback=?', function(data){});
      return true;
    });    
  }
  </script>

  <!-- SlidesJS Required: Link to jquery.slides.js -->
  <script src="//i.bittersandbottles.com/js/jquery.slides.min.js"></script>
  <!-- End SlidesJS Required -->

  <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
  <script>
    $(function() {
      $('#slides').slidesjs({
        width: 815,
        height: 371,
        play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true
        }
      });
    });
  </script>
  <!-- End SlidesJS Required -->

<?php } // if notcheckout ?>

<script type="text/javascript">
jQuery(document).ready(function($){
  // init the bb logic
  bb.age_verify.init();
  bb.subscription.init();
  bb.shop.init();
});
</script>
</body>
</html>