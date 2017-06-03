<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package siskiwit
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title entry-title-search"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-summary entry-summary-search">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<?php if ( 'post' === get_post_type() ) : ?>
		<div class="posted posted-search">
		<div class="entry-meta">
			<ul>
			<?php siskiwit_posted_on(); ?>
			</ul>
		</div><!-- .entry-meta -->
		</div>
	<?php endif; ?>
	<footer class="entry-footer">
		<?php siskiwit_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
