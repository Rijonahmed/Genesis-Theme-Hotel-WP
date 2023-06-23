
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
<nav class="navbar navbar-expand-lg">
    <div id="hotel_main_header_block" class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
		<div class="header_logo navbar-brand">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_theme_mod('hotel_header_logo_setting'); 
				
				?>" alt="">
                </a>
            </div>
        <div  class="collapse navbar-collapse" id="navbarTogglerDemo01">

            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <nav class="header_nav_manu">
                    <?php 
				wp_nav_menu(array(
					'theme_location' => 'main_menu',
					'menu_id' => 'nav'
					));
			?>
                </nav>
            </ul>
            <div class="header_widgets">
                <?php 
				
			 dynamic_sidebar('nav-menu-right');
			

				
			?>
            
            </div>
        </div>
    </div>
</nav>


<?php
}