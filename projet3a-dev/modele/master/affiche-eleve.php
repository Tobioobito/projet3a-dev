<?php
include_once "function.php";


if(!isset($_POST['nom_recherche_eleve']))//Champ vide
{
	/*echo"ping";*/
	include "vue/master/titre-tableau-eleve.php";	

	jevetou("eleve", "/vue/master/contenu-tableau-eleve.php");

echo'</table>';


}

else

{
	include "rechercher-eleve.php";

	}

?>
