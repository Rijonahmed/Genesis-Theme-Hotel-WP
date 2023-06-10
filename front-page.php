<?php
// Template Name:Home
get_header();
?>
<!-- Before Header Start-->
<section id="hotel_before_header_block">
  <div class="container">
    <div class="row">
      <div class="col-md-6 before_header_widget_left">
        <p>
          The Vacation Is Yours
        </p>
      </div>
      <div class="col-md-6 before_header_widget_right">
        <a href="#">sister property</a>
        <a href="#">sister property</a>
        <a href="#">sister property</a>
        <a href="#">sister property</a>
      </div>
    </div>
  </div>
</section>
<!-- Before Header End-->


<!-- Main Header Start-->
<section id="hotel_main_header_block">
  <!-- logo -->
  <div class="header_logo">
    <img src="./img-2/logo-1.png" alt="">
  </div>
  <!-- menu -->
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
  <!-- widgets -->
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
<!-- Main Header End -->

<!-- slider area start -->
<section>
<div id="slider-section"  class="single-item">
<?php
    query_posts('post_type=slide&post_status=publish&post_per_page=3&order=ASC&paged='.get_query_var       ('post'));
    if(have_posts()) :
        while(have_posts()) :
            the_post();
    ?>

  <div class="single-slider">
      <div class="slider-content">
          <h4><?php the_title();?></h4>
          <h6><?php the_content(); ?></h6>
          <a href="">read more</a>
      </div>
     <div class="silder-img"><?php the_post_thumbnail(); ?></div>
      
  </div>

  <?php 
  endwhile; endif;
  ?>

</div>

</section>
<!-- slider area end -->


<!-- package section start -->
<section  class="py-3 " style="background-image: url('https://thegrandhotel.com/wp-content/themes/themariner-pro/assets/img/pkg-bg.jpg'); background-repeat: no-repeat; background-size: cover;">
<div class="d-flex gap-4 justify-content-center my-5" >

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
    <h5 class="card-title text-primary"><?php the_title();?></h5>
    <p class="card-text"><?php the_content(); ?></p>
    <a href="<?php the_permalink();?>" class="btn btn-primary"><?php echo $button?></a>
  </div>
</div>

<?php 
  endwhile; endif;
  ?>



<!-- <div class="card" style="width: 30rem;">
  <img src="https://thegrandhotel.com/wp-content/uploads/GH-Amenities-Photoshopped_101-scaled.jpg.webp" class="m-2" id="package-card-img" alt="...">
  <img class="w-25 package-card-img-smail" src="https://i.ibb.co/K06pK8X/Shape-11.png" alt="Shape-11">
 
  <div class="card-body text-center">
    <h5 class="card-title text-primary">ROMANCE PACKAGE</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deserunt nesciunt voluptates asperiores tempora dignissimos exercitationem! Hic in asperiores quasi sunt.</p>
    <a href="#" class="btn btn-primary">Book Now</a>
  </div>
</div> -->
</div>
</section>
<!-- package section end -->
<section class="container row mt-5">
    <div class="col-md-2"><h1>OOB Events</h1></div>
    <div class="col-md-8"><h6 class="text-center">You can find information about events at Ogunquit Beach by visiting the town's website or the website for the local chamber of commerce.</h6></div>
    <div class="col-md-2"><a href="#" class="btn btn-outline-secondary">Explore More</a></div>

</section>

<!-- sister properties section start -->

<section class="py-5" style="background-image: url('https://thegrandhotel.com/wp-content/themes/themariner-pro/assets/img/resort-bg.png'); background-repeat: no-repeat; background-size: cover;">
<div class="my-5">
<?php
            query_posts('post_type=page&post_status=publish&post_per_page=-1&order=ASC&paged='.get_query_var('post'));
            if(have_posts()):
              the_post(); 
              
            
$sister = rwmb_meta( 'sister' );
$title = $sister[ 'title' ] ?? '';
$heading = $sister[ 'heading' ] ?? '';
 //echo var_dump($sister);
?>
            

<p class="text-center"><?php echo $title ?> fgh</p>
<h1 class="text-center"><?php echo $heading ?> fdhf</h1>
<?php  endif; ?>
</div>

<div class="card-group gap-3 container">

<div id="sister-card" class="card border border-2 shadow" style="width: 23rem;">
  <img src="https://thegrandhotel.com/wp-content/uploads/2023/03/resort-img-3.jpg.webp" class=" m-4" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title text-primary">ROMANCE PACKAGE</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-outline-secondary">Explore More</a>
  </div>
</div>
<div class="card border border-2 shadow" style="width: 23rem;">
  <img src="https://thegrandhotel.com/wp-content/uploads/2023/03/resort-img-3.jpg.webp" class=" m-4" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title text-primary">ROMANCE PACKAGE</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-outline-secondary">Explore More</a>
  </div>
</div>
<div class="card border border-2 shadow" style="width: 23rem;">
  <img src="https://thegrandhotel.com/wp-content/uploads/2023/03/resort-img-3.jpg.webp" class=" m-4" alt="...">
  <div class="card-body text-center m-4">
    <h5 class="card-title text-primary">ROMANCE PACKAGE</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-outline-secondary">Explore More</a>
  </div>
</div>
</div>

</section>
<!-- sister properties section end -->




<?php
get_footer();