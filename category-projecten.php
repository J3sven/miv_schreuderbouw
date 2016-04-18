<?php get_header(); ?>
<div class="container miv_post">
    <div class="row">
        <div class="col-md-12">
                                        <header class="entry-header miv_pageheader">

                    <h1>

                        <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', '_s' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"> Projecten

                        </a>

                    </h1>

                </header>
                            <div class="miv_row row">
                <div class="miv_column miv_spacer2 col-md-12"></div>
            </div>
<?php
// Prepare a loop through pages.
$args = array(
    'cat' => 3,
);
$miv_query = null;
$miv_query = new WP_Query( $args );

if ( $miv_query->have_posts() ) {

$c = 0;
    while ( $miv_query->have_posts( )) : $miv_query->the_post(); // Just a normal loop, but with own query.


    if($c % 2 == 0){
echo '<div class="row">';
}
    echo '<div class="col-md-2">';

    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' ); 

if ($image) : ?>

    <img height="100px" src="<?php echo $image[0]; ?>" alt="" />

<?php endif; 

echo "</div>";
    echo '<div class="miv_item entry-content col-md-4">
    <h2>';
    echo the_title();
    echo '</h2>';
    the_excerpt();
    echo '<div class="miv_button"><a href="'; echo the_permalink();echo '">Lees meer</a></div>';
    echo '</div>';


if($c % 2 != 0){
echo "</div>";
} 
$c++;
endwhile;

}
?>
                </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>