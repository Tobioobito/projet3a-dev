<?php



echo '<div id="form_modif_prof">
<h2>Modifier ce professeur</h2>
<form method="POST">

	<input id="nom_prof_modif" type="text" name="nom_prof_modif" placeholder="Nom du professeur><br>
	<input id="prenom_prof_modif" type="text" name="prenom_prof_modif" placeholder="Prénom du professeur"><br>
	<input id="mdp_prof_modif" type="password" name="mdp_prof_modif" placeholder="Mot de passe du professeur"><br>
	<input id="mdp_check_prof_modif" type="password" name="mdp_check_prof_modif" placeholder="Confirmation mot de passe"><br>
	<input id="mail_prof_modif" type="text" name="mail_prof_modif" placeholder="Mail du professeur"><br>

	Définir les matières (créer les matières ici) : <br>

	<select id="matiere_prof1_modif" type="text" name="matiere_prof1_modif">
		<option>français</option>
		<option>math</option>
		<option>histoire</option>
	</select>

	<select id="matiere_prof2_modif" type="text" name="matiere_prof2_modif">
	<option>français</option>
	<option>math</option>
	<option>histoire</option>

	</select>

	<select id="matiere_prof3_modif" type="text" name="matiere_prof3_modif">
	<option>français</option>
	<option>math</option>
	<option>histoire</option>
	</select><br>

	Définir les classes (créer les classes ici) : <br>

	<select id="classe_prof1_modif" type="text" name="classe_prof1_modif">
	
<option>école</option>
<option>école</option>
<option>école</option>

	</select>

	<select id="classe_prof2_modif" type="text" name="classe_prof2_modif">
	
<option>école</option>
<option>école</option>
<option>école</option>



	</select>

	<select id="classe_prof3_modif" type="text" name="classe_prof3_modif">
	

<option>école</option>
<option>école</option>
<option>école</option>


	</select>

	<select id="classe_prof4_modif" type="text" name="classe_prof4_modif">
	
<option>école</option>
<option>école</option>
<option>école</option>

	</select>

	<select id="classe_prof5_modif" type="text" name="classe_prof5_modif">
	
<option>école</option>
<option>école</option>
<option>école</option>


	</select>

	<select id="classe_prof6_modif" type="text" name="classe_prof6_modif">
	
<option>école</option>
<option>école</option>
<option>école</option>


	</select>


	<br>

	<input id="bouton_modif_prof" type="submit" name="bouton_modif_prof">




</form>

</div>



}
';
?>