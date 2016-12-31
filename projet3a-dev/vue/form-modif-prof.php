<?php 





function tab_option(){
	global $modif;
	$tab_matiere = preg_split('/[\s,]+/', $modif["matiere_prof"]);
	return $tab_matiere;
}



function option_matiere(){

global $connexion;

$nom_eta_master=$_SESSION['nom_eta_master'];


$req = $connexion->prepare('SELECT * FROM sl_matiere WHERE eta_matiere = :nom_eta_master ORDER BY nom_matiere');

$req->bindParam(':nom_eta_master', $nom_eta_master, PDO::PARAM_STR);
$req->execute();

$select_chain='<select id="matiere_prof_modif" type="text" name="matiere_prof_modif">';

while($resultat = $req->fetch()){
			$select_chain=$select_chain.'<option>'.$resultat['nom_matiere'].'</option>';
		}
$select_chain=$select_chain.'</select>';

	$tableau_matiere=tab_option(); 
	foreach ($tableau_matiere as $element){	
		echo $select_chain;
	}
	
}

?>

<h2>Modifier ce professeur</h2>
<form method="POST">

	<input id="nom_prof_modif" type="text" name="nom_prof_modif" placeholder="Nom du professeur" value=<?php echo $modif["nom_prof"]; ?>><br>
	<input id="prenom_prof_modif" type="text" name="prenom_prof_modif" placeholder="Prénom du professeur" value=<?php echo $modif["prenom_prof"]; ?>><br>
	<input id="mdp_prof_modif" type="password" name="mdp_prof_modif" placeholder="Mot de passe du professeur" value=<?php echo $modif["mdp_prof"]; ?>><br>
	<input id="mdp_check_prof_modif" type="password" name="mdp_check_prof_modif" placeholder="Confirmation mot de passe"><br>
	<input id="mail_prof_modif" type="text" name="mail_prof_modif" placeholder="Mail du professeur" value=<?php echo $modif["mail_prof"]; ?>><br>

	Définir les matières (créer les matières ici) : <br>


		<?php option_matiere(); ?>



	<select id="classe_prof_modif" type="text" name="classe_prof_modif">
<option><?php echo $modif["classe_prof"];?></option>
	</select>


	<br>

	<input id="bouton_modif_prof" type="submit" name=<?php echo $modif["id_prof"]; ?>>




</form>