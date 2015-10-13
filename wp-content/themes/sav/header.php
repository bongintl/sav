<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/foundation.css" type="text/css" />
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	


        

</head>

<header>
	<div class="row fixed">
		<div class="medium-5 columns"><a href="">About</a></div>
		<div class="medium-4 columns"><a href="">What We Do</a> &nbsp;&nbsp;&nbsp; <a href="">What We’ve Done</a></div>
		<div class="medium-3 columns text-right"><a href="">Contact</a></div>
	</div>
</header>

<body <?php body_class(); ?>>