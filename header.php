<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package USA Rugby College Sevens
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="sidebar-wrapper" class="site-header" role="banner">
		<div class="logo">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Logo</a></h1>
		</div>

		<nav id="site-navigation" class="sidebar-nav" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'usa-rugby-college-sevens' ); ?></h1>
			  <ul class="sidebar-nav">
		          <li><a href="#">Dashboard</a></li>
		          <li><a href="#">Shortcuts</a></li>
		          <li><a href="#">Overview</a></li>
		          <li><a href="#">Events</a></li>
		          <li><a href="#">About</a></li>
		          <li><a href="#">Services</a></li>
		          <li><a href="#">Contact</a></li>
        	</ul>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
