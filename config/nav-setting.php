<?php
/**
 * Hotel.
 *
 * This file adds nav setting to the Hotel Theme.
 *
 * @package Hotel
 * @author  Rijon Ahmed 
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

 // Repositions primary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_nav' );
remove_action( 'genesis_header', 'genesis_do_nav', 12 );

// Repositions the secondary navigation menu.
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
remove_action( 'genesis_footer', 'genesis_do_subnav', 10 );

add_filter( 'wp_nav_menu_args', 'genesis_sample_secondary_menu_args' );
/**
 * Reduces secondary navigation menu to one level depth.
 *
 * @since 2.2.3
 *
 * @param array $args Original menu options.
 * @return array Menu options with depth set to 1.
 */
function genesis_sample_secondary_menu_args( $args ) {

	if ( 'secondary' === $args['theme_location'] ) {
		$args['depth'] = 1;
	}

	return $args;

}






