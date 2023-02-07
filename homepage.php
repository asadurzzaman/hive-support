<?php

/**
 * Template Name: Home Page
 */
get_header();
?>
<!-- Banner area Starts -->
<div class="hive_banner_area hive_banner__bg">
    <div class="hive_banner__shape">
        <div class="hive_banner__shape1"></div>
        <div class="hive_banner__shape2"></div>
    </div>
    <div class="container">
        <div class="row align-items-center flex-column-reverse flex-lg-row justify-content-center">
            <div class="col-lg-10">
                <div class="hive_banner center-text white">
                    <div class="hive_banner__content">
                        <h2 class="hive_banner__content__title"><?php echo get_theme_mod('hero_area_header_setting'); ?></h2>
                        <p class="hive_banner__content__para mt-4"><?php echo get_theme_mod('hero_area_sub_setting'); ?></p>
                        <div class="hive_banner__btn mt-4 mt-lg-5">
                            <a href="<?php echo get_theme_mod('hero_area_url_setting'); ?>" class="hive_btn btn_bg_white"> Try hiveSupport </a>
                        </div>
                    </div>
                    <div class="hive_banner__bottom mt-5">
                        <div class="hive_banner__thumb wow zoomIn" data-wow-delay=".3s">
                            <?php
                            if (!empty(get_theme_mod('hero_area_image_setting'))) :
                                $image = get_theme_mod('hero_area_image_setting');
                            else :
                                $image = get_template_directory_uri() . '/assets/img/banner/banner.jpg';
                            endif;
                            ?>
                            <img src="<?php echo $image; ?>" alt="">
                            <div class="hive_banner__thumb__shape1"></div>
                            <div class="hive_banner__thumb__shape2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner area end -->
<!-- Provide area starts -->
<section class="provide_area section-bg-1 padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="section_title center-text">
            <h2 class="title"><?php echo get_theme_mod('below_header_section_hedding'); ?></h2>
            <p class="section_para"><?php echo get_theme_mod('below_header_section_sub_hedding'); ?></p>
        </div>
        <div class="row g-4 mt-4">
            <div class="col-lg-4 col-md-6 provide_child wow fadeInRight" data-wow-delay=".2s">
                <div class="single_provide single_provide__padding radius-10">
                    <div class="single_provide__icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/single-page/provide1.png" alt="provideImg">
                    </div>
                    <div class="single_provide__contents mt-3">
                        <h4 class="single_provide__contents__title"> <a href="javascript:void(0)">Delight Customers </a> </h4>
                        <p class="single_provide__contents__para mt-3"> Make customers feel delighted by providing them the right support using our superfast support Plug-in </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 provide_child wow zoomIn" data-wow-delay=".4s">
                <div class="single_provide single_provide__padding radius-10">
                    <div class="single_provide__icon">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/single-page/provide2.png" alt="provideImg">
                    </div>
                    <div class="single_provide__contents mt-3">
                        <h4 class="single_provide__contents__title"> <a href="javascript:void(0)"> Affordable Pricing </a> </h4>
                        <p class="single_provide__contents__para mt-3"> Make customers feel delighted by providing them the right support using our superfast support Plug-in </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 provide_child wow fadeInLeft" data-wow-delay=".2s">
                <div class="single_provide single_provide__padding radius-10">
                    <div class="single_provide__icon">
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="single_provide__contents mt-3">
                        <h4 class="single_provide__contents__title"> <a href="javascript:void(0)"> Free/Pro Version </a> </h4>
                        <p class="single_provide__contents__para mt-3"> Make customers feel delighted by providing them the right support using our superfast support Plug-in </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Provide area end -->
<!-- Performance area starts -->
<section class="performance_area padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="single_performance performance_shapes">
                    <div class="single_performance__thumb">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/single-page/performance.png" alt="img" class="wow fadeInUp" data-wow-delay=".4s">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single_performance">
                    <div class="section_title text_left">
                        <h2 class="title"> Get reports of tickets, agent performances </h2>
                        <p class="section_para"> Get easy reports of tickets and agents like when the tickets are being submitted most and least to take actions accordingly and know which agent is performing better. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Performance area end -->
<!-- CustomFields area starts -->
<section class="cutomfield_area section-bg-1 padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="row g-5 align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="single_performance performance_shapes__two">
                    <div class="single_performance__thumb">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/single-page/custom-fields.png" alt="img" class="wow fadeInUp" data-wow-delay=".4s">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single_performance">
                    <div class="section_title text_left">
                        <h2 class="title"> Learn more about your customers using custom fields </h2>
                        <p class="section_para"> Need to collect more informations from your customers? Use the custom ticket fields to customize ticket submitting form. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CustomFields area end -->
<!-- Automation area starts -->
<section class="automation_area padding-top-100 padding-bottom-50">
    <div class="container">
        <div class="section_title center-text">
            <h2 class="title"> Use automations to make support superfast </h2>
            <p class="section_para"> Loyal customers are built on support, Use hiveSupport to provide great support experiences to your customers. </p>
        </div>
        <div class="row gy-4 justify-content-center mt-4">
            <div class="col-xl-8 col-lg-10">
                <div class="single_automation wow zoomIn" data-wow-delay=".4s">
                    <div class="single_automation__thumb">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/single-page/automation.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Automation area end -->
<!-- Experience area starts -->
<section class="experience_area padding-top-50 padding-bottom-50">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay=".3">
                <div class="single_experience">
                    <div class="single_experience__thumb single_experience__thumb__border radius-20">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/single-page/experience.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="experience_wrap">
                    <div class="section_title text_left">
                        <h2 class="title"> integrate with your favourite tools to provide best customer experience </h2>
                        <p class="section_para"> Integrate with your favourite tools to reply and receive tickets from anywhere with logging in support tickets. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Experience area end -->
<!-- Testimonial area end -->
<div class="testimonial_area padding-top-50 padding-bottom-50">
    <div class="container">
        <div class="section_title section_flex">
            <h2 class="title"> Don’t just rely on our words! Check what our users are saying.</h2>
            <div class="append_testimonial"></div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="global_slick_init testimonial_slider nav_style_one slider_inner_margin" data-appendArrows=".append_testimonial" data-arrows="true" data-infinite="true" data-dots="false" data-slidesToShow="3" data-swipeToSlide="true" data-autoplay="false" data-autoplaySpeed="2500" data-prevArrow='<div class="prev_icon"><i class="fa-solid fa-angle-left"></i></div>' data-nextArrow='<div class="next_icon"><i class="fa-solid fa-angle-right"></i></div>' data-responsive='[{"breakpoint": 1400,"settings": {"slidesToShow": 3}},{"breakpoint": 1200,"settings": {"slidesToShow": 2}},{"breakpoint": 992,"settings": {"slidesToShow": 2}},{"breakpoint": 768, "settings": {"slidesToShow": 1} }]'>
                    <?php

                    $settings = get_theme_mod('customer_review_section_content');
                    foreach ($settings as $setting) :
                    ?>
                        <div class="testimonial_item">
                            <div class="single_testimonial radius-20">
                                <h4 class="single_testimonial__title"><?php echo $setting['review_title']; ?></h4>
                                <p class="single_testimonial__para mt-3"> <?php echo $setting['review_content']; ?> </p>
                                <div class="single_testimonial__author mt-3">
                                    <div class="single_testimonial__author__thumb">
                                        <img src="<?php echo $setting['customer_img']; ?>" alt="testAuthor">
                                    </div>
                                    <div class="single_testimonial__author__content">
                                        <h6 class="single_testimonial__author__name"><?php echo $setting['customer_name']; ?></h6>
                                        <span class="single_testimonial__author__designation"> <?php echo $setting['customer_designation']; ?> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial area end -->
<!-- Pricing area starts -->
<section class="hive_pricing-area padding-top-50 padding-bottom-50">
    <div class="container">
        <div class="section_title center-text">
            <h2 class="title">Powerful tool & Simple pricing plan</h2>
            <p class="section_para">We made our pricing plans simple and affordable for any businesses. Choose your plan to get started.</p>
        </div>
        <div class="row g-4 mt-5">
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
<!-- Newsletter area starts -->
<div class="newsletter_area padding-top-50 padding-bottom-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="newsletter_wrapper newsletter_bg radius-20 newsletter_wrapper__padding wow zoomIn" data-wow-delay=".3s">
                    <div class="newsletter_wrapper__shapes">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/single-page/newsletter1.png" alt="newsletter1">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/single-page/newsletter2.png" alt="newsletter2">
                        <div class="newsletter_wrapper__shapes__custom"></div>
                    </div>
                    <div class="newsletter_contents center-text">
                        <h3 class="newsletter_contents__title"> Join our newsletter to find discounts </h3>
                        <p class="newsletter_contents__para mt-3"> Loyal customers are built on support, Use hiveSupport to provide great support experiences to your customers. </p>
                        <div class="newsletter_contents__form custom-form mt-4">
                            <div class="single-input">
                                <input type="text" class="form--control" placeholder="Enter Email">
                                <button type="submit"> Submit </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter area end -->


<!-- footer area end -->
<!-- back to top area start -->

<!-- back to top area end -->

<?php

get_footer();

?>