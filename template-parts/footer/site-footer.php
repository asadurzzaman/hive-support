<?php

/**
 * Displays the site footer.
 *
 * @package WordPress
 * @subpackage Hive_Support
 * @since Hive Support 1.0
 */
?>
<!-- footer area start -->
<footer class="footer_area section-bg-1">
    <div class="container">
        <div class="footer_area__wrapper">
            <div class="row gx-5 footer_area__top">
                <div class="col-lg-3 col-sm-6 mt-4">
                    <?php dynamic_sidebar('footer-sidebar-1'); ?>
                </div>
                <div class="col-lg-3 col-sm-6 mt-4">
                    <?php dynamic_sidebar('footer-sidebar-2'); ?>
                </div>
                <div class="col-lg-3 col-sm-6 mt-4">
                    <?php dynamic_sidebar('footer-sidebar-3'); ?>
                </div>
                <div class="col-lg-3 col-sm-6 mt-4">
                    <?php dynamic_sidebar('footer-sidebar-4'); ?>
                </div>
            </div>
            <div class="copyright_area copyright_border">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright_contents">
                            <span class="copyright_contents__main"> © <?php echo esc_html(date('Y')) ?> <a href="<?php echo site_url(); ?>"> <?php _e('Hive Support', 'hive-support') ?> </a><?php _e('All Rights reserved', 'hive-support') ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->
<div class="back_toTop">
    <span class="back_top"><i class="fa-solid fa-angle-up"></i></span>
</div>
<!-- Mouse Cursor start -->
<div class="mouse-move mouse-outer"></div>
<div class="mouse-move mouse-inner"></div>
<!-- Mouse Cursor Ends -->