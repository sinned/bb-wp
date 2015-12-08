<?php
// hide admin bar
add_filter('show_admin_bar', '__return_false');

// removing the local jquery
// comment out the next two lines to load the local copy of jQuery
wp_deregister_script('jquery'); 
wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', false, '2.1.4'); 
wp_enqueue_script('jquery');

// lightbox2
//wp_register_script('lightbox2', 'http://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.1/js/lightbox.min.js');
//wp_enqueue_script('lightbox2');
wp_register_style( 'lightbox2', 'http://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.1/css/lightbox.min.css' );
wp_enqueue_style( 'lightbox2' );

/**
 * Redirect user after successful login.
 *
 * @param string $redirect_to URL to redirect to.
 * @param string $request URL the user is coming from.
 * @param object $user Logged user's data.
 * @return string
 */
function my_login_redirect( $redirect_to, $request, $user ) {
  //is there a user to check?
  global $user;
  if ( isset( $user->roles ) && is_array( $user->roles ) ) {
    //check for admins
    if ( in_array( 'administrator', $user->roles ) ) {
      // redirect them to the default place
      return $redirect_to;
    } else {
      return home_url();
    }
  } else {
    return $redirect_to;
  }
}

add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );
?>
<?php
add_action('wp_print_scripts', 'foxyshop_custom_css', 20);

function foxyshop_custom_css() {
	echo "<link rel='stylesheet' href='" . get_bloginfo("stylesheet_directory"). "/foxyshop.css' type='text/css' media='all' />\n";
	return;
}



// adding our application script a la http://codex.wordpress.org/Function_Reference/wp_enqueue_script
function bittersandbottles_scripts_method() {
  wp_enqueue_script(
    'bittersandbottles-script',
    get_stylesheet_directory_uri() . '/js/bittersandbottles.js',
    array( 'jquery' ),
    '1.2'
  );
}
add_action( 'wp_enqueue_scripts', 'bittersandbottles_scripts_method' );

function jquerycookie_scripts_method() {
  wp_enqueue_script(
    'jquerycookie-script',
    get_stylesheet_directory_uri() . '/js/jquery.cookie.js',
    array( 'jquery' )
  );
}
add_action( 'wp_enqueue_scripts', 'jquerycookie_scripts_method' );

function colorbox_scripts_method() {
  wp_enqueue_script(
    'colorbox-script',
    get_stylesheet_directory_uri() . '/js/jquery.colorbox-min.js',
    array( 'jquery' )
  );
}
add_action( 'wp_enqueue_scripts', 'colorbox_scripts_method' );

//--------------------------------------------------------------------------------------------------------------


// add special class to the Home Navigation
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if($item->title == "Home"){ //Notice you can change the conditional from is_single() and $item->title
             $classes[] = "home-nav-class";
     } else {
     }
     return $classes;
}

//returns the parent category ID
function get_foxyshop_category_parent($categoryID = 0) {
  $parentCategoryID = false;
  $ancestors = get_ancestors($categoryID, 'foxyshop_categories');
  if (count($ancestors)) {
    $parentCategoryID = $ancestors[0];
  } 
  return $parentCategoryID;
}

//Writes the Children Categories of a Category (if available)
function foxyshop_category_siblings($categoryID = 0, $showCount = false, $showDescription = true, $categoryImageSize = "thumbnail") {
  global $taxonomy_images_plugin;
  $write = "";

  $ancestors = get_ancestors($categoryID, 'foxyshop_categories');
  $parentCategoryID = $ancestors[0];

  $args = array('hide_empty' => 0, 'hierarchical' => 0, 'parent' => $parentCategoryID, 'orderby' => 'name', 'order' => 'ASC');
  $termchildren = get_terms('foxyshop_categories', apply_filters('foxyshop_category_children_query',$args));
  if ($termchildren) {

    //Sort Categories
    $termchildren = foxyshop_sort_categories($termchildren, $parentCategoryID);

    foreach ($termchildren as $child) {
      $term = get_term_by('id', $child->term_id, "foxyshop_categories");
      if (substr($term->name,0,1) == "_") continue;

      $productCount = ($showCount ? " (" . $term->count . ")" : "");
      $url = get_term_link($term, "foxyshop_categories");
      $liwrite = "";
      $liwrite .= '<li id="foxyshop_category_' . $term->term_id . '">';
      $liwrite .= '<h2><a href="' . $url . '">' . $term->name . '</a>' . $productCount . '</h2>';
      if ($showDescription && $term->description) $liwrite .= apply_filters('the_content', $term->description);
      if (isset($taxonomy_images_plugin)) {
        $img = $taxonomy_images_plugin->get_image_html($categoryImageSize, $term->term_taxonomy_id);
        if(!empty($img)) $liwrite .= '<a href="' . $url . '" class="foxyshop_category_image">' . $img . '</a>';
      }
      $liwrite .= '</li>'."\n";
      $write .= apply_filters('foxyshop_category_children_write', $liwrite, $term);
    }
    if ($write) echo '<ul class="foxyshop_categories">' . $write . '</ul>' . apply_filters('foxyshop_after_category_display', '<div class="clr"></div>');
  }
  
}