<?php
// Activer le rapport d'erreurs pour afficher toutes les erreurs
error_reporting(E_ALL);
ini_set("display_errors", 1);
 
// Inclure le fichier d'authentification
include ('includes/auth.php');

/*// Données du produit à ajouter
if (isset($_POST['ok'])) {
	// RECUPERATION DES VALEURS DES CHAMPS DU FORMULAIRE
	$titre = $_POST['titre'];
	$contenu = $_POST['contenu'];
	$prix = $_POST['prix'];
	$categorie = $_POST['categorie'];
	$image = $_POST['image'];
	
	// Vérification si les champs sont définis et non vides
	if (!empty($titre) && !empty($contenu) && !empty($prix) && !empty($categorie)) {
		// Vérifier si le titre du produit existe déjà dans la base de données
		$reqData = $bdd->prepare('SELECT count(*) as count FROM produits WHERE titre = ?');
    	$reqData->execute(array($titre,));
    	$resultat = $reqData->fetch();

		if ($resultat['count'] > 0) {
        	echo  'L\'article existe déjà !'; 
		} else {
			if (isset($_FILES['image']) and $_FILES['image']['error'] == 0) {
				// verifion la taille du fichier à 2mo
				if ($_FILES['image']['size'] <= 2000000) {
				  $fileinfo = pathinfo($_FILES['image']['name']);
				  $extension = $fileinfo['extension'];
				  $extension_autorisees = array('jpg', 'jpeg', 'png');
				  if (in_array($extension, $extension_autorisees)) {
		
					// on ajoute le ficher dans le dossier 
					move_uploaded_file($_FILES['image']['tmp_name'], '/uploads' . basename($_FILES['image']['name']));
					$filename = '/uploads' . basename($_FILES['image']['name']);
		
					$sql = "INSERT INTO produits(titre, contenu,images,date_pub) VALUES (?,?,?,?,now())";
					$req = $conn->prepare($sql);
					$req->execute(array($titre, $contenu, $filename));
					echo ' Article publié !';
				  } else {
					echo 'Le ficher n\'est pas de type image : jpg, jpeg et png.';
				  }
				} else {
				  echo 'L\'image ne doit pas dépasser 2Mo.';
				}
			  } else {
				echo 'Impossible d\'ajouter le fichier.';
			  }
			}
      	} else {
			// Ajouter le produit à la base de données
			$dataAdd = $bdd->prepare('INSERT INTO produits(titre, contenu, date_publication, prix, categorie) VALUES (?, ?, NOW(),?,?)');
			$dataAdd->execute(array($titre, $contenu, $prix, $categorie));
			echo 'Succès';
		}
    } else {
		echo 'Remplissez tous les champs';
	}


// Fermeture de la connexion à la base de données*/
if (isset($_POST['ok'])) {
	$titre = htmlspecialchars($_POST['titre']);
	$contenu = htmlspecialchars($_POST['contenu']);
	$prix = htmlspecialchars($_POST['prix']);
	$categorie = htmlspecialchars($_POST['categorie']);
	
  
	if (!empty($titre) && !empty($contenu) && !empty($prix) && !empty($categorie)) {
  
	  // VERIFIONS SI L'ARTICLE EXISTE DEJA
	  $reqSelect = $bdd->prepare('SELECT count(*) as count FROM produits WHERE titre = ?');
	  $reqSelect->execute(array($titre));
	  $resultat = $reqSelect->fetch();
  
	  if ($resultat['count'] > 0) {
		echo "L'article entrer existe déjà.";
	  } else {
		if (isset($_FILES['image']) and $_FILES['image']['error'] == 0) {
		  // verifion la taille du fichier à 2mo
		  if ($_FILES['image']['size'] <= 2000000) {
			$fileinfo = pathinfo($_FILES['image']['name']);
			$extension = $fileinfo['extension'];
			$extension_autorisees = array('jpg', 'jpeg', 'png');
			if (in_array($extension, $extension_autorisees)) {
  
			  // on ajoute le ficher dans le dossier 
			  move_uploaded_file($_FILES['image']['tmp_name'], 'upload/' . basename($_FILES['image']['name']));
			  $filename = 'upload/' . basename($_FILES['image']['name']);
  
			  $sql = "INSERT INTO produits(image,titre, contenu,prix,categorie,date_publication) VALUES (?,?,?,?,?,now())";
			  $req = $bdd->prepare($sql);
			  $req->execute(array($filename,$titre, $contenu, $prix,$categorie));
			  echo ' Article publié !';
			} else {
			  echo 'Le ficher n\'est pas de type image : jpg, jpeg et png.';
			}
		  } else {
			echo 'L\'image ne doit pas dépasser 2Mo.';
		  }
		} else {
		  echo 'Impossible d\'ajouter le fichier.';
		}
	  }
  
	} else {
	  echo "Remplissez tout les champs.";
	}
  }
  
?>
