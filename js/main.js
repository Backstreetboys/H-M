var $ = jQuery;
$(document).ready(function(){
	$('#single-box').hide();
	$('.product-wrapper').click(function(){
		$('single-box').load('single.php');
	});
	$('.product-wrapper').click(function(){
		$('#single-box').show();
		$('#single-box').load('single.php');
	});
});