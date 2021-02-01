<?php
/**
 * The template for displaying all single pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Toro_Foods
 */

get_header();
?>

<main id="main" class="main">

<?php
while ( have_posts() ) :
	the_post();

	get_template_part( 'partials/content-page', get_post_type() );

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

endwhile; // End of the loop.
?>

</main><!-- #main -->

<?php
get_footer();
