<?php

    get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main wrapp">
     <!-- <h1><?php //echo single_post_title(); ?></h1> -->
    <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <div <?php post_class('post-container') ?>>
                    <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    } 
                    ?>
                    <div class="post-img"><?php the_header_image_tag() ?></div>
                    <h2 class="post-title"><?php the_title() ?></h2>
                    <div class="post-content">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php echo get_permalink( get_the_ID() ); ?>"><button class="read-more">Prečítať článok</button></a>
                </div>

            <?php endwhile; ?>
        <?php //the_posts_navigation(); ?>
        <?php the_posts_pagination( array(
                'mid_size' => 2,
                'prev_text' => __( '&lt', 'textdomain' ),
                'next_text' => __( '&gt', 'textdomain' ),
            ) ); ?>
    <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();