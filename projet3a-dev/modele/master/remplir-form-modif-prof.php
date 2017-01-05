<?php

include ("connect-bdd.php");


if (isset($_POST["id_prof"])){
$id_prof = $_POST["id_prof"];


$requete = $connexion->prepare('SELECT * FROM sl_prof WHERE id_prof = :id_prof');
$requete->bindParam(':id_prof', $id_prof, PDO::PARAM_INT);

$requete->execute();


$userexist =$requete->rowCount();
if($userexist == 1)


{

$modif = $requete->fetch();

function decoupe_bdd_matiere(){
	global $modif;
	$tab_matiere = preg_split('/[\s,]+/', $modif["matiere_prof"]);
	return $tab_matiere;
}



function insert_option_matiere(){

	$nbr_mat = 1;

	global $connexion;
	$nom_eta_master=$_SESSION['nom_eta_master'];
	$req = $connexion->prepare('SELECT * FROM sl_matiere WHERE eta_matiere = :nom_eta_master ORDER BY nom_matiere');
	$req->bindParam(':nom_eta_master', $nom_eta_master, PDO::PARAM_STR);



	$tableau_matiere=decoupe_bdd_matiere(); 
	foreach ($tableau_matiere as $element){	
		echo '<select id="matiere_prof_modif'.$nbr_mat.'" type="text" name="matiere_prof_modif'.$nbr_mat.'">';
		$nbr_mat = $nbr_mat + 1;
		$req->execute();
		while($resultat = $req->fetch()){

			if($element==$resultat['nom_matiere']){

				echo'<option selected>'.$resultat['nom_matiere'].'</option>';
			} else{
				echo'<option>'.$resultat['nom_matiere'].'</option>';
				}
		}
		echo '</select>';
	}
	$nbr_mat=$nbr_mat-1;

	echo "<div style='display: none ;' id='total_mat'>".$nbr_mat."</div>";
}

include "../../vue/master/form-modif-prof.php";


}



else {

echo"erreur";

}
}
?>
