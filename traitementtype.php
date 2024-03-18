<?php
 
 error_reporting(E_ALL);
 ini_set("display_errors", 1);
 
 
 // CONNEXION A LA BASE DE DONNEES
 
 include ('includes/auth.php');


// Récupérer la valeur du champ du formulaire
$nom = htmlspecialchars($_POST['nom']);

// Requête d'insertion
$req = $bdd->prepare("INSERT INTO types(nom) VALUES (?)");
$req->execute(array($nom));
echo "Donnée insérée avec succès !";
?>

