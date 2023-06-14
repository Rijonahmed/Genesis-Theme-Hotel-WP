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









register_nav_menu(
	'main_menu' , __('Main Menu' , 'rijon'),
);







// Main Header - Nav Menu
add_action('genesis_header','hotel_customize_main_header');
function hotel_customize_main_header(){
	?>
		<!-- Main Header Start-->
		<section id="hotel_main_header_block">
		<!-- logo -->
		<div class="header_logo">
			<a href="<?php echo home_url(); ?>">
				<img src="<?php echo get_theme_mod('hotel_header_logo_setting'); ?>" alt="">
			</a>
		</div>
		<!-- menu -->
		<nav class="header_nav_manu">
			<?php 
				wp_nav_menu(array(
					'theme_location' => 'main_menu',
					'menu_id' => 'nav'
					));
			?>
		</nav>
		<!-- widgets -->
		<div class="header_widgets">
			<?php 
				dynamic_sidebar('nav-menu-right');
			?>
		</div>
		</section>
		<!-- Main Header End -->
	<?php
}









