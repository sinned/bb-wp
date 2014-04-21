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
				<li><a href="http://www.twitter.com/bittersandbottles/">Twitter</a></li>
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
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>