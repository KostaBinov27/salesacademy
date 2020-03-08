<?php
/**
 * Template Name: Online Training
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */
// Exit if accessed directly.

defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div class="heroImageTraining">
    <div class="heroImgeLayer text-center">
        <div class="m-auto text-padd">
            <h1>THE FASTEST WAY TO LEARN SALES ONLINE GUARANTEED</h1>
            <h2>Guided Online Sales Training for Entrepreneurs</h2>
            <button type="button" class="btn btn-dark heroHomeBTN">LEARN MORE</button>
        </div>
    </div>
</div>

<div class="container onlineTraining">
    <h2 class="testi_head">WHAT WE OFFER</h2>
    <div class="row">
        <?php 
        $args = array(
            'posts_per_page'   => 2,
            'post_type'        => 'post',
            'cat'              => 3
        );
        $the_query = new WP_Query( $args );

        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post(); ?>
                <div class="col-lg-6">
                    <div class="card card-online">
                        <?php echo get_the_post_thumbnail($the_query->ID,'blog-posts'); ?>
                        <div class="card-body">
                            <h5 class="card-title"><a href="<?php echo get_the_permalink(); ?>"><?php echo the_title(); ?></a></h5>
                            <p class="card-text">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                            <!-- <div class=" btnWraper">
                                <button class="btn btn-primary readMoreBTNBlogHome"><a href="<?php echo get_the_permalink(); ?>">Read More</a></button>
                            </div> -->
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

<?php
get_footer();