<?php

/**
 *  Template Name: Sign In
 */

get_header();
?>

<!-- Sign In area Starts -->
<div class="hive_signIn_area section-bg-2 padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="hive_signIn__wrapper radius-10">
            <h3 class="hive_signIn__title">Welcome back 👋</h3>
            <p class="hive_signIn__para mt-2">Log in to continue</p>
            <div class="hive_signIn__form custom-form mt-4">
                <form name="loginform" id="loginform" action="<?php echo site_url('/wp-login.php'); ?>" method="post">
                    <div class="single-input input-padding-left">
                        <input id="user_login" type="text" class="form--control radius-5" name="log" placeholder="Email Address">
                        <span class="input-icon"><i class="fa-solid fa-envelope"></i></span>
                    </div>
                    <div class="single-input input-padding-left">
                        <input id="user_pass" type="password" name="pwd" class="form--control radius-5" placeholder="Password">
                        <span class="input-icon"><i class="fa-solid fa-lock"></i></span>
                        <span class="toggle-password"><i class="fa-solid fa-eye-slash"></i></span>
                    </div>
                    <div class="single-input">
                        <div class="d-flex flex-wrap gap-2 justify-content-between">
                            <div class="checkbox-inline">
                                <input id="rememberme" name="rememberme" id="remember" type="checkbox" class="check-input">
                                <label for="remember" class="checkbox-label">Remember Me</label>
                            </div>
                            <a href="<?php echo esc_url(wp_lostpassword_url()); ?>" class="forgot-password">Forgot Password</a>
                        </div>
                    </div>
                    <button id="wp-submit" type="submit" class="submit-btn w-100 radius-10" value="Login" name="wp-submit">Log In</button>
                    <div class="single-input">
                        <p class="hive_signIn__para">Don't have an account? <a href="<?php echo site_url('/sign-up') ?>" class="forgot-password">Sign Up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Sign In area end -->

<?php
get_footer();
