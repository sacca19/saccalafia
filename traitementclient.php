<?php
 
 error_reporting(E_ALL);
 ini_set("display_errors", 1);
 
 
 // CONNEXION A LA BASE DE DONNEES
 
 include ('includes/auth.php');


// Récupérer la valeur du champ du formulaire
$distinction = htmlspecialchars($_POST['type_client']);

// Requête d'insertion
$req = $bdd->prepare("INSERT INTO clients(type_client) VALUES (?)");
$req->execute(array($distinction));
echo "Donnée insérée avec succès !";
?>

