<div>
	  <td><a href="" class="bouton_liste_eleve_classe.php">a</a></td>
gestion classes</div><br />

<table>

	<tr>
		<th>Numéro classe</th>
		<th>Nombre d'élèves</th>
		<th>Moyenne générale</th>
		<th>Commentaires</th>
		<th>Listes des élèves</th>
		<th>Listes des profs/matières</th>
		<th>Supprimmer une classe</th>
		<th>Modifier une classe</th>
	</tr>

<?php

include "modele/master/affiche-classe.php";

?>

</table>
<script type="text/javascript" src="ressources/script/jquery.js"></script> 
<script type="text/javascript" src="controleur/master/function.js"></script>
<script type="text/javascript" src="controleur/master/script-gestion-classe.js"></script>