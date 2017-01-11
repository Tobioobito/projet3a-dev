////////////////////////AJOUT SELECTION MATIERES/////////////////////
var nbr_matiere = 2;
$("#select_matiere").append("<select type='text' id='matiere_prof1' name='matiere_prof1' ></select>");
$("#matiere_prof1").load("modele/master/remplir-select-matiere.php");

$( "#bouton_matiere_more" ).on( "click",  function() {

    var matiere_prof = "matiere_prof"+nbr_matiere;
    var select_matiere="<select type='text' id="+matiere_prof+" name="+matiere_prof+">";
    $("#select_matiere").append(select_matiere);
    $("#matiere_prof"+nbr_matiere).load("modele/master/remplir-select-matiere.php");
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

////////////////////////AJOUT SELECTION CLASSES/////////////////////
var nbr_classe = 2;
$("#select_classe").append("<select type='text' id='classe_prof1' name='classe_prof1' ></select>");
$("#classe_prof1").load("modele/master/remplir-select-classe.php");

$( "#bouton_classe_more" ).on( "click",  function() {

    var classe_prof = "classe_prof"+nbr_classe;
    var select_classe="<select type='text' id="+classe_prof+" name="+classe_prof+">";
    $("#select_classe").append(select_classe);
    $("#classe_prof"+nbr_classe).load("modele/master/remplir-select-classe.php");
    nbr_classe=nbr_classe + 1;
    

});


$( "#bouton_classe_less" ).on( "click",  function() {

    if (nbr_classe>2){
       nbr_classe=nbr_classe - 1;
        $("select").remove('#classe_prof'+nbr_classe);
    }

});


function total_c(){

var total = '';
var sep = ', ';
for (i=1; i<nbr_classe; i++){

    if (total =='') sep=''; else sep=', ';

    total = total +sep+$('#classe_prof'+i).val();
    
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
var total_pp = total_c();
//alert(total_p);
$.post("modele/master/ajout-prof.php", { 
							mail_prof : $("#mail_prof").val(), 
                            mdp_prof : $("#mdp_prof").val(), 
                            nom_prof : $("#nom_prof").val(),
                            prenom_prof : $("#prenom_prof").val(),
                            matiere_prof : total_p,
                            classe_prof : total_pp} ,
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

$.post("modele/master/supprime-prof.php", { 

                            id_prof : id_p } ,
    function(){

$('#tableau_prof').load(document.URL +  ' #tableau_prof');    		

});

}


$(".bouton_supprime_prof").click(function( event ) {

supprime_prof(this.name);



});


///////////////////////////MODIF PROF//////////////////////////

/*Remplir et afficher le formulaire de modification*/
function remplir_form_modif(id_p){
    

$.post("modele/master/remplir-form-modif-prof.php", {
                            id_prof      : id_p } ,
    function(data){

    if (data=="erreur"){
        alert("erreur");
}


else 
    $("#form_modif_prof").html(data);

});



}



 $('.affiche_modif_prof').click (function( event ) { 


remplir_form_modif(this.name);


return false;
 });

/*Selecteur matiere "more/less" */
$("#bouton_matiere_more_modif").live( "click",  function() {
var nombre_matiere = parseInt($("#total_mat").text())+1;
var matiere_prof = "matiere_prof_modif"+nombre_matiere;
var select_matiere="<select type='text' id="+matiere_prof+" name="+matiere_prof+">";
    $("#select_matiere_modif").append(select_matiere);
    $("#matiere_prof_modif"+nombre_matiere).load("modele/master/remplir-select-matiere.php");
  
$("#total_mat").text(nombre_matiere);

});

$( "#bouton_matiere_less_modif" ).live( "click",  function() {
 
var nombre_matiere = parseInt($("#total_mat").text());

    if (nombre_matiere>1){
      
        $("select").remove('#matiere_prof_modif'+nombre_matiere);

        $("#total_mat").text(nombre_matiere-1);
    }

});



/*Conversion selecteur en texte*/
function total_m_m(){
var tot_mat = $("#total_mat").text();

var total = '';
var sep = ', ';
for (var i=1; i<=tot_mat; i++){

    if (total =='') sep=''; else sep=', ';

    total = total +sep+$('#matiere_prof_modif'+i).val();
    
}

return total;

}

/*Appel de la requête*/
function modif_prof(id_p){
var total_p = total_m_m();
alert(total_p);

$.post("modele/master/modif-prof.php", { 
                            mail_prof_modif : $("#mail_prof_modif").val(), 
                            mdp_prof_modif : $("#mdp_prof_modif").val(), 
                            nom_prof_modif : $("#nom_prof_modif").val(),
                            prenom_prof_modif : $("#prenom_prof_modif").val(),
                            
                            matiere_prof_modif : total_p,

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
