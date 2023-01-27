<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Hive_Support
 * @since Hive Support 1.0
 */
wp_nav_menu(
    array(
        'theme_location' 		=> 'main-menu',
        'container'             => 'div',
        'container_id'          => 'hive_support_menu',
        'container_class'       => 'collapse navbar-collapse',
        'menu_id'        		=> '',
        'menu_class'            => 'navbar-nav',
    )
);
