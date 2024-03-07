<?php 
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header class="shop_header">
    <?php 
        include ('includes/header.php');
    ?>
</header>
<form method="post" action="traitementcategorie.php">
    <input class="form3" type="text" id="name" placeholder="nom">
      
</form>
<div class="btn">
            <input type="submit" value="Publier" name="ok">
        </div>
</body>
</html>