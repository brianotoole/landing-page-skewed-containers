<?php
/**
 * Template part for displaying single posts.
 * @package fast
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
	
	  <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php fast_posted_on(); ?>
		</div><!-- .entry-meta -->
	  </header><!-- .entry-header -->
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fast' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php fast_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

