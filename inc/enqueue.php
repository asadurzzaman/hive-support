<?php

/**
 * Enqueue scripts and styles.
 */
if (site_url() == "http://localhost/hive-support/") {
    define("VERSION", time());
} else {
    define("VERSION", wp_get_theme()->get("Version"));
}


if (!function_exists('hive_support_style_scripts')) {
    function hive_support_style_scripts()
    {

        wp_enqueue_style('hive-support-google-fonts', hive_support_fonts_url());
        wp_enqueue_style('hive-support-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), VERSION);
        wp_enqueue_style('hive-support-uicons', get_template_directory_uri() . '/assets/css/uicons-all.css', array(), VERSION);
        wp_enqueue_style('hive-support-all.min', get_template_directory_uri() . '/assets/css/all.min.css', array(), VERSION);
        wp_enqueue_style('hive-support-animate', get_template_directory_uri() . '/assets/css/animate.css', array(), VERSION);
        wp_enqueue_style('hive-support-flatpicker', get_template_directory_uri() . '/assets/css/flatpicker.css', array(), VERSION);
        wp_enqueue_style('hive-support-intlTelInput', get_template_directory_uri() . '/assets/css/intlTelInput.css', array(), VERSION);
        wp_enqueue_style('hive-support-select2', get_template_directory_uri() . '/assets/css/select2.min.css', array(), VERSION);
        wp_enqueue_style('hive-support-summernote', get_template_directory_uri() . '/assets/css/summernote-lite.min.css', array(), VERSION);
        wp_enqueue_style('hive-support-slick', get_template_directory_uri() . '/assets/css/slick.css', array(), VERSION);
        wp_enqueue_style('hive-support-custom', get_template_directory_uri() . '/assets/css/style.css', array(), VERSION);
        wp_enqueue_style('hive-support-style', get_stylesheet_uri(), array(), VERSION);
        wp_style_add_data('hive-support-style', 'rtl', 'replace');
    }
    add_action('wp_enqueue_scripts', 'hive_support_style_scripts');
}


if( ! function_exists('hive_support_js_scripts') ){

    function hive_support_js_scripts()
    {
            wp_enqueue_script('hive-support-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), VERSION, true);
            wp_enqueue_script('hive-support-flatpicker', get_template_directory_uri() . '/assets/js/flatpicker.js', array('jquery'), VERSION, true);
            wp_enqueue_script('hive-support-wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), VERSION, true);
            wp_enqueue_script('hive-support-intlTelInput', get_template_directory_uri() . '/assets/js/intlTelInput.js', array('jquery'), VERSION, true);
            wp_enqueue_script('hive-support-summernote', get_template_directory_uri() . '/assets/js/summernote-lite.min.js', array('jquery'), VERSION, true);
            wp_enqueue_script('hive-support-slick', get_template_directory_uri() . '/assets/js/slick.js', array('jquery'), VERSION, true);
            wp_enqueue_script('hive-support-select2', get_template_directory_uri() . '/assets/js/select2.min.js', array('jquery'), VERSION, true);
            wp_enqueue_script('hive-support-easypiechart', get_template_directory_uri() . '/assets/js/jquery.easypiechart.min.js', array('jquery'), VERSION, true);
            wp_enqueue_script('hive-support-chart', get_template_directory_uri() . '/assets/js/chart.js', array('jquery'), VERSION, true);
            wp_enqueue_script('hive-support-syotimer', get_template_directory_uri() . '/assets/js/jquery.syotimer.min.js', array('jquery'), VERSION, true);
            wp_enqueue_script('hive-support-masonry', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array('jquery'), VERSION, true);
            wp_enqueue_script('hive-support-custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), VERSION, true);


            wp_enqueue_script('hive-support-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true);

            if (is_singular() && comments_open() && get_option('thread_comments')) {
                wp_enqueue_script('comment-reply');
            }
    }
    add_action('wp_enqueue_scripts', 'hive_support_js_scripts');
}

/**
 * Load google fonts.
 */
if ( ! function_exists( 'hive_support_fonts_url' ) ) {
    function hive_support_fonts_url()
    {
        $fonts_url = '';
        $fonts     = array();
        $subsets   = 'latin';
        if ('off' !== _x('on', 'Plus Jakarta Sans font: on or off', 'hive-support')) {
            $fonts[] = 'Plus Jakarta Sans: 200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800';
        }
        if ('off' !== _x('on', 'Manrope font: on or off', 'hive-support')) {
            $fonts[] = 'Manrope: 200;300;400;500;600;700';
        }
        if ($fonts) {
            $fonts_url = add_query_arg(array(
                'family' => urlencode(implode('|', $fonts)),
                'subset' => urlencode($subsets),
            ), '//fonts.googleapis.com/css');
        }

        return $fonts_url;
    }
}
