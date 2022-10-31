<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package siskiwit
 */

?>

	</div><!-- #m2 -->
	</div><!-- #main -->
	</div><!-- #content -->

	<!-- begin footer -->
	<div id="footer">
		<div id="f2">
			<div id="footerNav">
				<p>Copyright &copy; 2001 - <?=date("Y", time());?> Dane Petersen</p>
			</div>
			<!-- end footerNav -->
		</div><!-- end f2 -->
	</div><!-- end footer -->
	<footer id="colophon" class="hide site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'siskiwit' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'siskiwit' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'siskiwit' ), 'siskiwit', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

</div><!-- #w3 -->
</div><!-- #w2 -->
</div><!-- #whopper -->

<?php wp_footer(); ?>

</body>
</html>
