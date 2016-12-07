<?php

include "connect-bdd.php";

$nom_eta_master=$_SESSION['nom_eta_master'];


$req = $connexion->prepare('SELECT * FROM sl_prof WHERE eta_prof = :nom_eta_master ORDER BY nom_prof');

$req->bindParam(':nom_eta_master', $nom_eta_master, PDO::PARAM_STR);
$req->execute();

while($resultat = $req->fetch()){

echo '<tr>
	  <td>'.$resultat['nom_prof']. '</td> 
	  <td>'.$resultat['prenom_prof'].'</td> 
	  <td>'.$resultat['matiere_prof1'].'</td>
	  <td>'.$resultat['classe_prof1'].', '.$resultat['classe_prof2'].', '.$resultat['classe_prof3'].', '.$resultat['classe_prof4'].', '.$resultat['classe_prof5'].', '.$resultat['classe_prof6'].'</td>
	  <td><a href="">Modifier</a></td>
	  <td><a href="">Supprimer</a></td>
	  </tr>';

}

?>
