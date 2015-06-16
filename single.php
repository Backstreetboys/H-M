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
	<form action="purchase.php" method="post" id="purchase">
		<select name="sizelist" form="purchase">
			<option value="Small">S</option>
			<option value="Medium">M</option>
			<option value="Large">L</option>
			<option value="XLarge">XL</option>
		</select>
		<input type="submit" value="Lägg till i varukorgen" />
	</form>
	<?php
}
 ?>
</div>
<script type="text/javascript">

	var $ = jQuery;

	$('#close').click(function(){
		$('#single-box').hide();
		$('#overlay').hide();

	});
</script>