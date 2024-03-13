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
<header class="shop_header">
    <?php 
        include ('includes/header.php');
    ?>
    </header>
<body>
  
<body>
    
    <div class="title">
    <h1>Ajout de commentaire</h1>
    </div>
    <br><br><br>
    <form method="post" action="traitementcommentaire.php" enctype="multipart/form-data">
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
        <input type="submit" value="Envoyer" name="ok">
    </div>
</form>

    </div>
    
    <footer>
    
   
</body>
<?php 
        include ('includes/footer.php');
    ?>
</html>