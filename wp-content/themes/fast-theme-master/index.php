<?php
/**
 * The main template file.
 * @package fast
 */

get_header(); ?>

	<div class="page-content-wrapper" id="primary">
		<div class="container-fluid" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			  <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

		  <?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</div><!-- /.container-fluid -->
	</div><!-- /.page-content-wraper -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
