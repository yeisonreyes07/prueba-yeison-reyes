<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Landing_Page_Yeison_Reyes
 */

?>
    </div><!-- Esto cierra el row -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'landingpage' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Con el poder de  %s', 'landingpage' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'landingpage' ), 'landingpage', '<a href="http://yeisonreyes.com.ve">Yeison Reyes</a>' );
				?>
		</div>
			</div>		
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
