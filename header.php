<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ctci
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ctci' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<h1><?php bloginfo('name');?></h1>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
			<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="menu-principal" aria-controls="primary-menu" aria-expanded="false"><span class="navbar-toggler-icon"></span></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' 	=> 'menu-principal',
					'menu_id'        	=> 'primary-menu',
					'depth'			 	=> 2,
					'container'		 	=> 'div',
					'container-class'	=> 'collapse navbar-collapse',
					'container_id'		=> 'menu-principal',
					'menu_class'		=> 'navbar-nav mr-auto',
					'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
					'walker'			=> new WP_Bootstrap_Navwalker(),
				)
			);
			?>
		</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->
