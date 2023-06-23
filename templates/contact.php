<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<?php
// Template Name: Contact Page

get_header();
?>

<!-- contact page header start -->
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

<!-- contanct form -->
<section id="contact-form-map">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <form id="contact" action="" method="post">
                    <h3>Contact Form</h3>
                    <fieldset>
                    <input placeholder="Your name" type="text" tabindex="1" required autofocus>
                    </fieldset>
                    <fieldset>
                    <input placeholder="Your Email Address" type="email" tabindex="2" required>
                    </fieldset>
                    <fieldset>
                    <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
                    </fieldset>
                    <fieldset>
                    <input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
                    </fieldset>
                    <fieldset>
                    <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
                    </fieldset>
                    <fieldset>
                    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
                    </fieldset>
                </form>
            </div>
            <div class="col-md-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233668.4306651636!2d90.25446892415732!3d23.780548980805726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1687500740545!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();