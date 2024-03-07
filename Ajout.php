<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>

<body>
    <header class="shop_header">
    <?php 
        include ('includes/header.php');
    ?>
    </header>
<body>
    
    <div class="title">
    <h1>Ajout articles</h1>
    </div>
    <br><br><br>
    <form method="post"action="traitementajout.php" enctype="multipart/form-data" >
        <label for="file">image</label>
        <input type="file" name="image" >
        <label for="nom"> titre</label>
        <input type="text" id="titre" name="titre" >
        <br>
        <label for="">contenu</label>
        <input type="text" id="contenu" name="contenu">
        <br>
        <label for="nom"> Prix</label>
        <input type="text" id="prix" name="prix" >
        <br>
        <select name="id_categorie">
      <option selected>Choisis...</option>
      <?php
        $reqData = $bdd->prepare('SELECT * FROM categories');
        $reqData->execute();

        while($datacat = $reqData->fetch()){
        ?>
        <option value="<?= $datacat['id']?>"><?= $datacat['nom']?></option>
      <?php
      }
    ?>
      
    </select>
        <br>
        <div class="btn">
            <input type="submit" value="Publier" name="ok">
        </div>
    </form>
    </div>
    
    <footer>
    
    <?php 
        include ('includes/footer.php');
    ?>
</body>

</html>