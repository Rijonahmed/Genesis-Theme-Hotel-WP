<?php

// Template Name:Home
get_header();
?>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


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



<section style="background-image: url('https://i.ibb.co/1dQyTvy/room-bg.jpg'); background-repeat: no-repeat; background-size: cover;">


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

        <div id="grand-hotel-bg-style" class="col-xl-4"
           >
            <img src="<?= $image['url']; ?>" alt="">
            <div class="grand-hotel-contain">
                <p><?php echo $title?></p>
                <h3><?php echo $heading; ?></h3>
                <p><i><?php echo $description ?></i></p>

            </div>
        </div>
        <?php endif; ?>
        <div class="col-xl-8">
            <div class="row">
                <?php
        query_posts('post_type=grand-hotel&post_status=publish&post_per_page=2&order=ASC&paged='.get_query_var('post'));
        if(have_posts()) :
            while(have_posts()) :
                the_post();
                        ?>

                <div id="grand-hotel-details" class="col-xl-6">
                   <div>
                   <img src="<?php echo get_the_post_thumbnail_url(); ?>"  alt="...">
                    <div class="d-flex justify-content-between align-items-center border-4 border-bottom">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="fw-bold fs-2">&gt;</p>
                    </div>
                   </div>
                </div>

                <?php endwhile; endif; ?>

            </div>
        </div>
    </div>

    </section>
<!-- Grand Hotel section end -->


<!-- our room section start -->

    <section id="our-room-section" class="my-5">
    <div class="text-center mb-5 our-room-contain">
        <p>Comfortable stay </p>
        <h2>OUR ROOMS</h2>
        <i>Style & Comfort</i>

    </div>
    <div class="row container-fluid">

        <div class="col-lg-10">
            <div class="row our-room-section-cards card-group border-0">
                <?php
        query_posts('post_type=rooms-types&post_status=publish&post_per_page=2&order=ASC&paged='.get_query_var('post'));
        if(have_posts()) :
            while(have_posts()) :
                the_post();
                    ?>
                <div class="border-0 col-lg-4 our-room-section-card">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="our-room-img" alt="...">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="fw-bold fs-2"><i class="fa-solid fa-chevron-right"></i></p>


                    </div>
                </div>

                <?php endwhile; endif; ?>

            </div>
        </div>
        <div class="col-lg-2 d-flex align-items-center justify-content-center">
            <div class="view-all-button"><a href="">&gt; <br> View <br> all</a></div>

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
    <div class="d-flex flex-lg-row flex-sm-column gap-4 justify-content-center my-5">

        <?php
    query_posts('post_type=package&post_status=publish&post_per_page=3&order=ASC&paged='.get_query_var       ('post'));
    if(have_posts()) :
        while(have_posts()) :
            the_post();


            $package_block = rwmb_meta( 'package_block' );
            $icons = $package_block[ 'icon' ] ?? 0;
            $icon = RWMB_Image_Field::file_info( $icons, [ 'size' => 'thumbnail' ] );

            $button = $package_block[ 'button' ] ?? '';
            ?>


        <div id="package-card" class="card" style="width: 30rem;">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="m-2" id="package-card-img" alt="...">

            <img class="w-25 package-card-img-smail" src="<?= $icon['url']; ?>" alt="Shape-10">
            <div class="card-body text-center ">
                <h5 class="card-title"><?php the_title();?></h5>
                <p class="card-text"><?php the_content(); ?></p>
                <p> <a href="<?php the_permalink();?>" class=" hotel-grediant-button "><?php echo $button?></a></p>
            </div>
        </div>

        <?php 
  endwhile; endif;
  ?>
    </div>
</section>
<!-- package section end -->



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
                        <a href="#" class="btn btn-outline-secondary"><?php echo $sister_propertise_button ?></a>
                    </div>
                </div>

                <?php endwhile; endif;?>
            </div>

        </section>

    </section>
    <!-- sister properties section end -->















    <!-- Packages Start -->
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
    <!-- Packages End -->




    <?php
get_footer();