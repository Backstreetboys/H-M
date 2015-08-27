<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Posh Industries
 * @subpackage PACKAGE NAME
 * @since PACKAGE VERSION
 */
session_start();
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?> | <?php wp_title( '|', true, 'left' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/js/sweetalert-master/dist/sweetalert.css" type="text/css" />
</head>

<body <?php body_class(); ?>>
	

	<div id="wrapper"><!-- This div wrapps the hole site -->
		<div id="header"><!-- This div wrappes everything in header -->

			<!-- Image link for the logo image -->
			<img id="Header-logo" src="<?= get_template_directory_uri();?>/img/HMlogo.png" />
		
			<?php 
			//Checks if the user is on the home page. If you the user is that, the icon for the shopping bag will apper.
			//If the user is not on the home page the icon will not apper.
			if(is_home()) { ?>
				<!-- Image link for the shopping bag icon -->
				<img id="shoppingcart-img" src="<?= get_template_directory_uri(); ?>/img/shoppingbag2.jpg">

			<?php }else{

			} ?>
			
			
		</div><!-- Wrapper div ends -->
		<!-- This div contains all the addes products that will be shown when you push the shopping bag icon -->
		<!-- links to the checkout.php when you whant to check out -->
		<div id="item-holder">
			<h1><a href="<?= get_template_directory_uri(); ?>/checkout">checkout</a></h1>
		</div><!-- Ends the item holder div -->
		


