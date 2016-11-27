<?php


include ("connect-bdd.php");

if(isset($_GET['mail'], $_GET['cle']) AND !empty($_GET['mail']) AND !empty($_GET['cle']))
{
	
	$mail_master = htmlspecialchars(urldecode($_GET['mail']));
	$cle_confirm_master = htmlspecialchars($_GET['cle']);

	$requser = $connexion->prepare("SELECT * FROM sl_master WHERE mail_master = ? AND cle_confirm_master = ? " );
	$requser ->execute(array($mail_master, $cle_confirm_master));
	$userexist = $requser->rowCount();

	if($userexist ==1)
	{

		$user = $requser->fetch();
		if ($user['mail_confirm_master'] == 0) 
		{
			$updateuser = $connexion->prepare("UPDATE sl_master SET mail_confirm_master = 1 where mail_master = ? AND cle_confirm_master = ?");
			$updateuser->execute(array($mail_master, $cle_confirm_master));
			echo "votre compte à été confirmé";
		} 
		else 
		{
			echo "Votre comptre a déja été enregistré";
		}
	}
	else
	{
		echo "L'utilisateur n'existe pas!";
	}




}


header('Location: ../vue/accueil.php');










?>