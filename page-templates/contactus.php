<?php
/**
 * Template Name: Contact Us
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */
// Exit if accessed directly.

defined( 'ABSPATH' ) || exit;

get_header(); ?>


<?php
if (isset($_POST['sendMessage'])){
    $to = $_POST['emailSenderContant'];
    $subject = 'Free Ebook';
    $body = 'Hi '.$_POST['bookRequestName'].'<br>Here is your Free Ebook';
    $headers = array('Content-Type: text/html; charset=UTF-8');
    
    wp_mail( $to, $subject, $body, $headers );
    $mailSent = 1;
}
?>

<div class="heroImageContact">
    <div class="heroImgeLayer text-center">
        <div class="m-auto text-padd">
            <h1>THE FASTEST WAY TO LEARN SALES ONLINE GUARANTEED</h1>
            <h2>Guided Online Sales Training for Entrepreneurs</h2>
            <button type="button" class="btn btn-dark heroHomeBTN">LEARN MORE</button>
        </div>
    </div>
</div>

<div class="container mt-5 about">
    <div class="col-lg-8 text-center m-auto">
        <h2 class="aboutHeading">ARE YOU LAUNCHING A NEW PRODUCT? NEED TO RADIPDLY ON-BOARD NEW CUSTOMERS?</h2>
    </div>
    <div class="col-lg-12 mt-4 text-center">
        <p>Don’t worry, we’ll get you to scale. </p>
        <p>As an entrepreneur no one knows your product or service better than you. You’re probably thinking “This thing is so great, so innovative that everyone is just going to want to buy it, it will practically sell itself, right?” WRONG! </p>
        <p>People do not want your product or service, they only want solutions to their own specific problems – even if it is a lifestyle product. People will buy for their reasons only, not yours.</p>
        <p>This course is designed for entrepreneurs to take them from innovators through to a world class sales person. Being able to sell your product or service effectively could mean the difference between your success or failure. Don’t leave it to chance! </p>
    </div>
    <div id="contactForm" class="col-lg-8 pt-5 m-auto">
        <div class="card mt-mobile-size">
            <div class="card-body">
                <h5 class="card-title text-center mb-5">Get In Touch</h5>
                <form action="#contactForm" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">First Name</label>
                            <input type="text" class="form-control" id="inputEmail4" name="nameSenderContant" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Email</label>
                            <input type="email" class="form-control" id="inputPassword4" name="emailSenderContant" placeholder="Email">
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
</div>

<?php
get_footer();