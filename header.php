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
</head>

<body <?php body_class(); ?>>
	

	<div id="wrapper">
		<div id="header">

			<img id="Header-logo" src="<?= get_template_directory_uri();?>/img/HMlogo.png" />
			<img id="shoppingcart-img" src="<?= get_template_directory_uri(); ?>/img/shoppingbag.png">
			
		</div>
		<div id="item-holder">
			<h1><a href="<?= get_template_directory_uri(); ?>/checkout">checkout</a></h1>
		</div>
		<!--Checks if the user is on the home page. If the user is on the home page the Isitope buttons will be looped outs-->
		<?php if(is_home()){ ?>

			<div id="categories">
			<?php
			$cat = get_query_var('cat');

			foreach(get_categories('exclude=1') as $category)	{
				echo '<li id="item-' . $category->name.'"><a href="#">' . $category->name.'</a></li>';
			}
			?>
		</div>

		<?php
		}else{

		}
		?>
		


