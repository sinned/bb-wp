<?php
/**
 * Template for displaying the my account page
 *
 */

if ( is_user_logged_in() ) {
  // get the user information from foxycart
} else {
  // redirect to the login
  $this_uri = get_page_uri();
  $url = home_url() . '/wp-login.php?redirect_to=%2Fmy-account%2F&reauth=1';
  header("Location: $url");
  die();
}


get_header(); ?>


  <?php while ( have_posts() ) : the_post(); ?>
    <div class="primary page-header">
      <div class="main">        
        <h3><span class="super-plus"><?php echo the_title(); ?></span></h3>
      </div>
    </div>

    <div id="primary">
      <div id="content" role="main" class="pagecontent">
        <?php echo the_content(); ?>

        ACCOUNT STUFF HERE.

        <?php //comments_template( '', true ); ?>
      </div><!-- #content -->
    </div><!-- #primary -->

  <?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>