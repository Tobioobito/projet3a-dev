<?php
include_once "function.php";

//si le champ n'existe pas (vide) : on affiche le tableau normalement
if(!isset($_POST['nom_recherche_eleve']))
{

	/*echo"ping";*/
	include "vue/master/titre-tableau-eleve.php";	
	if(!isset($_GET["classe"])){

		$nom_classe="";

	}
	jevetou("eleve", "/vue/master/contenu-tableau-eleve.php", $nom_classe);

echo'</table>';

}

//Sinon on effectue une recherche
else

{
	include "rechercher-eleve.php";
	
	}

?>
