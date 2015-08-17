
var $ = jQuery;
var loadpage = function() {
	$('#carousel').load('../instagram.php');
};

$(document).ready(function(){
	$('#single-box').hide();

	$.ajaxSetup({cache:false});
	$('.post-link').click(function(){
		var post_link = $(this).attr('href');

		$('#single-box').load(post_link);
		$('#single-box').show();
		$('#overlay').show();
		
	return false;
	});
	loadpage();
	setInterval(loadpage, 300000);
});
/*Bildspel*/
$(function() {
	$('#carousel').carouFredSel({
		responsive: true,
		scroll: 1,
		items: {
			height: '100%',
			visible: {
				min: 4,
				max: 4
			}
		}
	});

	$('#close').click(function(){
		$('#single-box').hide();
		$('#overlay').hide();

	});

//gör en funktion för att skriva ut från json filen
});