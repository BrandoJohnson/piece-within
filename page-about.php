<?php
    /* Template Name: About Page */
?>

<?php get_header(); ?>

    <!-- CONTENT AREA -->
    <section>
        <hr class="no-margin"/>

        <div class="middle-container section-content">
            <div class="container box section-content align-center about-page">
                <h2>About Us</h2>

                <p class="narrow-p">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                <p class="narrow-p">Want to get in touch? 242.123.4567 <a href="#contact-info">hello@metta.com</a></p>

                <hr class="alt">

                <h2 class="available">Currently available for freelance projects.</h2>
                <h2>Inquire for Rates</h2>

                <div class="cta">
                    <a href="<?php echo home_url(); ?>/portfolio" class="btn btn-primary">See our work.</a>
                </div> <!-- end cta -->
            </div> <!-- end container -->
        </div> <!-- end middle container -->
    </section>

<?php get_footer(); ?>