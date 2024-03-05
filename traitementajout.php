<?php
// Activer le rapport d'erreurs pour afficher toutes les erreurs
error_reporting(E_ALL);
ini_set("display_errors", 1);
 
// Inclure le fichier d'authentification
include ('includes/auth.php');

// Données du produit à ajouter
if (isset($_POST['ok'])) {
	// RECUPERATION DES VALEURS DES CHAMPS DU FORMULAIRE
	$titre = $_POST['titre'];
	$contenu = $_POST['contenu'];
	$prix = $_POST['prix'];
	$categorie = $_POST['categorie'];
	
	// Vérification si les champs sont définis et non vides
	if (!empty($titre) && !empty($contenu) && !empty($prix) && !empty($categorie)) {
		// Vérifier si le titre du produit existe déjà dans la base de données
		$reqData = $bdd->prepare('SELECT count(*) as count FROM produits WHERE titre = ?');
    	$reqData->execute(array($titre,));
    	$resultat = $reqData->fetch();

		if ($resultat['count'] > 0) {
        	echo  'L\'article existe déjà !'; 
      	} else {
			// Ajouter le produit à la base de données
			$dataAdd = $bdd->prepare('INSERT INTO produits(titre, contenu, date_publication, prix, categorie) VALUES (?, ?, NOW(),?,?)');
			$dataAdd->execute(array($titre, $contenu, $prix, $categorie));
			echo 'Succès';
		}
    } else {
		echo 'Remplissez tous les champs';
	}
}

// Fermeture de la connexion à la base de données
?>
