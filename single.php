<?php get_header(); ?>
<div class="container miv_post">
    <div class="row">
        <div class="col-md-12">
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