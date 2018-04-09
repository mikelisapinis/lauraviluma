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
 *//* Template Name: Sorry */

get_header(); ?>
<div id="primary" class="content-area container">
	<main id="main" class="site-main row" role="main">
		<div id="maint" class="col-sm-12">
			<h1 class="contact-tagline">Hey! Šobrīd tiek veikti labojumi</h1>
			<p>Pavisam drīz iegriezies atkal!</p>
		</div>


	</main>
	<?php get_sidebar( 'content-bottom' ); ?>
</div>
<div class="instagram-feed">
	<h2>Instagram feed</h2>
	<?php echo do_shortcode('[ap_instagram_grid_rotator]'); ?>
</div>
<?php get_footer(); ?>
