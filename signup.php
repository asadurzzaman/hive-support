<?php

/**
 *  Template Name: singup
 */

get_header();
?>

<!-- Sign In area Starts -->
<div class="hive_signIn_area section-bg-2 padding-top-100 padding-bottom-100">
    <div class="container">
        <div class="hive_signIn__wrapper signUp__wrapper radius-10">
            <h3 class="hive_signIn__title">Create an accout</h3>
            <p class="hive_signIn__para mt-2">To lets get started</p>
            <div class="hive_signIn__form custom-form mt-4">
                <form action="#">
                    <div class="single-flex-input">
                        <div class="single-input input-padding-left">
                            <input type="text" class="form--control radius-5" placeholder="First Name">
                            <span class="input-icon"><i class="fa-solid fa-user"></i></span>
                        </div>
                        <div class="single-input input-padding-left">
                            <input type="text" class="form--control radius-5" placeholder="Last Name">
                            <span class="input-icon"><i class="fa-solid fa-user"></i></span>
                        </div>
                    </div>
                    <div class="single-flex-input">
                        <div class="single-input input-padding-left">
                            <input type="text" class="form--control radius-5" placeholder="Email Address">
                            <span class="input-icon"><i class="fa-solid fa-envelope"></i></span>
                        </div>
                    </div>
                    <div class="single-flex-input">
                        <div class="single-input input-padding-left">
                            <input type="password" class="form--control radius-5" placeholder="Password">
                            <span class="input-icon"><i class="fa-solid fa-lock"></i></span>
                            <span class="toggle-password"><i class="fa-solid fa-eye-slash"></i></span>
                        </div>
                        <div class="single-input input-padding-left">
                            <input type="password" class="form--control radius-5" placeholder="Confirm Password">
                            <span class="input-icon"><i class="fa-solid fa-lock"></i></span>
                            <span class="toggle-password"><i class="fa-solid fa-eye-slash"></i></span>
                        </div>
                    </div>
                    <div class="single-input">
                        <div class="d-flex flex-wrap gap-2 justify-content-between">
                            <div class="checkbox-inline">
                                <input id="remember" type="checkbox" class="check-input">
                                <label for="remember" class="checkbox-label">Remember Me</label>
                            </div>
                            <!-- <a href="forgot_password.html" class="forgot-password">Forgot Password</a> -->
                        </div>
                    </div>
                    <button type="submit" class="submit-btn w-100 radius-10">Sign Up</button>
                    <div class="single-input">
                        <p class="hive_signIn__para">Already have an account? <a href="signIn.html" class="forgot-password">Sign In</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Sign In area end -->

<?php
get_footer();
