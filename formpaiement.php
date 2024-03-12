<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
 
// Inclure le fichier d'authentification
include ('includes/auth.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body class="formulaire">
<h1>Bienvenue<?php
                if(!isset($_SESSION['id'])){
                echo' vous êtes  hors connexion';
             } else{
                echo $_SESSION['nom'];
                } ?>
       
</h1>
<header class="Auth_header">
             
        <?php 
        include ('includes/header.php');
    ?>

<div class="form">


    <form  method="post" action="traitementpaiement.php">
  
       <label for="nom"> Nom</label>
       <br>
        <input type="text" id="nom" name="nom" >
        <br>
        <label for="prenom">Prénom</label>
        <br>
        <input type="text" id="prenom" name="prenom">
        <br>
        <label for="e_mail">Phonenumber</label>
        <br>
        <input type="tel" id="phonenumber" name="phonenumber">
        <br>
        <label for="e_mail">e_mail</label>
        <br>
        <input type="email" id="email" name="email" >
        <br>
        <label for="ville">Ville*</label>
        <br>
        <input type="text" id="ville" name="ville">
        <br>
        <label for="quartier">Quartier*</label>
        <br>
        <input type="text" id="quartier" name="quartier">
        <br>
        <label for="id_clients"> idantifiant clients</label>
    <br>
    <label for="id_clients"></label>
    <br>
    <select name="id_clients">
        <option selected>Choisir une option de client</option>
        <?php
        $reqData = $bdd->prepare('SELECT * FROM clients');
        $reqData->execute();

        while ($datacat = $reqData->fetch()) {
            ?>
            <option value="<?= $datacat['id'] ?>"><?= $datacat['type_client'] ?></option>
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
<?php 
        include ('includes/footer.php');
    ?>
</body>
</html>