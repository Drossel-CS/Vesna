<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vesna
 */

?>´

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<!-- <div class="wrapp"> -->
			<div class="site-footer-brands wrapp">
			<div class="heading-center">Spolupracujem</div>
				<?php dynamic_sidebar( 'Brands-1' ) ?>
			</div>
			<div class="instagram-gallery wrapper">
				<div class="heading-center wrapp">Som na Instagrame</div>
				<?php echo do_shortcode( '[insta-gallery id="1"]' ); ?>  <!-- instagram shortcode -->
			</div>
			<div class="site-footer-menus wrapp">
				<?php dynamic_sidebar( 'footer-menu-1' ) ?>
				<?php dynamic_sidebar( 'footer-menu-2' ) ?>
				<?php dynamic_sidebar( 'footer-menu-3' ) ?>
				<?php dynamic_sidebar( 'footer-menu-4' ) ?>
			</div>
			<div class="site-footer-social wrapp">
				<a href="https://www.instagram.com/gustoe_kolaciky/" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
				<a href="https://www.facebook.com/Gustoe.sk/" target="_blank"><i class="icon-facebook-squared"></i></a>
				<i class="icon-youtube"></i>
			</div>
			<div class="site-footer-copy wrapp">
				<p class="copy">&copy<?php echo date(' Y '); bloginfo('name'); ?> | Všetky práva vyhradené | <a href="http://localhost:8888/wordpress/vseobecne-podmienky/">Všeobecné podmienky </a></p>
				<p class="author">Vytvoril <a href="https://www.drossel.sk" target="_blank">Drossel</a></p>
			</div>
		<!-- </div>.site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
