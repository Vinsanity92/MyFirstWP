<?php
/**
 *
 * 
 * 
 * Template Name: Portfoli Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gute-portfolio
 */

get_header();

?>

				<?php
				while ( have_posts() ) :
					the_post();
				the_content();

				endwhile; // End of the loop.
			
				?>

<?php
get_footer();