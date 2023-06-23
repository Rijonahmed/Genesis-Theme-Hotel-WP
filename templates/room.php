<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<?php
//Template Name:room
get_header();
?>

<section id="page_header_area">
    <div class="page_header">
        <div class="image">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        </div>
        <h2 class="page_name">
            <?php echo the_title(); ?>
        </h2>
    </div>
</section>


<div class="container_filter">

<div id="p-filters" class="filters filter-button-group">
  <h1>
SELECT ROOM TYPES</h1>
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
            $images = rwmb_meta( 'rooms_gallerys', [ 'size' => 'thumbnail' ] );
            ?>

            <div id="p-single-content" class="single-content <?php echo  $termsSLug; ?>  grid-item">

            <ul>
	<?php foreach ( $images as $image ) : ?>
		<li><img class="w-25" src="<?= $image['url']; ?>"></li>
	<?php endforeach ?>
</ul>
              <div class="d-flex  justify-content-around ">
              <img class="p2" src="<?php the_post_thumbnail_url(); ?>">
              <h1><?php the_title();?></h1>


              </div>
            </div>

      <?php  }
        wp_reset_postdata();

        ?>




  </div>
</div>




<?php
get_footer();