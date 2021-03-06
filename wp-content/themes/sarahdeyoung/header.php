<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sarahdeyoung
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script type="text/javascript" src="//use.typekit.net/bbf1ljq.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="header-bkgrd">
      
</div>

<div id="page" class="hfeed site">
	
    

	<header id="masthead" class="site-header" role="banner">
        
        <div id="header-logo">
        	<a href="http://www.sarahdeyoung.com/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sdy_logo.jpg" /></a>
		</div>
        
        <div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'sarahdeyoung' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'sarahdeyoung' ); ?></a>

			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
