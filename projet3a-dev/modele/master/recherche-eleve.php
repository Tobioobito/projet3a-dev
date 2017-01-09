<?php

include("connect-bdd.php");

$nom_recherche_eleve = $_POST['nom_recherche_eleve'];
echo $nom_recherche_eleve;
/*
$prenom_recherche_eleve = $_POST['prenom_recherche_eleve'];
$classe_recherche_eleve = $_POST['classe_recherche_eleve'];
*/

if(isset($_POST['nom_recherche_eleve']) && !empty($_POST['nom_recherche_eleve']))
{
//sleep(3); delai, ralentissement 

	$recherche = preg_replace("#[^a-zA-Z ?0-9]#i",'', $_POST['nom_recherche_eleve']);

	
			$sql = "SELECT * FROM sl_eleve WHERE nom_eleve LIKE ?";
		
		$req = $connexion ->prepare($sql);
		$req->execute(array('%'.$recherche.'%'));




	$count = $req->rowCount();
	if($count >= 1)
	{

	/*echo "<br>".$count. " résultats trouvés pour <strong>".$recherche."</strong><br />";*/
	while($resultat = $req->fetch()){



			include "../../vue/master/tableau-eleve.php";
			
	}
	


	}

	}

	else 
{
	echo "0 résultat trouvé pour <strong>".$recherche."</strong>";

}







?>
