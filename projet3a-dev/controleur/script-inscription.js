$( "#erreur_obligatoire" )
        .css({

            "display":"none",
    
    })

$( "#erreur_mdp" )
        .css({

            "display":"none",
    
    })





function inscription(){

$.post("modele/inscription.php", { 
							mail_master : $("#mail_master").val(), 
                            mdp_master : $("#mdp_master").val(), 
                            nom_master : $("#nom_master").val(),
                            prenom_master : $("#prenom_master").val(),
                            date_nai_master : $("#date_nai_master").val(),
                            tel_master : $("#tel_master").val(),
                            nom_eta_master : $("#nom_eta_master").val(),
                            adresse_eta_master : $("#adresse_eta_master").val(),
                            ville_eta_master : $("#ville_eta_master").val(),
                            type_eta_master1 : $("#type_eta_master1").val(),
                            type_eta_master2 : $("#type_eta_master2").val(),
                            type_eta_master3 : $("#type_eta_master3").val(),
                            type_eta_master4 : $("#type_eta_master4").val(),
                            spe_eta_master1 : $("#spe_eta_master1").val(),
                            spe_eta_master2 : $("#spe_eta_master2").val(),
                            spe_eta_master3 : $("#spe_eta_master3").val() } ,
    function(){






});



}



$("#bouton_inscription").click(function( event ) {

if($("#mdp_master").val()!==$("#mdp_check_master").val()){

$("#erreur_mdp").slideDown("slow");

return false;
}

else if($("#mail_master").val()==""){

$("#erreur_obligatoire").slideDown("slow");


return false;
}


else  inscription();


window.location.replace("login.php?inscription=ok");
    return false;
});

