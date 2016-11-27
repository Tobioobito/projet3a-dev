<?php


include "connect-bdd.php";




   $mail_master         =  htmlspecialchars($_POST["mail_master"]);
   $mail_confirm_master =  false;

   $mdp_master          =  htmlspecialchars($_POST["mdp_master"]);
   $nom_master          =  htmlspecialchars($_POST["nom_master"]);
   $prenom_master       =  htmlspecialchars($_POST["prenom_master"]);
   $date_nai_master     =  htmlspecialchars($_POST["date_nai_master"]);
   $tel_master          =  htmlspecialchars($_POST["tel_master"]);

   $nom_eta_master      =  htmlspecialchars($_POST["nom_eta_master"]);
   $adresse_eta_master  =  htmlspecialchars($_POST["adresse_eta_master"]);
   $ville_eta_master    =  htmlspecialchars($_POST["ville_eta_master"]);
   
   $type_eta_master1    =  htmlspecialchars($_POST["type_eta_master1"]);
   $type_eta_master2    =  htmlspecialchars($_POST["type_eta_master2"]);
   $type_eta_master3    =  htmlspecialchars($_POST["type_eta_master3"]);
   $type_eta_master4    =  htmlspecialchars($_POST["type_eta_master4"]);
   
   $spe_eta_master1     =  htmlspecialchars($_POST["spe_eta_master1"]);
   $spe_eta_master2     =  htmlspecialchars($_POST["spe_eta_master2"]);
   $spe_eta_master3     =  htmlspecialchars($_POST["spe_eta_master3"]);


   $longueurcle = 10;
   $cle_confirm_master ="";
   for($i=1;$i<$longueurcle;$i++){
         $cle_confirm_master.=mt_rand(0,9);
      }


/*
$random_number = intval( "0" . rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ); // random(ish) 5 digit int

echo $random_number;
*/


$requete = $connexion->prepare("INSERT INTO sl_master (mail_master, mail_confirm_master, mdp_master, nom_master, prenom_master,
													   date_nai_master, tel_master, nom_eta_master, adresse_eta_master,
													   ville_eta_master, type_eta_master1, type_eta_master2, type_eta_master3,
													   type_eta_master4, spe_eta_master1, spe_eta_master2, spe_eta_master3, cle_confirm_master)


													   VALUES (:mail_master, :mail_confirm_master, :mdp_master, :nom_master, :prenom_master,
													           :date_nai_master, :tel_master, :nom_eta_master, :adresse_eta_master,
													           :ville_eta_master, :type_eta_master1, :type_eta_master2, :type_eta_master3,
													           :type_eta_master4, :spe_eta_master1, :spe_eta_master2, :spe_eta_master3, :cle_confirm_master)");

											
													  
													  
											




$requete->bindParam(':mail_master', $mail_master, PDO::PARAM_STR);
$requete->bindParam(':mail_confirm_master', $mail_confirm_master, PDO::PARAM_STR);
$requete->bindParam(':mdp_master', $mdp_master, PDO::PARAM_STR);
$requete->bindParam(':nom_master', $nom_master, PDO::PARAM_STR);
$requete->bindParam(':prenom_master', $prenom_master, PDO::PARAM_STR);
$requete->bindParam(':date_nai_master', $date_nai_master, PDO::PARAM_STR);
$requete->bindParam(':tel_master', $tel_master, PDO::PARAM_STR);


$requete->bindParam(':nom_eta_master', $nom_eta_master, PDO::PARAM_STR);
$requete->bindParam(':adresse_eta_master', $adresse_eta_master, PDO::PARAM_STR);
$requete->bindParam(':ville_eta_master', $ville_eta_master, PDO::PARAM_STR);

$requete->bindParam(':type_eta_master1', $type_eta_master1, PDO::PARAM_STR);
$requete->bindParam(':type_eta_master2', $type_eta_master2, PDO::PARAM_STR);
$requete->bindParam(':type_eta_master3', $type_eta_master3, PDO::PARAM_STR);
$requete->bindParam(':type_eta_master4', $type_eta_master4, PDO::PARAM_STR);

$requete->bindParam(':spe_eta_master1', $spe_eta_master1, PDO::PARAM_STR);
$requete->bindParam(':spe_eta_master2', $spe_eta_master2, PDO::PARAM_STR);
$requete->bindParam(':spe_eta_master3', $spe_eta_master3, PDO::PARAM_STR);

$requete->bindParam(':cle_confirm_master', $cle_confirm_master, PDO::PARAM_STR);

$requete->execute();


/*mail de confirmation*/


 $boundary = "-----=" . md5(uniqid(rand()));



     $to =addslashes(htmlspecialchars($_POST["nom_eta_master"])). '<'.addslashes(htmlspecialchars($_POST["mail_master"])).'>' ; // pour plusieurs destinatieres ajouter une virgule dans les guillements


     $subject = "Confirmation d'inscription Schoolab" ; 



     $headers .= 'From: Schoolab <contact@schoolab.com>'."\r\n";
     $headers .= 'MIME-Version: 1.0' . "\r\n";
     $headers .= "Content-Type: multipart/alternative; boundary=\"$boundary\"";


     $message_html = '
    <html>
<body>
<div align="center">

Pour Confirmer votre inscription veillez cliquer <a href="http://vaillant.etudiant-eemi.com/projet3a-dev/modele/confirmation-inscription.php?mail='.urlencode($mail_master). '&cle='.$cle_confirm_master. '">ici</a>

<br />
</div>
</body>
</html>
';


  $message .= "--" . $boundary . "\n";
  $message .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
  $message .= "Content-Transfer-Encoding: 8bit\n\n";
  $message .= $message_html;
  $message .= "\n\n";


  $message .= "--" . $boundary . "--";






     // Envoi
     mail($to, $subject, $message, $headers);


?>