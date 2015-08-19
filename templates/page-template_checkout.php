<?php
/*
 * Template Name: checkout
 *
 * @package H&M projekt
 * @subpackage H&M projekt
 * @since PACKAGE VERSION 1.0
 */
get_header(); ?>

<div id="checkout-list">

	<div id="item-list">
		<?php
		$item = json_decode($_SESSION['shoppingcart'], true);
			foreach ($item['data'] as $result) { ?>

				<ul>
					<li> <?php echo $result['name']; ?></li><br>
				</ul>
				
			<?php
			}
			?>

	</div>
	<div></div>

</div>

<?php get_footer(); ?>