<?php
/**
Template Name: Home
 */

get_header(); ?>

	<div class="page-content-wrapper" id="primary">
		<div class="container-fluid" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

		</div><!-- /.container-fluid -->
	</div><!-- /.page-content-wraper -->

<?php get_footer(); ?>
