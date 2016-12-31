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

include "../vue/form-modif-prof.php";


}



else {

echo"erreur";

}
}
?>
