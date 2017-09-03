<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header class="site-header" role="banner">
		<div class="row">
			<div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle() ?>>
				<div class="title-bar-left">
					<button class="menu-icon" type="button" data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
					<span class="site-mobile-title title-bar-title">
						<div class="large-12 columns logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/logo/0-logo.png" alt="logo"/>
							</a>
						</div>
					</span>
				</div>
			</div>
			<nav class="site-navigation top-bar" role="navigation">
				<div class="top-bar-left">
					<span class="site-mobile-title title-bar-title">
						<div class="large-12 columns logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/logo/0-logo.png" alt="logo"/>
							</a>
						</div>
					</span>
				</div>
				<div class="top-bar-right">
					<?php foundationpress_top_bar_r(); ?>

					<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
						<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
					<?php endif; ?>
				</div>
			</nav>
		</div>
		<div class="menu-centered">
      <ul class="menu">
        <li><a href="#">MOViNG iMAGE</a></li>
        <li>&#9679;</li>
        <li><a href="#">iNSTALLATiON</a></li>
        <li>&#9679;</li>
        <li><a href="#">PERFORMANCE</a></li>
        <li>&#9679;</li>
        <li><a href="#">STiLL</a></li>
      </ul>
    </div>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
