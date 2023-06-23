<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<?php
// This is how single page look like
get_header();
?>
<!-- single page selection sections -->
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


<!-- singel page content section -->
<section id="single-page-main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>
                    <?php the_title(); ?>
                </h2>
                <div class="image">
                    <div class="row">
                        <div class="col-sm-12 col-md-8 col-lg-8">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                        </div>
                        
                    </div>
                </div>
                <p>
                    <?php the_content(); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
