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

//Customizer Panel


















Kirki::add_field('hive_support_customizer', array(
    'type'        => 'editor',
    'settings'    => 'hero_area_setting',
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
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'image',
    'settings'    => 'hero_area_image_setting',
    'label'       => esc_html__('Hero Image', 'kirki'),
    'section'     => 'home_section_id',
    'default'     => '',
    'priority'    => 10,
    'transport'   => 'refresh',
    'output'      => array(
        array(
            'element'  => '.home-banner',
            'property' => 'background-image',
        ),
    ),
    // 'active_callback'  => array(
    //     array(
    //         'setting'  => 'home_page_setting',
    //         'operator' => '==',
    //         'value'    => '1',
    //     ),
    // ),
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
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'repeater',
    'settings'    => 'below_header_section_content',
    'label'       => esc_html__('3 Section', 'kirki'),
    'section'     => 'home_section_id',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => [
        [
            'title' => 'Delight Customers',
            'content' => 'Make customers feel delighted by providing them the right support using our superfast support Plug-in',
        ],
        [
            'title' => 'Affordable Pricing',
            'content' => 'Make customers feel delighted by providing them the right support using our superfast support Plug-in',
        ],
        [
            'title' => 'Free/Pro Version',
            'content' => 'Make customers feel delighted by providing them the right support using our superfast support Plug-in',
        ],
    ],
    'fields'   => [
        'title' => [
            'type'        => 'text',
            'label'       => esc_html__('Title', 'kirki'),
            'default'     => 'Delight Customers',
        ],
        'content' => [
            'type'        => 'textarea',
            'label'       => esc_html__('Content', 'kirki'),
            'default'     => 'Make customers feel delighted by providing them the right support using our superfast support Plug-in',
        ],
    ],
));

/**
 * Pring Table One
 * 
 * 
 * */
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
    'type'        => 'repeater',
    'settings'    => 'price_section_one_repeater',
    'label'       => esc_html__('Price Features', 'kirki'),
    'section'     => 'price_table_one',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => [
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show_off',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show_off',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show_off',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show_off',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show_off',
        ],
    ],
    'fields'   => [ 
        'label' => [
            'type'        => 'text',
            'label'       => esc_html__('Price Features', 'kirki'),
            'default'     => 'Basic ticket features',
        ], 
        'choice' => [
            'type'        => 'select',
            'label'       => esc_html__('Feature On/Off', 'kirki'),
            'default'     => 'list_show',
            'choices'     => [
                'list_show'  => esc_html__('On', 'kirki'),
                'list_show_off' => esc_html__('Off', 'kirki'),
            ],
        ], 
    ],
));

/**
 * Pring Table Two
 * 
 * 
 * */
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
    'type'        => 'repeater',
    'settings'    => 'price_section_two_repeater',
    'label'       => esc_html__('Price Features', 'kirki'),
    'section'     => 'price_table_two',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => [
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show_off',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show_off',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show_off',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show_off',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show_off',
        ],
    ],
    'fields'   => [
        'label' => [
            'type'        => 'text',
            'label'       => esc_html__('Price Features', 'kirki'),
            'default'     => 'Basic ticket features',
        ],
        'choice' => [
            'type'        => 'select',
            'label'       => esc_html__('Feature On/Off', 'kirki'),
            'default'     => 'list_show',
            'choices'     => [
                'list_show'  => esc_html__('On', 'kirki'),
                'list_show_off' => esc_html__('Off', 'kirki'),
            ],
        ],
    ],
));
/**
 * Pring Table Three
 * 
 * 
 * */

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
    'type'        => 'repeater',
    'settings'    => 'price_section_three_repeater',
    'label'       => esc_html__('Price Features', 'kirki'),
    'section'     => 'price_table_three',
    'transport'   => 'refresh',
    'priority'    => 10,
    'default'     => [
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show_off',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show_off',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show_off',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show_off',
        ],
        [
            'label' => 'Basic ticket features',
            'choice' => 'list_show_off',
        ],
    ],
    'fields'   => [
        'label' => [
            'type'        => 'text',
            'label'       => esc_html__('Price Features', 'kirki'),
            'default'     => 'Basic ticket features',
        ],
        'choice' => [
            'type'        => 'select',
            'label'       => esc_html__('Feature On/Off', 'kirki'),
            'default'     => 'list_show',
            'choices'     => [
                'list_show'  => esc_html__('On', 'kirki'),
                'list_show_off' => esc_html__('Off', 'kirki'),
            ],
        ],
    ],
));
/**
 * FAQ Page
 * 
 * 
 * */
Kirki::add_field('hive_support_customizer', array(
    'type'        => 'repeater',
    'settings'    => 'faq_repeater',
    'label'       => esc_html__('FAQ Page', 'kirki'),
    'section'     => 'faq_section_id',
    'transport'   => 'refresh',
    'priority'    => 10,
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

/**
 * Contact Page
 * 
 * 
 * */
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
kirki::add_field('hive_support_customizer', array(
    'type'        => 'editor',
    'settings'    => 'map_setting',
    'label'       => esc_html__('Map', 'kirki'),
    'section'     => 'contect_section_id',
    'default'     => 'Mape iframe',
    'priority'    => 10,
    'transport'   => 'refresh', // or postMessage
));

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