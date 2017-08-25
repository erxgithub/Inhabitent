<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link type="text/css" rel="stylesheet" href="<?php echo get_bloginfo('template_url').'/css/flex.css'; ?>" />
		<link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding" style="display: none;">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<!-- <div style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(<?php //echo get_bloginfo('url').'/wp-content/uploads/2017/08/home-hero.jpg'; ?>) no-repeat center top; background-size: cover;"> -->
				<div <?php echo get_banner(); ?> >
					<!-- <div> -->
						<div class="flex flex-justify-between">
							<div style="padding: 1rem 0 0 6rem; width: 35%;">
								<a href="<?php echo get_home_url(); ?>">
								<?php echo get_banner_tent(); ?>
								<!-- <img src="<?php //echo get_bloginfo('template_url').'/assets/images/inhabitent-logo-tent-white.svg'; ?>" style="width: 4rem;"/> -->
								</a>
							</div>
							<div class="flex flex-column flex-justify-center flex-items-center" style="width: 30%;">
								<?php echo get_banner_logo(); ?>
							</div>
							<div class="flex" style="padding: 1rem 0 0 0; font-size: 1.25rem; width: 35%;">
								<!-- <a href="<?php //echo get_home_url(); ?>">"> -->
								<nav id="site-navigation" class="main-navigation" role="navigation">
									<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
									<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
								</nav><!-- #site-navigation -->
								<div class="search-toggle" style="padding: 0 6rem 0 0;">
									<?php echo get_search_icon(); ?>
								</div>
							</div>
						</div>
						<!-- <div class="flex flex-justify-center" style="padding: 10rem 0 15rem 0;"> -->
						<!-- <div class="flex flex-justify-center"> -->
							<!-- <div class="flex flex-column"> -->
								<!-- <?php //echo get_banner_logo(); ?> -->
								<!-- <img src="<?php //echo get_bloginfo('template_url').'/assets/images/inhabitent-logo-full.svg'; ?>" style="width: 22rem;" /> -->
							<!-- </div>  -->
						<!-- </div> -->
					<!-- </div> -->
				</div>

			</header><!-- #masthead -->

			<div id="content" class="site-content">
