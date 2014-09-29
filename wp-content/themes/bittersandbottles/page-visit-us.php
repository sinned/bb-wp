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
    <div class="primary page-header">
      <div class="main">        
        <h3><span class="super-plus"><?php echo the_title(); ?></span></h3>
      </div>
    </div>

    <div id="primary">
      <div id="content" role="main" class="pagecontent indentedlists">
        <?php echo the_content(); ?>
        <?php //comments_template( '', true ); ?>
      </div><!-- #content -->
    </div><!-- #primary -->

  <?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>