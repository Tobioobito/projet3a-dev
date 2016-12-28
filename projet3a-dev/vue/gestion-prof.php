<link href="ressources/styles/gestion-prof.css" rel="stylesheet" type="text/css">

<div>

gestion prof</div><br />

<a href="accueil.php">retour</a>
<a href="" id="affiche_ajout_prof">Ajouter un professeur</a><br />

<div id="form_ajout_prof">
<h2>Ajouter un professeur</h2>

<form method="POST">

	<input id="nom_prof" type="text" name="nom_prof" placeholder="Nom du professeur"><br>
	<input id="prenom_prof" type="text" name="prenom_prof" placeholder="Prénom du professeur"><br>
	<input id="mdp_prof" type="password" name="mdp_prof" placeholder="Mot de passe du professeur"><br>
	<input id="mdp_check_prof" type="password" name="mdp_check_prof" placeholder="Confirmation mot de passe"><br>
	<input id="mail_prof" type="text" name="mail_prof" placeholder="Mail du professeur"><br>

	Définir les matières (créer les matières ici) : <br>
<input id="bouton_matiere_more" type="button" value="+">
<input id="bouton_matiere_less" type="button" value="-">
	<div id="select_matiere">




	</div>
<input id="total_matiere" type="text"><br>
	Définir les classes (créer les classes ici) : <br>

	<select id="classe_prof1" type="text" name="classe_prof1">
	
<option>école</option>
<option>école</option>
<option>école</option>

	</select>

	<select id="classe_prof2" type="text" name="classe_prof2">
	
<option>école</option>
<option>école</option>
<option>école</option>



	</select>

	<select id="classe_prof3" type="text" name="classe_prof3">
	

<option>école</option>
<option>école</option>
<option>école</option>


	</select>

	<select id="classe_prof4" type="text" name="classe_prof4">
	
<option>école</option>
<option>école</option>
<option>école</option>

	</select>

	<select id="classe_prof5" type="text" name="classe_prof5">
	
<option>école</option>
<option>école</option>
<option>école</option>


	</select>

	<select id="classe_prof6" type="text" name="classe_prof6">
	
<option>école</option>
<option>école</option>
<option>école</option>


	</select>


	<br>

	<input id="bouton_ajout_prof" type="submit" name="bouton_ajout_prof">




</form>


</div>

<?php

include "modele/remplir-form-modif-prof.php";

?>

<div id="form_modif_prof">
</div>

<table id="tableau_prof">

	<tr>
		<th>Prénom</th>
		<th>Nom</th>
		<th>Matière</th>
		<th>Classe</th>

		<th>Modifier un professeur</th>
		<th>Supprimer un professeur</th>
	
	</tr>


	<?php 
	include "modele/affiche-prof.php";
	
	?>
</table>

<script type="text/javascript" src="ressources/script/jquery.js"></script> 
<script type="text/javascript" src="controleur/script-gestion-prof.js"></script>
