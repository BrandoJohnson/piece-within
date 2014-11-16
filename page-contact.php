<?php
    /* Template Name: Contact Page */
?>

<?php get_header(); ?>

    <!-- CONTENT AREA -->
    <section>
        <hr class="no-margin"/>

        <div class="middle-container section-content">
            <div class="container box section-content align-left">
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div> <!-- end container -->
        </div> <!-- end middle container -->
    </section>

<?php get_footer(); ?>