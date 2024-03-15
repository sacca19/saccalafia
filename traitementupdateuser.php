<?php include ('includes/auth.php'); ?>
<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    $id= $_POST['id'];
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $phonenumber = htmlspecialchars($_POST['phonenumber']);
    $email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['passwordd']);
    
    if(isset($nom, $prenom, $pseudo, $phonenumber, $email, $password) ){

        // VERIFIONS SI L'email que la personne à renseigner existe déjà dans la base de données
        $passwordHash = password_hash($password,PASSWORD_DEFAULT);
    
        $reqData = $bdd->prepare("UPDATE users SET nom=?, prenom=?, pseudo=?, phonenumber=?, email=?, passwordd=? where id=?");
        $reqData->execute(array($nom,$prenom,$pseudo, $phonenumber,$email,$password, $id));
        
        echo "Modification réussi ! ";
    }else{
        echo "veuillez remplir tous les champs";
    }
?>