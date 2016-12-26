<?php

include "connect-bdd.php";


	$nom_matiere       =  htmlspecialchars($_POST["nom_matiere"]);
	$prof_matiere      =  htmlspecialchars($_POST["prof_matiere"]);
	$classe_matiere    =  htmlspecialchars($_POST["classe_matiere"]);
	$eta_matiere       =  $_SESSION['nom_eta_master'];





$requete = $connexion->prepare("INSERT INTO sl_matiere (nom_matiere, prof_matiere, eta_matiere, classe_matiere)


													   VALUES (:nom_matiere, :prof_matiere, :eta_matiere, :classe_matiere)");


$requete->bindParam(':nom_matiere', $nom_matiere, PDO::PARAM_STR);
$requete->bindParam(':prof_matiere', $prof_matiere, PDO::PARAM_STR);
$requete->bindParam(':eta_matiere', $eta_matiere, PDO::PARAM_STR);
$requete->bindParam(':classe_matiere', $classe_matiere, PDO::PARAM_STR);

$requete->execute();

echo "reussi";



?>