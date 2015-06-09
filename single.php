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
}
 ?>
</div>
<script type="text/javascript">

	var $ = jQuery;

	$('#close').click(function(){
		$('#single-box').hide();
	});
</script>