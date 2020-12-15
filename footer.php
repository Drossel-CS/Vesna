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

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		 <div class="instagram-gallery wrapper">
			<div class="heading-center wrapp">Sleduj ma na Instagrame</div>
			<?php echo do_shortcode( '[insta-gallery id="1"]' ); ?>
		</div>
		<div class="site-footer-menus wrapp">
			<?php dynamic_sidebar( 'footer-menu-1' ) ?>
			<?php dynamic_sidebar( 'footer-menu-2' ) ?>
			<?php dynamic_sidebar( 'footer-menu-3' ) ?>
			<?php dynamic_sidebar( 'footer-menu-4' ) ?>
		</div>
		<div class="site-footer-social wrapp">
			<a href="https://www.instagram.com/gustoe_kolaciky/" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
			<a href="https://www.facebook.com/Gustoe.sk/" target="_blank"><i class="icon-facebook"></i></a>
			<a href="https://sk.pinterest.com/gustoe_kolaciky/" target="_blank"><i class="icon-pinterest"></i></a>
			<a href="https://www.youtube.com/channel/UC1IGNfr8My3PrKTUvOYW50Q" target="_blank"><i class="icon-youtube"></i></a>
		</div>
		<div class="site-footer-copy wrapp">
			<p class="copy">Všetky práva vyhradené | <a href="https://www.gustoe.sk/ochrana-sukromia/">Všeobecné podmienky</a> |  Vytvorilo <a href="https://drossel.sk" target="_blank" class="author">Drossel Studio</a></p>
			<p class="copy">Copyright &copy2015 -<?php echo date(' Y '); bloginfo('name'); ?></p>
		</div>
	</footer><!-- #colophon -->
	<div class="motto wrapp">MADE IN SLOVAKIA &hearts;</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
