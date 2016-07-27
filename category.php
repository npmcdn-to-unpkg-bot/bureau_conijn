<?php get_header(); ?>

<div id="projects-container">

    <?php
        $counter = 0;
            if( have_posts() ): while ( have_posts() ) : the_post();
                $counter++;
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
                $subtitle = get_post_meta($post->ID, 'subtitle', true);
    ?>
                <a href="<?php the_permalink(); ?>" class="wait-for-load bg-loader project-container<?php if($counter % 3 == 0) { echo " portrait";}?>">
                    <div class="project-main-image bg-load-element"
                    <?php

                        if($image) { ?>
                            data-link="<?php echo $image[0]; ?>" style="background-image:url(<?php echo $image[0]; ?>)"
                    <?php } ?>>
                    </div>
                    <div class="project-title">
                        <h2><?php the_title(); ?></h2>
                        <?php
                            if ($subtitle) { ?>
                                <h3><?php echo $subtitle; ?></h3>
                            <?php }
                         ?>
                    </div>
                </a>
    <?php
        endwhile;endif;
    ?>

</div>

<?php get_footer(); ?>
