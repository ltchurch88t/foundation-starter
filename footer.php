<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter
 */

?>

	</div><!-- #content -->

	<footer id="footer" class="grid-container fluid">
		<div id="site-info" class="grid-x align-center">
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s | Created by %2$s.', 'starter' ), 'Starter', '<a href="https://nakdesignstudio.io/">&nbsp;NAK Design Studio</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #footer -->

<?php wp_footer(); ?>

</body>
</html>
