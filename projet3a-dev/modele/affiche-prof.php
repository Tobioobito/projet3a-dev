<?php

include "connect-bdd.php";

$req = $connexion->prepare('SELECT * FROM sl_prof ORDER BY nom_prof');


$req->execute();

while($resultat = $req->fetch()){

echo '<tr>
	  <td>'.$resultat['nom_prof']. '</td> 
	  <td>'.$resultat['prenom_prof'].'</td> 
	  <td>'.$resultat['matiere_prof1'].'</td>
	  <td>'.$resultat['classe_prof1'].', '.$resultat['classe_prof2'].', '.$resultat['classe_prof3'].', '.$resultat['classe_prof4'].', '.$resultat['classe_prof5'].', '.$resultat['classe_prof6'].'</td>
	  </tr>';

}

?>
