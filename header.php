<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hive_support
 */
if (is_home() or is_front_page()) {
	$menu_class = 'nav-absolute white_nav';
	$menu_link = 'color_white';
	$menu_button_link = 'btn_bg_white';
} else {
	$menu_link = 'color_1';
	$menu_button_link = 'btn_bg_1';
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="header-style-01">
		<!-- Menu area Starts -->
		<nav class="navbar navbar-area <?php echo $menu_class; ?> navbar-padding navbar-expand-lg">
			<div class="container custom-container-one nav-container">
				<div class="logo-wrapper">
					<?php
					if (is_front_page() or is_home()) {
						the_custom_logo();
					?>
						<h1 class="site-title">
							<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
						</h1>
					<?php
					} else { ?>
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri() ?>/assets/img/logo_2.png" alt="provideImg">
						</a> 
					<?php } ?>
				</div>
				<div class="responsive-mobile-menu d-lg-none">
					<a href="javascript:void(0)" class="click-nav-right-icon">
						<i class="fa-solid fa-ellipsis-vertical"></i>
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#hive_support_menu">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>
				<?php get_template_part('template-parts/header/site-header'); ?>
				<div class="navbar-right-content show-nav-content">
					<div class="single-right-content">
						<div class="navbar-right-flex">
							<div class="btn-wrapper">
								<a href="javascript:void(0)" class="hive_btn btn_underline <?php echo $menu_link; ?>">Try Free Version</a>
							</div>
							<div class="btn-wrapper">
								<a href="javascript:void(0)" class="hive_btn <?php echo $menu_button_link; ?>">Get Pro</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<!-- Menu area end -->
	</header>
	<div id="page" class="site">