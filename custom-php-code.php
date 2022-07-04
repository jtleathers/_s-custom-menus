<?php
// First, move the file 'class-fwd-add-sub-menu-button-walker.php' into your 'inc' folder. Now require that file into your functions.php like so:
require get_template_directory() . '/inc/class-fwd-add-sub-menu-button-walker.php';

// Second, in your header.php file add the line below that sets the walker class. This line should be added to your existing wp_nav_menu array.
wp_nav_menu(
	array(
		'theme_location' => 'header',
		'menu_id'        => 'primary-menu',
		'walker'         => new FWD_Add_Sub_Menu_Button_Walker(),
	)
);

// Third, replace the 'navigation.js' file in your 'js' folder with the one provided in these files.

// Fourth, open the 'navigation-styles.css' and read that comment to see how to handle the CSS.
