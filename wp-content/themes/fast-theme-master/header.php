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

    <div class="top-bar">
	  <div class="container-fluid">
	  </div><!--/.container-fluid -->
    </div><!--/.top-bar-->
  </header><!-- #masthead -->
  
  <div id="content" class="site-content">
 