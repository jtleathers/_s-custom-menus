<?php
/**
 * Adds buttons to navigation menus with sub menus.
 *
 * @package FWD_Starter_Theme
 */

/**
 * Adds buttons for sub-menu nav items for mobile.
 */
class FWD_Add_Sub_Menu_Button_Walker extends Walker_Nav_Menu {
	/**
	 * Adds buttons for sub-menu nav items for mobile.
	 *
	 * @param array $output Number of posts to get.
	 * @param int   $depth ID of the post to skip.
	 * @param array $args List of sub locations if any.
	 */
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent  = str_repeat( "\t", $depth );
		$output .= "\n$indent<button class='sub-menu-toggle' aria-expanded='false' aria-label='Toggle sub-menu'>+</button><ul class='sub-menu'>\n";
	}
	/**
	 * Adds buttons for sub-menu nav items for mobile.
	 *
	 * @param array $output Number of posts to get.
	 * @param int   $depth ID of the post to skip.
	 * @param array $args List of sub locations if any.
	 */
	public function end_lvl( &$output, $depth = 0, $args = array() ) {
		$indent  = str_repeat( "\t", $depth );
		$output .= "$indent</ul>\n";
	}
}
