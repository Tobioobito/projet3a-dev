<?php

include "connect-bdd.php";

$id_matiere = $_POST['id_matiere'];
$eta_matiere= $_SESSION['nom_eta_master'];

$req =$connexion->prepare("DELETE FROM sl_matiere WHERE id_matiere = :id_matiere AND eta_matiere = :eta_matiere"); 

$req->bindParam(':id_matiere', $id_matiere, PDO::PARAM_INT);
$req->bindParam(':eta_matiere', $eta_matiere, PDO::PARAM_INT);
$req->execute();


?>