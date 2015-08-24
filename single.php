<?php  
if(!isset($_SESSION['shoppingcart'])){
	$_SESSION['shoppingcart'] = '{ "data": [] }';
}
?>

<?php $post = get_post($_POST['id']); ?>

<div id="single-post post-<?= the_ID(); ?>">
<?php 
while (have_posts()) { ?>
<?php $price = get_post_meta( get_the_ID(), 'product_price', true ); ?>
	<p id="close">Close &ZHcy;</p>
	<div class="product_image">
		<?php 
			the_post_thumbnail();
		?>
	</div>
	<div class="product_info">
		<?php
			the_post();
			?>
			<h1><?php the_title(); ?></h1>
			<p class="product_text"><?php the_content(); ?></p>
			<p>Pris: <?php echo $price; ?> kr<p><br>
		<form id="purchase">
			<select id="sizelist" form="purchase">
				<option value="Small">S</option>
				<option value="Medium">M</option>
				<option value="Large">L</option>
				<option value="XLarge">XL</option>
			</select><br>
			<button type="submit" id="btn-submit">
				Lägg till i varukorgen<i class="fa fa-shopping-cart"></i>
			</button>
		</form>
	</div>
	<?php

}
 ?>
</div>
<script type="text/javascript">

	var $ = jQuery;
	//functino for reloading the item list
	function loadItemList() {
	$('#item-holder').load('list.php');
};
	//Function for hiding overlay
	function HideOverlay() {
		$('#single-box').hide();
		$('#overlay').hide();
	}
	//If clicked on overlay or close-icon = hide single and close overlay
	$('#overlay, #close').click(function(){
		HideOverlay();
	});

	/*JSON-Stuffs*/
	
	var title = $('#item_name').text();
	var myCollection = <?= $_SESSION['shoppingcart']; ?>;

$("#btn-submit").click(function(){
	//puts the selected size in the variabel size and puts it in the array.
	var size = $( '#sizelist :selected' ).text();
	myCollection.data.push( { "name": title, "size": size, "price": <?= $price ?> } );	
	$.ajax({
		url: "<?=get_template_directory_uri();?>/basket.php",
		type: "POST",
		data: "update=" + JSON.stringify(myCollection),
		success:function(data){
			loadItemList();
			alert('fucking success');
		}

	}).done(function(){
	});

});



</script>