<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="grid-container">
		<?php the_title( sprintf( '<h2 class="cell"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="cell subheader">
			<?php
			starter_posted_on();
			starter_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php starter_post_thumbnail(); ?>

	<div class="grid-x">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="grid-container">
		<?php starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
