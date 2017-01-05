<?php


if(!isset($_SESSION)) 
{ 
   session_start(); 
 } 





$dns='mysql:host=localhost;dbname=sl';
$utilisateur = 'root';
$mdp = '';

$options= array(
PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION) ;


$connexion = new PDO ($dns, $utilisateur, $mdp, $options);



?>