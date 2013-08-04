<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="brand"><?php bloginfo( 'name' ); ?></a>
					<?php $walker = new Bootstrap_Nav_Menu_Walker(); ?>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav', 'walker' => $walker, 'fallback_cb' => '', 'depth' => 2 ) ); ?>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->

	<div id="main" class="site-main container">

		<div class="row">
			<div class="span3">
				<div class="affix-top sidebar-container" data-spy="affix">
					<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

					<?php endif; ?>
				</div>
			</div>
			<div class="span9">
