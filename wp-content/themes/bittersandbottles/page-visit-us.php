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

        <div style="height:500px;width:100%;">
          <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
          <div style="overflow:hidden;width:100%;height:100%;">
            <div id="gmap_canvas" style="width:100%;height:100%;"></div>
            <a class="google-map-code" href="http://www.map-embed.com" id="get-map-data">google maps</a>
            <style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
          <a class="google-map-data" href="http://www.stromvergleich.bz" id="get-map-data">naechste</a>
          </div>
          <script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(37.655351,-122.40949899999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(37.655351, -122.40949899999998)});infowindow = new google.maps.InfoWindow({content:"<b>Bitters+Bottles</b><br/>240 Grand Avenue<br/>94080 South San Francisco" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
        </div>

        <?php //comments_template( '', true ); ?>
      </div><!-- #content -->
    </div><!-- #primary -->

  <?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>