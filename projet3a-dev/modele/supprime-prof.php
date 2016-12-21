<?php

include "connect-bdd.php";

$id_prof = $_POST['id_prof'];
$eta_prof= $_SESSION['nom_eta_master'];

$req =$connexion->prepare("DELETE FROM sl_prof WHERE id_prof = :id_prof AND eta_prof = :eta_prof"); 

$req->bindParam(':id_prof', $id_prof, PDO::PARAM_INT);
$req->bindParam(':eta_prof', $eta_prof, PDO::PARAM_INT);
$req->execute();


?>