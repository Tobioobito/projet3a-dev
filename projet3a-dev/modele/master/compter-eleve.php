<?php
if(!isset($_POST['nom_recherche_eleve']))
{
$nom_eta_master=$_SESSION['nom_eta_master'];
$req = $connexion->prepare('SELECT * FROM sl_eleve WHERE eta_eleve = :nom_eta_master');

$req->bindParam(':nom_eta_master', $nom_eta_master, PDO::PARAM_STR);
$req->execute();

$count = $req->rowCount();
echo "<span id='nbr_eleve'>".$count."</span>";
}


?>