function ajout_prof(){

$.post("modele/ajout-prof.php", { 
							mail_prof : $("#mail_prof").val(), 
                            mdp_prof : $("#mdp_prof").val(), 
                            nom_prof : $("#nom_prof").val(),
                            prenom_prof : $("#prenom_prof").val(),
                            matiere_prof1 : $("#matiere_prof1").val(),
                            matiere_prof2 : $("#matiere_prof2").val(),
                            matiere_prof3 : $("#matiere_prof3").val() } ,
    function(){






});



}


function supprime_prof(){

$.post("modele/modif-prof.php", { 
							mail_prof : $("#mail_prof").val(), 
                            mdp_prof : $("#mdp_prof").val(), 
                            nom_prof : $("#nom_prof").val(),
                            prenom_prof : $("#prenom_prof").val(),
                            matiere_prof1 : $("#matiere_prof1").val(),
                            matiere_prof2 : $("#matiere_prof2").val(),
                            matiere_prof3 : $("#matiere_prof3").val() } ,
    function(){






});



}


$("#bouton_supprime_prof").click(function( event ) {

ajout_prof();

 
});


$("#bouton_ajout_prof").click(function( event ) {

ajout_prof();

 
});