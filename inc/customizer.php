<?php

/**
 * hive support Theme Customizer
 *
 * @package hive_support
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function hive_support_customize_register($wp_customize)
{
	$wp_customize->get_setting('blogname')->transport         = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport  = 'postMessage';
	$wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

	if (isset($wp_customize->selective_refresh)) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'hive_support_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'hive_support_customize_partial_blogdescription',
			)
		);
	}
}
add_action('customize_register', 'hive_support_customize_register');


/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function hive_support_customize_partial_blogname()
{
	bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function hive_support_customize_partial_blogdescription()
{
	bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function hive_support_customize_preview_js()
{
	wp_enqueue_script('hive-support-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), _S_VERSION, true);
}
add_action('customize_preview_init', 'hive_support_customize_preview_js');

/**
 * Hive Support Customizer Setting
 */

// function add_customizer_section($wp_customize)
// {
// 	// Add a custom panel to the customizer
// 	$wp_customize->add_panel('hive_support_panel', array(
// 		'title' => __('Hive Support'),
// 		'priority' => 10,
// 	));

// 	// Add a Home Page section to the panel
// 	$wp_customize->add_section('home_section', array(
// 		'title' => __('Home Page'),
// 		'description' => __('All Settings for home page.'),
// 		'panel' => 'hive_support_panel',
// 		'priority' => 10,
// 	));

// 	// Add a Home Page section to the panel
// 	$wp_customize->add_section('faq_section', array(
// 		'title' => __('FAQ Page'),
// 		'description' => __('All Settings for FAQ page.'),
// 		'panel' => 'hive_support_panel',
// 		'priority' => 11,
// 	));

// 	// Add a custom setting to the section
// 	$wp_customize->add_setting('home_page_setting', array(
// 		'default' => '',
// 		'transport' => 'refresh',
// 	));
// 	// Add a custom setting to the section
// 	$wp_customize->add_setting('home_banner_setting', array(
// 		'default' => '',
// 		'transport' => 'refresh',
// 	));

// 	// Add a custom control for the setting
// 	$wp_customize->add_control('home_page_setting', array(
// 		'label' => __('Hero Section'),
// 		'section' => 'home_section',
// 		'settings' => 'home_page_setting',
// 		'type' => 'text',
// 	));
// 	// 3. Add the control to a section
// 	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_banner_setting', array(
// 		'label' => 'Upload Background Image',
// 		'section' => 'home_section',
// 		'settings' => 'home_banner_setting',
// 	)));


// 	// Add a custom setting to the section
// 	$wp_customize->add_setting('faq_refresh_setting', array(
// 		'default' => '',
// 		'transport' => 'refresh',
// 	));
// 	// Add a custom control for the setting
// 	$wp_customize->add_control('faq_page_setting', array(
// 		'label' => __('FAQ Section'),
// 		'section' => 'faq_section',
// 		'settings' => 'faq_refresh_setting',
// 		'type' => 'text',
// 	));

// 	// Example: Adding a text control

// 	// 1. Register a setting
// 	$wp_customize->add_setting('text_setting', array(
// 		'default' => '',
// 		'transport' => 'refresh', // or 'postMessage' for real-time updates
// 	));

	
// }
// add_action('customize_register', 'add_customizer_section');
