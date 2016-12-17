<?php

include "connect-bdd.php";

$suprime =$_GET["delete"];


$req =$connexion->prepare("DELETE FROM sl_prof WHERE id_prof = :sup"); 

$req->bindParam(':sup', $suprime, PDO::PARAM_INT);
$req->execute();



header("Location:../gestion-prof.php");



?>