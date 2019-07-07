<?php

    get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main wrapp">

    <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <div <?php post_class('post-container') ?>>
                <?php
                if ( has_post_thumbnail() ) {
                    the_post_thumbnail();
                } 
                ?>
                <h3><?php the_title() ?></h3>
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
get_sidebar();
get_footer();