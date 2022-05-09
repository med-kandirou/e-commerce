
$(document).ready(function(){
 
	//check input fields
        var texterror="";
        function checkinputfields(field)
        {
            if(field=="nom")
            {
                texterror='Nom';
            }
            else if(field=="prenom")
            {
                texterror='Prenom';
            }
            else if(field=="email")
            {
                texterror="Email";
            }
            else if(field=="pass")
            {
                texterror="Password";
            }
            else if(field=="Cpass")
            {
                texterror="Confirmation password";
            }
            if($("#"+field+"").val()=='')
            {
                $("#"+field+"").css("border-color", "red");
                $("#"+field+"-msg").text(texterror+' est obligatoire');
                $("#"+field+"-msg").removeClass('valid');
                $("#"+field+"-msg").addClass('invalid');
            }
            else 
            {
                $("#"+field+"").css("border-color", "grey");
                $("#"+field+"-msg").text('');
                $("#"+field+"-msg").removeClass('invalid');
                $("#"+field+"-msg").addClass('valid');
            }
        }
    //for sign in    
    $('#email').on('blur',()=>{
        checkinputfields('email');
    });
    $('#pass').on('blur',()=>{
        checkinputfields('pass');
    });

    //for sign up
    $('#nom').on('blur',()=>{
        checkinputfields('nom');
    });
    $('#prenom').on('blur',()=>{
        checkinputfields('prenom');
    });
    $('#Cpass').on('blur',()=>{
        checkinputfields('Cpass');
    });


    //alerts 
    $("#alert").hide();
    $("#alert_error").hide();
    $("#alert_succes").hide();

    //btn s'inscrire
    $('#btn_signin').on('click',()=>
    {
        if($('#email').val()=='')
        {
            checkinputfields('email');
        }
        if($('#pass').val()=='')
        {
            checkinputfields('pass');
        }
        if($('#email').val()!='' && $('#pass').val()!='')
        {
            var email = $('#email').val();
		    var password = $('#pass').val();
		    if(email!="" && password!=""){

                $.post("includes/ajax/connect.php",{email:$('#email').val(),pass:$('#pass').val()},
                function (data) {
                    if(data=='1')
                    {
                        $("#alert_error").hide();
                        $("#alert_succes").show();
                        setTimeout(()=>
                        {
                            location.replace("./user/index.user.php");
                        },1000); 
                    }
                    else if(data=='2')
                    {
                        $("#alert_error").hide();
                        $("#alert_succes").show();
                        setTimeout(()=>
                        {
                            location.replace("./admin/index.admin.php");
                        },1000); 
                    }
                    else
                    {
                        $("#alert_error").show();	
                    }  
                }
                ).fail(function () {alert("fail")});
            } 
        }
    });

    $('#btn_signup').on('click',()=>
    {
        if($('#nom').val()=='')
        {
            checkinputfields('nom');
        }
        else if($('#prenom').val()=='')
        {
            checkinputfields('prenom');
        }
        else if($('#email').val()=='')
        {
            checkinputfields('email');
        }
        else if($('#pass').val()=='')
        {
            checkinputfields('pass');
        }
        else if($('#Cpass').val()=='')
        {
            checkinputfields('Cpass');
        }
        else if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test($('#email').val())==false)
        {
            $('#email-msg').text('Fotmat Email incorrect');
            $("#email-msg").removeClass('valid');
            $("#email-msg").addClass('invalid');
        }
        else if($('#pass').val()!=$('#Cpass').val())
        {
            $('#Cpass-msg').text('confirmation Mot de passe est incorrect');
            $("#Cpass-msg").removeClass('valid');
            $("#Cpass-msg").addClass('invalid');
        }
        else 
        {
            $.ajax({
                type: "POST",
                url: "includes/ajax/inscrire.php",
                data: {
                nom: $('#nom').val(), 
                prenom:$('#prenom').val(),
                email:$('#email').val(),
                pass:$('#pass').val()
                },
                success: function(data){
                    
                    if(data=='exist')
                    {
                        $('#email-msg').text('Email déja existe');
                        $("#email-msg").removeClass('valid');
                        $("#email-msg").addClass('invalid');
                    }
                    else{
                        $("#alert").show();
                        setTimeout(()=>{
                            window.location.href = "sign_in.php";
                        },2500)    				
                    }
                }
            });
        }
    });

	});

