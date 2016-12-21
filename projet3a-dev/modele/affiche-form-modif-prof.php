<?php

include ("connect-bdd.php");

$id_prof = $_POST['id_prof'];

$requete = $connexion->prepare('SELECT * FROM sl_prof WHERE id_prof = :id_prof');
$requete->bindParam(':id_prof', $id_prof, PDO::PARAM_INT);
$requete->execute();


$userexist =$requete->rowCount();
if($userexist == 1)

{

$modif = $requete->fetch();

?>
<div id="form_modif_prof">
<h2>Modifier ce professeur</h2>
<form method="POST" action="modif-prof.php">
<input id="nom_prof_modif" type="text" name="id_prof" placeholder="Nom du professeur" value=<?php echo $id_prof; ?>><br>
	<input id="nom_prof_modif" type="text" name="nom_prof_modif" placeholder="Nom du professeur" value=<?php echo $modif["nom_prof"]; ?>><br>
	<input id="prenom_prof_modif" type="text" name="prenom_prof_modif" placeholder="Prénom du professeur" value=<?php echo $modif["prenom_prof"]; ?>><br>
	<input id="mdp_prof_modif" type="password" name="mdp_prof_modif" placeholder="Mot de passe du professeur" value=<?php echo $modif["mdp_prof"]; ?>><br>
	<input id="mdp_check_prof_modif" type="password" name="mdp_check_prof_modif" placeholder="Confirmation mot de passe"><br>
	<input id="mail_prof_modif" type="text" name="mail_prof_modif" placeholder="Mail du professeur" value=<?php echo $modif["mail_prof"]; ?>><br>

	Définir les matières (créer les matières ici) : <br>

	<select id="matiere_prof1_modif" type="text" name="matiere_prof1_modif">
		<option><?php echo $modif["matiere_prof1"];?></option>
		<option>français</option>
		<option>math</option>
		<option>histoire</option>
	</select>

	<select id="matiere_prof2_modif" type="text" name="matiere_prof2_modif">
	<option><?php echo $modif["matiere_prof2"];?></option>
	<option>français</option>
	<option>math</option>
	<option>histoire</option>

	</select>

	<select id="matiere_prof3_modif" type="text" name="matiere_prof3_modif">
	<option><?php echo $modif["matiere_prof3"];?></option>
	<option>français</option>
	<option>math</option>
	<option>histoire</option>
	</select><br>

	Définir les classes (créer les classes ici) : <br>

	<select id="classe_prof1_modif" type="text" name="classe_prof1_modif">
<option><?php echo $modif["classe_prof1"];?></option>	
<option>école</option>
<option>école</option>
<option>école</option>

	</select>

	<select id="classe_prof2_modif" type="text" name="classe_prof2_modif">
<option><?php echo $modif["classe_prof2"];?></option>
<option>école</option>
<option>école</option>
<option>école</option>



	</select>

	<select id="classe_prof3_modif" type="text" name="classe_prof3_modif">
	
<option><?php echo $modif["classe_prof3"];?></option>
<option>école</option>
<option>école</option>
<option>école</option>


	</select>

	<select id="classe_prof4_modif" type="text" name="classe_prof4_modif">
<option><?php echo $modif["classe_prof4"];?></option>	
<option>école</option>
<option>école</option>
<option>école</option>

	</select>

	<select id="classe_prof5_modif" type="text" name="classe_prof5_modif">
<option><?php echo $modif["classe_prof5"];?></option>	
<option>école</option>
<option>école</option>
<option>école</option>


	</select>

	<select id="classe_prof6_modif" type="text" name="classe_prof6_modif">
<option><?php echo $modif["classe_prof6"];?></option>	
<option>école</option>
<option>école</option>
<option>école</option>


	</select>


	<br>

	<input id="bouton_modif_prof" type="submit" name="bouton_modif_prof">




</form>

</div>

<?php

}


else {

echo"erreur";

}

?>
