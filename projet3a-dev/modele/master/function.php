<?php


include "connect-bdd.php";

function jevetou($element_label, $location, $filtre_classe){

	global $connexion;

	$nom_eta_master=$_SESSION['nom_eta_master'];

	if($filtre_classe==""){
		$req = $connexion->prepare('SELECT * FROM sl_'.$element_label.' WHERE eta_'.$element_label.' = :nom_eta_master ORDER BY nom_'.$element_label.'');
	}

	else{ 
		$req = $connexion->prepare('SELECT * FROM sl_'.$element_label.' WHERE eta_'.$element_label.' = :nom_eta_master AND classe_eleve = :filtre_classe ORDER BY nom_'.$element_label.'');
	
			$req->bindParam(':filtre_classe', $filtre_classe, PDO::PARAM_STR);
	}
	$req->bindParam(':nom_eta_master', $nom_eta_master, PDO::PARAM_STR);
	$req->execute();

	while($resultat = $req->fetch()){
		include $location;
	}



}




function matprof($prof){

$liste_mat = "";

global $connexion;

$nom_eta_master=$_SESSION['nom_eta_master'];


$req = $connexion->prepare('SELECT nom_matiere FROM sl_prof_matiere WHERE nom_prof = :prof');

$req->bindParam(':prof', $prof, PDO::PARAM_STR);
$req->execute();




while($resulta = $req->fetch()){

$liste_mat = $liste_mat." ".$resulta['nom_matiere'];

}

return $liste_mat;

}


?>