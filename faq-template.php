<?php

/**
 * Template Name: FAQ Page
 */
get_header();
?>
<div class="hive_faq_area section-bg-2 padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="hive_faq custom-form">
                    <!-- <form action="#">
                        <div class="hive_faq__input single-input">
                            <input type="text" class="form--control radius-5" placeholder="Search question...">
                        </div>
                    </form> -->
                    <div class="question-faq-wrapper mt-4">
                        <div class="hive_faq_contents"> 
                            <?php
                            $settings = get_theme_mod('faq_repeater');
                            $i = 0;
                            foreach ($settings as $setting) :  
                            ?>
                                <div class="hive_faq_item <?php if ($i == 0) {
                                                                echo $active = 'active open';
                                                            } ?> wow fadeInLeft" data-wow-delay=".2s">
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
            <div class="col-lg-4">
                <div class="hive_faq_question">
                    <span class="hive_faq_question__subtitle">Didn't find your answer</span>
                    <h4 class="hive_faq_question__title mt-2">Ask a Question</h4>
                    <div class="hive_faq_question__form custom-form mt-4">
                        <?php 

                        $from_short = get_theme_mod('faq_form_shortcode');
                        
                        echo do_shortcode($from_short);
                        
                        ?>
                        <!-- <form action="#">
                            <div class="single-input">
                                <input type="text" class="form--control radius-5" placeholder="Full Name">
                            </div>
                            <div class="single-input">
                                <input type="text" class="form--control radius-5" placeholder="Email Address">
                            </div>
                            <div class="single-input">
                                <textarea cols="70" rows="3" class="form--control radius-5"></textarea>
                            </div>
                            <button type="submit" class="submit-btn radius-5">Submit</button>
                        </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
