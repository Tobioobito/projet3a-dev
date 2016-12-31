<?php


include "connect-bdd.php";

$nom_eta_master=$_SESSION['nom_eta_master'];


$req = $connexion->prepare('SELECT * FROM sl_matiere WHERE eta_matiere = :nom_eta_master ORDER BY nom_matiere');

$req->bindParam(':nom_eta_master', $nom_eta_master, PDO::PARAM_STR);
$req->execute();




while($resultat = $req->fetch()){


include "../vue/select-matiere.php";

}


?>