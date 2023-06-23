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




// Footer
remove_action('genesis_footer', 'genesis_do_footer');
// footer
add_action('genesis_footer' , 'hotel_custom_footer');
function hotel_custom_footer(){
    ?>




<!-- gallery start -->


<section id="gallery_block">
    <!-- gallery content block start-->
    <div id="gallery_content">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <span class="devider">
                        <!-- devider -->
                    </span>
                    <?php 
            query_posts('post_type=page&post_status=publish&post_per_page=-1&order=ASC&paged='.get_query_var('post'));
            if(have_posts()):
              the_post();
            $gallery_block = rwmb_meta( 'gallery_page' );
            $title = $gallery_block[ 'title' ] ?? '';
            $heading = $gallery_block[ 'heading' ] ?? '';
            $description = $gallery_block[ 'description' ] ?? '';
            $instagram_url = $gallery_block[ 'instagram_url' ] ?? '';
            $image_id = $gallery_block[ 'instagram_icon' ] ?? 0;
            $instagram_icon = RWMB_Image_Field::file_info( $image_id, [ 'size' => 'thumbnail' ] );

            $gallery_images = $gallery_block[ 'gallery_images' ] ?? [];
            $first_four_imgs = array_slice($gallery_images,0,4);
            $last_two_imgs = array_slice($gallery_images,-2,2);

            //var_dump($last_two_imgs);
        
            //var_dump($gallery_images);
                        ?>

                    <p class="title">
                        <?php echo $title ?>
                    </p>
                    <h2 class="heading">
                        <?php echo $heading ?>
                    </h2>
                    <p class="description">
                        <?php echo $description ?>
                    </p>



                </div>
            </div>
        </div>
    </div>
    <!-- Gallery content block end -->
    <!-- gallery image block start -->
    <section id="gallery_images">
        <div class="container">
            <div class="row">
                <?php foreach ( $first_four_imgs as $image_id ) : ?>
                <?php $image = RWMB_Image_Field::file_info( $image_id, [ 'size' => 'full'] ); ?>


                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                    <a href="<?php echo $instagram_url;?>" target="_blank"><img class=""
                            src="<?= $instagram_icon['url']; ?>" alt=""></a>
                    <img class="gallery-imgs" src="<?= $image['url']; ?>" alt="">




                </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
    <!-- gallery image block end -->
</section>
<!-- gallery end -->


<!-- Enevt Block Start -->
<section id="event_block">
    <!-- event gallery start -->
    <section id="event_gallery">
        <div class="container">
            <div class="row">
                <?php foreach ( $last_two_imgs as $image_id ) : ?>
                <?php $image = RWMB_Image_Field::file_info( $image_id, [ 'size' => 'full'] ); ?>

                <div class="col-md-6 ">
                    <a href="#">
                        <img class="h-75" src="<?= $image['url']; ?>" alt="img">
                    </a>
                </div>
                <?php endforeach ?>

            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- event gallery end -->





    <!-- event details start -->
    <section id="event_content">
        <div class="containier">
            <div class="row">
                <?php 
          query_posts('post_type=page&post_status=publish&post_per_page=-1&order=ASC&paged='.get_query_var('post'));
          if(have_posts()):
            the_post();
          $event_block = rwmb_meta( 'event_block' );
          $heading = $event_block[ 'heading' ] ?? '';
          $description = $event_block[ 'description' ] ?? '';
          $button = $event_block[ 'button' ] ?? '';
                        ?>
                <div class="col-md-3">
                    <h2 class="heading">
                        <?php echo $heading; ?>
                        </p>
                </div>
                <div class="col-md-6">
                    <p class="description">
                        <?php echo $description; ?>
                    </p>
                </div>
                <div class="col-md-3">
                    <a href="#" class="button">
                        <?php echo $button; ?>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</section>
<!-- event details end -->


<!-- sister properties section start -->
<section>
    <?php
            query_posts('post_type=page&post_status=publish&post_per_page=-1&order=ASC&paged='.get_query_var('post'));
            if(have_posts()):
              the_post(); 
                $sister = rwmb_meta( 'sister-propertise-section' );
                $title = $sister[ 'title' ] ?? '';
                $heading = $sister[ 'heading' ] ?? '';
                $description = $sister[ 'description' ] ?? '';
                $image_id = $sister[ 'sister-propertise-bg' ] ?? 0;
                $bg_image = RWMB_Image_Field::file_info( $image_id, [ 'size' => 'full' ] );
                

                        ?>

    <section class="pb-5"
        style="background-image: url('<?= $bg_image['url']; ?>'); background-repeat: no-repeat; background-size: cover;">
        <div class="my-5">
            <p class="text-center"><?php echo $title ?></p>
            <h1 class="text-center"><?php echo $heading ?></h1>
            <h4 class="text-center fst-italic"><?php echo $description ?></h4>
            <?php  endif; ?>
        </div>

        <div class="card-group gap-3 container">

            <?php
            query_posts('post_type=Sister&post_status=publish&post_per_page=3&order=ASC&paged='.get_query_var       ('post'));
                if(have_posts()) :
                    while(have_posts()) :
                        the_post();
            $sister_propertise_button = rwmb_meta( 'button' ?? '' );
                    ?>


            <div id="sister-card" class="card border border-2 shadow" style="width: 23rem;">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class=" m-4" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title text-primary"><?php the_title();?></h5>
                    <p class="card-text"><?php the_content(); ?></p>
                    <a href="<?php the_permalink();?>" class="btn btn-outline-secondary"><?php echo $sister_propertise_button ?></a>
                </div>
            </div>

            <?php endwhile; endif;?>
        </div>

    </section>

</section>
<!-- sister properties section end -->







    


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


