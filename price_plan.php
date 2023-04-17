<?php

/**
 * Template Name: Price Page
 */
get_header();
?>

<main>
    <!-- Pricing area starts -->
    <section class="hive_pricing-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row g-4 mt-1">
                <div class="col-lg-4 col-md-6">
                    <div class="hive_pricing__single <?php
                                                        if (get_theme_mod('active_class_one') == true) {
                                                            echo 'active_plan';
                                                        } ?>">
                        <span class="hive_pricing__single__popular">Popular Plan</span>
                        <div class="hive_pricing__single__header">
                            <h3 class="hive_pricing__single__price">$ <?php echo get_theme_mod('price_section_one_hedding'); ?></h3>
                            <span class="hive_pricing__single__duration"><?php echo get_theme_mod('price_section_one_label'); ?><span class="licence"><?php echo get_theme_mod('price_section_one_total_license'); ?></span></span>
                        </div>
                        <div class="btn-wrapper mt-4">
                            <a href="<?php echo get_theme_mod('price_section_one_url'); ?>" class="hive_btn btn_bg_1 w-100 radius-10"><?php echo get_theme_mod('price_section_one_button_text'); ?></a>
                        </div>
                        <ul class="hive_pricing__single__list list-style-none mt-4">
                            <?php
                            $price_settings = get_theme_mod('price_section_one_repeater');
                            foreach ($price_settings as $price_setting) :
                            ?>
                                <li <?php
                                    if ($price_setting['radio'] == 'on') {
                                        echo 'class="list_show"';
                                    } ?>><?php echo $price_setting['label']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hive_pricing__single <?php
                                                        if (get_theme_mod('active_class_two') == true) {
                                                            echo 'active_plan';
                                                        } ?>">
                        <span class="hive_pricing__single__popular">Popular Plan</span>
                        <div class="hive_pricing__single__header">
                            <h3 class="hive_pricing__single__price">$ <?php echo get_theme_mod('price_section_two_hedding'); ?></h3>
                            <span class="hive_pricing__single__duration"><?php echo get_theme_mod('price_section_two_label'); ?><span class="licence"><?php echo get_theme_mod('price_section_two_total_license'); ?></span></span>
                        </div>
                        <div class="btn-wrapper mt-4">
                            <a href="<?php echo get_theme_mod('price_section_two_url'); ?>" class="hive_btn btn_bg_1 w-100 radius-10"><?php echo get_theme_mod('price_section_two_button_text'); ?></a>
                        </div>
                        <ul class="hive_pricing__single__list list-style-none mt-4">
                            <?php
                            $price_settings_two = get_theme_mod('price_section_two_repeater');
                            foreach ($price_settings_two as $price_setting_two) :
                            ?>
                                <li <?php
                                    if ($price_setting_two['two_radio'] == 'on') {
                                        echo 'class="list_show"';
                                    } ?>><?php echo $price_setting_two['label']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="hive_pricing__single <?php
                                                        if (get_theme_mod('active_class_three') == true) {
                                                            echo 'active_plan';
                                                        } ?>">
                        <span class="hive_pricing__single__popular">Popular Plan</span>
                        <div class="hive_pricing__single__header">
                            <h3 class="hive_pricing__single__price">$ <?php echo get_theme_mod('price_section_three_hedding'); ?></h3>
                            <span class="hive_pricing__single__duration"><?php echo get_theme_mod('price_section_three_label'); ?><span class="licence"><?php echo get_theme_mod('price_section_three_total_license'); ?></span></span>
                        </div>
                        <div class="btn-wrapper mt-4">
                            <a href="<?php echo get_theme_mod('price_section_three_url'); ?>" class="hive_btn btn_bg_1 w-100 radius-10"><?php echo get_theme_mod('price_section_three_button_text'); ?></a>
                        </div>
                        <ul class="hive_pricing__single__list list-style-none mt-4">
                            <?php
                            $price_settings_three = get_theme_mod('price_section_three_repeater');
                            foreach ($price_settings_three as $price_setting_three) :
                            ?>
                                <li <?php
                                    if ($price_setting_three['radio'] == 'on') {
                                        echo 'class="list_show"';
                                    } ?>><?php echo $price_setting_three['label']; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing area end -->
    <!-- Faq area Starts -->
    <div class="hive_faq_area section-bg-2 padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="question-faq-wrapper">
                        <div class="hive_faq_contents">
                            <?php
                            $settings = get_theme_mod('price_page_faq_repeater');
                            $i = 0;
                            foreach ($settings as $setting) :
                            ?>
                                <div class="hive_faq_item <?php if ($i == 0) {
                                                                echo $active = 'active open';
                                                            } ?> wow fadeInLeft" data-wow-delay=".1s">
                                    <div class="hive_faq_title"><?php echo $setting['label'] ?></div>
                                    <div class="hive_faq_panel">
                                        <p class="hive_faq_para"><?php echo $setting['description'] ?></p>
                                    </div>
                                </div>
                            <?php
                                $i++;
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Faq area end -->
</main>
<?php get_footer(); ?>