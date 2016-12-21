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

/*

function form_modif_prof(id_p){


$.post("modele/affiche-form-modif-prof.php", { 

                            id_prof : id_p } ,
    function(){
  

});

}







        $('.affiche_modif_prof').click (function( event ) { 

            var nom_prof_modif = 
            var prenom_prof_modif =
            var nom_prof_modif =
            var nom_prof_modif =
            var nom_prof_modif =
            var nom_prof_modif =
            var nom_prof_modif =
            var nom_prof_modif =
            var nom_prof_modif =
            var nom_prof_modif =


            $("#nom_prof_modif").val("nom");
            $("#prenom_prof_modif").val("bro");
            $("#mdp_prof_modif").val("bro");
            $("#mdp_check_prof_modif").val("bro");
            $("#mail_prof_modif").val("bro");


            $("#matiere_prof1_modif").val("math");
            $("#matiere_prof2_modif").val("math");
            $("#matiere_prof3_modif").val("math");


            $("#classe_prof1_modif").val("math");
            $("#classe_prof2_modif").val("math");
            $("#classe_prof3_modif").val("math");
            $("#classe_prof4_modif").val("math");
            $("#classe_prof5_modif").val("math");
            $("#classe_prof6_modif").val("math");

   
 $("#form_modif_prof").slideDown("slow");
return false;
        });
    
    */

