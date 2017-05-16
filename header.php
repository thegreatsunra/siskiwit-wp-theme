<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package siskiwit
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>


<body <?php body_class(); ?><?php if ( get_bloginfo('name') == 'Photolog' ) : ?> id="photolog"<?php endif; ?>
>
<div id="whopper">
	<div id="w2">
		<div id="w3">
<div id="page" class="site">
	<a class="hide skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'siskiwit' ); ?></a>

<?php if ( is_front_page() && is_home() ) : ?>
	<div id="header" class="header-home">
<?php else : ?>
	<div id="header">
<?php endif; ?>
	<div id="h2">
	<header id="masthead" class="site-header" role="banner">
		<div class="logo site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="/" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="hide site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="hide main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'siskiwit' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->
</div><!-- #h2 -->
</div><!-- #header -->

<div id="nav">
	<div id="mainNav">
		<ul>
			<li <?php if ( get_bloginfo('name') == 'Weblog' ) : ?> class="current" <?php endif; ?>><a href="/" title="back to home">Home</a></li>
			<li <?php if ( get_bloginfo('name') == 'Photolog' ) : ?> class="current" <?php endif; ?>><a href="/photolog/" title="pictures of things that are neat">Photolog</a></li>
			<li <?php if ( get_bloginfo('name') == 'Sundries' ) : ?> class="current" <?php endif; ?>><a href="/sundries/" title="random links and asides from elsewhere.">Sundries</a></li>
			<li <?php if ( get_bloginfo('name') == 'Classics' ) : ?> class="current" <?php endif; ?>><a href="/classics/" title="old stuff with esoteric appeal">Classics</a></li>
	</ul>
	</div><!-- end mainNav -->
</div>

	<div id="main">
	<div id="m2">

