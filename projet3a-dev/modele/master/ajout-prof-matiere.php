<?php

include "connect-bdd.php";




$nom_prof        =  htmlspecialchars($_POST["nom_prof"]);
$nom_matiere     =  htmlspecialchars($_POST["nom_matiere"]);
	





$requete = $connexion->prepare("INSERT INTO sl_prof_matiere (nom_prof, nom_matiere)													
								VALUES (:nom_prof, :nom_matiere)");




$requete->bindParam(':nom_prof', $nom_prof, PDO::PARAM_STR);
$requete->bindParam(':nom_matiere', $nom_matiere, PDO::PARAM_STR);
$requete->execute();


/*Select*/

/*
$req = $connexion->prepare ("UPDATE sl_matiere
SET prof_matiere = :prof_matiere
WHERE eta_prof = :eta_prof");
*/




echo "reussi";


?>