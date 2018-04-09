<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 *//* Template Name: Contact */

get_header(); ?>
<div id="primary" class="content-area container">
	<main id="main" class="site-main row" role="main">

		<div class="post-thumbnail">
			<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail( 'full' );
			}
			?>
		</div>
		<h1 class="contact-tagline">Planning something awesome? I can't wait to hear from you!</h1>
		<div class="col-sm-12 col-md-6 col-lg-6">
			<?php echo do_shortcode( '[contact-form-7 id="4183" title="Contact form"]' ); ?>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-6 contacts-col">
			<div class="row">
				<div class="col-5">
					<img class="img-fluid" alt="Kāzu Fotogrāfe Laura Viļuma" src="http://lauraviluma.com/wp-content/uploads/2018/03/Ragakaapa-2.jpg">
				</div>
				<div class="col-6">
					<h2>Call me or drop me a line!</h2>
					<a class="phone" href="tel:+37126166612">+371 26166612</a>
					<a class="email" href="mailto:vilumalaura@gmail.com">vilumalaura@gmail.com</a>
					<h2>Follow me on social media</h2>
					<ul>
						<li><a class="facebook" target="_blank" href="https://www.facebook.com/lauravilumaphoto/">Facebook</a></li>
						<li><a class="instagram" target="_blank" href="https://www.instagram.com/lauraviluma/">Instagram</a></li>
					</ul>
				</div>
			</div>
		</div>

	</main>
	<?php get_sidebar( 'content-bottom' ); ?>
</div>
<div class="instagram-feed">
	<h2>Instagram feed</h2>
	<?php echo do_shortcode('[ap_instagram_grid_rotator]'); ?>
</div>
<?php get_footer(); ?>
