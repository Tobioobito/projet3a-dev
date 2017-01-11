<?php
include_once "function.php"; "function.php";

if(!isset($_POST['nom_recherche_eleve']))
{
	echo"ping";




echo'<table id="tableau_eleve">

	<tr>
		<th>Nom élève</th>
		<th>Prénom élève</th>
		<th>Moyenne</th>
		<th>Absences</th>
		<th>Retards</th>
		<th>Commentaire</th>
		<th>Voir son bulletin</th>
		<th>Voir ses retards/absences</th>
		<th>Modifier</th>
		<th>Supprimer</th>
	</tr>';

	jevetou("eleve", "/vue/master/tableau-eleve.php");

echo'</table>';


}

else

{
	echo"pong";

	//sleep(3); delai, ralentissement 
	$nom_recherche_eleve = $_POST['nom_recherche_eleve'];
	$recherche_nom = preg_replace("#[^a-zA-Z ?0-9]#i",'', $_POST['nom_recherche_eleve']);
	$recherche_classe = $_POST['classe_recherche_eleve'];
	$nom_eta_master=$_SESSION['nom_eta_master'];
	
	$req = $connexion ->prepare("SELECT * FROM sl_eleve WHERE nom_eleve LIKE ? AND eta_eleve LIKE ? AND classe_eleve LIKE ?");
	$req->execute(array('%'.$recherche_nom.'%', $nom_eta_master, $recherche_classe));//Array = LIKE ?

	echo'<table id="tableau_eleve">

		<tr>
			<th>Nom élève</th>
			<th>Prénom élève</th>
			<th>Moyenne</th>
			<th>Absences</th>
			<th>Retards</th>
			<th>Commentaire</th>
			<th>Voir son bulletin</th>
			<th>Voir ses retards/absences</th>
			<th>Modifier</th>
			<th>Supprimer</th>
		</tr>';

	$count = $req->rowCount();
	if($count >= 1)
	
	{
	//echo "<br>".$count. " résultats trouvés pour <strong>".$recherche."</strong><br />";
	while($resultat = $req->fetch())
		{



			include "../../vue/master/tableau-eleve.php";	



		}
	


	}
		echo'</table>';
	}

?>
