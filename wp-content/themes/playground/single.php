<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Playground
 */

get_header();
?>

	<main class="flex-1">

		<div class="main__content container py-3 px-5">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'playground' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'playground' ) . '</span> <span class="nav-title">%title</span>',
					)
				);

				// Hide - no support for comments for now
				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				//	 comments_template();
				// endif;

			endwhile; // End of the loop.
			?>
		</div>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
