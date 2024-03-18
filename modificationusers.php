<?php
    session_start();
    include('includes/auth.php');

  if(!isset($_SESSION['status'])){ 
    header('location: Connexion.php');
  }

if (isset($_POST['maj'])) {
    $id= $_SESSION['id'];
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $phonenumber = htmlspecialchars($_POST['phonenumber']);
    $email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['passwordd']);
    
    if(isset($nom, $prenom, $pseudo, $phonenumber, $email, $password) ){

        // VERIFIONS SI L'email que la personne à renseigner existe déjà dans la base de données
        $passwordHash = password_hash($password,PASSWORD_DEFAULT);
    
        $reqData = $bdd->prepare("UPDATE users SET nom=?, prenom=?, pseudo=?, phonenumber=?, email=?, passwordd=? where id = ?");
        $reqData->execute(array($nom,$prenom,$pseudo, $phonenumber,$email,$password, $id));
        
        echo "Modification réussi ! ";
    }else{
        echo "veuillez remplir tous les champs";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<header class="shop_header">
<?php
    include('includes/header.php');
    ?>
</header>
    <section class="sectionp">
        <h4>MODIFIER</h4>
        <?php
        
        $reqData = $bdd->prepare("SELECT * FROM users where id = ?");
        $reqData->execute(array($_SESSION['id']));

        while ($resultat = $reqData->fetch()) {
        ?>
             <form method="post" >
        <label for="nom"> Nom</label>
        <br>
        <input type="text" id="nom" name="nom" value="<?= $resultat['nom']?>">
        <br>
        <label for="prenom">Prénom</label>
        <br>
        <input type="text" id="prenom" name="prenom" value="<?= $resultat['prenom']?>">
        <br>
        <label for="Pseudo">Pseudo</label>
        <br>
        <input type="text" id="pseudo" name="pseudo" value="<?= $resultat['pseudo']?>">
        <br>
        <label for="e_mail">Phonenumber</label>
        <br>
        <input type="tel" id="phonenumber" name="phonenumber" value="<?= $resultat['phonenumber']?>">
        <br>
        <label for="e_mail">e_mail</label>
        <br>
        <input type="email" id="email" name="email" value="<?= $resultat['email']?>">
        <br>
        <label for="pass">password</label>
        <br>
        <input type="password" id="passwordd" name="passwordd" >
        <br>
        <div class="btn6">
            <input style="background-color:green; color:white;border-radius:9px " type="submit" value="Modifier" name="maj">
        </div>
</form>
            <?php
        }
?>
            </div>
    </section>
    <footer>
    <?php
    include('includes/footer.php');
    ?>
</footer>
</body>
</html>