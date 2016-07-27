<?php
/**
 *  Template Name: Contact Template
 */
?>


<?php
    get_header();
    if( have_posts() ): while ( have_posts() ) : the_post();
        $map = get_post_meta($post->ID, 'map', true);
?>
<div class="page"><div class="main-left-col">
        <h1>
            <?php the_title(); ?>
        </h1>
        <div class="content">
            <?php the_content(); ?>
        </div>

    </div><div class="main-right-col">


    <?php
        if($map) {
            echo $map;
        } ?>

</div>

    <?php endwhile;endif; ?>
</div>
<!-- end of post -->

<?php include('includes/related-posts.php'); ?>

<?php get_footer(); ?>
