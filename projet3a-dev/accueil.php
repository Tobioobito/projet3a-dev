<?php

session_start();


if(isset($_SESSION['id_master'])){

include "vue/accueil.php";

}

else header('Location: form-inscription.php');

?>



