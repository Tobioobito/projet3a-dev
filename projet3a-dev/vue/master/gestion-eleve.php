
<link href="ressources/styles/gestion-eleve.css" rel="stylesheet" type="text/css">

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




</form>

<form>
<input type="search" placeholder="Nom de l'élève">
<input type="search" placeholder="Prénom de l'élève">
<select placeholder="Classe"></select>
<input type="button" value="recherche">
</form>



<table>

	<tr>
		<th>Nom élève</th>
		<th>Prénom élève</th>
		<th>Moyenne</th>
		<th>Absences</th>
		<th>Retards</th>
		<th>Commentaire</th>
		<th>Voir son bulletin</th>
		<th>Voir ses retards/absences</th>
		<th>Supprimer</th>
		<th>Modifier</th>
	</tr>

</table>