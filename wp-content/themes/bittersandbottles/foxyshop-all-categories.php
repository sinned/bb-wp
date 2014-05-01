<?php get_header(); ?>

<?php foxyshop_include('header'); ?>
<div id="foxyshop_container">
  <?php

  //echo '<h1 id="foxyshop_category_title">Products</h1>';

  //Show all children that have a parent of 0 (top level ones)
  //Options: (Parent ID) (Show Product Count in Parentheses) <- Shows all child products (including sub categories)
  foxyshop_category_children(0, false);

  ?>
</div>
<?php foxyshop_include('footer'); ?>

<?php get_footer(); ?>