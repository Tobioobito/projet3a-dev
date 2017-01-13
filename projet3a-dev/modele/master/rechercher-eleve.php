<?php /*echo"pong";*/

	//sleep(3); delai, ralentissement 
	$nom_recherche_eleve = $_POST['nom_recherche_eleve'];
	$recherche_nom = preg_replace("#[^a-zA-Z ?0-9]#i",'', $_POST['nom_recherche_eleve']);
	$recherche_classe = $_POST['classe_recherche_eleve'];
	$nom_eta_master=$_SESSION['nom_eta_master'];
	
	$req = $connexion ->prepare("SELECT * FROM sl_eleve WHERE nom_eleve LIKE ? AND eta_eleve LIKE ? AND classe_eleve LIKE ?");
	$req->execute(array('%'.$recherche_nom.'%', $nom_eta_master, $recherche_classe));//Array = LIKE ?

	include "../../vue/master/titre-tableau-eleve.php";	

	$count = $req->rowCount();
	if($count >= 1)
	
	{

	
	while($resultat = $req->fetch())
		{


	


			include "../../vue/master/contenu-tableau-eleve.php";	



		}
	
			echo "<span id='nbr_eleve_recherche'>".$count."</span>";
	
	}

		echo'</table>';
		?>