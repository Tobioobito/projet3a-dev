<h2>Modifier ce professeur</h2>
<form method="POST">

	<input id="nom_prof_modif" type="text" name="nom_prof_modif" placeholder="Nom du professeur" value=<?php echo $modif["nom_prof"]; ?>><br>
	<input id="prenom_prof_modif" type="text" name="prenom_prof_modif" placeholder="Prénom du professeur" value=<?php echo $modif["prenom_prof"]; ?>><br>
	<input id="mdp_prof_modif" type="password" name="mdp_prof_modif" placeholder="Mot de passe du professeur" value=<?php echo $modif["mdp_prof"]; ?>><br>
	<input id="mdp_check_prof_modif" type="password" name="mdp_check_prof_modif" placeholder="Confirmation mot de passe"><br>
	<input id="mail_prof_modif" type="text" name="mail_prof_modif" placeholder="Mail du professeur" value=<?php echo $modif["mail_prof"]; ?>><br>

	Définir les matières (créer les matières ici) : <br>
	<input id="bouton_matiere_more_modif" type="button" value="+">
	<input id="bouton_matiere_less_modif" type="button" value="-"><br>
		<div id="select_matiere_modif">


	<?php insert_option_matiere(); ?>
	</div>
	<br>
	Définir les classes (créer les classes ici) : <br>



	<select id="classe_prof_modif" type="text" name="classe_prof_modif">
<option><?php echo $modif["classe_prof"];?></option>
	</select>


	<br>

	<input id="bouton_modif_prof" type="submit" name=<?php echo $modif["id_prof"]; ?>>




</form>
