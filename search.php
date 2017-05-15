<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package siskiwit
 */

get_header(); ?>

	<div id="colOne">
	<div id="content">

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h3 class="page-title search-page-title"><?php printf( esc_html__( 'Search results for: %s', 'siskiwit' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation([
				'prev_text' => '&laquo; Older entries',
				'next_text' => 'Newer entries &raquo;'
			]);

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

</div><!-- #colOne -->
</div><!-- #content -->

<?php
get_sidebar();
get_footer();
