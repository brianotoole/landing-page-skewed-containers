<?php
/**
 * The template for displaying all single posts.
 * @package fast
 */

get_header(); ?>

	<div class="page-content-wrapper" id="primary">
		<div class="container-fluid" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</div><!-- /.container-fluid -->
	</div><!-- /.page-content-wraper -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
