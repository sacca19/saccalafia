<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);
 include ('includes/auth.php');
?>

<?php
// Activer le rapport d'erreurs pour afficher toutes les erreurs
error_reporting(E_ALL);
ini_set("display_errors", 1);
 
// Inclure le fichier d'authentification
include ('includes/auth.php');

// Fermeture de la connexion à la base de données*/
if (isset($_POST['ok'])) {
	$commentaire = htmlspecialchars($_POST['commentaire']);
	$nom = htmlspecialchars($_POST['nom']);
	
  
	if (!empty($commentaire) && !empty($nom)) {
  
	  // VERIFIONS SI L'ARTICLE EXISTE DEJA
	  $reqSelect = $bdd->prepare('SELECT count(*) as count FROM avis WHERE nom = ?');
	  $reqSelect->execute(array($nom));
	  $resultat = $reqSelect->fetch();
  
	  if ($resultat['count'] > 0) {
		echo "Le commentaire entrer existe déjà.";
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
  
			  $sql = "INSERT INTO avis(commentaire,image,nom,date_publication) VALUES (?,?,?,now())";
			  $req = $bdd->prepare($sql);
			  $req->execute(array($commentaire,$filename,$nom ));
			  echo ' Commentaire publié !';
			} else {
			  echo 'Le ficher n\'est pas de type image : jpg, jpeg et png.';
			}
		  } else {
			echo 'L\'image ne doit pas dépasser 2Mo.';
		  }
		} else {
		  echo 'Impossible d\'ajouter votre commentaire.';
		}
	  }
  
	} else {
	  echo "Remplissez tout les champs.";
	}
  }
  
?>


<!DOCTYPE html>
<html lang="en">

<head > 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
<header class="Auth_header">
<nav class="navigation_shop">
        <?php 
        include ('includes/header.php');
    ?>
    </nav> 
</header>
<body>
  
<body>
    
    <div class="title">
    <h1>Ajout de commentaire</h1>
    </div>
    <br><br><br>
    <form method="post" enctype="multipart/form-data">
    <label for="file">Image</label>
    <br>
    <input type="file" name="image">
    <br>
    <label for="commentaire">commentaire</label>
    <br>
    <input type="text" id="commentaire" name="commentaire">
    <br>
    <label for="nom">nom</label>
    <br>
    <input type="nom" id="nom" name="nom">
    <br>
    <div class="btn">
        <input type="submit" value="Poster" name="ok">
    </div>
</form>

    </div>
    
<footer>
    <?php 
        include ('includes/footer.php');
    ?>
</footer>
   
</body>

</html>