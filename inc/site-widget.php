<?php

add_action('widgets_init' , 'custom_footer_widget_register');

function custom_footer_widget_register() {
    
    // Before Header - left
    register_sidebar(
        array(
            'name'          =>__('Before Header - Left','emon'),
            'id'            => 'before-header-left',
            'description'   =>__('This is Before Header - Left','emon'),
            'before_widget' => '<div class="child_footer">',
            'after_widget'  =>'</div>',
            'before_title' => '<h2 class="title">',
            'after_title' => '</h2>',
        )
    );

    // Before Header - Right
    register_sidebar(
        array(
            'name'          =>__('Before Header - Right','emon'),
            'id'            => 'before-header-right',
            'description'   =>__('This is Before Header - Right','emon'),
            'before_widget' => '<div class="child_footer">',
            'after_widget'  =>'</div>',
            'before_title' => '<h2 class="title">',
            'after_title' => '</h2>',
        )
    );

    // Main Header - Nav - Right Info
    register_sidebar(
        array(
            'name'          =>__('Main Header - Nav - Right Info','emon'),
            'id'            => 'nav-menu-right',
            'description'   =>__('This is Main Header - Nav - Right Info','emon'),
            'before_widget' => '<div class="child_footer">',
            'after_widget'  =>'</div>',
            'before_title' => '<h2 class="title">',
            'after_title' => '</h2>',
        )
    );

    // Footer Info - Left
    register_sidebar(array(
        'name' => __('Footer Info - Left' , 'emon'),
        'id' => 'footer-info-left',
        'description' => __('This is Footer Info - Left','emon'),
        'before_widget' => '<div class="child_footer">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    // Footer Info - Right
    register_sidebar(array(
        'name' => __('Footer Info - Right' , 'emon'),
        'id' => 'footer-info-right',
        'description' => __('This is Footer Info - Right','emon'),
        'before_widget' => '<div class="child_footer">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));

    // Footer Map
    register_sidebar(array(
        'name' => __('Footer Map' , 'emon'),
        'id' => 'footer-map',
        'description' => __('This is footer map','emon'),
        'before_widget' => '<div class="child_footer">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ));
}


// Before Header Area
add_action('genesis_before_header' , 'hotel_customize_before_header');
function hotel_customize_before_header(){
	?>
	<section id="hotel_before_header_block">
		<div class="container">
			<div class="row">
				<div class="col-md-6 before_header_widget_left">
					<?php
						dynamic_sidebar( 'before-header-left' );
					?>
				</div>
				<div class="col-md-6 before_header_widget_right">
					<?php
						dynamic_sidebar( 'before-header-right' );
					?>
				</div>
			</div>
		</div>
	</section>
	<?php
}



// footer
add_action('genesis_footer' , 'hotel_custom_footer');
function hotel_custom_footer(){
    ?>
    
    <footer id="footer_area">
        <section id="footer">
            <div class="container">
                <div class="row">

                    <!-- Footer Details-->

                        <div class="col-md-6 footer_area_left">
                            <div class="row">
                                <!-- footer details left -->
                                <div class="col-md-6">
                                    <?php dynamic_sidebar('footer-info-left'); ?>
                                </div>

                                <!-- footer details right -->
                                <div class="col-md-6">
                                    <?php dynamic_sidebar('footer-info-right'); ?>
                                </div>
                            </div>
                        </div>

                    <!-- Footer Map -->

                        <div class="col-md-6 footer_map">
                            <?php dynamic_sidebar('footer-map'); ?>
                        </div>
 
                </div>
            </div>
        </section>
    </footer>

    <?php
}

// copyright section
add_action('genesis_after_footer' , 'hotel_custom_footer_copyright');
function hotel_custom_footer_copyright(){
?>
<section id="footer_copyright_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <?php echo get_theme_mod('hotel_copyright_text_setting'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

<?php
}


