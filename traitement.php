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
    $nom = htmlentities($_POST['nom']);
    $prenom = $_POST['prenom'];
    $pseudo = $_POST['pseudo'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['e_mail'];
    $pass = $_POST['pass'];

  if(isset($nom, $prenom, $pseudo, $phonenumber, $email, $pass) AND !empty($_POST['nom'])){

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
                $req = $bdd->prepare("INSERT INTO users(nom, prenom, pseudo, email, phonenumber, password) VALUES (?,?,?,?,?,?)");
                $req->execute(array($nom, $prenom,$pseudo,$email,$phonenumber,$pass));
                
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
