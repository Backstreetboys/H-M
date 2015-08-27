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
		$i = 0;
		$item = json_decode($_SESSION['shoppingcart'], true);
			foreach ($item['data'] as $result) { ?>
				
					<tr class="table-body">
						<td><?php echo $result['name']; ?></td>
						<td><?php echo $result['size']; ?></td>
						<td><?php echo $result['price']; ?>kr</td>
						<td id="table-button" itemid="<?= $i ?>"><button>remove X</button></td>
					</tr>
				
				
			<?php
			$i = 0;
			$sum+= $result['price'];
			} ?>
	</table>
	<h1>Summa: <?php echo $sum ?></h1>

</div>
<div id="pay">
		<a href="<?= get_template_directory_uri() ?>/loading">Betala</a>

</div>
<script type="text/javascript">

var $ = jQuery;
$('button').click(function(){
	var myCollection = <?= $_SESSION['shoppingcart']; ?>;
		var item = $(this).attr('itemid');
		myCollection['data'].splice(item, 1);
	$.ajax({
		url: "<?= get_template_directory_uri(); ?>/basket.php",
		type: "POST",
		data: "update=" + JSON.stringify(myCollection),
		success:function(data){
			loadItemList();
		}

	}).done(function(){
		window.location.reload();
	});
});

</script>

<?php get_footer(); ?>