<?php


include "connect-bdd.php";

function jevetou($element_label, $location){

global $connexion;

$nom_eta_master=$_SESSION['nom_eta_master'];


$req = $connexion->prepare('SELECT * FROM sl_'.$element_label.' WHERE eta_'.$element_label.' = :nom_eta_master ORDER BY nom_'.$element_label.'');

$req->bindParam(':nom_eta_master', $nom_eta_master, PDO::PARAM_STR);
$req->execute();




while($resultat = $req->fetch()){


include $location;

}



}

?>