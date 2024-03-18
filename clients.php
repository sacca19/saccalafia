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
<body>
<header class="Auth_header">
<nav class="navigation_shop">
        <?php 
        include ('includes/header.php');
    ?>
    </nav> 
</header>
    <div class="form">
    <h2>Type de clients</h2>
    <form action="traitementclient.php" method="post">
        
        <label for="nom">type de client :</label>
        <br>
        <input type="text" id="type_client" name="type_client">
        <br>
        <input type="submit" value="Envoyer">
    </form>
    </div>
    <footer>
    <?php 
        include ('includes/footer.php');
    ?>
</footer>
</body>
</html>