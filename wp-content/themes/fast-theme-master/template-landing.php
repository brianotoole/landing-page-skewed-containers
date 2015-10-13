<?php
/**
Template Name: Landing page
 */

get_header(); ?>

	<div class="page-content-wrapper" id="primary">
		<div class="container-fluid" role="main">
		
	  <?php while ( have_posts() ) : the_post(); ?>
	  
	      
	  
	    <div class="landing">
	    
	    <div class="row">
		  <div class="col-sm-2 genre">
		    <div class="icon">
		      <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		    </div>
		  </div>
		</div><!--/.row-->	    
	    
	      <div class="row">
	      	<div class="col-sm-12 interior-nav">
	      		<ul class="tabs">
	      		  <li>Tab 1</li>
	      		  <li>Tab 2</li>
	      		  <li>Tab 3</li>
	      		</ul>
	      	</div>
	      </div><!--/.row-->
	      
	      <div class="entry-content">
	        <?php the_content(); ?>
	      </div>
	
		      
	    </div><!--/.landing-->

	  <?php endwhile; // End of the loop. ?>
	  
		</div><!-- /.container-fluid -->
	</div><!-- /.page-content-wraper -->

<?php get_footer(); ?>
