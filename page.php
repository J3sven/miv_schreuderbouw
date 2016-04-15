<?php get_header(); ?>
<div class="container miv_post">
    <div class="row">
        <div class="col-md-12">
                            <header class="entry-header miv_pageheader">

                    <h1>

                        <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', '_s' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?>

                        </a>

                    </h1>

                </header>
                            <div class="entry-content">
                    <?php 
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); 


the_content();


    } // end while
} // end if
?>
                </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>