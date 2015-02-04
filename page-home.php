<?php
    /* Template Name: Homepage */
?>

<?php get_header(); ?>

    <!-- PORTFOLIO AREA -->
    <section>
        <hr class="no-margin"/>

        <div class="middle-container2 section-content">
            <div class="row">
            <div class="col-xs-6">
            <div class="box">
                <h4 class="phrase">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="no-margin2"><h1 >Welcome to Piece Within!</h1>
                        <?php the_content(); ?>
                        </div>
                    <?php endwhile; else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

           <?php endif; ?>
                </h4>
            </div>
            </div>
            <div class="col-xs-6">
                <ul class="slides">
                    <input type="radio" name="radio-btn" id="img-1" checked />
                    <li class="slide-container">
                        <div class="slide">
                            <img src="<?php print IMAGES; ?>/slider/rig.jpg" />
                        </div>
                        <div class="nav">
                            <label for="img-6" class="prev">&#x2039;</label>
                            <label for="img-2" class="next">&#x203a;</label>
                        </div>
                    </li>

                    <input type="radio" name="radio-btn" id="img-2" />
                    <li class="slide-container">
                        <div class="slide">
                            <img src="<?php print IMAGES; ?>/slider/rig2.jpg" />
                        </div>
                        <div class="nav">
                            <label for="img-1" class="prev">&#x2039;</label>
                            <label for="img-3" class="next">&#x203a;</label>
                        </div>
                    </li>

                    <input type="radio" name="radio-btn" id="img-3" />
                    <li class="slide-container">
                        <div class="slide">
                            <img src="<?php print IMAGES; ?>/slider/rig3.jpg" />
                        </div>
                        <div class="nav">
                            <label for="img-2" class="prev">&#x2039;</label>
                            <label for="img-4" class="next">&#x203a;</label>
                        </div>
                    </li>

                    <input type="radio" name="radio-btn" id="img-4" />
                    <li class="slide-container">
                        <div class="slide">
                            <img src="http://farm9.staticflickr.com/8061/8237246833_54d8fa37f0_z.jpg" />
                        </div>
                        <div class="nav">
                            <label for="img-3" class="prev">&#x2039;</label>
                            <label for="img-5" class="next">&#x203a;</label>
                        </div>
                    </li>

                    <input type="radio" name="radio-btn" id="img-5" />
                    <li class="slide-container">
                        <div class="slide">
                            <img src="http://farm9.staticflickr.com/8055/8098750623_66292a35c0_z.jpg" />
                        </div>
                        <div class="nav">
                            <label for="img-4" class="prev">&#x2039;</label>
                            <label for="img-6" class="next">&#x203a;</label>
                        </div>
                    </li>

                    <input type="radio" name="radio-btn" id="img-6" />
                    <li class="slide-container">
                        <div class="slide">
                            <img src="http://farm9.staticflickr.com/8195/8098750703_797e102da2_z.jpg" />
                        </div>
                        <div class="nav">
                            <label for="img-5" class="prev">&#x2039;</label>
                            <label for="img-1" class="next">&#x203a;</label>
                        </div>
                    </li>

                    <li class="nav-dots">
                        <label for="img-1" class="nav-dot" id="img-dot-1"></label>
                        <label for="img-2" class="nav-dot" id="img-dot-2"></label>
                        <label for="img-3" class="nav-dot" id="img-dot-3"></label>
                        <label for="img-4" class="nav-dot" id="img-dot-4"></label>
                        <label for="img-5" class="nav-dot" id="img-dot-5"></label>
                        <label for="img-6" class="nav-dot" id="img-dot-6"></label>
                    </li>
                </ul>
            </div>
</div>
            <div class="container boxxy row">
                <div class="cta align-center box col-xs-12">
                    <a href="portfolio" class="btn btn-primary">See Full Portfolio</a>
                    <a href="shop" class="btn btn-primary">View Our Store</a>
                </div> <!-- end cta -->
            </div> <!-- end container -->
        </div> <!-- end middle container -->
    </section>

<?php get_footer(); ?>