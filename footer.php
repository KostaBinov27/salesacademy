<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<div class="text-center">
							<img class="img-fluid footerLogo" src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/02/logo.png">
							<ul class="socialIcons">
								<li><a href="https://www.facebook.com/ESA.entrepreneur.sales.academy/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="https://www.linkedin.com/company/entrepreneur-sales-academy/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								<li><a href="https://www.instagram.com/entrepreneursalesacademy/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
							<p>©<?php echo date("Y"); ?> by Entrepreneur Sales Academy</p>

						</div>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
<script type="text/javascript" src="wp-content/themes/salesacademy/js/slick.min.js"></script>
</body>

</html>

