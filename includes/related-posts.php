<?php
    $page_id = get_the_ID();
?>

<h2>Bekijk meer projecten</h2>
<div class="related-projects">
    <?php
        $args = array(
            'category_name' => 'projects',
            'posts_per_page' => 3,
            'orderby' => 'rand',
            'post__not_in' => [$page_id]
        );
        $q = new WP_Query($args);
        if($q->have_posts()): while ($q->have_posts()) :$q->the_post();
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    ?>

    <a href="<?php the_permalink(); ?>" class="project-container">
        <div class="project-main-image"
        <?php
        if($image) {
         ?>
        data-link="<?php echo $image[0]; ?>" style="background-image:url(<?php echo $image[0]; ?>)"
        <?php } ?>>
        </div>
        <div class="project-title">
            <h2><?php the_title(); ?></h2>
            <?php
            if ($subtitle) { ?>
            <h3><?php echo $subtitle; ?></h3>
            <?php } ?>
        </div>
    </a>

    <?php
        endwhile;
        endif;
    ?>
</div>