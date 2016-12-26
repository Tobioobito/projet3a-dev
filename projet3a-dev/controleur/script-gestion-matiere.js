$("#bouton_ajout_matiere").click(function( event ) {

ajout_matiere();
return false;

});


function ajout_matiere(){

$.post("modele/ajout-matiere.php", { 
							nom_matiere : $("#nom_matiere").val(), 
                            prof_matiere : $("#prof_matiere").val(), 
                            classe_matiere : $("#classe_matiere").val()} ,
    function(){

    		$('#tableau_matiere').load(document.URL +  ' #tableau_matiere');



});



}