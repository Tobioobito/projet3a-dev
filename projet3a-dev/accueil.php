<?php

session_start();

include "controleur/general/cookie.php";

if(isset($_SESSION['id_master'])){

include "vue/master/accueil.php";

}

else header('Location: inscription.php');

?>



