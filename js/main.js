var $ = jQuery;
$(document).ready(function(){
	$('#single-box').hide();
	$('.product-wrapper').click(function(){
		alert('BLÄÄÄÄÄÄÄÄÆ');
		$('#single-box').show();
		$('#single-box').load('wp-content/themes/H-M/single.php');
	});
});