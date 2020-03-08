<?php
/**
 * Template Name: Contact Landing Page
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */
// Exit if accessed directly.

defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div class="container">
    <div class="col-lg-12 mt-5 text-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="row mt-5">
        <div class="col-lg-6">
            <div class="imageLandingBg"></div>
        </div>
        <div class="col-lg-6">
            <form action="#contactForm" method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">First Name</label>
                        <input type="text" class="form-control" id="inputEmail4" name="nameSenderContant" placeholder="Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Last Name</label>
                        <input type="text" class="form-control" id="inputPassword4" name="emailSenderContant" placeholder="Email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="nameSenderContant" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <textarea type="text" class="form-control" name="messageContent" id="Agent_Name" aria-describedby="helpId" placeholder="How can we help?"></textarea>
                </div>
                <div class="text-center btnWraper">
                    <button type="submit" name="sendMessage" class="btn btn-primary readMoreBTNBlogHome">Send Message</button>
                </div>
                <?php 
                if ($mailSent == 1){ ?>
                    <div class="alert alert-success mt-5 text-center" role="alert">
                        Email Successfully sent. Please check your inbox or spam folder.
                    </div>
                <?php   
                } ?>
            </form>
        </div>
    </div>
</div>

<?php
get_footer();