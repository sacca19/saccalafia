<?php 
  session_start();
  /*$db=mysqli_connect('localhost','root','','connexion');
  
  $email = $_POST['email'];
  $passwordd= $_POST['passwordd'];
  
  $sql="SELECT * FROM users WHERE email='".$email."' AND passwordd='".$passwordd."'";
  
  $result= mysqli_query($db,$sql);
  $count = mysqli_num_rows($result);
  
  if($count == 1){
      echo json_encode("Success");
  }else{
      echo json_encode("echec");
  }*/
   
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

          echo $_SESSION['nom'];
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