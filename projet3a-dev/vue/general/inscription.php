<div id="erreur_obligatoire">Erreur, veillez remplir tout les champs obligatoire *</div>
<div id="erreur_mdp">Erreur, le mot de passe n'est pas le même</div>

<form id="form_inscription" method="POST">


	<input id="mail_master" type="email" name="mail_master" placeholder="Mail">*<br>
	<input id="mdp_master" type="password" name="mdp_master" placeholder="Mot de passe">*<br>
	<input id="mdp_check_master" type="password" name="mdp_check_master" placeholder="Confirmation mot de passe">*<br>
	<input id="nom_master" type="text" name="nom_master" placeholder="Nom"><br>
	<input id="prenom_master" type="text" name="prenom_master" placeholder="Prénom"><br>
	<input id="date_nai_master" type="date" name="date_nai_master" placeholder="Date de naissance"><br>
	<input id="tel_master" type="tel" name="tel_master" placeholder="Téléphone"><br>
	<input id="nom_eta_master" type="text" name="nom_eta_master" placeholder="Nom de l'établissment scolaire">*<br>
	<input id="adresse_eta_master" type="text" name="adresse_eta_master" placeholder="Adresse de l'établissment scolaire"><br>
	<input id="ville_eta_master" type="text" name="ville_eta_master" placeholder="Ville de l'établissment scolaire"><br>

	<select id="type_eta_master1" type="text" name="type_eta_master1">
		<option>école</option>
		<option>collège</option>
		<option>lycée</option>
		<option>école supérieur</option>
	</select>*<br>

	<select id="type_eta_master2" type="text" name="type_eta_master2">
		<option>école</option>
		<option>collège</option>
		<option>lycée</option>
		<option>école supérieur</option>
	</select><br>

	<select id="type_eta_master3" type="text" name="type_eta_master3">
		<option>école</option>
		<option>collège</option>
		<option>lycée</option>
		<option>école supérieur</option>
	</select><br>

	<select id="type_eta_master4" type="text" name="type_eta_master4">
		<option>école</option>
		<option>collège</option>
		<option>lycée</option>
		<option>école supérieur</option>
	</select><br>

	<input id="spe_eta_master1" type="text" name="spe_eta_master1" placeholder="Spécialité 1 (BTS, école de commerce...)"><br>
	<input id="spe_eta_master2" type="text" name="spe_eta_master2" placeholder="Spécialité 2"><br>
	<input id="spe_eta_master3" type="text" name="spe_eta_master3" placeholder="Spécialité 3"><br>

	<input id="bouton_inscription" type="submit" name=""><br>
</form>

<a href="login.php">Se connecter</a>

<script type="text/javascript" src="ressources/script/jquery.js"></script> 
<script type="text/javascript" src="controleur/general/script-inscription.js"></script> 

