<?php

/**
 * Template Name: Contact Page
 */

get_header(); ?>

<!-- Contact area Starts -->
<div class="hive_contact_area section-bg-2 padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="hive_contact">
                    <div class="hive_contact__single radius-10">
                        <h4 class="hive_contact__title">Contact Us</h4>
                        <p class="hive_contact__para mt-2">Our friendly team would love to hear from you.</p>
                        <div class="hive_contact__form custom-form mt-4">
                            <?php

                            $cont_from_short = get_theme_mod('contect_from');

                            echo do_shortcode($cont_from_short);

                            ?>
                            <!-- <form action="#">
                                <div class="single-flex-input">
                                    <div class="single-input">
                                        <input type="text" class="form--control radius-5" placeholder="First Name">
                                    </div>
                                    <div class="single-input">
                                        <input type="text" class="form--control radius-5" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="single-input">
                                    <input type="text" class="form--control radius-5" placeholder="Email Address">
                                </div>
                                <div class="single-input">
                                    <input type="tel" class="form--control radius-5" id="phone" placeholder="Phone Number">
                                </div>
                                <div class="single-input">
                                    <textarea name="message" cols="100" rows="3" class="form--control radius-5" placeholder="Write Your Message..."></textarea>
                                </div>
                                <button type="submit" class="submit-btn radius-5">Submit</button>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hive_contact__right">
                    <div class="hive_contact__card">
                        <div class="hive_contact__card__flex">
                            <div class="hive_contact__card__item center-text radius-10">
                                <div class="hive_contact__card__icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div class="hive_contact__card__contents">
                                    <p class="hive_contact__card__para mt-2"><?php echo get_theme_mod('address_setting') ?></p>
                                </div>
                            </div>
                            <div class="hive_contact__card__item center-text radius-10">
                                <div class="hive_contact__card__icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div class="hive_contact__card__contents">
                                    <p class="hive_contact__card__para mt-2"><a href="mailto:<?php echo get_theme_mod('support_email_setting') ?>"><?php echo get_theme_mod('support_email_setting') ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hive_contact_map mt-4">
                        <iframe class="w-100" src="https://www.openstreetmap.org/export/embed.html?bbox=79.80468750000001%2C19.21780295966795%2C98.15185546875001%2C28.081673729044283&amp;layer=mapnik"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact area end -->

<?php
get_footer(); ?>