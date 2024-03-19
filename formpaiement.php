<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
 
// Inclure le fichier d'authentification
include ('includes/auth.php');
?>
<?php
// Activer le rapport d'erreurs pour afficher toutes les erreurs
error_reporting(E_ALL);
ini_set("display_errors", 1);
 
// Inclure le fichier d'authentification
include ('includes/auth.php');

// Fermeture de la connexion à la base de données*/
if (isset($_POST['ok'])) {
	
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $phonenumber = htmlspecialchars($_POST['phonenumber']);
    $email = htmlspecialchars($_POST['email']);
    $ville = htmlspecialchars($_POST['ville']);
    $quartier = htmlspecialchars($_POST['quartier']);
    $identifiant = htmlspecialchars($_POST['id_clients']);

	if (!empty($nom) && !empty($prenom) && !empty($phonenumber) && !empty($email) && !empty($ville) && !empty($quartier)&& !empty($identifiant)) {
  
	  // VERIFIONS SI L'ARTICLE EXISTE DEJA
	  $reqSelect = $bdd->prepare('SELECT count(*) as count FROM dasbord WHERE id_clients = ?');
	  $reqSelect->execute(array($identifiant));
	  $resultat = $reqSelect->fetch();

			  $sql = "INSERT INTO dasbord(nom,prenom,phonenumber,email,ville,quartier,id_clients) VALUES (?,?,?,?,?,?,?)";
			  $req = $bdd->prepare($sql);
			  $req->execute(array($nom,$prenom,$phonenumber,$email,$ville,$quartier,$identifiant,));
			  echo ' Bravo !!!!!';
			} else {
			
	  echo "Remplissez tout les champs.";
	}
  }
  
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
<h1>Bienvenue<?php
                if(!isset($_SESSION['id'])){
                echo' vous êtes  hors connexion';
             } else{
                echo $_SESSION['nom'];
                } ?>
       
</h1>
<body class="formulaire">
<header class="Auth_header">
<nav class="navigation_shop">
        <?php 
        include ('includes/header.php');
    ?>
    </nav> 
</header>
<div class="form">


    <form  method="post">
  
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
<footer>
    <?php 
        include ('includes/footer.php');
    ?>
</footer>
</body>
</html>