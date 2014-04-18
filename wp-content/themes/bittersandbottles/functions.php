<?php
add_action('wp_print_scripts', 'foxyshop_custom_css', 20);

function foxyshop_custom_css() {
	echo "<link rel='stylesheet' href='" . get_bloginfo("stylesheet_directory"). "/foxyshop.css' type='text/css' media='all' />\n";
	return;
}

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
