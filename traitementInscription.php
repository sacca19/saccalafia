<?php
 
/*$HostName = "localhost";
$DatabaseName = "connexion";
$HostUser = "root";
$HostPass = ""; 
 
$con = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
$nom= $_POST['nom'];
$prenom= $_POST['prenom'];
$pseudo= $_POST['pseudo'];
$email= $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$passwordd = $_POST['passwordd'];

 	 // Creating SQL query and insert the record into MySQL database table.
	$Sql_Query =  "INSERT INTO users (nom,prenom,pseudo,email,phonenumber,passwordd) VALUES ('$nom','$prenom','$pseudo','$email','$phonenumber','$passwordd')";
	 
	 if(mysqli_query($con,$Sql_Query)){
	 
		echo "User Registered Successfully";
	 
	 }
	 else{
	 
  echo "Error: " . $Sql_Query . "<br>" . $con->error;	 
	 }
 mysqli_close($con);*/
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

 

  if(isset($nom, $prenom, $pseudo, $phonenumber, $email, $password) AND !empty($_POST['nom'])){

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
                $req = $bdd->prepare("INSERT INTO users(nom, prenom, pseudo, email, phonenumber, passwordd) VALUES (?,?,?,?,?,?)");
                $req->execute(array($nom, $prenom,$pseudo,$email,$phonenumber,$passwordHash));
                
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