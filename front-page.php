
<?php

// Template Name:Home
get_header();
?>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Main Header Start
<section id="hotel_main_header_block">
    logo
    <div class="header_logo">
        <img src="./img-2/logo-1.png" alt="">
    </div>
    menu
    <nav class="header_nav_manu">
        <ul id="nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Accommodations</a>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Home</a></li>
                </ul>
            </li>
            <li><a href="#">Amenities</a></li>
            <li><a href="#">River House</a></li>
            <li><a href="#">Specials</a></li>
            <li><a href="#">Gift Certificate</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </nav>
    widgets
    <div class="header_widgets">
        <p>p: +8801402333467</p>
        <div class="icons">
            <i class="fa fa-brands fa-facebook"></i>
            <i class="fa fa-brands fa-instagram"></i>
            <i class="fa fa-brands fa-twitter"></i>

        </div>
        <a href="#">Book Now</a>
    </div>
</section>
Main Header End -->

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

//$bg_url = $image['url'] ?? '';
    
    //var_dump( $grand_hotel );
   


    ?>
    <h1><?php echo $title; ?></h1>
    
    <div class="row m-0">
    
        <div id="grand-hotel-bg-style" class="col-lg-4"
            style="background-image: url('<?= $image['url']; ?>'); background-repeat: no-repeat; background-size: cover;">

            <div class="grand-hotel-contain">
                <p><?php echo $title?></p>
                <h3><?php echo $heading; ?></h3>
                <i><?php echo $description ?></i>
            </div>

        </div>
        <?php endif; ?>


        <div class="my-4 multiple-items col-lg-8">
            <div class="border-0 me-2">
                <img src="https://thegrandhotel.com/wp-content/uploads/2023/03/resort-img-3.jpg.webp"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex justify-content-between border-bottom border-4">
                    <h5 class="card-title">Card title</h5>
                    <p class="fw-bold fs-2">&gt;</p>
                </div>
            </div>

            <div class="border-0">
                <img src="https://thegrandhotel.com/wp-content/uploads/2023/03/resort-img-3.jpg.webp"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex justify-content-between border-bottom border-4">
                    <h5 class="card-title">Card title</h5>
                    <p class="fw-bold fs-2">&gt;</p>
                </div>
            </div>

            <div class="border-0">
                <img class="w-100 h-100"
                    src="https://marinerresort.com/wp-content/uploads/M-Exterior_104-Copy-1536x814.jpg.webp"
                    class="card-img-top" alt="...">
                <div class="card-body d-flex justify-content-between border-bottom border-4">
                    <h5 class="card-title">Card title</h5>
                    <p class="fw-bold fs-2">&gt;</p>
                </div>
            </div>

        </div>




    </div>
</section>

<!-- Grand Hotel section end -->

<!-- our room section start -->
<section id="our-room-section" class="my-5">
    <div class="text-center">
        <p>Comfortable stay </p>
        <h2>OUR ROOMS</h2>
        <i>Style & Comfort</i>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">1</div>
            <div class="col-lg-3">2</div>
            <div class="col-lg-3">3</div>
            <div class="col-lg-3">4</div>
        </div>


    </div>
</section>


<!-- our room section end -->


<!-- package section start -->
<section class="py-3 "
    style="background-image: url('https://thegrandhotel.com/wp-content/themes/themariner-pro/assets/img/pkg-bg.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="d-flex gap-4 justify-content-center my-5">

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
<section
    style="background-image: url('https://i.ibb.co/VLq8BLt/instagram-bg.png'); background-repeat: no-repeat; background-size: cover;">

    <section id="gallery_block">
        <!-- gallery content block start-->
        <div class="gallery_content">
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
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery content block end -->
        <!-- gallery image block start -->
        <section id="gallery_images">
            <div class="container">
                <div class="row">
                    <?php
          query_posts('post_type=gallery&post_status=publish&post_per_page=4&order=ASC&paged='.get_query_var('post'));
            if(have_posts()) :
              while(have_posts()) :
                the_post();
        ?>
                    <div class="col-md-3">
                        <a href="#">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>
                    <?php endwhile; endif; ?>
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
                    <?php
          query_posts('post_type=event&post_status=publish&post_per_page=4&order=ASC&paged='.get_query_var('post'));
            if(have_posts()) :
              while(have_posts()) :
                the_post();
        ?>
                    <div class="col-md-6">
                        <a href="#">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>
                    <?php endwhile;endif; ?>
                </div>
            </div>
        </section>
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

    <section class="py-5"
        style="background-image: url('https://thegrandhotel.com/wp-content/themes/themariner-pro/assets/img/resort-bg.png'); background-repeat: no-repeat; background-size: cover;">
        <div class="my-5">
            <?php
            query_posts('post_type=page&post_status=publish&post_per_page=-1&order=ASC&paged='.get_query_var('post'));
            if(have_posts()):
              the_post(); 
              
            
                $sister = rwmb_meta( 'sister-propertise-section' );
                $title = $sister[ 'title' ] ?? '';
                $heading = $sister[ 'heading' ] ?? '';
                $description = $sister[ 'description' ] ?? '';

?>


            <p class="text-center"><?php echo $title ?></p>
            <h1 class="text-center"><?php echo $heading ?></h1>
            <h1 class="text-center"><?php echo $description ?></h1>
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

            <?php 
  endwhile; endif;
  ?>
        </div>

    </section>
    <!-- sister properties section end -->




    <?php
get_footer();