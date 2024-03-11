<?php
// Activer le rapport d'erreurs pour afficher toutes les erreurs
error_reporting(E_ALL);
ini_set("display_errors", 1);
 
// Inclure le fichier d'authentification
include ('includes/auth.php');

// Fermeture de la connexion à la base de données*/
if (isset($_POST['ok'])) {
	
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $phonenumber = htmlspecialchars($_POST['phonenumber']);
    $email = htmlspecialchars($_POST['email']);
    $ville = htmlspecialchars($_POST['ville']);
    $quartier = htmlspecialchars($_POST['quartier']);
    $identifiant = htmlspecialchars($_POST['id_clients']);

	if (!empty($nom) && !empty($prenom) && !empty($phonenumber) && !empty($email) && !empty($ville) && !empty($quartier)&& !empty($identifiant)) {
  
	  // VERIFIONS SI L'ARTICLE EXISTE DEJA
	  $reqSelect = $bdd->prepare('SELECT count(*) as count FROM dasbord WHERE id_clients = ?');
	  $reqSelect->execute(array($identifiant));
	  $resultat = $reqSelect->fetch();

			  $sql = "INSERT INTO dasbord(nom,prenom,phonenumber,email,ville,quartier,id_clients) VALUES (?,?,?,?,?,?,?)";
			  $req = $bdd->prepare($sql);
			  $req->execute(array($nom,$prenom,$phonenumber,$email,$ville,$quartier,$identifiant,));
			  echo ' Bravo !!!!!';
			} else {
			
	  echo "Remplissez tout les champs.";
	}
  }
  
?>
