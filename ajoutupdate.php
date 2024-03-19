<?php include('includes/auth.php'); 
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<?php

    $id= $_POST['id'];
	$titre = htmlspecialchars($_POST['titre']);
	$contenu = htmlspecialchars($_POST['contenu']);
	$prix = htmlspecialchars($_POST['prix']);
	$id_categorie = htmlspecialchars($_POST['id_categorie']);

if (isset($titre, $contenu,$prix,$id_categorie)) {

    if ($_FILES['image']['size'] <= 2000000) {
        $fileinfo = pathinfo($_FILES['image']['name']);
        $extension = $fileinfo['extension'];
        $extension_autorisees = array('jpg', 'jpeg', 'png');
        if (in_array($extension, $extension_autorisees)) {

            // on ajoute le ficher dans le dossier 
            move_uploaded_file($_FILES['image']['tmp_name'], 'upload/' . basename($_FILES['image']['name']));
            $filename = 'upload/' . basename($_FILES['image']['name']);
            $req = $bdd->prepare("UPDATE produits SET image=?,titre=?, contenu=?,prix=?,id_categorie=?,date_publication=now() where id=?");
            $req->execute(array($filename, $titre, $contenu, $prix, $id_categorie, $id));
            echo ' Article modifier !';
        } else {
            echo 'Le ficher n\'est pas de type image : jpg, jpeg et png.';
        }
    } else {
        echo 'L\'image ne doit pas dépasser 2Mo.';
    }
} else {
    echo 'Impossible de modifier le fichier.';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<header class="shop_header">
</header>
    <section class="sectionp">
        <h4>MODIFIER</h4>

        <?php
        $id = $_GET['id'];
        $reqData = $bdd->prepare("SELECT * FROM produits where id=?");
        $reqData->execute(array($id));
    
        while ($resultat = $reqData->fetch()) {
        ?>
            <form method="post">
                
                <label for="file">Image</label>
                <br>
                <input type="file" name="image" value="<?= $resultat['image'] ?>">
                <br>
                <label for="titre">Titre</label>
                <br>
                <input type="text" id="titre" name="titre" value="<?= $resultat['titre'] ?>">
                <br>
                <label for="contenu">Contenu</label>
                <br>
                <input type="text" id="contenu" name="contenu" value="<?= $resultat['contenu'] ?>">
                <br>
                <label for="prix">Prix</label>
                <br>
                <input type="text" id="prix" name="prix" value="<?= $resultat['prix'] ?>">
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
            </form>
        <?php
        }
        ?>
        </div>
    </section>
</body>
<footer>
    <?php
    include('includes/footer.php');
    ?>
</footer>

</html>