<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Style.css">
    <title>Connexion</title>

</head>

<body>
<?php 

// CONNEXION A LA BASE DE DONNEES
$servername = 'localhost';
$username = 'root';
$password = '';
  try {
    $bdd = new PDO ("mysql:host=$servername;dbname=connexion",$username,$password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  } catch (Exception $e) {
    echo 'ERREUR :'.$e->getMessage();
  }


// tu peux laisser le controle de isset($_post['ok']) ou bien
// tu peux enléver

if (isset($_POST['ok'])) {
  // ICI ON RECUPERE LES VALEURS DES CHAMPS DU FORMULAIRE
    $email = $_POST['e_mail'];
    $pass = $_POST['pass'];

  if(isset($email, $password) AND !empty($_POST['email'])){

    // VERIFIONS SI L'email que la personne à renseigner existe déjà dans la base de données

    $reqData = $bdd->prepare('SELECT count(*) as count FROM users WHERE email = ?');
    $reqData->execute(array($email));
    $resultat = $reqData->fetch();

    if ($resultat['count'] > 0) {
        echo  'E-mail existe déjà !'; 
      }else{
        // SI l'EMAIL n'exite pas dans la base de données on fait un contrôle 
        // pour savoir si le mot de passe fait 8 caractères

        if (strlen($pass) >= 8) {
                // si c'est bon, on insert les informations du formulaire dans la base de données
                $req = $bdd->prepare("SELECT INTO users( email,password) ");
                $req->execute(array($email,$password));
                
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

    <div class="title">
    <h1>CONNEXION</h1>
    </div>
    <form method="post" >
        <label for="e_mail">e_mail ou ID</label>
        <input type="text" id="e_mail" name="e_mail">
        <br>
        <label for="pass"> password</label>
        <input type="text" id="password" name="password">
        <br>
        <a  class="logo" href="">Mot de pase oublié?</a> 
        <div class="btn">
            <input style="background-color: green; color:white;border-radius:9px " type="submit" value="Me Connecter" name="ok">
        </div>
        
    </form>
    
    <footer>
    
   
</body>

</html>