<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<?php

// Template Name:Home
get_header();
?>



<!-- slider area start -->
<section id="hero_slider_area">
    <div class="hero_slider">
        <?php
            query_posts('post_type=slide&post_status=publish&post_per_page=-1&order=ASC&paged='.get_query_var('post'));
            if(have_posts()) :
                while(have_posts()) :
                    the_post();
        ?>
        <div class="element">
            <div class="hero_single_slider">
                <?php the_post_thumbnail('hero-slider');?>
                <div class="slider_details">
                    <h2>
                        <?php the_title(); ?>
                    </h2>
                    <p>
                        <?php echo  the_content(); ?>
                    </p>
                </div>
            </div>
        </div>

        <?php 
            endwhile ; endif;
        ?>
    </div>
</section>
<!-- slider area end -->



<section
    style="background-image: url('https://i.ibb.co/1dQyTvy/room-bg.jpg'); background-repeat: no-repeat; background-size: cover;">


    <!-- Grand Hotel section start -->
    <section>
        <?php
            query_posts('post_type=page&post_status=publish&post_per_page=-1&order=ASC&paged='.get_query_var('post'));
            if(have_posts()):
                the_post();

        $grand_hotel = rwmb_meta( 'grand_hotel' );
        $heading = $grand_hotel[ 'heading' ] ?? '';
        $title = $grand_hotel[ 'title' ] ?? '';
        $description = $grand_hotel[ 'description' ] ?? '';
        $image_id = $grand_hotel[ 'grand_hotel_bg' ] ?? 0;
        $image = RWMB_Image_Field::file_info( $image_id, [ 'size' => 'full' ] );
        //grand_hotel_details
        $grand_hotel_details = $grand_hotel[ 'grand_hotel_details' ] ?? '';
                    ?>
        <div class="row m-0">

            <div id="grand-hotel-bg-style" class="col-xl-4">
                <img src="<?= $image['url']; ?>" alt="">
                <div class="grand-hotel-contain">
                    <p><?php echo $title?></p>
                    <h3><?php echo $heading; ?></h3>
                  
                    <p><i><?php echo $description ?></i></p>

                </div>
            </div>
            <?php endif; ?>
            <div class="col-xl-8">
                <div class="row multiple-items">
                    <?php
        query_posts('post_type=grand-hotel&post_status=publish&post_per_page=2&order=ASC&paged='.get_query_var('post'));
        if(have_posts()) :
            while(have_posts()) :
                the_post();
                        ?>

                    <div id="grand-hotel-details" class="col-xl-6 me-3 py-5">
                       
                       <div>
                     
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="...">
                            <a href="<?php the_permalink();?>">
                            <div class="d-flex justify-content-between align-items-center border-4 border-bottom py-2">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <i class="fa fa-solid fa-chevron-right"></i>
                            </div>
                            </a>
                            
                        </div>
                      
                    </div>
                   

                    <?php endwhile; endif; ?>

                </div>
            </div>
        </div>

    </section>
    <!-- Grand Hotel section end -->


    <!-- our room section start -->

    <section id="our-room-section" class="my-5 container">
        <?php
        query_posts('post_type=page&post_status=publish&post_per_page=-1&order=ASC&paged='.get_query_var('post'));
            if(have_posts()):
                the_post();
                $our_room = rwmb_meta( 'our-room' );
                $title = $our_room[ 'title' ] ?? '';
                $heading = $our_room[ 'heading' ] ?? '';
                $description = $our_room[ 'description' ] ?? '';
                ?>
        <div class="text-center mb-5 our-room-contain">
            <p><?php echo $title; ?></p>
            <h2><?php echo  $heading; ?></h2>
            <i><?php echo $description; ?></i>

        </div>
        <?php endif; ?>
        <div class="row ">

            <div class="col-lg-10">
                <div class="row our-room-section-cards card-group border-0">
                    <?php
        query_posts('post_type=rooms-types&post_status=publish&post_per_page=2&order=ASC&paged='.get_query_var('post'));
        if(have_posts()) :
            while(have_posts()) :
                the_post();
                    ?>
                    <div class="border-0 col-lg-4 our-room-section-card">
                       <a href="<?php the_permalink( ) ?>">
                       <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="our-room-img" alt="..."></a>
                        <div class="card-body pt-2 d-flex justify-content-between align-items-center">
                            <a href="<?php the_permalink( ) ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
                         <a href="<?php the_permalink( ) ?>"> <i class="fa fa-solid fa-chevron-right"></i></a>
                            
                    


                        </div>
                    </div>

                    <?php endwhile; endif; ?>

                </div>
            </div>
            <div class="col-lg-2 d-flex align-items-center justify-content-center">
                <div class="view-all-button"><a href="http://rijon.local/accommodations/"> <i class="fa fa-solid fa-chevron-right"></i> <br> View <br> all</a></div>

            </div>
        </div>

    </section>
    <!-- our room section end -->

</section>





<!-- package section start -->


<?php
 query_posts('post_type=page&post_status=publish&post_per_page=-1&order=ASC&paged='.get_query_var('post'));
            if(have_posts()):
                the_post();

 $package_bg = rwmb_meta( 'package-bg', [ 'size' => 'full' ] ); 

?>
<section class="py-3 "
    style="background-image: url('<?= $package_bg['url']; ?>'); background-repeat: no-repeat; background-size: cover;">
    <?php endif; ?>

    <section id="package_block">
    <div class="container">
        <div class="row responsive">


            <?php
        query_posts('post_type=package&post_status=publish&post_per_page=2&order=ASC&paged='.get_query_var('post'));
        if(have_posts()) :
            while(have_posts()) :
                the_post();
                $package_block = rwmb_meta( 'package_block' );
                $icons = $package_block[ 'icon' ] ?? 0;
                $icon = RWMB_Image_Field::file_info( $icons, [ 'size' => 'thumbnail' ] );
    
                $button = $package_block[ 'button' ] ?? '';
                            ?>
            <div id="package-card-slide" class="col-md-6 col-sm-1">
                <div class="content">
                    <div class="icon">
                        <img src="<?php echo $icon['url']; ?>" alt="">
                    </div>
                    <div class="package_thumb_image">
                        <a href="#" class="thumb_img">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        </a>
                    </div>
                    <h2 class="title">
                        <?php the_title(); ?>
                    </h2>
                    <p class="description">
                        <?php the_content(); ?>
                    </p>
                    <a href="#" class="button">
                        <?php echo $button; ?>
                    </a>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>


</section>

    
</section>
<!-- package section end -->



<?php
get_footer();