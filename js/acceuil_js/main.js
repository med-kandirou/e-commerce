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
	$("#pannier_link_admin").click(function(){
		$("#mon_pannier").removeClass('d-none');
		$("#enfant_page").addClass('d-none');
		$("#acceuil_page").addClass('d-none');
		$("#homme_page").addClass('d-none');
		$("#femme_page").addClass('d-none');
	  });
	  $("#pannier_link_user").click(function(){
		$("#mon_pannier").removeClass('d-none');
		$("#enfant_page").addClass('d-none');
		$("#acceuil_page").addClass('d-none');
		$("#homme_page").addClass('d-none');
		$("#femme_page").addClass('d-none');
	  });
	  $("#add_produit").click(function(){
		$("#produit").removeClass('d-none');
		$("#mon_pannier").addClass('d-none');
		$("#enfant_page").addClass('d-none');
		$("#acceuil_page").addClass('d-none');
		$("#homme_page").addClass('d-none');
		$("#femme_page").addClass('d-none');
	  });
	$(".wish-icon i").click(function(){
		$(this).toggleClass("fa-heart fa-heart-o");
	});

	//redirect to sign_in
	$(".add-pannier1").click(function(){
		window.location.href = "./sign_in.php";
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
			}
		})
		
	});

	//add product in store
	var file;
	$("#file_name").change(function (e) { 
		file=e.target.files[0].name;
	});

	//add_product
	$("#feed_back").hide();
	$("#add_product").click(function () { 
		//
		var nom=$('#nom').val();
		var prix=$('#prix').val();
		var desc=$('#desc').val();
		var dep=$('#select_departement').val();
		var cat=$('#select_cat').val();
		var quantite=$('#quantite').val();
		if (file=='' || nom=='' ||prix==''|| desc=='' || quantite=='' || dep=='' || cat=='') {
			$("#feed_back").show();
			$("#feed_back").removeClass('alert, alert-success');
			$("#feed_back").addClass('alert  alert-danger');
			$("#feed_back").text('Il faut saisir tous les champs');
		}
		else
		{
			$.post("../includes/ajax/add_product.php",{file:file,nom:nom,prix:prix,desc:desc,quatite:quantite,dep:dep,cat:cat},
			function(data){
				if(data=='added')
				{
					$("#feed_back").show();
					$("#feed_back").removeClass('alert, alert-danger');
					$("#feed_back").addClass('alert , alert-success');
					$("#feed_back").text('Produit Ajouté');
					//vider les champs
					$('#nom').val('');
					$('#prix').val('');
					$('#desc').val('');
					$('#select_departement').val('');
					$('#select_cat').val('');
					$('#quantite').val('');
					file='';

				}
			})
		}
	
	});
	//supprimer un produit
	$('.supp_prod').click(function () { 
		$.post("../includes/ajax/supp_produit.php",{id:$(this).val()},
		function(data){
			if(data=='success')
			{
				alert('deleted');
			}
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


