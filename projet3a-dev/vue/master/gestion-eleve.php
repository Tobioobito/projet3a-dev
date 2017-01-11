
<div>

gestion élève</div><br />

<a href="accueil.php">retour</a>
<a href="" id="affiche_ajout_eleve">Ajouter un élève</a><br />

<div id="form_ajout_eleve">
<h2>Ajouter un eleve</h2>

<form method="POST">

	<input id="nom_eleve" type="text" name="nom_eleve" placeholder="Nom du eleve"><br>
	<input id="prenom_eleve" type="text" name="prenom_eleve" placeholder="Prénom du eleve"><br>
	<input id="mdp_eleve" type="password" name="mdp_eleve" placeholder="Mot de passe du eleve"><br>
	<input id="mdp_check_eleve" type="password" name="mdp_check_eleve" placeholder="Confirmation mot de passe"><br>
	<input id="mail_eleve" type="text" name="mail_eleve" placeholder="Mail du eleve"><br>

	Définir sa classe (créer les classe ici) : <br>


<input id="bouton_classe_more" type="button" value="+">
<input id="bouton_classe_less" type="button" value="-">
	<div id="select_classe">




	</div>

<!--	<select id="classe_eleve" type="text" name="classe_eleve">
	
<option>école</option>
<option>école</option>
<option>école</option>

	</select>

-->
	<br>

	<input id="bouton_ajout_eleve" type="submit" name="bouton_ajout_eleve">

</div>


</form>

<form method="POST">
<input id="nom_recherche_eleve" name="nom_recherche_eleve" type="search" placeholder="Nom de l'élève">
<input type="search" placeholder="Prénom de l'élève">
<select id="classe_recherche_eleve" name="classe_recherche_eleve">

<?php
include "modele/master/remplir-select-classe.php";
?>

</select>
<input type="submit" value="recherche">
</form>





	<?php 
	include "modele/master/affiche-eleve.php";
	?>

</table>

<script type="text/javascript" src="ressources/script/jquery.js"></script> 
<script type="text/javascript" src="controleur/master/script-gestion-eleve.js"></script>