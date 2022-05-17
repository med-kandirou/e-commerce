$(document).ready(function(){
	//navigation between links
	$("#homme_link").click(function(){
	  $("#homme_page").removeClass('d-none');
	  $("#femme_page").addClass('d-none');
	  $("#acceuil_page").addClass('d-none');
	  $("#enfant_page").addClass('d-none');
	});
	$("#femme_link").click(function(){
	  $("#femme_page").removeClass('d-none');
	  $("#homme_page").addClass('d-none');
	  $("#acceuil_page").addClass('d-none');
	  $("#enfant_page").addClass('d-none');
	});
	$("#acceuil_link").click(function(){
	  $("#acceuil_page").removeClass('d-none');
	  $("#homme_page").addClass('d-none');
	  $("#femme_page").addClass('d-none');
	  $("#enfant_page").addClass('d-none');
	});
	$("#enfant_link").click(function(){
	  $("#enfant_page").removeClass('d-none');
	  $("#acceuil_page").addClass('d-none');
	  $("#homme_page").addClass('d-none');
	  $("#femme_page").addClass('d-none');
	});
	$(".wish-icon i").click(function(){
		$(this).toggleClass("fa-heart fa-heart-o");
	});


	//add product to pannier
	$(".add-pannier").click(function(){
		$.post("./includes/ajax/ajoute_pannier.php",{id:$(this).val()},
		function (data){
			if(data=='connect')
			{
				location.href='./sign_in.php';
			}
			else if(data=='succes')
			{
				alert('bien ajouter');
			}
		}
		).fail(function(){alert("fail a bro")});
	});

});
(function($) {

	"use strict";
	var fullHeight = function() {
		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});
	};
	fullHeight();

	var carousel = function() {
		$('.featured-carousel').owlCarousel({
	    loop:true,
	    autoplay: true,
	    margin:30,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:true,
	    dots: true,
	    autoplayHoverPause: false,
	    items: 1,
	    navText : ["<p><small>Prev</small><span class='ion-ios-arrow-round-back'></span></p>","<p><small>Next</small><span class='ion-ios-arrow-round-forward'></span></p>"],
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:1
	      },
	      1000:{
	        items:1
	      }
	    }
		});

	};
	carousel();


	


})(jQuery);


