<?php
/**
 * The header for our theme.
 * This is the template that displays all of the <head> section up 'til <div clas="site-content">
 * @package fast
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper" id="js-wrapper">

  <header id="masthead" class="site-header" role="banner">
    <div class="sidebar-wrapper">
      <nav class="sidebar-nav" role="navigation">
        <?php wp_nav_menu( array(
           'theme_location' => 'primary',
           'menu_id' => 'primary-menu'
         ) ); ?>
      </nav><!-- .sidebar-nav -->
    </div><!-- /.sidebar-wrapper -->
    
    <div class="top-bar">
	  <div class="container-fluid">
	    <div class="menu">
		  <a href="#menu-toggle" class="btn btn-default menu-toggle" id="js-menu-toggle">Menu</a>
	    </div> 
	    <div class="user">
		  <div class="row">
		
	        <?php
				if ( is_user_logged_in() ) {
				     wp_nav_menu( array( 'theme_location' => 'logged-in-menu') );
				} else {
				     wp_nav_menu( array( 'theme_location' => 'logged-out-menu') );
				}
		    ?>
         
		  </div><!--/.row -->
	    </div><!--/.user -->
	  </div><!--/.container-fluid -->
    </div><!--/.top-bar-->
  </header><!-- #masthead -->
  
  <div id="content" class="site-content">
 