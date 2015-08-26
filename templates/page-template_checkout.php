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


	<table class="checkout-table">
		<tr class="table-head">
			<th>Products</th>
			<th>Size</th>
			<th>Price</th>
		</tr>
		
		<?php
		$sum = 0;
		$item = json_decode($_SESSION['shoppingcart'], true);
			foreach ($item['data'] as $result) { ?>
				
					<tr class="table-body">
						<td><?php echo $result['name']; ?></td>
						<td><?php echo $result['size']; ?></td>
						<td><?php echo $result['price']; ?>kr</td>
						<td id="table-button"><button>remove X</button></td>
					</tr>
				
				
			<?php
			$val + $result['price'];
			} ?>
	</table>
<!-- 	<?php echo $sum; ?> -->	

</div>
<div id="pay">
		<a href="<?= get_template_directory_uri() ?>/loading">Betala</a>

</div>

<?php get_footer(); ?>