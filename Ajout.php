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
	$titre = htmlspecialchars($_POST['titre']);
	$contenu = htmlspecialchars($_POST['contenu']); 
	$prix = htmlspecialchars($_POST['prix']);
	$id_categorie = htmlspecialchars($_POST['id_categorie']);
  
	if (!empty($titre) && !empty($contenu) && !empty($prix) && !empty($id_categorie)) {
  
	  // VERIFIONS SI L'ARTICLE EXISTE DEJA
	  $reqSelect = $bdd->prepare('SELECT count(*) as count FROM produits WHERE titre = ?');
	  $reqSelect->execute(array($titre));
	  $resultat = $reqSelect->fetch();
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
  
			  $sql = "INSERT INTO produits(image,titre, contenu,prix,id_categorie,date_publication) VALUES (?,?,?,?,?,now())";
			  $req = $bdd->prepare($sql);
			  $req->execute(array($filename,$titre, $contenu, $prix,$id_categorie));
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
<header></header>
<body>
<h1 style="text-align: center;padding-top:100px;">Ajout articles</h1>
    <div class="formauth1">
    <form method="post" action="traitementajout.php" enctype="multipart/form-data">
    <label for="file">Image</label>
    <br>
    <input type="file" name="image">
    <br>
    <label for="titre">Titre</label>
    <br>
    <input type="text" id="titre" name="titre">
    <br>
    <label for="contenu">Contenu</label>
    <br>
    <input type="text" id="contenu" name="contenu">
    <br>
    <label for="prix">Prix</label>
    <br>
    <input type="text" id="prix" name="prix">
    <br>
    <label for="id_categorie">Catégorie</label>
    <br>
    <select name="id_categorie">
        <option selected>Choisir catégorie</option>
        <?php
        $reqData = $bdd->prepare('SELECT * FROM categorie');
        $reqData->execute();

        while ($datacat = $reqData->fetch()) {
            ?>
            <option value="<?= $datacat['id'] ?>"><?= $datacat['nom'] ?></option>
            <?php
            
        }
        ?>
    </select>
    <br><br><br>
    <div class="btn">
        <input type="submit" value="Publier" name="ok">
    </div>
</form>

    </div>
    
    </div>
</body>
</html>