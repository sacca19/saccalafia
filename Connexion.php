<?php 
session_start();
if(isset($_SESSION['status'])){
    // Au moins une des trois sessions existe
    header('location: index.php');
}

?>

<?php 
  session_start();
   
  include ('includes/auth.php');

  // tu peux laisser le controle de isset($_post['ok']) ou bien
  // tu peux enléver
  
  if (isset($_POST['ok'])) {
    // ICI ON RECUPERE LES VALEURS DES CHAMPS DU FORMULAIRE
      $email = htmlspecialchars($_POST['email']);
      $password = htmlspecialchars($_POST['passwordd']);

    if(isset( $email, $password) AND !empty($_POST['email'])){
  
      // VERIFIONS SI L'email que la personne à renseigner existe déjà dans la base de données
      $reqData = $bdd->prepare('SELECT *, count(*) as count FROM users WHERE email = ?');
      $reqData->execute(array($email));
      $resultat = $reqData->fetch();
      if ($resultat['count'] > 0) {  
        
        $passwordVerrify = password_verify($password,$resultat['passwordd']);
        if ($passwordVerrify) {

            $_SESSION['status'] = $resultat['status'];

            $_SESSION['nom'] = $resultat['nom'];
            $_SESSION['id'] = $resultat['id'];


          if($result['status']==1){
            header('LOCATION: Dashbord.php');
          }else{
            if($resultat['status']==2){
              header('LOCATION: A_propos.php');
            }
          }
          exit;
            }else{
            echo 'Mot de passe  incorrect !';
          }
        }else{
          echo 'Le mail n\'existe pas';
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

<header></header>
    
<body>
<h1 style="text-align: center">CONNEXION</h1>
<div class="formauth1">
    <form method="post">
            <label for="e_mail">e_mail ou ID</label>
            <br>
            <input type="text" id="email" name="email">
            <br>
            <label for="pass"> password</label>
            <br>
            <input type="password" id="passwordd" name="passwordd">
            <br>
            <a style="color: black;text-decoration:none;padding: top 20px;; " href="">Mot de pase oublié?</a>
            <div class="btn">
                <input style="background-color:green; color:white;border-radius:9px;padding:7px;padding-bottom: 20pxS;" type="submit" value="Connexion" name="ok">
            </div>
            <div style="display: flex; gap: 15px;">
                <p style="margin-top: 0px; margin-right: 0px;">vous n'avez pas un compte ? </p>
                <a style="text-decoration: none; color:black;" href="inscription.php"><strong>S'inscrire </strong></a>
            </div>
    </form>
</div>
</body>
</html>