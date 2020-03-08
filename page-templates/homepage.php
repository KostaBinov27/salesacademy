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

<?php
if (isset($_POST['submitFreeBook'])){
    $to = $_POST['bookRequestEmail'];
    $subject = 'Free Ebook';
    $body = 'Hi '.$_POST['bookRequestName'].'<br>Here is your Free Ebook';
    $headers = array('Content-Type: text/html; charset=UTF-8');
    
    wp_mail( $to, $subject, $body, $headers );
    $mailSent = 1;
}
?>

<div class="heroImageHomepage">
    <div class="heroImgeLayer text-center">
        <div class="m-auto text-padd">
            <h1>THE FASTEST WAY TO LEARN SALES ONLINE GUARANTEED</h1>
            <h2>Guided Online Sales Training for Entrepreneurs</h2>
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
            <div class="row">
                <h2 class="margin_welocme">Welcome to</h2>
                <p>
                    <img class="alignnone size-full wp-image-14013" src="<?php echo get_permalink(); ?>wp-content/uploads/2020/02/cropped-logo-300x113.png" alt="" width="150" height="190">
                </p>
            </div>
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
        <div class="col-lg-6 mt-mobile-size">
            <h4>E-LEARNING GUIDED SALES TRAINING</h4>
            <img src="<?php echo get_permalink(); ?>wp-content/uploads/2020/02/rightiamge-scaled.jpg" class="img-fluid">
            <button type="button" class="btn btn-dark twoHalfsButtons">LEARN MORE</button>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div id="formBook" class="row cards-columns d-flex justify-content-center align-items-center">
        <div class="col-lg-5">
            <img src="<?php echo get_permalink(); ?>wp-content/themes/salesacademy/img/knigata.png" class="img-fluid">
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-5 cta-book">
        <div class="card green mt-mobile-size">
            <div class="card-body">
                <h5 class="card-title">Register And Get Our FREE Sales PlayBook</h5>
                <form action="#formBook" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="bookRequestName" id="Agent_Name" aria-describedby="helpId" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="bookRequestEmail" id="Agent_Email" aria-describedby="emailHelpId" placeholder="Email">
                    </div>
                    <button type="submit" name="submitFreeBook" class="btn btn-primary btn-join">GO</button>
                </form>
                <?php 
                if ($mailSent == 1){ ?>
                    <div class="alert alert-success mt-5 text-center" role="alert">
                        Email Successfully sent. Please check your inbox or spam folder.
                    </div>
                <?php   
                } ?>
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
                <img src="<?php echo get_permalink(); ?>wp-content/themes/salesacademy/img/beatriz.png" class="testimonials-img" alt="">
                <p class="testimonial-desc mb-3">Wonderful course. Suitable for salespeople at all levels. Freshers and intermediate would benefit immensely and experienced can examine how well they are aligned with the sales methodology shared in this course. Adapting it would make a significant difference to your sales.</p>
                <div class="name text-center">
                    <p class="mr-2"> Beatriz Smyth </p><span> Sales Executive at Salezo</span>
                </div>
            </div>
        </div>
        <div>
            <div class="testimonial-box">

                <img src="<?php echo get_permalink(); ?>wp-content/themes/salesacademy/img/owen.png" class="testimonials-img" alt="">
                <p class="testimonial-desc mb-3">I am the first-ever sales-person in my company. This course was very much in line with the training I have already received, but there are gold nuggets of new information I have not heard before as well. I highly recommend this course to anyone new to sales, folks needing a refresher, or just anyone wanting a different perspective on selling.</p>
                <div class="name text-center">
                    <p class="mr-2">Charles Owen</p><span>Sales Agent at Sale Hounds</span>
                </div>
            </div>
        </div>
        <div>
            <div class="testimonial-box">

                <img src="<?php echo get_permalink(); ?>wp-content/themes/salesacademy/img/shah.png" class="testimonials-img" alt="">
                <p class="testimonial-desc mb-3">As a non-sales person that needs to "sell" a service, I found this training informative, practical and useful. It does not only explain the "how-to" steps of the sales process but the "why" it's important. I like the approach and delivery which was low-key and engaging. I highly recommend it!</p>
                <div class="name text-center">
                    <p class="mr-2">Ali Shah</p><span>Computer Programmer at Code Agent</span>
                </div>
            </div>
        </div>
        <div>
            <div class="testimonial-box">

                <img src="<?php echo get_permalink(); ?>wp-content/themes/salesacademy/img/rojas.png" class="testimonials-img" alt="">
                <p class="testimonial-desc mb-3">Absolutely wonderful. This course is hitting on all the important sales topics. As a seasoned sales veteran, I enjoyed the reinforcement of some basic tenets of sales as well as the introduction of some unique sales approaches. Thank you!</p>
                <div class="name text-center">
                    <p class="mr-2">Gabriel Rojas</p><span>Insurance Agent at Key Insurance</span>
                </div>
            </div>
        </div>
        <div>
            <div class="testimonial-box">
                <img src="<?php echo get_permalink(); ?>wp-content/themes/salesacademy/img/thomas.png" class="testimonials-img" alt="">
                <p class="testimonial-desc mb-3">I've been selling for 25 years and this course expertly proves that you can always learn something new and certainly in my case, relearn skills you thought you already had, but had taken for granted and maybe lost along the way. Well worth the time and money invested! Bravo.</p>
                <div class="name text-center">
                    <p class="mr-2">Declan Thomas </p><span>Sales Executive at Global Sales</span>
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

<div class="container blog">
    <h2 class="testi_head">Blog</h2>
    <div class="row">
        <?php 
        $args = array(
            'posts_per_page'   => 3,
            'post_type'        => 'post',
            'cat'              => 4
        );
        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post(); ?>
                <div class="col-lg-4">
                    <div class="card">
                        <?php echo get_the_post_thumbnail($the_query->ID,'blog-posts'); ?>
                        <div class="card-body">
                            <h5 class="card-title"><a href="<?php echo get_the_permalink(); ?>"><?php echo the_title(); ?></a></h5>
                            <p class="card-text">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php 
            }
        }
        /* Restore original Post Data */
        wp_reset_postdata(); ?>
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
