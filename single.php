<?php get_header(); ?>

    <!-- PORTFOLIO AREA -->
    <section>
        <hr class="no-margin"/>

        <div class="align-center portfolio-header">
            <a href="<?php echo home_url(); ?>" class="btn">&larr; Back to Portfolio</a>
        </div> <!-- end portfolio-header -->

        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

        <div class="middle-container section-content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8">
                        <?php
                            $args = array(
                                'post_type' => 'attachment',
                                'numberposts' => -1,
                                'post_status' => 'any',
                                'post_parent' => $post->ID
                            );

                            $attachments = get_posts($args);
                            if ($attachments) : ?>

                        <ul class="portfolio-image-list">
                            <?php foreach($attachments as $attachment): ?>
                            <li class="box">
                                <figure>
                                    <?php the_attachment_link($attachment->ID, true); ?>
                                    <figcaption><?php echo $attachment->post_title; ?></figcaption>
                                </figure>
                            </li>
                           <?php endforeach; ?>
                         </ul>
                       <?php else : ?>
                       <div class="box section-content align-center">
                           <p>No images found for this post.</p>
                       </div>
                       <?php endif; ?>
                    </div> <!-- end col-xs-8 -->

                    <div class="col-xs-4 box align-center sidebar">
                        <h2><?php the_title(); ?></h2>

                        <?php
                            $portfolio_description = esc_html(get_post_meta($post->ID, 'portfolio_description', true));
                            $portfolio_link = esc_url(get_post_meta($post->ID, 'portfolio_link', true));
                            $portfolio_quote = esc_html(get_post_meta($post->ID, 'portfolio_quote', true));
                            $portfolio_quote_author = esc_html(get_post_meta($post->ID, 'portfolio_quote_author', true));
                        ?>

                        <?php
                        if ($portfolio_description != '') {
                            echo "<p>$portfolio_description</p>";
                        }
                        if ($portfolio_link != '') {
                            echo '<p><a href="'.$portfolio_link.'">'.$portfolio_link.'</a></p>';
                        } ?>

                        <hr class="alt" />

                        <?php if ($portfolio_quote != '') : ?>
                        <p>Text goes here. Text goes here. Text goes here. Text goes here. Text goes here. Text goes here. Text goes here. Text goes here. Text goes here. </p>
                        <p><a href="#">Visit Site &rarr;</a></p>

                        <hr class="alt" />

                        <blockquote>
                            <p><?php echo $portfolio_quote; ?></p>
                            <cite>- <?php echo $portfolio_quote_author; ?> -</cite>
                        </blockquote>

                        <hr class="alt"/>
                        <?php endif; ?>

                        <ul class="inline portfolio-single-nav">
                            <li><?php next_post_link('%link', '&larr; %title'); ?></li>
                            <li><?php previous_post_link('%link', '%title &rarr;'); ?></li>
                        </ul>

                    </div> <!-- end col-xs-4 -->
                </div> <!-- end row -->
            </div> <!-- end container -->
        </div> <!-- end middle container -->
    <?php endwhile; endif; ?>
    </section>



    <!-- Related Portfolio Items-->

    <?php
        $current_categories = get_the_category();
        $first_category = $current_categories[0]->term_id;

        $args = array(
            'post_per_page' => 3,
            'category__in' => array($first_category),
            'post__not_in' => array($post->ID)
        );

        $related_portfolio_items = new WP_Query($args);
        if ($related_portfolio_items->have_posts()) : ?>

    <section>
        <div class="container section-content no-bottom-padding align-center">
            <h3>Related portfolio entries</h3>

            <ul class="row portfolio-entries">
                <?php while ($related_portfolio_items->have_posts()) : $related_portfolio_items->the_post(); ?>
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
        </div> <!-- end container -->
    </section>
          <?php endif; ?>
          <?php
          // Restore original post data
          wp_reset_postdata();
          ?>

<?php get_footer(); ?>