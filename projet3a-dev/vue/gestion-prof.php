<div>

gestion prof</div><br />


<a href="" id="affiche_ajout_prof">Ajouter un professeur</a><br />
<form method="POST">

	<input id="nom_prof" type="text" name="nom_prof" placeholder="Nom du professeur"><br>
	<input id="prenom_prof" type="text" name="prenom_prof" placeholder="Prénom du professeur"><br>
	<input id="mdp_prof" type="password" name="mdp_prof" placeholder="Mot de passe du professeur"><br>
	<input id="mdp_check_prof" type="password" name="mdp_check_prof" placeholder="Confirmation mot de passe"><br>
	<input id="mail_prof" type="text" name="mail_prof" placeholder="Mail du professeur"><br>

	Définir les matières (créer les matières ici) : <br>

	<select id="matiere_prof1" type="text" name="matiere_prof1">
		<option>français</option>
		<option>math</option>
		<option>histoire</option>
	</select>

	<select id="matiere_prof2" type="text" name="matiere_prof2">
	<option>français</option>
	<option>math</option>
	<option>histoire</option>

	</select>

	<select id="matiere_prof3" type="text" name="matiere_prof3">
	<option>français</option>
	<option>math</option>
	<option>histoire</option>
	</select><br>

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
<a href="accueil.php">retour</a>

<table id="tableau_prof">

	<tr>
		<th>Prénom</th>
		<th>Nom</th>
		<th>Matière</th>
		<th>Classe</th>
		<th>Modifier un professeur</th>
		<th>Supprimer un professeur</th>
	</tr>

	<tr><!--m'indiquez l'id ou la classe pour le css-->
	  <td>Lorem</td> 
	  <td>Lorem</td> 
	  <td>Lorem</td> 
	  <td>Lorem</td> 
	  <td><a href="">Modifier</a></td>
	  <td><a href="">Supprimer</a></td>
    </tr>

	<tr>
	  <td>Lorem</td> 
	  <td>Lorem</td> 
	  <td>Lorem</td> 
	  <td>Lorem</td> 
	  <td><a href="">Modifier</a></td>
	  <td><a href="">Supprimer</a></td>
   </tr>


	<?php 
	include "modele/affiche-prof.php";
	?>
</table>

<script type="text/javascript" src="ressources/script/jquery.js"></script> 
<script type="text/javascript" src="controleur/script-ajout-prof.js"></script>
