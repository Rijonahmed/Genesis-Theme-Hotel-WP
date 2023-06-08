<?php

// Registers the responsive menus.
if ( function_exists( 'genesis_register_responsive_menus' ) ) {
	genesis_register_responsive_menus( genesis_get_config( 'responsive-menus' ) );
}

add_action( 'wp_enqueue_scripts', 'genesis_sample_enqueue_scripts_styles' );
/**
 * Enqueues scripts and styles.
 *
 * @since 1.0.0
 */
function genesis_sample_enqueue_scripts_styles() {

	$appearance = genesis_get_config( 'appearance' );

	wp_enqueue_style( // phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion -- see https://core.trac.wordpress.org/ticket/49742
		genesis_get_theme_handle() . '-fonts',
		$appearance['fonts-url'],
		[],
		null
	);

	wp_enqueue_style( 'dashicons' );

	if ( genesis_is_amp() ) {
		wp_enqueue_style(
			genesis_get_theme_handle() . '-amp',
			get_stylesheet_directory_uri() . '/lib/amp/amp.css',
			[ genesis_get_theme_handle() ],
			genesis_get_theme_version()
		);
	}

}

add_filter( 'body_class', 'genesis_sample_body_classes' );
/**
 * Add additional classes to the body element.
 *
 * @since 3.4.1
 *
 * @param array $classes Classes array.
 * @return array $classes Updated class array.
 */
function genesis_sample_body_classes( $classes ) {

	if ( ! genesis_is_amp() ) {
		// Add 'no-js' class to the body class values.
		$classes[] = 'no-js';
	}
	return $classes;
}

add_action( 'genesis_before', 'genesis_sample_js_nojs_script', 1 );
/**
 * Echo the script that changes 'no-js' class to 'js'.
 *
 * @since 3.4.1
 */
function genesis_sample_js_nojs_script() {

	if ( genesis_is_amp() ) {
		return;
	}

	?>
	<script>
	//<![CDATA[
	(function(){
		var c = document.body.classList;
		c.remove( 'no-js' );
		c.add( 'js' );
	})();
	//]]>
	</script>
	<?php
}

add_filter( 'wp_resource_hints', 'genesis_sample_resource_hints', 10, 2 );
/**
 * Add preconnect for Google Fonts.
 *
 * @since 3.4.1
 *
 * @param array  $urls          URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function genesis_sample_resource_hints( $urls, $relation_type ) {

	if ( wp_style_is( genesis_get_theme_handle() . '-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = [
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		];
	}

	return $urls;
}


// Including 
add_action('wp_enqueue_scripts', 'hotel_assets' );

function hotel_assets(){
 


    wp_enqueue_style( genesis_get_theme_handle() . '-google-font','//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,200&family=Roboto:ital,wght@0,400;1,300&display=swap',
    [],
    genesis_is_in_dev_mode()
);


wp_enqueue_script(
    genesis_get_theme_handle() . '-global-script', CHILD_URL .
    '/assets/js/script.js',
    ['jquery'],
    genesis_is_in_dev_mode(),
    true
);


}

// theme css and js file calling
function rijon_css_js_file_calling(){
	wp_enqueue_style('rijon-style' , get_stylesheet_uri());
	wp_register_style( 'bootstrap', get_stylesheet_directory_uri().'/assets/css/bootstrap.css', array(), '5.3.0', 'all' );
	wp_enqueue_style('bootstrap');
	
// slick theme file
wp_register_style( 'fontawesome', get_stylesheet_directory_uri().'/assets/css/fontawesome.min.css', array(), 'time', 'all' );
	wp_enqueue_style('fontawesome');

	// slick theme file
	wp_register_style( 'slick', get_stylesheet_directory_uri().'/assets/css/slick.css', array(), 'time', 'all' );
	wp_enqueue_style('slick');



// custom
	wp_register_style( 'custom', get_stylesheet_directory_uri().'/assets/css/custom.css', array(), time(), 'all' );
	wp_enqueue_style('custom');


 // enqueue js files
	
 wp_enqueue_script('bootstrap' , get_stylesheet_directory_uri().'/assets/js/bootstrap.js' , array() , '5.3.0' , true);
 // slick js file
 wp_enqueue_script('slick' , get_stylesheet_directory_uri().'/assets/js/slick.min.js' , array() , time() , true);
// isotope-script
 wp_enqueue_script('isotope-script' , get_stylesheet_directory_uri().'/assets/js/isotope-docs.min.js' , array('jquery') , time() , true);


 wp_enqueue_script('slider' , get_stylesheet_directory_uri().'/assets/js/slider.js' , array() , time() , true);

	


}
add_action( 'wp_enqueue_scripts' , 'rijon_css_js_file_calling');

