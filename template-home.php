<?php
/**
 *  Template Name: Home Template
 */
?>


<?php
    get_header();
?>
    <div id="home-slide-frame">
    <div class="home-slide-carrier">
        <?php
            $args = array(
                'category_name' => 'projects',
        'posts_per_page' => 6,
        'orderby' => 'rand',
        );
        $q = new WP_Query($args);
        if($q->have_posts()): while ($q->have_posts()) :$q->the_post();
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
        ?>
        <div class="home-slide">
        <a href="<?php the_permalink(); ?>" class="home-slide-project-container">
            <div class="project-main-image"
            <?php
            if($image) {
             ?>
            data-link="<?php echo $image[0]; ?>" style="background-image:url(<?php echo $image[0]; ?>)"
            <?php } ?>>
            </div>
        </a>
    </div>

    <?php
            endwhile;
            endif;
        ?>
    </div>
    </div>

</div>
<!-- end of post -->

<script src="<?php echo get_template_directory_uri(); ?>/js/Slider.js"></script>

<script>
    var $ = jQuery;
    $(window).ready(function(){
        var container = document.getElementById('home-slide-frame');
        window.slider = new Slider(container);
        slider.init();
    });
</script>

<?php get_footer(); ?>
