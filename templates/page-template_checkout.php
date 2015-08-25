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
		<h1>Product</h1><h1>Size</h1><h1>price</h1>

		<?php
		$sum = 0;
		$item = json_decode($_SESSION['shoppingcart'], true);
			foreach ($item['data'] as $result) { ?>

				<p><?php echo $result['name']; ?></p><p> <?php echo $result['size']; ?></p><p><?php echo $result['price']; ?>kr</p><br>
				
				
			<?php
			$val + $result['price'];
			}
			echo $sum;
			?>

	</div>
	<div id="">
		<a href="index.php?page_id=228">Betala</a>

	</div>

</div>

<?php get_footer(); ?>