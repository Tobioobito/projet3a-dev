<?php


include "connect-bdd.php";

$mail_login ="vaillantalex@ymail.com";
$mdp_login ="a";

$_POST["souvenir"]="a";
/*
$mail_login = $_POST["mail_login"];
$mdp_login = $_POST["mdp_login"];
*/
$requete=$connexion->prepare('SELECT * FROM sl_master WHERE mdp_master = :mdp_login AND mail_master = :mail_login AND mail_confirm_master= "1"');
$requete->bindParam(':mdp_login', $mdp_login, PDO::PARAM_STR);
$requete->bindParam(':mail_login', $mail_login, PDO::PARAM_STR);
$requete->execute();


$userexist =$requete->rowCount();
if($userexist == 1){

setcookie('mail_login','',time()-3600, '/'); 
setcookie('mdp_login','',time()-3600, '/'); 

if(isset($_POST["souvenir"])){ //creation cookie
	setcookie('mail_login', $mail_login, time()+365*24*3600,'/',null,false,true);
	setcookie('mdp_login', $mdp_login, time()+365*24*3600,'/',null,false,true);
}

$userinfo = $requete->fetch();




$_SESSION['id_master'] = $userinfo['id_master'];
$_SESSION['nom_eta_master'] = $userinfo['nom_eta_master'];




echo $_COOKIE['mail_login'];
}



else echo "erreur";



?>