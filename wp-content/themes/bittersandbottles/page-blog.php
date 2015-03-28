<?php
/**
 * Template for displaying the blog
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

	<div class="primary page-header">
		<div class="main">			
			<h3><span class="super-plus">Bitters &amp; Bottles Blog</span></h3>
		</div>
	</div>

	<div id="primary">
			<div id="content" role="main" class="pagecontent indentedlists">
				<?php // this is the content from the BLOG PAGE (which is kind of the blog announcement) ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php echo the_content(); ?>
				<?php endwhile; // end of the loop. ?>

				<?php $args = array(
					'posts_per_page'   => 5,
					'offset'           => 0,
					'category'         => '',
					'category_name'    => '',
					'orderby'          => 'post_date',
					'order'            => 'DESC',
					'include'          => '',
					'exclude'          => '',
					'meta_key'         => '',
					'meta_value'       => '',
					'post_type'        => 'post',
					'post_mime_type'   => '',
					'post_parent'      => '',
					'post_status'      => 'publish',
					'suppress_filters' => true 
				);
				$posts_array = get_posts( $args );	

				foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
					<hr />
				<?php endforeach; ?>
			</div><!-- #content -->
		</div><!-- #primary -->


<?php get_footer(); ?>