<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package info
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js?ver=1.12.4' id='jquery-core-js'></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'info' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<nav id="site-navigation" class="main-navigation">
				<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'info' ); ?></button> -->
				<div class="menu-left">
					<?php wp_nav_menu( 
						array( 
							'theme_location' => 'menu-left', 
						) 
					); ?>
				</div>

				<h1 id="logo" class="hd_logo">
					<?php
						the_custom_logo();
					?>
				</h1>

				<div class="menu-right">
					<?php wp_nav_menu( 
						array( 
							'theme_location' => 'menu-right', 
						) 
					); ?>
				</div>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
