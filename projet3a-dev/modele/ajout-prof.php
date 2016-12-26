<?php


include "connect-bdd.php";




	$mail_prof       =  htmlspecialchars($_POST["mail_prof"]);
	$mdp_prof        =  htmlspecialchars($_POST["mdp_prof"]);
	$nom_prof        =  htmlspecialchars($_POST["nom_prof"]);
	$prenom_prof     =  htmlspecialchars($_POST["prenom_prof"]);
	$matiere_prof    =  htmlspecialchars($_POST["matiere_prof"]);;
	$eta_prof        =  $_SESSION['nom_eta_master'];





$requete = $connexion->prepare("INSERT INTO sl_prof (mail_prof, mdp_prof, nom_prof, prenom_prof, matiere_prof, eta_prof)


													   VALUES (:mail_prof, :mdp_prof, :nom_prof, :prenom_prof, :matiere_prof, :eta_prof)");


$requete->bindParam(':mail_prof', $mail_prof, PDO::PARAM_STR);
$requete->bindParam(':mdp_prof', $mdp_prof, PDO::PARAM_STR);
$requete->bindParam(':nom_prof', $nom_prof, PDO::PARAM_STR);
$requete->bindParam(':prenom_prof', $prenom_prof, PDO::PARAM_STR);
$requete->bindParam(':matiere_prof', $matiere_prof, PDO::PARAM_STR);
$requete->bindParam(':eta_prof', $eta_prof, PDO::PARAM_STR);

$requete->execute();

echo "reussi";
   ?>