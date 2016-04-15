<?php get_header(); ?>
<div class="container miv_post">
    <div class="row">
        <div class="col-md-12">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="row">

                <div class="entry-content col-md-8 homepage">

                    <?php the_content(); ?>

                </div><!-- .entry-content -->

                <?php if ( has_post_thumbnail() ) { ?>

                <div class="col-md-4 img-responsive miv-featured">

                    <?php the_post_thumbnail(); ?>

                </div>


                <?php } ?>

                </div>
                <hr>
            <?php endwhile; else: ?>

                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

            <?php endif; ?>
                </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>