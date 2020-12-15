<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Vesna
 */

get_header();
?>
	<div class="wrapp site-single-header clear">
		<h1><?php echo single_post_title(); ?></h1>
		<div class="post-left"><p><i class="icon-clock-1"></i><?php echo get_post_meta( $post->ID, '_drossel_time', true ); ?></p></div> <!-- V admine pri pisani clanku sa zada cas trvania -->
        <div class="post-left set"><p><i class="icon-chart-pie-1"></i><?php echo get_post_meta( $post->ID, '_drossel_porcie', true ); ?></p></div><!-- V admine pri pisani clanku sa zada obtiaznost -->
	</div>
	<div id="primary" class="content-area wrapp">
		<main id="main" class="site-main site-single">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// // If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	
	<?php get_sidebar();?>
	</div><!-- #primary -->
<?php
get_footer();
