<?php                       
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" assets/css/Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Document</title>
</head>
<header class="shop_header">
             
        <?php 
        include ('includes/header.php');
    ?>
</header>
<body>
    <div class="form">
    <h2>Type de catégorie</h2>
    <form action="traitementformcategorie.php" method="post">
        <label for="nom">Nom :</label>
        <br>
        <input type="text" id="nom" name="nom">
        <br>
        <input type="submit" value="Envoyer">
    </form>
    </div>
    <?php 
        include ('includes/footer.php');
    ?>
</body>
</html>
