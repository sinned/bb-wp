<?php get_header(); ?>

<?php
global $product;
?>

<?php foxyshop_include('header'); ?>
<div id="foxyshop_container">
  <?php
  //Write Category Title
  //echo '<h1 id="foxyshop_category_title">Products</h1>'."\n";

  echo '<div class="foxyshop_categories_top">';
  foxyshop_category_children(0, false);
  echo '</div>';
    
  //Write Product Sort Dropdown
  //foxyshop_sort_dropdown();

  //Feel free to put a store description here
  //echo '<p></p>'."\n";


  //Run the query for all products in this category
  global $paged, $wp_query;
  $paged = get_query_var('page');
  $args = array('post_type' => 'foxyshop_product', 'post_status' => 'publish', 'posts_per_page' => foxyshop_products_per_page(), 'paged' => get_query_var('page'));
  $args = array_merge($args,foxyshop_sort_order_array());
  query_posts($args);
  echo '<ul class="foxyshop_product_list">';
  while (have_posts()) :
    the_post();

    //Product Display
    foxyshop_include('product-loop');

  endwhile;
  echo '</ul>';

  //Pagination
  foxyshop_get_pagination();
  ?>
</div>
<?php foxyshop_include('footer'); ?>

<?php get_footer(); ?>