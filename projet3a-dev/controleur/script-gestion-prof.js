////////////////////////SELECTION MATIERES (récursivité)/////////////////////
/*
var derniere_matiere = 1;
affiche_select_matiere(1);
var total_matiere = '';

function affiche_select_matiere(nbr_matiere){

    var matiere_prof = "matiere_prof"+nbr_matiere;
    var select_matiere="<select type='text' id="+matiere_prof+" name="+matiere_prof+"><option></option><option>français</option><option>math</option><option>histoire</option></select>";


    if (nbr_matiere == derniere_matiere){

        $("#select_matiere").append(select_matiere);

        $( "#"+matiere_prof ).on( "change",  function() {
            total_matiere = total_matiere +", "+ $("#"+matiere_prof).val();
            $("#total_matiere").val(total_matiere);
            affiche_select_matiere(nbr_matiere+1);
        });
        derniere_matiere = derniere_matiere + 1;
    }
    
    }
*/
var nbr_matiere = 2;
$("#select_matiere").append("<select type='text' id='matiere_prof1' name='matiere_prof1' ><option>français</option><option>math</option><option>histoire</option></select>");
$( "#bouton_matiere_more" ).on( "click",  function() {
    var matiere_prof = "matiere_prof"+nbr_matiere;
    var select_matiere="<select type='text' id="+matiere_prof+" name="+matiere_prof+"><option>français</option><option>math</option><option>histoire</option></select>";
    $("#select_matiere").append(select_matiere);
    nbr_matiere=nbr_matiere + 1;
    

});


$( "#bouton_matiere_less" ).on( "click",  function() {

    if (nbr_matiere>2){
       nbr_matiere=nbr_matiere - 1;
        $("select").remove('#matiere_prof'+nbr_matiere);
    }

});


function total_m(){

var total = '';
var sep = ', ';
for (i=1; i<nbr_matiere; i++){

    if (total =='') sep=''; else sep=', ';

    total = total +sep+$('#matiere_prof'+i).val();
    
}

return total;

}



//////////////////////////////AJOUT PROF ////////////////////////////////

$("#bouton_ajout_prof").click(function( event ) {

ajout_prof();
return false;

});


function ajout_prof(){
var total_p = total_m();
alert(total_p);
$.post("modele/ajout-prof.php", { 
							mail_prof : $("#mail_prof").val(), 
                            mdp_prof : $("#mdp_prof").val(), 
                            nom_prof : $("#nom_prof").val(),
                            prenom_prof : $("#prenom_prof").val(),
                            matiere_prof : total_p} ,
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



});

return false;
}


$('#form_modif_prof').on ("click", '#bouton_modif_prof',  function() { 


modif_prof(this.name);

return false;
});
