<?php

session_start();


if(isset($_SESSION['id_master'])){

include "vue/master/gestion-classe.php";

}

else header('Location: login.php');

?>