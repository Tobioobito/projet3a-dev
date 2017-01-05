$("#bouton_ajout_matiere").click(function( event ) {

ajout_matiere();
return false;

});


function ajout_matiere(){

$.post("modele/master/ajout-matiere.php", { 
							nom_matiere : $("#nom_matiere").val(), 
                            prof_matiere : $("#prof_matiere").val(), 
                            classe_matiere : $("#classe_matiere").val()} ,
    function(){

    		$('#tableau_matiere').load(document.URL +  ' #tableau_matiere');



});



}

////////////////////////SUPPRIME MATIERE/////////////////////////////

function supprime_matiere(id_m){

$.post("modele/master/supprime-matiere.php", { 

                            id_matiere : id_m } ,
    function(){

$('#tableau_matiere').load(document.URL +  ' #tableau_matiere');    		

});

}


$(".bouton_supprime_matiere").click(function( event ) {

supprime_matiere(this.name);



});