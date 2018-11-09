<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vesna
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vesna' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding wrapp">
			<div class="site-header-logo">
				<?php the_custom_logo();?>
			</div>
			<div class="site-header-primary-nav">
				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'header-menu',
						'menu_id'        => 'primary-menu',
						'menu_class' => 'menu-items',
					) );
					?>
					<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'vesna' ); ?></button> -->
					<button class="hamburger hamburger--spring menu-toggle" type="button">
						<span class="hamburger-box">
						<span class="hamburger-inner"></span>
						</span>
					</button>
				</nav><!-- #site-navigation -->
			</div>
		</div><!-- .site-branding -->
		
	</header><!-- #masthead -->
	

	<div id="content" class="site-content">
