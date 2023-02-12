<?php

Kirki::add_config('hive_support_customizer', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
));

Kirki::add_panel('hsupport_panel', array(
    'priority'    => 10,
    'title'       => esc_html__('Hive Support', 'kirki'),
));

Kirki::add_section('home_section_id', array(
    'title'          => esc_html__('Home', 'kirki'),
    'panel'          => 'hsupport_panel',
    'priority'       => 160,
));

Kirki::add_section('header_area', array(
    'title'          => esc_html__('Header Area', 'kirki'),
    'panel'          => 'hsupport_panel',
    'priority'       => 160,
));

Kirki::add_section('price_table_one', array(
    'title'          => esc_html__('Pricing Table One', 'kirki'),
    'panel'          => 'hsupport_panel',
    'priority'       => 160,
));

Kirki::add_section('price_table_two', array(
    'title'          => esc_html__('Pricing Table two', 'kirki'),
    'panel'          => 'hsupport_panel',
    'priority'       => 160,
));

Kirki::add_section('price_table_three', array(
    'title'          => esc_html__('Pricing Table Three', 'kirki'),
    'panel'          => 'hsupport_panel',
    'priority'       => 160,
));

Kirki::add_section('faq_section_id', array(
    'title'          => esc_html__('FAQ Page', 'kirki'),
    'panel'          => 'hsupport_panel',
    'priority'       => 160,
));

Kirki::add_section('contect_section_id', array(
    'title'          => esc_html__('Contact', 'kirki'),
    'panel'          => 'hsupport_panel',
    'priority'       => 160,
));

Kirki::add_section('affiliate_page_id', array(
    'title'          => esc_html__('Affiliate', 'kirki'),
    'panel'          => 'hsupport_panel',
    'priority'       => 160,
));

Kirki::add_section('lifetile_deals_id', array(
    'title'          => esc_html__('Lifetime Deal', 'kirki'),
    'panel'          => 'hsupport_panel',
    'priority'       => 160,
));


/**
 * Header Area
 * 
 * 
 * */
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'text',
    'settings'    => 'header_area_pro_button',
    'label'       => esc_html__('Get Pro', 'kirki'),
    'section'     => 'header_area',
    'default'     => 'Get Pro',
    'priority'    => 10,
    'transport'   => 'refresh', // or postMessage 
));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'url', 
    'settings'    => 'header_area_pro_button_url',
    'label'       => esc_html__('Get Pro Url', 'kirki'),
    'section'     => 'header_area',
    'default'     => '#',
    'priority'    => 10,
    'transport'   => 'refresh', // or postMessage
));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'text', 
    'settings'    => 'header_area_free_button',
    'label'       => esc_html__('Try Free', 'kirki'),
    'section'     => 'header_area',
    'default'     => 'Try Free Version',
    'priority'    => 10,
    'transport'   => 'refresh', // or postMessage
));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'url', 
    'settings'    => 'header_area_free_button_url',
    'label'       => esc_html__('Try Free Url', 'kirki'),
    'section'     => 'header_area',
    'default'     => '#',
    'priority'    => 10,
    'transport'   => 'refresh', // or postMessage
));

/**
 *  Home Page
 * 
 * 
 * */
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'editor',
    'settings'    => 'hero_area_header_setting',
    'label'       => esc_html__('Hero Hedding', 'kirki'),
    'section'     => 'home_section_id',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => 'Onestop support solution for your E-Commerce',
));
kirki::add_field('hive_support_customizer', array(
    'type'        => 'textarea',
    'settings'    => 'hero_area_sub_setting',
    'label'       => esc_html__('Hero Sub Hedding', 'kirki'),
    'section'     => 'home_section_id',
    'default'     => 'Hive Support is a One stop Support solution for wordpress. Built for delighting customers. Wanto to provide meaningful customer experiences?',
    'priority'    => 10,
    'transport'   => 'refresh', // or postMessage
));
kirki::add_field('hive_support_customizer', array(
    'type'        => 'url',
    'settings'    => 'hero_area_url_setting',
    'label'       => esc_html__('Button Url', 'kirki'),
    'section'     => 'home_section_id',
    'default'     => '#',
    'priority'    => 10,
    'transport'   => 'refresh', // or postMessage
));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'image',
    'settings'    => 'hero_area_image_setting',
    'label'       => esc_html__('Hero Image', 'kirki'),
    'section'     => 'home_section_id',
    'default'     => get_template_directory_uri() . '/assets/img/banner/banner.jpg',
    'priority'    => 10,
    'transport'   => 'refresh',
    'output'      => array(
        array(
            'element'  => '.home-banner',
            'property' => 'background-image',
        ),
    ),
));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'editor',
    'settings'    => 'below_header_section_hedding',
    'label'       => esc_html__('Below Header Section Heding', 'kirki'),
    'section'     => 'home_section_id',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => 'Provide great supports to customers using hiveSupport',
));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'textarea',
    'settings'    => 'below_header_section_sub_hedding',
    'label'       => esc_html__('Below Header Section sub Heding', 'kirki'),
    'section'     => 'home_section_id',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => 'Loyal customers are built on support, Use hiveSupport to provide great support experiences to your customers.',
));
// Kirki::add_field('hive_support_customizer', array(
//     'type'        => 'repeater',
//     'settings'    => 'below_header_section_content',
//     'label'       => esc_html__('Below Header 3 Section', 'kirki'),
//     'section'     => 'home_section_id',
//     'transport'   => 'refresh',
//     'priority'    => 10,
//     'row_label'    => [
//         'type'  => 'field',
//         'value' => esc_html__('Section ', 'kirki'),
//         'field' => 'link_text',
//     ],
//     'choices' => [
//         'limit' => 3
//     ],
//     'button_label' => esc_html__('"Add new section"(optional) ', 'kirki'),
//     'default'     => [
//         [
//             'bhs_img' => get_template_directory_uri() . '/assets/img/single-page/provide1.png',
//             'title' => 'Delight Customers',
//             'content' => 'Make customers feel delighted by providing them the right support using our superfast support Plug-in',
//         ],
//         [
//             'bhs_img' => get_template_directory_uri() . '/assets/img/single-page/provide2.png',
//             'title' => 'Delight Customers',
//             'content' => 'Make customers feel delighted by providing them the right support using our superfast support Plug-in',
//         ],
//         [
//             'bhs_img' => get_template_directory_uri() . '/assets/img/single-page/provide3.png',
//             'title' => 'Delight Customers',
//             'content' => 'Make customers feel delighted by providing them the right support using our superfast support Plug-in',
//         ],
//     ],
//     'fields'   => [
//         'bhs_img' => [
//             'type'        => 'image',
//             'label'       => esc_html__('Image', 'kirki'),
//             'default'     => '',
//         ],
//         'bhs_title' => [
//             'type'        => 'text',
//             'label'       => esc_html__('Title', 'kirki'),
//             'default'     => 'Delight Customers',
//         ],
//         'bhs_content' => [
//             'type'        => 'textarea',
//             'label'       => esc_html__('Content', 'kirki'),
//             'default'     => 'Make customers feel delighted by providing them the right support using our superfast support Plug-in',
//         ],
//     ],
// ));

kirki::add_field('hive_support_customizer',array(
    'type'        => 'repeater',
    'settings'    => 'customer_review_section_content',
    'label'       => esc_html__('Customer Reviews', 'kirki'),
    'section'     => 'home_section_id',
    'transport'   => 'refresh',
    'priority'    => 10,
    'row_label'    => [
        'type'  => 'field',
        'value' => esc_html__('Review  ', 'kirki'),
        'field' => 'link_text',
    ], 
    'button_label' => esc_html__('"Add new section"(optional) ', 'kirki'),
    'default'     => [
        [
            'review_title' => 'Great tool for business!',
            'review_content' => 'I got my support improved by using Hive support I must say they’re the best support tool for wordpress out there!
                                I’ll probably recommend it to my fellow business owners.',
            'customer_img' => get_template_directory_uri() . '/assets/img/single-page/author1.jpg',
            'customer_name' => 'John Doe',
            'customer_designation' => 'CEO, Company Name',
        ],
        [
            'review_title' => 'Great tool for business!',
            'review_content' => 'I got my support improved by using Hive support I must say they’re the best support tool for wordpress out there!
                                I’ll probably recommend it to my fellow business owners.',
            'customer_img' => get_template_directory_uri() . '/assets/img/single-page/author2.jpg',
            'customer_name' => 'John Doe',
            'customer_designation' => 'CEO, Company Name',
        ],
        [
            'review_title' => 'Great tool for business!',
            'review_content' => 'I got my support improved by using Hive support I must say they’re the best support tool for wordpress out there!
                                I’ll probably recommend it to my fellow business owners.',
            'customer_img' => get_template_directory_uri() . '/assets/img/single-page/author3.jpg',
            'customer_name' => 'John Doe',
            'customer_designation' => 'CEO, Company Name',
        ],
        [
            'review_title' => 'Great tool for business!',
            'review_content' => 'I got my support improved by using Hive support I must say they’re the best support tool for wordpress out there!
                                I’ll probably recommend it to my fellow business owners.',
            'customer_img' => get_template_directory_uri() . '/assets/img/single-page/author3.jpg',
            'customer_name' => 'John Doe',
            'customer_designation' => 'CEO, Company Name',
        ],
        [
            'review_title' => 'Great tool for business!',
            'review_content' => 'I got my support improved by using Hive support I must say they’re the best support tool for wordpress out there!
                                I’ll probably recommend it to my fellow business owners.',
            'customer_img' => get_template_directory_uri() . '/assets/img/single-page/author3.jpg',
            'customer_name' => 'John Doe',
            'customer_designation' => 'CEO, Company Name',
        ],
    ],
    'fields'   => [
        'review_title' => [
            'type'        => 'text',
            'label'       => esc_html__('Review Title', 'kirki'),
            'default'     => 'Great tool for business!',
        ],
        'review_content' => [
            'type'        => 'textarea',
            'label'       => esc_html__('Review Content ', 'kirki'),
            'default'     => 'I got my support improved by using Hive support I must say they’re the best support tool for wordpress out there!
                                I’ll probably recommend it to my fellow business owners.',
        ],
        'customer_img' => [
            'type'        => 'image',
            'label'       => esc_html__('Customer Image', 'kirki'),
            'default'     => get_template_directory_uri() . '/assets/img/single-page/author1.jpg',
        ],
        'customer_name' => [
            'type'        => 'text',
            'label'       => esc_html__('Customer Name', 'kirki'),
            'default'     => 'Robert Fox',
        ],
        'customer_designation' => [
            'type'        => 'text',
            'label'       => esc_html__('Customer Designation', 'kirki'),
            'default'     => 'CEO, NNN',
        ],

    ],
));
kirki::add_field('hive_support_customizer', array(
    'type'        => 'editor',
    'settings'    => 'home_subscription_form',
    'label'       => esc_html__('Subscription Shortcode', 'kirki'),
    'section'     => 'home_section_id',
    'default'     => '[subscription]',
    'priority'    => 10,
    'transport'   => 'refresh', // or postMessage
));


/**
 * Pring Table One
 * 
 * 
 * */
kirki::add_field('hive_support_customizer',array(
    'type'        => 'toggle',
    'settings'    => 'active_class_one',
    'label'       => esc_html__('Popular Plan', 'kirki'),
    'section'     => 'price_table_one',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => 'active_plan',

));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'number',
    'settings'    => 'price_section_one_hedding',
    'label'       => esc_html__('Price', 'kirki'),
    'section'     => 'price_table_one',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => '0',
));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'text',
    'settings'    => 'price_section_one_label',
    'label'       => esc_html__('Price Label', 'kirki'),
    'section'     => 'price_table_one',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => 'Free/Lifetime',
));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'text',
    'settings'    => 'price_section_one_url',
    'label'       => esc_html__('Product ID for Add to Cart', 'kirki'),
    'section'     => 'price_table_one',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => '32456',
));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'text',
    'settings'    => 'price_section_one_total_license',
    'label'       => esc_html__('Total License', 'kirki'),
    'section'     => 'price_table_one',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => '50 site license',
));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'text',
    'settings'    => 'price_section_one_button_text',
    'label'       => esc_html__('Button text', 'kirki'),
    'section'     => 'price_table_one',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => 'Try now',
));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'repeater',
    'settings'    => 'price_section_one_repeater',
    'label'       => esc_html__('Price Features', 'kirki'),
    'section'     => 'price_table_one',
    'transport'   => 'refresh',
    'priority'    => 10,
    'row_label'    => [
        'type'  => 'field',
        'value' => esc_html__('Features ', 'kirki'),
        'field' => 'link_text',
    ],
    'button_label' => esc_html__('Add New Features', 'kirki'),
    'default'     => [
        [
            'label' => 'Basic ticket features',
            'radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'radio' => 'on',
        ],
    ],
    'fields'   => [ 
        'label' => [
            'type'        => 'text',
            'label'       => esc_html__('Price Features', 'kirki'),
            'default'     => 'Basic ticket features',
        ],
        'radio' => [
            'type'        => 'radio',
            'label'       => esc_html__('Feature On/Off', 'kirki'),
            'default'     => 'off',
            'choices'     => [
                'on'   => esc_html__('On', 'kirki'),
                'off' => esc_html__('Off', 'kirki'),  
            ],
        ], 
    ],
));

/**
 * Pring Table Two
 * 
 * 
 * */
kirki::add_field('hive_support_customizer', array(
    'type'        => 'toggle',
    'settings'    => 'active_class_two',
    'label'       => esc_html__('Popular Plan', 'kirki'),
    'section'     => 'price_table_two',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => 'active_plan',

));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'number',
    'settings'    => 'price_section_two_hedding',
    'label'       => esc_html__('Price', 'kirki'),
    'section'     => 'price_table_two',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => '0',
));

Kirki::add_field('hive_support_customizer', array(
    'type'        => 'text',
    'settings'    => 'price_section_two_label',
    'label'       => esc_html__('Price Label', 'kirki'),
    'section'     => 'price_table_two',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => 'Free/Lifetime',
));

Kirki::add_field('hive_support_customizer', array(
    'type'        => 'text',
    'settings'    => 'price_section_two_url',
    'label'       => esc_html__('Product ID for Add to Cart', 'kirki'),
    'section'     => 'price_table_two',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => '32456',
));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'text',
    'settings'    => 'price_section_two_total_license',
    'label'       => esc_html__('Total License', 'kirki'),
    'section'     => 'price_table_two',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => '50 site license',
));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'text',
    'settings'    => 'price_section_two_button_text',
    'label'       => esc_html__('Button text', 'kirki'),
    'section'     => 'price_table_two',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => 'Try now',
));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'repeater',
    'settings'    => 'price_section_two_repeater',
    'label'       => esc_html__('Price Features', 'kirki'),
    'section'     => 'price_table_two',
    'transport'   => 'refresh',
    'priority'    => 10,
    'row_label'    => [
        'type'  => 'field',
        'value' => esc_html__('Features ', 'kirki'),
        'field' => 'link_text',
    ],
    'button_label' => esc_html__('Add New Features', 'kirki'),
    'default'     => [
        [
            'label' => 'Basic ticket features',
            'two_radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'two_radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'two_radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'two_radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'two_radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'two_radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'two_radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'two_radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'two_radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'two_radio' => 'on',
        ],
    ],
    'fields'   => [
        'label' => [
            'type'        => 'text',
            'label'       => esc_html__('Price Features', 'kirki'),
            'default'     => 'Basic ticket features',
        ],
        'two_radio' => [
            'type'        => 'radio',
            'label'       => esc_html__('Feature On/Off', 'kirki'),
            'default'     => 'off',
            'choices'     => [
                'on'   => esc_html__('On', 'kirki'),
                'off' => esc_html__('Off', 'kirki'),
            ],
        ],
    ],
));
/**
 * Pring Table Three
 * 
 * 
 * */
kirki::add_field('hive_support_customizer', array(
    'type'        => 'toggle',
    'settings'    => 'active_class_three',
    'label'       => esc_html__('Popular Plan', 'kirki'),
    'section'     => 'price_table_three',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => 'active_plan',

));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'number',
    'settings'    => 'price_section_three_hedding',
    'label'       => esc_html__('Price', 'kirki'),
    'section'     => 'price_table_three',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => '0',
));

Kirki::add_field('hive_support_customizer', array(
    'type'        => 'text',
    'settings'    => 'price_section_three_label',
    'label'       => esc_html__('Price Label', 'kirki'),
    'section'     => 'price_table_three',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => 'Free/Lifetime',
));

Kirki::add_field('hive_support_customizer', array(
    'type'        => 'text',
    'settings'    => 'price_section_three_url',
    'label'       => esc_html__('Product ID for Add to Cart', 'kirki'),
    'section'     => 'price_table_three',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => '32456',
));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'text',
    'settings'    => 'price_section_three_total_license',
    'label'       => esc_html__('Total License', 'kirki'),
    'section'     => 'price_table_three',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => '50 site license',
));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'text',
    'settings'    => 'price_section_three_button_text',
    'label'       => esc_html__('Button text', 'kirki'),
    'section'     => 'price_table_three',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => 'Try now',
));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'repeater',
    'settings'    => 'price_section_three_repeater',
    'label'       => esc_html__('Price Features', 'kirki'),
    'section'     => 'price_table_three',
    'transport'   => 'refresh',
    'priority'    => 10,
    'row_label'    => [
        'type'  => 'field',
        'value' => esc_html__('Features ', 'kirki'),
        'field' => 'link_text',
    ],
    'button_label' => esc_html__('Add New Features', 'kirki'),
    'default'     => [
        [
            'label' => 'Basic ticket features',
            'radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'radio' => 'on',
        ],
        [
            'label' => 'Basic ticket features',
            'radio' => 'on',
        ],
    ],
    'fields'   => [
        'label' => [
            'type'        => 'text',
            'label'       => esc_html__('Price Features', 'kirki'),
            'default'     => 'Basic ticket features',
        ],
        'radio' => [
            'type'        => 'radio',
            'label'       => esc_html__('Feature On/Off', 'kirki'),
            'default'     => 'off',
            'choices'     => [
                'on'   => esc_html__('On', 'kirki'),
                'off' => esc_html__('Off', 'kirki'),
            ],
        ],
    ],
));
/**
 * FAQ Page
 * 
 * 
 * */

kirki::add_field('hive_support_customizer', array(
    'type'  =>  'editor',
    'settings'    => 'faq_from',
    'label'       => esc_html__('Contect From Shortcode', 'kirki'),
    'section'     => 'faq_section_id',
    'transport'   => 'refresh',
    'priority'    => 10,

));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'repeater',
    'settings'    => 'faq_repeater',
    'label'       => esc_html__('FAQ Page', 'kirki'),
    'section'     => 'faq_section_id',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => [
        [
            'label'       => esc_html__('Can refund be avail if I purchaed on discount?', 'kirki'),
            'description' => esc_html__('Was drawing natural fat respect husband. An as noisy an offer drawn blush place. These tried for way joy wrote witty. In mr began music weeks after at begin. Education no dejection so direction pretended household do to. Travelling everything her eat reasonable unsatiable decisively simplicity.', 'kirki'),
        ],
    ],
    'fields'   => [
        'label' => [
            'type'        => 'text',
            'label'       => esc_html__('Faq Title', 'kirki'),
            'default'     => 'Faq Title',
        ],
        'description' => [
            'type'        => 'textarea',
            'label'       => esc_html__('Faq Description', 'kirki'),
            'default'     => 'Faq Description',
        ],

    ],
));

/**
 * Contact Page
 * 
 * 
 * */
kirki::add_field('hive_support_customizer', array(
    'type'  =>  'editor',
    'settings'    => 'contect_from',
    'label'       => esc_html__('Contect From Shortcode', 'kirki'),
    'section'     => 'contect_section_id',
    'transport'   => 'refresh',
    'priority'    => 10,

));
kirki::add_field('hive_support_customizer', array(
    'type'        => 'text',
    'settings'    => 'address_setting',
    'label'       => esc_html__('Address', 'kirki'),
    'section'     => 'contect_section_id',
    'default'     => 'Parker Rd. Allentown, New Mexico',
    'priority'    => 10,
    'transport'   => 'refresh', // or postMessage
));
kirki::add_field('hive_support_customizer', array(
    'type'        => 'text',
    'settings'    => 'support_email_setting',
    'label'       => esc_html__('Email', 'kirki'),
    'section'     => 'contect_section_id',
    'default'     => 'support.hivesupport@mail.com',
    'priority'    => 10,
    'transport'   => 'refresh', // or postMessage
));
// kirki::add_field('hive_support_customizer', array(
//     'type'        => 'editor',
//     'settings'    => 'map_setting',
//     'label'       => esc_html__('Map Iframe', 'kirki'),
//     'section'     => 'contect_section_id',
//     'default'     => '',
//     'priority'    => 10,
//     'transport'   => 'refresh', // or postMessage
// ));

/**
 * Affiliate Page FAQ
 * 
 * 
 * */
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'repeater',
    'settings'    => 'affiliate_faq_repeater',
    'label'       => esc_html__('Affiliate Page FAQ', 'kirki'),
    'section'     => 'affiliate_page_id',
    'transport'   => 'refresh',
    'priority'    => 10,
    'row_label'    => [
        'type'  => 'field',
        'value' => esc_html__('FAQ  ', 'kirki'),
        'field' => 'link_text',
    ],
    'button_label' => esc_html__('Add New faq', 'kirki'),
    'default'     => [
        [
            'label'       => esc_html__('Faq Title', 'kirki'),
            'description' => esc_html__('Faq Description', 'kirki'),
        ],
    ],
    'fields'   => [
        'label' => [
            'type'        => 'text',
            'label'       => esc_html__('Faq Title', 'kirki'),
            'default'     => 'Faq Title',
        ],
        'description' => [
            'type'        => 'textarea',
            'label'       => esc_html__('Faq Description', 'kirki'),
            'default'     => 'Faq Description',
        ],

    ],
));
kirki::add_field('hive_support_customizer', array(
    'type'        => 'url',
    'settings'    => 'affiliate_join_url',
    'label'       => esc_html__('Join Url', 'kirki'),
    'section'     => 'affiliate_page_id',
    'default'     => '',
    'priority'    => 10,
    'transport'   => 'refresh', // or postMessage
));

/**
 * Lifetile Page FAQ
 * 
 * 
 * */

Kirki::add_field('hive_support_customizer', array(
    'type'        => 'repeater',
    'settings'    => 'lifetile_deals_faq_repeater',
    'label'       => esc_html__('Lifetile Deals Page FAQ', 'kirki'),
    'section'     => 'lifetile_deals_id',
    'transport'   => 'refresh',
    'priority'    => 10,
    'row_label'    => [
        'type'  => 'field',
        'value' => esc_html__('FAQ ', 'kirki'),
        'field' => 'link_text',
    ],
    'button_label' => esc_html__('Add New faq', 'kirki'),
    'default'     => [
        [
            'label'       => esc_html__('Faq Title', 'kirki'),
            'description' => esc_html__('Faq Description', 'kirki'),
        ],
    ],
    'fields'   => [
        'label' => [
            'type'        => 'text',
            'label'       => esc_html__('Faq Title', 'kirki'),
            'default'     => 'Faq Title',
        ],
        'description' => [
            'type'        => 'textarea',
            'label'       => esc_html__('Faq Description', 'kirki'),
            'default'     => 'Faq Description',
        ],

    ],
));

kirki::add_field('hive_support_customizer', array(
    'type'        => 'number',
    'settings'    => 'lifetile_deals_current_deal',
    'label'       => esc_html__('Curent Deal', 'kirki'),
    'section'     => 'lifetile_deals_id',
    'default'     => '299',
    'priority'    => 10,
    'transport'   => 'refresh', // or postMessage
));

kirki::add_field('hive_support_customizer', array(
    'type'        => 'number',
    'settings'    => 'lifetile_deals_old_deal',
    'label'       => esc_html__('Old Deal', 'kirki'),
    'section'     => 'lifetile_deals_id',
    'default'     => '599',
    'priority'    => 10,
    'transport'   => 'refresh', // or postMessage
));
kirki::add_field('hive_support_customizer', array(
    'type'        => 'editor',
    'settings'    => 'lifetile_deals_timer',
    'label'       => esc_html__('Timer Shortcode', 'kirki'),
    'section'     => 'lifetile_deals_id',
    'default'     => '[lifetile_deals_timer]',
    'priority'    => 10,
    'transport'   => 'refresh', // or postMessage
));
kirki::add_field('hive_support_customizer', array(
    'type'        => 'url',
    'settings'    => 'lifetile_deals_url',
    'label'       => esc_html__('Deal Button Url', 'kirki'),
    'section'     => 'lifetile_deals_id',
    'default'     => site_url(),
    'priority'    => 10,
    'transport'   => 'refresh', // or postMessage
));
kirki::add_field('hive_support_customizer', array(
    'type'        => 'date',
    'settings'    => 'lifetile_deals_date',
    'label'       => esc_html__('Seat Date', 'kirki'),
    'section'     => 'lifetile_deals_id',
    'default'     => '',
    'priority'    => 10,
    'transport'   => 'refresh', // or postMessage
));
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'repeater',
    'settings'    => 'lifetile_deals_customer_review_repeater',
    'label'       => esc_html__('Customer Reviews', 'kirki'),
    'section'     => 'lifetile_deals_id',
    'transport'   => 'refresh',
    'priority'    => 10,
    'row_label'    => [
        'type'  => 'field',
        'value' => esc_html__('Review  ', 'kirki'),
        'field' => 'link_text',
    ],
    'button_label' => esc_html__('Add New Review', 'kirki'),
    'default'     => [
        [
            'customer_img'       => get_template_directory_uri() . '/assets/img/ltd/hive_ltdBusiness__author1.jpg',
            'customer_name' => esc_html__('Donald O. Ralph', 'kirki'),
            'date' => esc_html__('2023-02-24', 'kirki'),
            'description' => esc_html__('Hive support has been the best tool for my business ever', 'kirki'),
        ],
    ],
    'fields'   => [
        'customer_img' => [
            'type'        => 'image',
            'label'       => esc_html__('Customer Image', 'kirki'),
            'default'     => get_template_directory_uri() . '/assets/img/ltd/hive_ltdBusiness__author1.jpg',
        ],
        'customer_name' => [
            'type'        => 'text',
            'label'       => esc_html__('Customer Name', 'kirki'),
            'default'     => 'Donald O. Ralph',
        ],
        'date' => [
            'type'        => 'date',
            'label'       => esc_html__('Date', 'kirki'),
            'default'     => '2023-02-24',
        ],
        'description' => [
            'type'        => 'textarea',
            'label'       => esc_html__('Review Description', 'kirki'),
            'default'     => 'Hive support has been the best tool for my business ever',
        ],
    ],
));
