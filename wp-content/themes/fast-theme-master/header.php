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

  <div class="row top-bar">
	<div class="col-xs-3 color color1"></div>
	<div class="col-xs-3 color color2"></div>
	<div class="col-xs-3 color color3"></div>
	<div class="col-xs-3 color color4"></div>
  </div><!--/.top-bar-->

  <div id="content" class="site-content">
 