<div id="erreur_confirmation">Erreur, vous devez confirmer votre mail</div>
<div id="erreur_login">Erreur, mot de passe ou mail incorrect</div>




<form id="form_login" method="POST" action="modele/login.php">
	<input id="mail_login" type="text" name="mail_login" placeholder="mail"><br>
	<input id="mdp_login" type="password" name="mdp_login" placeholder="password"><br>
	<input id="bouton_login" type="submit" placeholder="se connecter">
</form>

<a href="form-inscription.php">Pas encore inscris?</a>
<script type="text/javascript" src="ressources/script/jquery.js"></script> 
<script type="text/javascript" src="controleur/script-login.js"></script> 
