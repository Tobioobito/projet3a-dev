//////////////////////////////////RECHERCHE////////////////////

function recherche_eleve(){

$.post("modele/master/affiche-eleve.php", { 
							nom_recherche_eleve : $("#nom_recherche_eleve").val(),
							classe_recherche_eleve : $("#classe_recherche_eleve").val()
                           },
    function(data){
			
		
		$('#tableau_eleve').replaceWith(data);
			//$('#contenu_tableau_eleve').remove();

    	

});
}




$('#nom_recherche_eleve').keyup ( function() //saisie
{ 
    recherche_eleve();
   
});












