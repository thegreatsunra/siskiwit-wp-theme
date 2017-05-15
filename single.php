<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package siskiwit
 */

get_header(); ?>

	<div id="colOne">
	<div id="content">

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			the_post_navigation(['prev_text' => '&laquo; previous entry', 'next_text' => 'next entry &raquo;',]);

			get_template_part( 'template-parts/content', get_post_format() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- #colOne -->
</div><!-- #content -->

<?php
get_sidebar();
get_footer();
