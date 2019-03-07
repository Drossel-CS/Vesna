<?php

    get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <div <?php post_class() ?>>
            <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } 
            ?>
            <h1><?php the_title() ?></h1>
            <a class="read-more" href="<?php echo get_permalink( get_the_ID() ); ?>">Prečítať</a>
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