<?php
    session_start();
    include('includes/auth.php');

  if(!isset($_SESSION['status'])){ 
    header('location: Connexion.php');
  }

if (isset($_POST['ok'])) {
    $id= $_SESSION['id'];
    $commentaire = htmlspecialchars($_POST['commentaire']);
	$nom = htmlspecialchars($_POST['nom']);
	
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

				$reqData = $bdd->prepare("UPDATE avis SET commentaire=?,image=? nom=? where id = ?");
				$reqData->execute(array($commentaire,$image,$nom,$id));
			  echo ' Commentaire modifier !';
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
  
	 else {
	  echo "Remplissez tout les champs.";
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
		<h1>Modifier mon commentaire</h1>
		</div>
		<?php
        
        $reqData = $bdd->prepare("SELECT * FROM avis where id = ?");
        $reqData->execute(array($_SESSION['id']));

        while ($resultat = $reqData->fetch()) {
        ?>
             <form method="post" enctype="multipart/form-data">
			<label for="file">Image</label>
			<br>
			<input type="file" name="image" value="<img src="<?= $resultat['image'] ?> alt="">">
			<br>
			<label for="commentaire">commentaire</label>
			<br>
			<input type="text" id="commentaire" name="commentaire" value="<?= $resultat['commentaire']?>">
			<br>
			<label for="nom">nom</label>
			<br>
			<input type="nom" id="nom" name="nom" value="<?= $resultat['nom']?>">
			<br>
			<div class="btn">
				<input type="submit" value="Modifier" name="ok">
			</div>
		</form>
            <?php
        }
?>
            </div>
    </section>
    <footer>
    <?php
    include('includes/footer.php');
    ?>
</footer>
</body>
</html>
