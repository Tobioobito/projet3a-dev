//////////////////////////////AJOUT PROF ////////////////////////////////

$("#bouton_ajout_prof").click(function( event ) {

ajout_prof();
return false;

});


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

    		$('#tableau_prof').load(document.URL +  ' #tableau_prof');



});



}


$("#affiche_ajout_prof").click(function( event ) {

 $("#form_ajout_prof").slideDown("slow");

return false;
 
});


////////////////////////SUPPRIME PROF/////////////////////////////

function supprime_prof(id_p){

$.post("modele/supprime-prof.php", { 

                            id_prof : id_p } ,
    function(){

$('#tableau_prof').load(document.URL +  ' #tableau_prof');    		

});

}


$(".bouton_supprime_prof").click(function( event ) {

supprime_prof(this.name);



});


///////////////////////////MODIF PROF//////////////////////////



function remplir_form_modif(id_p){
    

$.post("modele/remplir-form-modif-prof.php", {
                            id_prof      : id_p } ,
    function(data){

    if (data=="erreur"){
        alert("erreur");
}
/*$('#form_modif_prof').load(document.URL +  ' #form_modif_prof');*/

else 
    $("#form_modif_prof").html(data);

});



}



 $('.affiche_modif_prof').click (function( event ) { 


remplir_form_modif(this.name);

return false;
 });


function modif_prof(id_p){


$.post("modele/modif-prof.php", { 
                            mail_prof_modif : $("#mail_prof_modif").val(), 
                            mdp_prof_modif : $("#mdp_prof_modif").val(), 
                            nom_prof_modif : $("#nom_prof_modif").val(),
                            prenom_prof_modif : $("#prenom_prof_modif").val(),
                            
                            matiere_prof1_modif : $("#matiere_prof1_modif").val(),
                            matiere_prof2_modif : $("#matiere_prof2_modif").val(),
                            matiere_prof3_modif : $("#matiere_prof3_modif").val(),
                            id_prof      : id_p } ,
    function(){

            $('#tableau_prof').load(document.URL +  ' #tableau_prof');
alert(id_p);


});

return false;
}


$('#form_modif_prof').on ("click", '#bouton_modif_prof',  function() { 


modif_prof(this.name);

return false;
});
