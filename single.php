<?php
    get_header();
    if( have_posts() ): while ( have_posts() ) : the_post();
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
?>
<div class="single"><div class="main-left-col">
        <h1>
            <?php the_title(); ?>
        </h1>
        <div class="content">
            <?php the_content(); ?>
        </div>

    </div><div class="main-right-col wait-for-load">


    <?php
        if($image) {
    ?>

        <img src="<?php echo $image[0]; ?>" />

    <?php } ?>

</div>

    <?php endwhile;endif; ?>

    <div class="con-gallery"></div>
</div>
<!-- end of post -->

<?php include('includes/related-posts.php'); ?>

<?php get_footer(); ?>
