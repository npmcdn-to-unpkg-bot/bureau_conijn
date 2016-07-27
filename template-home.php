<?php
/**
 *  Template Name: Home Template
 */
?>


<?php
    get_header();
    if( have_posts() ): while ( have_posts() ) : the_post();
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
?>
    <div class="page">

<?php
    if($image) {
?>

        <div class="home-image"><img src="<?php echo $image[0]; ?>" /></div>

<?php } ?>

    </div>

    <?php endwhile;endif; ?>
</div>
<!-- end of post -->

<?php get_footer(); ?>
