// defines jQuery to $
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
/**********Isotope-filtering***********/
$("#isotope").isotope({
	  itemSelector: 'div',
	  layoutMode: 'fitRows'
	});

	imageFilter();
	function imageFilter() {
		$("#categories li").click(function(e) {
			//Lägg till klassen "current" på den <li> man klickat på och ta bort från de andra <li> 
			$("#categories li").each(function(){
				$(this).removeClass("current");
			});
			
			$(e.currentTarget).addClass("current");

			//Ta reda på vilket id-namn den aktuella <li>:n har
			var itemId = e.currentTarget.id;
			itemId = itemId.replace("item-", "");
			// Använd ID för att filtrera
			$("#isotope").isotope({ filter: '.category-'+itemId });
		});
	}
	/*
	* Receipt (used on page-template_receipt_option.php
	*/
	$("#btn-email").click(function(){
		swal({
		   title: "Receipt to email",
		   text: "Please write your email:",
		   type: "input",   
		   showCancelButton: true,
		   closeOnConfirm: false,
		   animation: "slide-from-top",
		   inputPlaceholder: "Your email here.." },
				function(inputValue){   
					if (inputValue === false) 
						return false;      
					if (inputValue === ""){
					     swal.showInputError("Please enter your email");
					     return false
					}
						swal({
							title:"Perfect!",
							text: "Your receipt will be sent to: " + inputValue, 
							type: "success",
							showConfirmButton: false,
							timer: 8000
						});

				window.setTimeout(function(){
		        	window.location.href = "http://localhost/terminsprojekt";
		    	}, 8000);
		    	
			});
	});
	$("#btn-paper").click(function(){
		swal({
			title: "",
			type: "success",
			text: "Your receipt is being printed.",
			showConfirmButton: false,
			timer: 2000
		});
	});
});