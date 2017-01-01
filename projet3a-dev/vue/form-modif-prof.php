<?php 


function decoupe_bdd_matiere(){
	global $modif;
	$tab_matiere = preg_split('/[\s,]+/', $modif["matiere_prof"]);
	return $tab_matiere;
}



function insert_option_matiere(){

	global $connexion;
	$nom_eta_master=$_SESSION['nom_eta_master'];
	$req = $connexion->prepare('SELECT * FROM sl_matiere WHERE eta_matiere = :nom_eta_master ORDER BY nom_matiere');
	$req->bindParam(':nom_eta_master', $nom_eta_master, PDO::PARAM_STR);



	$tableau_matiere=decoupe_bdd_matiere(); 
	foreach ($tableau_matiere as $element){	
		echo '<select id="matiere_prof_modif" type="text" name="matiere_prof_modif">';
		$req->execute();
		while($resultat = $req->fetch()){

			if($element==$resultat['nom_matiere']){

				echo'<option selected>'.$resultat['nom_matiere'].'</option>';
			} else{
				echo'<option>'.$resultat['nom_matiere'].'</option>';
				}
		}
		echo '</select>';
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
	<?php insert_option_matiere(); ?>


	<select id="classe_prof_modif" type="text" name="classe_prof_modif">
<option><?php echo $modif["classe_prof"];?></option>
	</select>


	<br>

	<input id="bouton_modif_prof" type="submit" name=<?php echo $modif["id_prof"]; ?>>




</form>