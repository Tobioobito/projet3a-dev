<?php

include "connect-bdd.php";

$id_prof = $_POST['id_prof'];
$eta_prof= $_SESSION['nom_eta_master'];



//Onrécupère le nom du prof selon l'id
$req2 =$connexion->prepare("SELECT nom_prof FROM sl_prof WHERE id_prof = :id_prof"); 
$req2->bindParam(':id_prof', $id_prof, PDO::PARAM_INT);
$req2->execute();
$nom_prof = $req2->fetch();

echo $nom_prof[0];



//On supprime la bdd mat_prof
$req3 =$connexion->prepare("DELETE FROM sl_prof_matiere WHERE nom_prof = :nom_prof"); 
$req3->bindParam(':nom_prof', $nom_prof[0], PDO::PARAM_INT);
$req3->execute();

//On supprime la bdd prof
$req =$connexion->prepare("DELETE FROM sl_prof WHERE id_prof = :id_prof AND eta_prof = :eta_prof"); 
$req->bindParam(':id_prof', $id_prof, PDO::PARAM_INT);
$req->bindParam(':eta_prof', $eta_prof, PDO::PARAM_INT);
$req->execute();


?>