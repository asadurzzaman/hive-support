<?php
/**
 * Template Name: My Account
 */

get_header();
?>
<?php 
    $target_tab = isset($_GET['target_tab']) ? $_GET['target_tab'] : 'dashboard';
    $display_block = "display:block;";
    $display_none = "display:none;";
?>
<div class="section-bg-2 padding-top-100 padding-bottom-100">
	<div class="container">
		<div class="row"> 
			<main id="primary" class="site-main">
 <div class="tabs">
                        <a class="tab_item <?php echo ($target_tab == 'dashboard') ? 'active' : '';?>" href="<?php echo home_url() . '/my-account?target_tab=dashboard'; ?>" data-target="tab_dashboard">Dashboard</a>
                        <a href="<?php echo home_url() . '/my-account?target_tab=purches_history'; ?>" class="tab_item <?php echo ($target_tab == 'purches_history') ? 'active' : '';?>" data-target="tab_purchase_history">Purchase History</a>
                        <a href="<?php echo home_url() . '/my-account?target_tab=support'; ?>" class="tab_item <?php echo ($target_tab == 'support') ? 'active' : '';?>" data-target="tab_support">Support</a>
                        <a href="<?php echo home_url() . '/my-account?target_tab=profile'; ?>" class="tab_item <?php echo ($target_tab == 'profile') ? 'active' : '';?>" data-target="tab_profile">Profile</a>
                        <a class="tab_item" href="<?php echo wp_logout_url(home_url() . '/log-in'); ?>" class="btn btn-left-custom">Log Out</a>
                
                    </div>

                    <div class="tap-body-wrapper">
                        <div class="tab_body" style="<?php echo ($target_tab == 'dashboard') ? $display_block : $display_none; ?>">

                            <div class="download-file">
                                 <?php echo do_shortcode('[download_history]'); ?>
                            </div>
                        </div>
                        <div class="tab_body" style="<?php echo ($target_tab == 'purches_history') ? $display_block : $display_none; ?>">
                            <?php echo do_shortcode('[purchase_history]'); ?>
                        </div>
                        <div class="tab_body" style="<?php echo ($target_tab == 'support') ? $display_block : $display_none; ?>">
                            <?php echo do_shortcode('[fluent_support_portal]'); ?>
                        </div>
                        <div class="tab_body" style="<?php echo ($target_tab == 'profile') ? $display_block : $display_none; ?>">
                            <?php echo do_shortcode('[edd_profile_editor]'); ?>
                        </div>
                    </div>
				 
			</main><!-- #main -->
		</div>
	</div>
</div>
<?php
get_footer();
