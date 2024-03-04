<?php
$servername = 'localhost';
  $username = 'root';
  $password = '';
    try {
      $bdd = new PDO ("mysql:host=$servername;dbname=connexion",$username,$password);
      $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
      echo 'ERREUR :'.$e->getMessage();
    }
?>