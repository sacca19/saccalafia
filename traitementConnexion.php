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
          $_SESSION['nom'] = $resultat['nom'];
          $_SESSION['id'] = $resultat['id'];

          header('LOCATION: index.php');
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