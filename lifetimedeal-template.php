<?php
/**
 * Template Name: Lifetime Deal Template
 */
get_header();
?>
<!-- Lifetime Deal Banner area Starts -->
<div class="hive_ltdBanner_area hive_ltdBanner_area__padding section-bg-secondary2">
    <div class="hive_ltdBanner_shape">
        <div class="wave">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/ltd/hive_ltdBanner_wave.svg" alt="waveShape">
        </div>
        <div class="textShape">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/ltd/hive_ltdBanner_textimg.png" alt="textShape">
        </div>
    </div>
    <div class="container">
        <div class="hive_ltdBanner center-text">
            <div class="hive_ltdBanner__contents">
                <span class="hive_ltdBanner__subtitle">Pay once access forever</span>
                <h2 class="hive_ltdBanner__title mt-3">Get Our <span class="hive_ltdBanner__title__span">Limited Lifetime Deal Now</span></h2>
                <h4 class="hive_ltdBanner__price mt-4">FOR $299 <sub><s>Yearly $99</s></sub></h4>
                <div class="btn-wrapper mt-4 mt-lg-5">
                    <a href="javascript:void(0)" class="hive_btn btn_bg_white">Get Deal Now</a>
                </div>
                <div class="hive_ltdBanner__countdown mt-4 mt-lg-5">
                    <div class="global-timer"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Lifetime Deal Banner area end -->
<!-- Ltd Feature area start -->
<section class="hive_ltdFeature_area section-bg-3 padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="row gy-5 justify-content-between">
            <div class="col-xl-5 col-lg-5">
                <div class="hive_ltdFeature">
                    <div class="hive_ltdFeature__contents">
                        <h4 class="hive_ltdFeature__title">The Best Features Made for Your Customer Support</h4>
                        <p class="hive_ltdFeature__para mt-4">You can access all our features in the lifetime deal option Automation, Integration, Custom input fields, Saved responses, Agent assignment</p>
                        <div class="btn-wrapper mt-4 mt-lg-5">
                            <a href="javascript:void(0)" class="hive_btn btn_bg_1 radius-30">All Features</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-7">
                <div class="hive_ltdFeature__wrapper">
                    <div class="row g-4 grid">
                        <div class="col-sm-4 grid-item">
                            <div class="hive_ltdFeature__single padding_grid center-text radius-10">
                                <div class="hive_ltdFeature__signle__icon">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/ltd/hive_ltdFeatureIcon1.png" alt="ltdFeatureICon">
                                </div>
                                <div class="hive_ltdFeature__single__contents">
                                    <h4 class="hive_ltdFeature__single__title">Automation</h4>
                                    <p class="hive_ltdFeature__single__para mt-2">Use our automation option to automate the task</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 grid-item">
                            <div class="hive_ltdFeature__single grid_flex center-text radius-10">
                                <div class="hive_ltdFeature__signle__icon">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/ltd/hive_ltdFeatureIcon2.png" alt="ltdFeatureICon">
                                </div>
                                <div class="hive_ltdFeature__single__contents">
                                    <h4 class="hive_ltdFeature__single__title">Integration</h4>
                                    <p class="hive_ltdFeature__single__para mt-2">Integrate with popular tools to make support more efficient</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 grid-item">
                            <div class="hive_ltdFeature__single center-text radius-10">
                                <div class="hive_ltdFeature__signle__icon">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/ltd/hive_ltdFeatureIcon3.png" alt="ltdFeatureICon">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 grid-item">
                            <div class="hive_ltdFeature__single padding_grid center-text radius-10">
                                <div class="hive_ltdFeature__signle__icon">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/ltd/hive_ltdFeatureIcon4.png" alt="ltdFeatureICon">
                                </div>
                                <div class="hive_ltdFeature__single__contents">
                                    <h4 class="hive_ltdFeature__single__title">Assign Agent</h4>
                                    <p class="hive_ltdFeature__single__para mt-2">You can assign agents for your tickets</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8 grid-item">
                            <div class="hive_ltdFeature__single grid_flex center-text radius-10">
                                <div class="hive_ltdFeature__signle__icon">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/ltd/hive_ltdFeatureIcon5.png" alt="ltdFeatureICon">
                                </div>
                                <div class="hive_ltdFeature__single__contents">
                                    <h4 class="hive_ltdFeature__single__title">Saved Responses</h4>
                                    <p class="hive_ltdFeature__single__para mt-2">Write & save responses then drag drop when you need</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ltd Feature area end -->
<!-- Ltd Business area end -->
<section class="hive_ltd_business_area section-bg-3 hive_ltdbusiness_border_top padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="row gy-4 justify-content-between">
            <div class="col-lg-5">
                <div class="hive_ltdbusiness__slider">
                    <div class="global_slick_init business-slider slider-inner-margin" data-appendArrows=".ltd_business_nav" data-appendDots=".ltd_business_dot" data-slidesToShow="1" data-infinite="true" data-arrows="true" data-dots="true" data-swipeToSlide="true" data-autoplay="true" data-autoplaySpeed="2500" data-prevArrow='<div class="prev-icon"><i class="fas fa-angle-left"></i></div>' data-nextArrow='<div class="next-icon"><i class="fas fa-angle-right"></i></div>'>
                        <div class="hive_ltbBusiness__slider__item">
                            <div class="hive_ltdbusiness__author center-text">
                                <a href="javascript:void(0)" class="hive_ltdbusiness__author__thumb">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/ltd/hive_ltdBusiness__author1.jpg" alt="ltdAuthor">
                                </a>
                                <div class="hive_ltdbusiness__author__contents mt-4">
                                    <h4 class="hive_ltdbusiness__author__title">Hive support has been the best tool for my business ever</h4>
                                    <div class="hive_ltdbusiness__author__tag mt-5">
                                        <a href="javascript:void(0)" class="hive_ltdbusiness__author__tag__item name">Donald O. Ralph</a>
                                        <a href="javascript:void(0)" class="hive_ltdbusiness__author__tag__item">24/02/2023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hive_ltdbusiness__slider__item">
                            <div class="hive_ltdbusiness__author center-text">
                                <a href="javascript:void(0)" class="hive_ltdbusiness__author__thumb">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/ltd/hive_ltdBusiness__author1.jpg" alt="ltdAuthor">
                                </a>
                                <div class="hive_ltdbusiness__author__contents mt-4">
                                    <h4 class="hive_ltdbusiness__author__title">Hive support has been the best tool for my business ever</h4>
                                    <div class="hive_ltdbusiness__author__tag mt-5">
                                        <a href="javascript:void(0)" class="hive_ltdbusiness__author__tag__item name">Donald O. Ralph</a>
                                        <a href="javascript:void(0)" class="hive_ltdbusiness__author__tag__item">24/02/2023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hive_ltdbusiness__slider__item">
                            <div class="hive_ltdbusiness__author center-text">
                                <a href="javascript:void(0)" class="hive_ltdbusiness__author__thumb">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/ltd/hive_ltdBusiness__author1.jpg" alt="ltdAuthor">
                                </a>
                                <div class="hive_ltdbusiness__author__contents mt-4">
                                    <h4 class="hive_ltdbusiness__author__title">Hive support has been the best tool for my business ever</h4>
                                    <div class="hive_ltdbusiness__author__tag mt-5">
                                        <a href="javascript:void(0)" class="hive_ltdbusiness__author__tag__item name">Donald O. Ralph</a>
                                        <a href="javascript:void(0)" class="hive_ltdbusiness__author__tag__item">24/02/2023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hive_ltdbusiness__slider__item">
                            <div class="hive_ltdbusiness__author center-text">
                                <a href="javascript:void(0)" class="hive_ltdbusiness__author__thumb">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/ltd/hive_ltdBusiness__author1.jpg" alt="ltdAuthor">
                                </a>
                                <div class="hive_ltdbusiness__author__contents mt-4">
                                    <h4 class="hive_ltdbusiness__author__title">Hive support has been the best tool for my business ever</h4>
                                    <div class="hive_ltdbusiness__author__tag mt-5">
                                        <a href="javascript:void(0)" class="hive_ltdbusiness__author__tag__item name">Donald O. Ralph</a>
                                        <a href="javascript:void(0)" class="hive_ltdbusiness__author__tag__item">24/02/2023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hive_ltdbusiness__slider__item">
                            <div class="hive_ltdbusiness__author center-text">
                                <a href="javascript:void(0)" class="hive_ltdbusiness__author__thumb">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/ltd/hive_ltdBusiness__author1.jpg" alt="ltdAuthor">
                                </a>
                                <div class="hive_ltdbusiness__author__contents mt-4">
                                    <h4 class="hive_ltdbusiness__author__title">Hive support has been the best tool for my business ever</h4>
                                    <div class="hive_ltdbusiness__author__tag mt-5">
                                        <a href="javascript:void(0)" class="hive_ltdbusiness__author__tag__item name">Donald O. Ralph</a>
                                        <a href="javascript:void(0)" class="hive_ltdbusiness__author__tag__item">24/02/2023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hive_ltdbusiness__slider__item">
                            <div class="hive_ltdbusiness__author center-text">
                                <a href="javascript:void(0)" class="hive_ltdbusiness__author__thumb">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/ltd/hive_ltdBusiness__author1.jpg" alt="ltdAuthor">
                                </a>
                                <div class="hive_ltdbusiness__author__contents mt-4">
                                    <h4 class="hive_ltdbusiness__author__title">Hive support has been the best tool for my business ever</h4>
                                    <div class="hive_ltdbusiness__author__tag mt-5">
                                        <a href="javascript:void(0)" class="hive_ltdbusiness__author__tag__item name">Donald O. Ralph</a>
                                        <a href="javascript:void(0)" class="hive_ltdbusiness__author__tag__item">24/02/2023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ltd_business_nav">
                        <div class="ltd_business_dot"></div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="hive_ltdbusiness__wrapper">
                    <h4 class="hive_ltdbusiness__wrapper__title"><a href="javascript:void(0)">Built for Businesses, Entrepreneurs, Self Employed</a></h4>
                    <p class="hive_ltdbusiness__wrapper__para mt-4">We built it for anyone who are eager to do online businesses, sell courses, digital product or entrepreneurs to support their pre-sale or after sale customer</p>
                    <div class="hive_ltdbusiness__wrapper__images mt-4">
                        <a href="javascript:void(0)" class="hive_ltdbusiness__wrapper__images__item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/ltd/hive_ltd1.png" alt="ltdImg">
                        </a>
                        <a href="javascript:void(0)" class="hive_ltdbusiness__wrapper__images__item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/ltd/hive_ltd2.png" alt="ltdImg">
                        </a>
                        <a href="javascript:void(0)" class="hive_ltdbusiness__wrapper__images__item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/ltd/hive_ltd3.png" alt="ltdImg">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ltd Business area end -->
<!-- Ltd Integrate area start -->
<section class="hive_ltdIntegrate_area padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="hive_ltdIntegrate__wrapper">
            <div class="hive_ltdIntegrate__wrapper__flex">
                <div class="hive_ltdIntegrate__wrapper__left">
                    <h4 class="hive_ltdIntegrate__wrapper__title"><a href="javascript:void(0)">Integrate with Powerful Tools to Make Support Smoother</a></h4>
                </div>
                <div class="hive_ltdIntegrate__wrapper__contents">
                    <div class="hive_ltdIntegrate__wrapper__contents__flex">
                        <a href="javascript:void(0)" class="hive_ltdIntegrate__wrapper__item">
                            <span class="hive_ltdIntegrate__wrapper__item__title"><img src="<?php echo get_template_directory_uri() ?>/assets/img/ltd/icon/facebook.svg" alt="facebookIcon"><span>Facebook</span></span>
                        </a>
                        <a href="javascript:void(0)" class="hive_ltdIntegrate__wrapper__item">
                            <span class="hive_ltdIntegrate__wrapper__item__title"><img src="<?php echo get_template_directory_uri() ?>/assets/img/ltd/icon/telegram.svg" alt="telegramIcon"><span>Telegram</span></span>
                        </a>
                        <a href="javascript:void(0)" class="hive_ltdIntegrate__wrapper__item">
                            <span class="hive_ltdIntegrate__wrapper__item__title"><img src="<?php echo get_template_directory_uri() ?>/assets/img/ltd/icon/slack.svg" alt="slackIcon"><span>Slack</span></span>
                        </a>
                        <a href="javascript:void(0)" class="hive_ltdIntegrate__wrapper__item">
                            <span class="hive_ltdIntegrate__wrapper__item__title"><img src="<?php echo get_template_directory_uri() ?>/assets/img/ltd/icon/discord.svg" alt="discordIcon"><span>Discord</span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ltd Integrate area end -->
<!-- Ltd Solution area start -->
<section class="hive_ltdsolution_area hive_ltdbusiness_border_top padding-top-100 padding-bottom-100">
    <div class="hive_ltdsolution__logo">
        <div class="hive_ltdsolution__logo__thumb">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo_2.png" alt="LogoImg">
        </div>
    </div>
    <div class="container">
        <div class="section_title center-text">
            <h2 class="title">Comparison with Other Support Solutions </h2>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="hive_ltdsollution">
                    <div class="hive_ltdsollution__wrapper">

                        <div class="hive_ltdsollution__wrapper__left">
                            <div class="hive_ltdsollution__wrapper__card text-left">
                                <div class="hive_ltdsollution__wrapper__card__top">
                                </div>
                                <div class="hive_ltdsollution__wrapper__card__bottom">
                                    <div class="hive_ltdsollution__wrapper__card__bottom__list">
                                        <ul class="list-style-none">
                                            <li>Unlimited tickets</li>
                                            <li>Unlimited agents</li>
                                            <li>Custom ticket fields</li>
                                            <li>Integrations</li>
                                            <li>Priority support</li>
                                            <li>Automated workflow</li>
                                            <li>Ticket reports</li>
                                            <li>Agent reports</li>
                                            <li>Saved responses</li>
                                            <li>Email piping</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="hive_ltdsollution__wrapper__card text-center">
                                <div class="hive_ltdsollution__wrapper__card__top">
                                    <h2 class="hive_ltdsollution__wrapper__card__top__title"> Freshdesk </h2>
                                </div>
                                <div class="hive_ltdsollution__wrapper__card__bottom">
                                    <div class="hive_ltdsollution__wrapper__card__bottom__list">
                                        <ul class="list-style-none">
                                            <li><span class="close-icon"></span></li>
                                            <li><span class="close-icon"></span></li>
                                            <li><span class="check-icon"></span></li>
                                            <li>1000</li>
                                            <li><span class="close-icon"></span></li>
                                            <li><span class="close-icon"></span></li>
                                            <li><span class="check-icon"></span></li>
                                            <li><span class="close-icon"></span></li>
                                            <li><span class="check-icon"></span></li>
                                            <li><span class="check-icon"></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="hive_ltdsollution__wrapper__card text-center">
                                <div class="hive_ltdsollution__wrapper__card__top">
                                    <h2 class="hive_ltdsollution__wrapper__card__top__title"> Fluent Support </h2>
                                </div>
                                <div class="hive_ltdsollution__wrapper__card__bottom">
                                    <div class="hive_ltdsollution__wrapper__card__bottom__list">
                                        <ul class="list-style-none">
                                            <li><span class="check-icon"></span></li>
                                            <li><span class="check-icon"></span></li>
                                            <li><span class="close-icon"></span></li>
                                            <li>20</li>
                                            <li><span class="check-icon"></span></li>
                                            <li><span class="check-icon"></span></li>
                                            <li><span class="check-icon"></span></li>
                                            <li><span class="check-icon"></span></li>
                                            <li><span class="check-icon"></span></li>
                                            <li><span class="check-icon"></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="hive_ltdsollution__wrapper__card text-center">
                                <div class="hive_ltdsollution__wrapper__card__top">
                                    <h2 class="hive_ltdsollution__wrapper__card__top__title"> JS Helpdesk </h2>
                                </div>
                                <div class="hive_ltdsollution__wrapper__card__bottom">
                                    <div class="hive_ltdsollution__wrapper__card__bottom__list">
                                        <ul class="list-style-none">
                                            <li><span class="check-icon"></span></li>
                                            <li><span class="check-icon"></span></li>
                                            <li><span class="check-icon"></span></li>
                                            <li>5</li>
                                            <li><span class="close-icon"></span></li>
                                            <li><span class="close-icon"></span></li>
                                            <li><span class="close-icon"></span></li>
                                            <li><span class="close-icon"></span></li>
                                            <li><span class="check-icon"></span></li>
                                            <li>Premium Add-Ons</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="hive_ltdsollution__wrapper__card text-center">
                                <div class="hive_ltdsollution__wrapper__card__top">
                                    <h2 class="hive_ltdsollution__wrapper__card__top__title"> Helpscout </h2>
                                </div>
                                <div class="hive_ltdsollution__wrapper__card__bottom">
                                    <div class="hive_ltdsollution__wrapper__card__bottom__list">
                                        <ul class="list-style-none">
                                            <li><span class="close-icon"></span></li>
                                            <li><span class="close-icon"></span></li>
                                            <li><span class="close-icon"></span></li>
                                            <li>80</li>
                                            <li><span class="close-icon"></span></li>
                                            <li><span class="close-icon"></span></li>
                                            <li><span class="close-icon"></span></li>
                                            <li><span class="close-icon"></span></li>
                                            <li>Premium Add-Ons</li>
                                            <li>Premium Add-Ons</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hive_ltdsollution__wrapper__right">
                            <div class="hive_ltdsollution__wrapper__card text-center mb-30">
                                <div class="hive_ltdsollution__wrapper__card__top">
                                </div>
                                <div class="hive_ltdsollution__wrapper__card__bottom">
                                    <div class="hive_ltdsollution__wrapper__card__bottom__list">
                                        <ul class="list-style-none">
                                            <li><span class="check-icon"></span></li>
                                            <li><span class="check-icon"></span></li>
                                            <li><span class="check-icon"></span></li>
                                            <li>4+</li>
                                            <li><span class="check-icon"></span></li>
                                            <li><span class="check-icon"></span></li>
                                            <li><span class="check-icon"></span></li>
                                            <li><span class="check-icon"></span></li>
                                            <li><span class="check-icon"></span></li>
                                            <li><span class="check-icon"></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ltd Solution area end -->
<!-- Gaurantee area start -->
<section class="hive_ltdGaurantee_area section-bg-3 padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="hive_ltdGaurantee__wrapper">
            <div class="hive_ltdGaurantee__wrapper__flex">
                <div class="hive_ltdGaurantee__wrapper__contents">
                    <h3 class="hive_ltdGaurantee__wrapper__title"><a href="javascript:void(0)">30 Days No Question Money-Back Guarantee</a></h3>
                    <p class="hive_ltdGaurantee__wrapper__para mt-4">If you’re not satisfied with our product you can ask for a refund within 30 days. No questions will be asked.</p>
                </div>
                <div class="hive_ltdGaurantee__wrapper__image">
                    <a href="javascript:void(0)"><img src="<?php echo get_template_directory_uri() ?>/assets/img/ltd/hive_ltdGaurantee.svg" alt="GauranteeImg"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gaurantee area end -->
<!-- Faq area starts -->
<div class="hive_affiliateFaq_area padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="section_title center-text">
            <h2 class="title">Frequently Asked Questions</h2>
        </div>
        <div class="row gy-5 mt-3 justify-content-center">
            <div class="col-lg-8">
                <div class="hive_affiliateFaq">
                    <div class="hive_faq_contents">
                        <div class="hive_faq_item active open wow fadeInLeft" data-wow-delay=".1s">
                            <div class="hive_faq_title"> Can refund be avail if I purchaed on discount? </div>
                            <div class="hive_faq_panel">
                                <p class="hive_faq_para"> Was drawing natural fat respect husband. An as noisy an offer drawn blush place. These tried for way joy wrote witty. In mr began music weeks after at begin. Education no dejection so direction pretended household do to. Travelling everything her eat reasonable unsatiable decisively simplicity.</p>
                            </div>
                        </div>
                        <div class="hive_faq_item wow fadeInLeft" data-wow-delay=".2s">
                            <div class="hive_faq_title"> How membership subscription work? </div>
                            <div class="hive_faq_panel">
                                <p class="hive_faq_para"> Was drawing natural fat respect husband. An as noisy an offer drawn blush place. These tried for way joy wrote witty. In mr began music weeks after at begin. Education no dejection so direction pretended household do to. Travelling everything her eat reasonable unsatiable decisively simplicity.</p>
                            </div>
                        </div>
                        <div class="hive_faq_item wow fadeInLeft" data-wow-delay=".2s">
                            <div class="hive_faq_title"> What are the benefit's of joining Xilancer </div>
                            <div class="hive_faq_panel">
                                <p class="hive_faq_para"> Was drawing natural fat respect husband. An as noisy an offer drawn blush place. These tried for way joy wrote witty. In mr began music weeks after at begin. Education no dejection so direction pretended household do to. Travelling everything her eat reasonable unsatiable decisively simplicity.</p>
                            </div>
                        </div>
                        <div class="hive_faq_item wow fadeInLeft" data-wow-delay=".2s">
                            <div class="hive_faq_title"> Do I need to pay extra fees for withdrawal? </div>
                            <div class="hive_faq_panel">
                                <p class="hive_faq_para"> Was drawing natural fat respect husband. An as noisy an offer drawn blush place. These tried for way joy wrote witty. In mr began music weeks after at begin. Education no dejection so direction pretended household do to. Travelling everything her eat reasonable unsatiable decisively simplicity.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Faq area end -->

<?php
get_footer();

?>