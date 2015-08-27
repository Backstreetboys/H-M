<?php  
// If the $_SESSION['shoppingcart'] is not set it gets the value of an empty array with value of nothing

if(!isset($_SESSION['shoppingcart'])){
	$_SESSION['shoppingcart'] = '{ "data": [] }';
}
?>
<!-- the variabel $post gets the value of the post with the id of the post id -->
<?php $post = get_post($_POST['id']); ?>

<!-- Post wrapper with the id of the post id -->
<div id="single-post post-<?= the_ID(); ?>">
<?php 
//The loop
while (have_posts()) { 
	//Puts the value of the posts meta data 'product_price'
	$price = get_post_meta( get_the_ID(), 'product_price', true ); ?>
	<!-- icon for closing the popup window -->
	<p id="close">Close &ZHcy;</p>

	<!-- div for the product image -->
	<div class="product_image">
		<?php 
			the_post_thumbnail();
		?>
	</div><!-- Ends product_image div -->

	<!-- Div for the produkt information -->
	<div class="product_info">
		<?php
			the_post();
			?>
			<!-- the product title -->
			<h1 id="item_name"><?php the_title(); ?></h1>
			<!-- information about the product -->
			<p class="product_text"><?php the_content(); ?></p>
			<!-- the meta data that is the price -->
			<p>Pris: <?php echo $price; ?> kr<p>
				<div class="purchase_success">
					<i class="fa fa-check fa-2x"></i>
				</div>
		<!-- The size selection form -->
		<form id="purchase">
			<label>Välj storlek:</label>
			<select id="sizelist" form="purchase">
				<option value="Small">S</option>
				<option value="Medium">M</option>
				<option value="Large">L</option>
				<option value="XLarge">XL</option>
			</select><br>
			<!-- Submit button for adding the product to the Shopping bag -->
			<button type="submit" id="btn-submit">
				Lägg till i varukorgen<i class="fa fa-shopping-cart"></i>
			</button>
		</form>
	</div><!-- Ends product_info div -->
	<?php

}
 ?>
</div><!-- Ends sing_post wrapper -->
<script type="text/javascript">

	//declare the sign $ with jQuery
	var $ = jQuery;

	//Function for reloading the file list.php.
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
	
	//Gives the variabel title the values of the products title
	var title = $('#item_name').text();
	
	//variabel myCollection is equal to the $_SESSION['shoppingcart'] array.
	var myCollection = <?= $_SESSION['shoppingcart']; ?>;
//The code under will run if the submit button in single.php is clicked
$("#btn-submit").click(function(){
	$(".fa-check").fadeIn();
	//puts the value of the selected size from the single.php file in the variabel size.
	var size = $( '#sizelist :selected' ).text();

	//Pushes an array into the array myCollection with all the given values
	myCollection.data.push( { "name": title, "size": size, "price": <?= $price ?> } );	
	//Sends the data with POST to the basket.php file
	$.ajax({
		url: "<?=get_template_directory_uri();?>/basket.php",
		type: "POST",
		data: "update=" + JSON.stringify(myCollection), //makes the data to an JSON object before sending it
		success:function(data){
			//On success of the ajax request the function loadItemList will run 
			loadItemList();
			/*swal({
			   title: "Produkt tillagd i varukorgen",
			   type: "sucess",
			   timer: 2000,
			   showConfirmButton: false
			});*/
		}
	});
});



</script>