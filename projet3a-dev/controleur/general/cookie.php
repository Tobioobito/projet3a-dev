<?php
 // connection automatique



if(isset($_COOKIE['mail_login'], $_COOKIE['mdp_login']) AND !empty($_COOKIE['mail_login']) AND !empty($_COOKIE['mdp_login'])){

$requser = $connexion->prepare("SELECT * FROM sl_master where sl_mail = ? AND sl_mdp = ?");
$requser->execute(array($_COOKIE['sl_mail'], $_COOKIE['sl_mdp']));
$userexist =$requser->rowCount();
if($userexist == 1)
{

	$userinfo = $requser->fetch();
$_SESSION['id_master'] = $userinfo['id_master'];
$_SESSION['nom_eta_master'] = $userinfo['nom_eta_master'];

}

}
?>