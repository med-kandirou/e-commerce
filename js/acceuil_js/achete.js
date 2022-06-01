$(document).ready(function () {
    // calculer total prix par quantité
// $('#quantite').blur(function () { 
//     $('#total_prix').html('<span class="label label-warning">Total :'+$('#prix').val()*$(this).val()+'</span>');
// });

    $('#alert-achete').hide();
    $('#alert-champ-vide').hide();

    $('#btn_acheter').click(function () {
        var id=$('#btn_acheter').val();
        var tele=$('#tele').val();
        var quantité=$('#quantite').val();
        var adress=$('#adress').val();
        var code=$('#code').val();
        if (tele=='' || quantité==''|| adress =='' || code=='') {
            $('#alert-champ-vide').show();
        }
        else
        {
            $('#alert-champ-vide').hide();
            $.post("../includes/ajax/achete_ajax.php",{id:id,tele:tele,quantité:quantité,adress:adress,code:code},
        	function(data){
        	if(data=='added')
        	{
        		$('#alert-achete').show();
                setTimeout(()=>{
                    window.history.back();
                },2000);   
        	}
            else
            {
                $('#alert-champ-vide').text('Ce produit déja demmander');
                $('#alert-champ-vide').show();

                setTimeout(()=>{
                    window.history.back();
                },2000); 
            }
        })
        }
        

    });

    $('#poursuivre').click(function () { 
        window.location.href = "../catalogue/acheter.php?id="+$('#poursuivre').val()+"";
    });








    
});