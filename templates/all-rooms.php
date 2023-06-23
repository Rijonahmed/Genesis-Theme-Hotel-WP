<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<?php
// Template Name: All-Page

get_header();
?>

<!-- Accommodation page header start -->
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


<?php
get_footer();