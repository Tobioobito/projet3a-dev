<?php

session_start();


if(isset($_SESSION['id_master'])){

include "vue/gestion-prof.php";

}

else header('Location: form-inscription.php');

?>