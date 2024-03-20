<?php 
        include ('includes/auth.php');
    ?>

<?php
 
 // CONNEXION A LA BASE DE DONNEES
 
 include ('includes/auth.php');

// tu peux laisser le controle de isset($_post['ok']) ou bien
// tu peux enléver

if (isset($_POST['ok'])) {
  // ICI ON RECUPERE LES VALEURS DES CHAMPS DU FORMULAIRE
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $phonenumber = htmlspecialchars($_POST['phonenumber']);
    $email = htmlspecialchars($_POST['email']);
	  $password = htmlspecialchars($_POST['passwordd']);
    $ville = htmlspecialchars($_POST['ville']);
    $quartier = htmlspecialchars($_POST['quartier']);
    $type = htmlspecialchars($_POST['status']);
 

  if(isset($nom, $prenom, $pseudo, $phonenumber, $email, $password,$ville,$quartier,$type) AND !empty($_POST['nom'])){

    // VERIFIONS SI L'email que la personne à renseigner existe déjà dans la base de données
    $passwordHash = password_hash($password,PASSWORD_DEFAULT);

    $reqData = $bdd->prepare('SELECT count(*) as count FROM users WHERE email = ?');
    $reqData->execute(array($email));
    $resultat = $reqData->fetch();

    if ($resultat['count'] > 0) {
        echo  'e-mail existe déjà !'; 
      }else{
        // SI l'EMAIL n'exite pas dans la base de données on fait un contrôle 
        // pour savoir si le mot de passe fait 8 caractères

        if (strlen($password) >= 8) {
                // si c'est bon, on insert les informations du formulaire dans la base de données
                $req = $bdd->prepare("INSERT INTO users(nom, prenom, pseudo, email, phonenumber, passwordd,ville,quartier,status) VALUES (?,?,?,?,?,?,?,?,?)");
                $req->execute(array($nom, $prenom,$pseudo,$email,$phonenumber,$passwordHash,$ville,$quartier,$type));
                
                echo 'Inscription réussie';
          }else{
          echo 'Mot de passe au moins 8 caractères !';
        }
      }
    }else {
     echo 'Veillez remplir tous les champs !';
    }
}


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
<h1 style="text-align: center;padding-top:30px;padding-bottom:-25px;">INSCRIPTION</h1>
    <div class="formauth"> 
    <form method="post">
        <label for="nom"> Nom</label>
        <br>
        <input  type="text" id="nom" name="nom" >
        <br>
        <label for="prenom">Prénom</label>
        <br>
        <input type="text" id="prenom" name="prenom">
        <br>
        <label for="Pseudo">Pseudo</label>
        <br>
        <input type="text" id="pseudo" name="pseudo">
        <br>
        <label for="e_mail">Phonenumber</label>
        <br>
        <input type="tel" id="phonenumber" name="phonenumber">
        <br>
        <label for="e_mail">e_mail</label>
        <br>
        <input type="email" id="email" name="email" >
        <br>
        <label for="pass">password</label>
        <br>
        <input type="password" id="passwordd" name="passwordd">
        <br>
        <label for="ville">Ville*</label>
        <br>
        <input type="text" id="ville" name="ville">
        <br>
        <label for="quartier">Quartier*</label>
        <br>
        <input type="text" id="quartier" name="quartier">
        <br>
        <select name="status">
        <option selected>Choisir type d'utilisateur</option>
        <?php
        $reqData = $bdd->prepare('SELECT * FROM types');
        $reqData->execute();

        while ($datacat = $reqData->fetch()) {
            ?>
            <option><?= $datacat['nom'] ?></option>
            <?php
            
        }
        ?>
    </select>
        <div class="btn6">
            <input style="background-color:green; color:white;border-radius:9px " type="submit" value="M'inscrire" name="ok">
        </div>
        <div style="display: flex; gap:15px;">
        <p style="margin-top: 0px; margin-right: 0px;">Vous avez déjà un compte ? </p> 
        <a style="text-decoration: none; color:blue; font-size:15px; " href="Connexion.php"><strong>Se Connecter</strong> </a>
        </div>
    </form>
    </div>
</body>       
</html>