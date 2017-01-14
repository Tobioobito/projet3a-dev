<?php



include "connect-bdd.php";


	$nom_prof       =  htmlspecialchars($_POST["nom_prof"]);






$requete = $connexion->prepare("SELECT nom_matiere FROM sl_prof_matiere WHERE nom_prof = :nom_prof");


$requete->bindParam(':nom_prof', $nom_prof, PDO::PARAM_STR);

$requete->execute();

while($resultat = $req->fetch()){
	echo $resultat["nom_matiere"]."<br>".;
}

?>