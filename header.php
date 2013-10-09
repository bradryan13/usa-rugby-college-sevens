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

<script type="text/javascript" src="//use.typekit.net/yyx5kiy.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="sidebar-wrapper" class="site-header" role="banner">
		<div class="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri() . '/img/usa-rugby-college-sevens-logo.png' ?>"></a>
		</div>
		<nav id="site-navigation" class="sidebar-nav" role="navigation">
			  <ul class="sidebar-nav">
		          <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('sidebar-nav')) : else : ?>
				  <?php endif; ?>
        	</ul>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
