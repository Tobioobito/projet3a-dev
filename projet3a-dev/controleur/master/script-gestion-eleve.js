//////////////////////////////////RECHERCHE////////////////////

function recherche_eleve(){


$.post("modele/master/affiche-eleve.php", { 
							nom_recherche_eleve : $("#nom_recherche_eleve").val(),
							classe_recherche_eleve : $("#classe_recherche_eleve").val(),
                           },
    function(data){
			
		$('#nbr_eleve').remove();
		$('#tableau_eleve').replaceWith(data);
			//$('#contenu_tableau_eleve').remove();

    	

});



}


$('#recherche_eleve').keyup ( function() //saisie
{ 
	
    recherche_eleve();
 	$('#nbr_eleve_recherche').remove();
});


$('#recherche_eleve').change ( function() //selecteur
{ 
	
    recherche_eleve();
  $('#nbr_eleve_recherche').remove();
});












