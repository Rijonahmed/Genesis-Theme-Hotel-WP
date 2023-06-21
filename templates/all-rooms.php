<?php
//Template Name:all rooms
get_header();
?>

<section>
    <div class="h-100" style="background-image: url('https://thegrandhotel.com/wp-content/uploads/GHRm101-Superior-Suite_102-1-1920x480.jpg.webp'); background-repeat: no-repeat; background-size: cover;">
      
      <h1 class="p-5">OUR ROOMS</h1>
     
    </div>
</section>


<div class="container_filter">

<div id="p-filters" class="filters filter-button-group">
          <ul><h4>
            <li class="active" data-filter="*">All</li>

        <?php
          $terms = get_terms('rooms_category');
          
          foreach ($terms as  $term) { ?>
            <li data-filter=".<?php  echo $term->slug; ?>"><?php echo $term->name; ?></li>
      <?php  }

        ?>
          
          </h4></ul>
        </div>

        <div id="portfolio-content" class="content grid">
      <?php
          $args = array(
            'post_type' => 'rooms-types',
            'posts_per_page' => 15
          );

          $query = new WP_Query($args);

          while ($query->have_posts()) {
            $query->the_post();

            $termsArray = get_the_terms($post->ID, 'rooms_category');
           
            

            $termsSLug = "";
            foreach ($termsArray as $term) {
              $termsSLug .= $term->slug . ' ';
            }

            ?>

            <div id="p-single-content" class="single-content <?php echo  $termsSLug; ?>  grid-item">
              <img class="p2" src="<?php the_post_thumbnail_url(); ?>">
            </div>

      <?php  }
        wp_reset_postdata();

        ?>




  </div>
</div>




<?php
get_footer();