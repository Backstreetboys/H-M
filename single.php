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
	<form method="post" id="purchase">
		<p id="item_name"><?php the_title();?></p>
		<select id="sizelist" form="purchase">
			<option value="Small">S</option>
			<option value="Medium">M</option>
			<option value="Large">L</option>
			<option value="XLarge">XL</option>
		</select>
		<input type="submit" value="Lägg till i varukorgen" id="btn-submit"/>
	</form>
	<?php
}
 ?>
</div>
<!-- <script type="text/javascript">

	var $ = jQuery;

	$('#close').click(function(){
		$('#single-box').hide();
		$('#overlay').hide();

	});

	$("#btn-submit").click(function(){
		var item = '{"name": "' . $("#item_name").text(); . '"', "size"':"' . $("#sizelist option:selected").text(); . '"}';
		var obj = JSON.parse(item);

		$("#items").innerHTML =
		obj.name + "<br>" +
		obj.size;


	});
</script> -->