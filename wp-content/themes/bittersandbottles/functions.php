<?php
add_action('wp_print_scripts', 'foxyshop_custom_css', 20);

function foxyshop_custom_css() {
	echo "<link rel='stylesheet' href='" . get_bloginfo("stylesheet_directory"). "/foxyshop.css' type='text/css' media='all' />\n";
	return;
}

//--------------------------------------------------------------------------------------------------------------



