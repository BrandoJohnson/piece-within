<?php
    /* Template Name: Homepage */
?>

<?php get_header(); ?>

    <!-- PORTFOLIO AREA -->
    <section>
        <hr class="no-margin"/>

        <div class="middle-container section-content">
            <div class="container">
                <?php if (have_posts()) : while (have_posts()) :  the_post();?>
                    <div class="col-md-6"><?php the_field('left_content') ?></div>
                <div class="col-md-6"><?php the_content(); ?></div>
                <?php endwhile; endif; ?>

                <?php
                    $args = array(
                      'post_per_page' => 6
                    );

                    $portfolio_items = new WP_Query($args);

                    if ($portfolio_items->have_posts()) : ?>
                <ul class="row portfolio-entries">
                    <?php while ($portfolio_items->have_posts()) : $portfolio_items->the_post(); ?>
                    <li class="col-xs-4 box portfolio-entry">
                        <div class="hover-state align-right">
                            <p><?php the_title(); ?></p>
                            <em>Click to See Project</em>
                        </div> <!-- end hover state -->

                        <?php if (has_post_thumbnail()) : ?>
                            <figure>
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            </figure>
                        <?php endif; ?>
                    </li>
                   <?php endwhile; ?>
                </ul>
                <?php endif; ?>
                <div class="cta align-center">
                    <a href="portfolio.html" class="btn btn-primary">See My Full Portfolio</a>
                </div> <!-- end cta -->
            </div> <!-- end container -->
        </div> <!-- end middle container -->
    </section>

<?php get_footer(); ?>