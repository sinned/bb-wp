<?php
/**
 *
 * @package WordPress
 * @subpackage bittersandbottles
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
    <div id="content" role="main" class="pagecontent">
      <?php echo the_content(); ?>

      ^^cart^^
      ^^checkout^^

      ^^multiship_custom_begin^^
      <li class="fc_row"><label class="fc_error" style="display: none;" for="Ship_Title">Please select a title for the gift card.</label><label class="fc_pre">Title</label><select name="Ship_Title" class="fc_required"><option value="">Please select a Title</option><option>Dr.</option><option>Ms.</option><option>Mr.</option></select></li>

      <script>
      $('.fc_shipping_custom_fields').each(function () {
      $(this).removeClass('fc_shipping_custom_fields');
      var daddy = $(this).parent().parent(); 
      var destination = daddy.find('.fc_row:nth-child(3)');
      $(this).prependTo(destination);
      $(this).detach();
      console.log('hi', daddy);
      });
      </script>
      ^^multiship_custom_end^^
      
      <?php //comments_template( '', true ); ?>
    </div><!-- #content -->
  </div><!-- #primary -->

<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>