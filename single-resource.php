<?php
/**
 * The template for displaying all single resources
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package baseinstall
 */

while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content-resources', get_post_type() );

	// If comments are open or we have at least one comment, load up the comment template.
	// if ( comments_open() || get_comments_number() ) :
	// 	comments_template();
	// endif;

endwhile; // End of the loop.
?>
