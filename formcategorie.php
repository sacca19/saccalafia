<?php                       
session_start();
?>
<?php
 
 error_reporting(E_ALL);
 ini_set("display_errors", 1);
 
 
 // CONNEXION A LA BASE DE DONNEES
 
 include ('includes/auth.php');


// Récupérer la valeur du champ du formulaire
$nom = htmlspecialchars($_POST['nom']);

// Requête d'insertion
$req = $bdd->prepare("INSERT INTO categorie(nom) VALUES (?)");
$req->execute(array($nom));
echo "Donnée insérée avec succès !";
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
    <h2>Type de catégorie</h2>
    <form method="post">
        <label for="nom">Nom :</label>
        <br>
        <input type="text" id="nom" name="nom">
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
