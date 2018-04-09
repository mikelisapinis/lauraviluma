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
 */

get_header(); ?>
<div id="primary" class="content-area container">
	<main id="main" class="site-main row" role="main">
		<?php
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', 'page' );
		endwhile;
		?>

	</main>
	<h2>Instagram feed</h2>
	<?php get_sidebar( 'content-bottom' ); ?>
</div>

<?php get_footer(); ?>
