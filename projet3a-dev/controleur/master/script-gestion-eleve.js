//////////////////////////////////RECHERCHE////////////////////

function recherche_eleve(){

$.post("modele/master/affiche-eleve.php", { 
							nom_recherche_eleve : $("#nom_recherche_eleve").val()
                           },
    function(data){
alert(data);
    		
    		$('#contenu_tableau_eleve').append(data);

});
}

  $('#nom_recherche_eleve').keyup ( function() //saisie
{ 
$('#contenu_tableau_eleve').remove();
    recherche_eleve();
   
});












