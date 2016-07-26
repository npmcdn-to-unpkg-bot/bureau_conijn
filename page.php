<?php get_header(); ?>

        <div id="post">
            <?php
				if( have_posts() ): while ( have_posts() ) : the_post(); ?>

            <?php
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
            if($image) { ?>
            <div id="main-image">
                <img src="<?php echo $image[0]; ?>" />
            </div>
            <?php } ?>

            <h1>
                <?php the_title(); ?>
            </h1>
            <div id="content">
                <?php the_content(); ?>
            </div>

            <?php endwhile;endif; ?>
        </div>
        <!-- end of post -->

<?php get_footer(); ?>
