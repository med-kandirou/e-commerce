$(document).ready(function(){


	$(".wish-icon i").click(function(){
		$(this).toggleClass("fa-heart fa-heart-o");
	});

	//redirect to sign_in
	$(".add-pannier1").click(function(){
		window.location.href = "sign_in.php";
	});

	//add product to pannier
	$(".add-pannier2").click(function(){
		$.post("../includes/ajax/ajoute_pannier.php",{id:$(this).val()},
		function (data){
			if(data=='succes')
			{
				//container
				var container=document.createElement('div');
				container.classList.add('container');
				container.setAttribute('id','msg-ajoute');
				container.style.fontSize="15px";
				//div
				var div=document.createElement('div');
				div.classList.add('alert','alert-info','alert-dismissible');
				//a
				var a=document.createElement('a');
				a.href="#";
				a.setAttribute("class","close");
				a.setAttribute('data-dismiss','alert');
				a.setAttribute('aria-label','close');
				a.innerHTML='&times;';
				//strong
				var strong=document.createElement('strong');
				strong.innerText='Succès!';
				//span
				var span=document.createElement('span');
				span.innerText=' Produit bien ajouté';
				//append children
				container.appendChild(div);
				div.appendChild(a);
				div.appendChild(strong);
				div.appendChild(span);
				div.style.width='300px';
				div.style.height='80px';
				div.style.padding='30px';
				div.style.position='fixed';
				div.style.bottom='0px';
				div.style.right='10px';
				document.body.appendChild(container);  
				setTimeout(()=>
                {
					$('#msg-ajoute').hide();
					let e = document.getElementById("msg-ajoute");
					document.body.removeChild(e);
                },2000); 
			
			}
			else if(data='exist')
			{
				var container=document.createElement('div');
				container.classList.add('container');
				container.setAttribute('id','msg-fail');
				container.style.fontSize="15px";
				//div
				var div=document.createElement('div');
				div.classList.add('alert','alert-warning','alert-dismissible');
				//a
				var a=document.createElement('a');
				a.href="#";
				a.setAttribute("class","close");
				a.setAttribute('data-dismiss','alert');
				a.setAttribute('aria-label','close');
				a.innerHTML='&times;';
				//strong
				var strong=document.createElement('strong');
				strong.innerText='Failed!';
				//span
				var span=document.createElement('span');
				span.innerText=' Produit déja exist';
				//append children
				container.appendChild(div);
				div.appendChild(a);
				div.appendChild(strong);
				div.appendChild(span);
				div.style.width='300px';
				div.style.height='80px';
				div.style.padding='30px';
				div.style.position='fixed';
				div.style.bottom='0px';
				div.style.right='10px';
				document.body.appendChild(container);  
				setTimeout(()=>
                {
					$('#msg-fail').hide();
					let e = document.getElementById("msg-fail");
					document.body.removeChild(e);
                },2000); 

			}
		}
		)
	});
    //supprimer produit de pannier
	$('.supprimer').click(function () { 
		$.post("../includes/ajax/supp_prod_pannier.php",{id:$(this).val()},
		function(data){
			if(data=='success')
			{
				alert('supprimer');
				window.location = location;
			}
		})
		
	});

	//add product in store
	var file;
	$("#file_name").change(function (e) { 
		file=e.target.files[0].name;
	});

	
	//supprimer un produit
	$('.supp_prod').click(function () { 
		$.post("../includes/ajax/supp_produit.php",{id:$(this).val()},
		function(data){
			if(data=='success')
			{
				alert('deleted');
				window.location = location;
			}
		})
		
	});
	//button acheter anonyme
	$(".acheter1").click(function(){
		window.location.href ="sign_in.php";
	});
	
	//button acheter user
	$(".acheter2").click(function(){
		window.location.href = "../catalogue/details.php?id="+$(this).val()+"";
	});

   //valider un commande 
	$(".valider_produit").click(function(){
		$.post("../includes/ajax/valider_prod.php",{id:$(this).val()},
		function(data){
			if(data=='success')
			{
				alert('La commande a été valider');
				window.location = location;
			}
		})
	});
	//acheter un produit en pannier
	$(".acheter3").click(function(){
		window.location.href = "../catalogue/details.php?id="+$(this).val()+"";
	});

//delete commande
$(".delete_commande").click(function(){
	$.post("../includes/ajax/delete_commande.php",{id:$(this).val()},
	function(data){
		if(data=='success')
		{
			alert('La commande a été Supprimer');
			window.location = location;
		}
	})
});

//delete client
$('.delete_user').click(function () { 
	$.post("../includes/ajax/delete_user.php",{id:$(this).val()},
	function(data){
		if(data=='success')
		{
			alert('Le client a été Supprimé');
			window.location = location;
		}
	})
});
//details_user
$('.details_user').click(function () { 
	$.post("../includes/ajax/details_user.php",{id:$(this).val()},
	function(data){
		alert(data);
	})
	
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


