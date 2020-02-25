<?php
/**
 * Template Name: Home Page
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */
// Exit if accessed directly.

defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div class="heroImageHomepage">
    <div class="heroImgeLayer text-center">
        <div class="m-auto text-padd">
            <h1>THE FASTEST WAY TO LEARN SALES ONLINE GUARANTEED</h1>
            <h2>Guided Online Sales Training for Entrepreneurs</h2>
            <p><strong>110% money back guaranteed to grow your sales</strong></p>
            <button type="button" class="btn btn-dark heroHomeBTN">LEARN MORE</button>
        </div>
    </div>
</div>
<div class="container-fluid statistics mt-5">
    <div class="row text-center">
        <div class="col-lg-4 p-0">
            <div class="sales-agents">
                <h3>11500+</h3>
                <p>Students</p>
            </div>
        </div>
        <div class="col-lg-4 p-0">
            <div class="applications">
                <h3>600+</h3>
                <p>Companies</p>
            </div>
        </div>
        <div class="col-lg-4 p-0">
            <div class="oportunities">
                <h3>240%</h3>
                <p>Business Growth</p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h2>
        <div class="welcome-title text-center justify-content-center d-flex">
            <h2 class="my-auto">Welcome to</h2>
            <p>
                <img class="alignnone size-full wp-image-14013" src="<?php echo get_permalink(); ?>wp-content/uploads/2020/02/cropped-logo-300x113.png" alt="" width="150" height="190">
            </p>
        </div>
    </h2>
    <div class="row mt-3 underlogowelcome text-center m-auto justify-content-center">
        <div class="col-lg-8">
            <h3>BECOME A SALES EXPERT AND GROW YOUR BUSINESS BY 240% IN JUST THREE MONTHS WITH OUR ONLINE TRAINING</h3>
        </div>
    </div>
</div>

<div class="container mt-5 twoHalfImages">
    <div class="row">
        <div class="col-lg-6">
            <h4>PREMIUM E-LEARNING SALES TRAINING</h4>
            <img src="<?php echo get_permalink(); ?>wp-content/uploads/2020/02/leftimage-scaled.jpg" class="img-fluid">
            <button type="button" class="btn btn-dark twoHalfsButtons">LEARN MORE</button>
        </div>
        <div class="col-lg-6">
            <h4>E-LEARNING GUIDED SALES TRAINING</h4>
            <img src="<?php echo get_permalink(); ?>wp-content/uploads/2020/02/rightiamge-scaled.jpg" class="img-fluid">
            <button type="button" class="btn btn-dark twoHalfsButtons">LEARN MORE</button>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row cards-columns d-flex justify-content-center align-items-center">
        <div class="col-lg-5">
            <img src="<?php echo get_permalink(); ?>wp-content/uploads/2020/02/knigata.png" class="img-fluid">
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5 cta-book">
        <div class="card green">
            <div class="card-body">
                <h5 class="card-title">Register Free for Sales E-book Now</h5>
                <form action="" method="GET">
                    <div class="form-group">
                    <input type="text" class="form-control" name="Agent_Name" id="Agent_Name" aria-describedby="helpId" placeholder="Name">
                    </div>
                    <div class="form-group">
                    <input type="email" class="form-control" name="Agent_Email" id="Agent_Email" aria-describedby="emailHelpId" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-primary btn-join">GO</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<img class="mt-5" src="<?php echo get_permalink(); ?>wp-content/themes/salesacademy/img/video.png">
<div class="container">
    <h2 class="testi_head">Testimonials</h2>
    <div class="test-slider mb-5">
        <div>
            <div class="testimonial-box">
                <img src="https://cdn0.iconfinder.com/data/icons/avatar-78/128/12-512.png" class="testimonials-img" alt="">
                <p class="testimonial-desc mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="name text-center">
                    <p class="mr-2">Lorem Ipsum</p><span>CEO at Lorem</span>
                </div>
            </div>
        </div>
        <div>
            <div class="testimonial-box">

                <img src="https://cdn0.iconfinder.com/data/icons/avatar-78/128/12-512.png" class="testimonials-img" alt="">
                <p class="testimonial-desc mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="name text-center">
                    <p class="mr-2">Lorem Ipsum</p><span>European Sales Executive</span>
                </div>
            </div>
        </div>
        <div>
            <div class="testimonial-box">

                <img src="https://cdn0.iconfinder.com/data/icons/avatar-78/128/12-512.png" class="testimonials-img" alt="">
                <p class="testimonial-desc mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="name text-center">
                    <p class="mr-2">Lorem Ipsum</p><span>Recruitment Manager at Iposum</span>
                </div>
            </div>
        </div>
        <div>
            <div class="testimonial-box">

                <img src="https://cdn0.iconfinder.com/data/icons/avatar-78/128/12-512.png" class="testimonials-img" alt="">
                <p class="testimonial-desc mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="name text-center">
                    <p class="mr-2">Lorem Ipsum</p><span>Global Export Manager at Future</span>
                </div>
            </div>
        </div>
        <div>
            <div class="testimonial-box">
                <img src="https://cdn0.iconfinder.com/data/icons/avatar-78/128/12-512.png" class="testimonials-img" alt="">
                <p class="testimonial-desc mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <div class="name text-center">
                    <p class="mr-2">Lorem Ipsum</p><span>Commercial Director at Onwebmax</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container marginTopojni">
    <div class="row bg-color-row">
        <div class="col-lg-6 m-auto">
            <div class="wraperText">
                <p>"The structure and techniques I was using before I thought were great - but in hindsight they cost me so many missed opportunities! </p> <br>
                <p>After the lessons learned in this course I increased new business by 245% in just two quarters against the previous financial year.</p><br>
                <p>You need to take this course!" </p><br><br>
                <p> Steve Regis - Great Britain Entrepreneur of the Year Finalist </p>
            </div>
        </div>
        <div class="col-lg-6">
            <img class="img-fluid" src="<?php echo get_permalink(); ?>wp-content/uploads/2020/02/steve.png">
        </div>
    </div>
</div>

<script type="text/javascript">
jQuery(document).ready(function($) {

    $('.test-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 6000,
    });
});
</script>
<?php
get_footer();
