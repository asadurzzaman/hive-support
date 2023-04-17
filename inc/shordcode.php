<?php

// Function to handle the thumbnail request
function get_the_post_thumbnail_src($img)
{
    return (preg_match('~\bsrc="([^"]++)"~', $img, $matches)) ? $matches[1] : '';
}
function wpvkp_social_buttons($content)
{
    global $post;

        // Get current page URL 
        $sb_url = urlencode(get_permalink());

        // Get current page title
        $sb_title = str_replace(' ', '%20', get_the_title());

        // Get Post Thumbnail for pinterest
        $sb_thumb = get_the_post_thumbnail_src(get_the_post_thumbnail());

        // Construct sharing URL without using any script
        $twitterURL = 'https://twitter.com/intent/tweet?text='.$sb_title.'&amp;url='.$sb_url.'&amp;'; 
        $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $sb_url . '&t=' . $sb_title . '';
        $linkedInURL = 'http://www.linkedin.com/shareArticle?mini=true&url='.$sb_url.'&amp;title='.$sb_title.'&source='.get_bloginfo("url");
 
        // Add sharing button at the end of page/page content
        $content .= '<ul class="hive_blogDetails__social__list"> ';
        $content .= '<li><a href="' . $twitterURL . '" target="_blank" rel="nofollow"><i class="fa-brands fa-twitter"></i></a></li>';
        $content .= '<li><a href="'.$facebookURL.'" target="_blank" rel="nofollow"><i class="fa-brands fa-facebook-f"></i></a></li>';
        $content .= '<li><a href="'. $linkedInURL.'" target="_blank" rel="nofollow"><i class="fa-brands fa-linkedin"></i></a></li>';
        $content .= '</ul>';

        return $content;
   
};
// Enable the_content if you want to automatically show social buttons below your post.

//add_filter('the_content', 'wpvkp_social_buttons');

// This will create a wordpress shortcode [social].
// Please it in any widget and social buttons appear their.
// You will need to enabled shortcode execution in widgets.
add_shortcode('social', 'wpvkp_social_buttons');



