<?php
 
 error_reporting(E_ALL);
 ini_set("display_errors", 1);
 
 
 // CONNEXION A LA BASE DE DONNEES
 
 include ('includes/auth.php');


// Récupérer la valeur du champ du formulaire
$nom = htmlspecialchars($_POST['nom']);

// Requête d'insertion
$req = $bdd->prepare("INSERT INTO types(nom) VALUES (?)");
$req->execute(array($nom));
echo "Donnée insérée avec succès !";
?>


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
<header></header>
<body>
<h1 style="text-align: center;padding-top:30px;padding-bottom:-25px;">type d'utilisateur</h1>
<div class="formauth"> 
    <form method="post">
        <label for="nom"> Nom</label>
        <br>
        <input  type="text" id="nom" name="nom" >
        <br>
        <div class="btn6">
            <input style="background-color:green; color:white;border-radius:9px " type="submit" value="M'inscrire" name="ok">
        </div>
    </form>
    </div>
</body>       
</html>