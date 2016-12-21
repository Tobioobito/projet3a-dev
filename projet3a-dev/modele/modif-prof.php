<?php

include ("connect-bdd.php");


$nom_prof_modif=$_POST["nom_prof_modif"];
$prenom_prof_modif=$_POST["prenom_prof_modif"];
$mail_prof_modif=$_POST["mail_prof_modif"];
$mdp_prof_modif=$_POST["mdp_prof_modif"];
$mdp_check_prof_modif=$_POST["mdp_check_prof_modif"];

$matiere_prof1_modif=$_POST["matiere_prof1_modif"];
$matiere_prof2_modif=$_POST["matiere_prof2_modif"];
$matiere_prof3_modif=$_POST["matiere_prof3_modif"];

$classe_prof1_modif=$_POST["classe_prof1_modif"];
$classe_prof2_modif=$_POST["classe_prof2_modif"];
$classe_prof3_modif=$_POST["classe_prof3_modif"];
$classe_prof4_modif=$_POST["classe_prof4_modif"];
$classe_prof5_modif=$_POST["classe_prof5_modif"];
$classe_prof6_modif=$_POST["classe_prof6_modif"];

$eta_prof= $_SESSION['nom_eta_master'];
$id_prof= $_POST['id_prof'];



$requete = $connexion->prepare ("UPDATE sl_prof
SET nom_prof = :nom_prof_modif, prenom_prof = :prenom_prof_modif, mail_prof = :mail_prof_modif, mdp_prof = :mdp_prof_modif,
	matiere_prof1 = :matiere_prof1_modif, matiere_prof2 = :matiere_prof2_modif, matiere_prof3 = :matiere_prof3_modif, 
	classe_prof1 = :classe_prof1_modif, classe_prof2 = :classe_prof2_modif, classe_prof3 = :classe_prof3_modif, classe_prof4 = :classe_prof4_modif, classe_prof5 = :classe_prof5_modif, classe_prof6 = :classe_prof6_modif
WHERE eta_prof = :eta_prof AND id_prof = :id_prof");

$requete->bindParam(':nom_prof_modif', $nom_prof_modif, PDO::PARAM_INT);
$requete->bindParam(':prenom_prof_modif', $prenom_prof_modif, PDO::PARAM_INT);
$requete->bindParam(':mail_prof_modif', $mail_prof_modif, PDO::PARAM_INT);
$requete->bindParam(':mdp_prof_modif', $mdp_prof_modif, PDO::PARAM_INT);

$requete->bindParam(':matiere_prof1_modif', $matiere_prof1_modif, PDO::PARAM_INT);
$requete->bindParam(':matiere_prof2_modif', $matiere_prof2_modif, PDO::PARAM_INT);
$requete->bindParam(':matiere_prof3_modif', $matiere_prof3_modif, PDO::PARAM_INT);

$requete->bindParam(':classe_prof1_modif', $classe_prof1_modif, PDO::PARAM_INT);
$requete->bindParam(':classe_prof2_modif', $classe_prof2_modif, PDO::PARAM_INT);
$requete->bindParam(':classe_prof3_modif', $classe_prof3_modif, PDO::PARAM_INT);
$requete->bindParam(':classe_prof4_modif', $classe_prof4_modif, PDO::PARAM_INT);
$requete->bindParam(':classe_prof5_modif', $classe_prof5_modif, PDO::PARAM_INT);
$requete->bindParam(':classe_prof6_modif', $classe_prof6_modif, PDO::PARAM_INT);

$requete->bindParam(':eta_prof', $eta_prof, PDO::PARAM_INT);
$requete->bindParam(':id_prof', $id_prof, PDO::PARAM_INT);





$requete->execute();

echo "bonk";
/*header("Location:../gestion-prof.php");*/

?>