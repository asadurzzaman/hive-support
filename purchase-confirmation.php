<?php
/**
 * Template Name: Purchase Confirmation
 */

get_header();
?>
 
<div class="section-bg-2 padding-top-100 padding-bottom-100">
	<div class="container">
		<div class="row"> 
			<main id="primary" class="site-main">  
                <div class="purchase-confirm-wrapper">
                    <?php echo do_shortcode('[edd_receipt]'); ?>
                </div> 
			</main><!-- #main -->
		</div>
	</div>
</div>
<?php
get_footer();
