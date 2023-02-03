<?php
//SocialShare
function hive_social_sharing($atts)
{
    ob_start();
    $sb_url = urlencode(get_permalink());

    // Get current page title
    $sb_title = str_replace(' ', '%20', get_the_title());

    // Construct sharing URL without using any script
    $twitterURL = 'https://twitter.com/intent/tweet?text=' . $sb_title . '&amp;url=' . $sb_url;
    $facebookURL = 'https://www.facebook.com/sharer.php?u=' . $sb_url . '&amp;title=' . $sb_title;
    $linkedInURL = 'http://www.linkedin.com/shareArticle?mini=true&url=' . $sb_url . '&amp;title=' . $sb_title . '&source=' . get_bloginfo("url");
    extract(shortcode_atts(array(), $atts));

    return '
		<ul class="hive_blogDetails__social__list"> 
        	<li><a href="' . $facebookURL . '" target="_blank" rel="nofollow"><i class="fa-brands fa-facebook-f"></a></li>
			<li><a href="' . $twitterURL . '" target="_blank" rel="nofollow"><i class="fa-brands fa-twitter"></li>
        	<li><a href="' . $linkedInURL . '" target="_blank" rel="nofollow"><i class="fa-brands fa-linkedin"></a></li>
        </ul>';

    
    $value = ob_get_clean();

    return $value;

}
add_shortcode("hive_post_social_sharing", "hive_social_sharing");

