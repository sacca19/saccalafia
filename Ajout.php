<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);
 include ('includes/auth.php');
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