
var $ = jQuery;
var loadpage = function() {
	$('#carousel').load('../instagram.php');
};
function showItem(){
	$('#shoppingcart-img').click(function(){
		$('#item-holder').slideToggle();
	});
};
function loadItemList() {
	$('#item-holder').load('list.php');
};

$(document).ready(function(){
	loadItemList();
	showItem();

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

$("#wrapper").isotope({
	  itemSelector: 'div',
	  layoutMode: 'fitRows'
	});

	imageFilter();
	function imageFilter() {
		$("li").click(function(e) {
			//Lägg till klassen "current" på den <li> man klickat på och ta bort från de andra <li> 
			$("li").each(function(){
				$(this).removeClass("current");
			});
			
			$(e.currentTarget).addClass("current");

			//Ta reda på vilket id-namn den aktuella <li>:n har
			var itemId = e.currentTarget.id;
			itemId = itemId.replace("item-", "");

			// Använd ID för att filtrera
			$("#wrapper").isotope({ filter: '.category-'+itemId });
		});
	}
	
});