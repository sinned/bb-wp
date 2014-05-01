<?php get_header(); ?>

<?php foxyshop_include('header'); ?>
<div id="foxyshop_container">
  <?php
  global $product;

  //Write Breadcrumbs
  //foxyshop_breadcrumbs(" &raquo; ");

  //Get Current Page Info
  $term = get_term_by('slug', get_query_var('term'), "foxyshop_categories");
  $currentCategoryName = $term->name;
  $currentCategoryDescription = $term->description;
  $currentCategorySlug = $term->slug;
  $currentCategoryID = $term->term_id;

  //Write Category Title
  //echo '<h1 id="foxyshop_category_title">' . str_replace("_","",$currentCategoryName) . '</h1>'."\n";

  echo '<div class="foxyshop_categories_top">';
  foxyshop_category_children(0, false);
  echo '</div>';

  //Write Product Sort Dropdown
  //foxyshop_sort_dropdown();

  //If there's a category description, write it here
  if ($currentCategoryDescription) echo '<p>' . $currentCategoryDescription . '</p>'."\n";

  //Show Children Categories
  echo '<div class="foxyshop_category_children">';
  foxyshop_category_children($currentCategoryID);
  echo '</div>';

  //If there are siblings, show them. But not for the top categories.
  if (get_foxyshop_category_parent($currentCategoryID)) {
    echo '<div class="foxyshop_category_children">';
    foxyshop_category_siblings($currentCategoryID);
    echo '</div>';    
  }


  //Run the query for all products in this category
  $args = array('post_type' => 'foxyshop_product', "foxyshop_categories" => $currentCategorySlug, 'post_status' => 'publish', 'posts_per_page' => foxyshop_products_per_page(), 'paged' => get_query_var('paged'));
  $args = array_merge($args,foxyshop_sort_order_array());
  $args = array_merge($args,foxyshop_hide_children_array($currentCategoryID));
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
<script type="text/javascript">
jQuery(document).ready(function($){
  // highlight the current category
  console.log('hi dennis');
  $('#foxyshop_category_<?php echo $currentCategoryID; ?>').addClass('selected');
  $('#foxyshop_category_<?php echo get_foxyshop_category_parent($currentCategoryID); ?>').addClass('selected');
});
</script>
<?php get_footer(); ?>