<?php
 

add_filter('comment_form_fields', 'hive_custom_comment_field');
function hive_custom_comment_field($fields)
{
    // What fields you want to control.
    $comment_field = $fields['author'];
    $comment_field = $fields['email'];
    $comment_field = $fields['comment'];
    $comment_field = $fields['cookies'];

    // The fields you want to unset (remove).
    unset($fields['author']);
    unset($fields['email']);
    unset($fields['url']);
    unset($fields['comment']);
    unset($fields['cookies']);

    // Display the fields to your own taste.
    // The order in which you place them will determine in what order they are displayed.

    $fields['author'] = '<p class="comment-form-author"><label for="author">Name <span class="required">*</span></label><input type="text" id="author" name="author" require="required" placeholder="Name"></p>';
    $fields['email'] = '<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label><input type="text" id="email" name="email" require="required" placeholder="Email"></p>';
    $fields['comment'] = '<p class="comment-form-comment"><label for="comment">Comment <span class="required">*</span></label><textarea id="comment" name="comment" required="required" placeholder="Comment"></textarea></p>';
    $fields['cookies'] = '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"><label for="wp-comment-cookies-consent">Save details for future comments?</label></p>';
    return $fields;
}


if (!function_exists('hive_better_commets')) {
    function hive_better_commets($comment, $args, $depth)
    {
?>
        <div class="hive_blogDetails__commentView mt-4 mt-lg-5">
            <div class="comment-arrow"></div>
            <?php if ($comment->comment_approved == '0') : ?>
                <em><?php esc_html_e('Your comment is awaiting moderation.', '5balloons_theme') ?></em>
                <br />
            <?php endif; ?>
            <div class="hive_blogDetails__commentView__item">
                <div class="hive_blogDetails__commentView__flex">
                    <div class="hive_blogDetails__commentView__thumb">
                        <?php echo get_avatar($comment, $size = '80', $default = 'http://0.gravatar.com/avatar/36c2a25e62935705c5565ec465c59a70?s=32&d=mm&r=g'); ?>

                    </div>
                    <div class="hive_blogDetails__commentView__contents">
                        <h5 class="hive_blogDetails__commentView__title"><?php echo get_comment_author() ?></h5>
                        <span class="hive_blogDetails__commentView__date"><?php printf(/* translators: 1: date and time(s). */esc_html__('%1$s at %2$s', '5balloons_theme'), get_comment_date(),  get_comment_time()) ?></span>
                        <p class="hive_blogDetails__commentView__para mt-2"><?php comment_text() ?></p>
                    </div>
                </div>
            </div>
        </div>

<?php
    }
}
