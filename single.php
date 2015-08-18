<?php session_start(); 
if(!isset($_SESSION['shoppingcart'])){
	$_SESSION['shoppingcart'] = '{ "data": [] }';
}
?>
<?php get_header(); ?>
<?php $post = get_post($_POST['id']); ?>

<div id="single-post post-<?= the_ID(); ?>">
<?php 
while (have_posts()) { ?>

	<p id="close">Close &ZHcy;</p>
	<?php

	the_post();

	the_title();

	the_content();

	the_post_thumbnail();
	?>
	<form id="purchase">
		<p id="item_name"><?php the_title();?></p>
		<select id="sizelist" form="purchase">
			<option value="Small">S</option>
			<option value="Medium">M</option>
			<option value="Large">L</option>
			<option value="XLarge">XL</option>
		</select>
		<input type="button" value="Lägg till i varukorgen" id="btn-submit"/>
	</form>
	<?php

}
 ?>
</div>
<script type="text/javascript">

	var $ = jQuery;
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
	alert(JSON.stringify(myCollection));

$("#btn-submit").click(function(){
	myCollection.data.push( { "name": title } );	
	$.ajax({
		url: "<?=get_template_directory_uri();?>/basket.php",
		type: "POST",
		data: "update=" + JSON.stringify(myCollection),
		success:function(data){
			alert(data);
		}

	}).done(function(){
		console.log('Ajax success!');
	});

});
	console.log(myCollection);

</script>