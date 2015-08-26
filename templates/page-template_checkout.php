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

	<div id="checkout-cat">
		<h1 id="cat-1">Product</h1> <h1 id="cat-2">Size</h1> <h1 id="cat-3">Price</h1></h1>
	</div>
	<div id="item-list">
		<?php
		$sum = 0;
		$item = json_decode($_SESSION['shoppingcart'], true);
			foreach ($item['data'] as $result) { ?>

				<p id="checkout-product-info"><?php echo $result['name']; ?> <span id="span1"><?php echo $result['size']; ?></span> <span id="span2"><?php echo $result['price']; ?>kr</span></p><br>
				
				
			<?php
			$val + $result['price'];
			}
			echo $sum;
			?>

	</div>
	<div id="pay">
		<a href="index.php?page_id=228">Betala</a>

	</div>

</div>

<?php get_footer(); ?>