var $ = jQuery;
$(document).ready(function(){
	$('#single-box').hide();

	$.ajaxSetup({cache:false});
	$('.post-link').click(function(){
		var post_link = $(this).attr("href");

		$('#single-box').load(post_link);
		$('#single-box').show();
	return false;
	});
	
});