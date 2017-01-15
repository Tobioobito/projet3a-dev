<?php

include "connect-bdd.php";

$id_matiere = $_POST['id_matiere'];
$eta_matiere= $_SESSION['nom_eta_master'];


//On récupère le nom de la matiere selon l'id
$req2 =$connexion->prepare("SELECT nom_matiere FROM sl_matiere WHERE id_matiere = :id_matiere"); 
$req2->bindParam(':id_matiere', $id_matiere, PDO::PARAM_INT);
$req2->execute();
$nom_matiere = $req2->fetch();

echo $nom_matiere[0];

//On supprime la bdd mat_matiere
$req3 =$connexion->prepare("DELETE FROM sl_prof_matiere WHERE nom_matiere = :nom_matiere"); 
$req3->bindParam(':nom_matiere', $nom_matiere[0], PDO::PARAM_INT);
$req3->execute();

$req =$connexion->prepare("DELETE FROM sl_matiere WHERE id_matiere = :id_matiere AND eta_matiere = :eta_matiere"); 

$req->bindParam(':id_matiere', $id_matiere, PDO::PARAM_INT);
$req->bindParam(':eta_matiere', $eta_matiere, PDO::PARAM_INT);
$req->execute();


?>