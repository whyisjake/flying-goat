<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package flying-goat
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="row">
			<div class="span8 offset4">
				<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Flying <span>Goat</span> Coffee</a></h1>
				</div>	
			</div>
			<div class="span3 offset1">
				<form action="">
					<input type="search" class="input-small search" name="s" id="s" placeholder="Search">
				</form>
			</div>
		</div>
		<nav id="site-navigation" class="navigation-main" role="navigation">
		
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav nav-tabs' ) ); ?>
		
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="main" class="site-main">
