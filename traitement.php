<?php
$servername = "localhost";
$username = "root";
$password = "";
try{
    $bdd = new PDO("mysql:host=$servername;dbname=connexion",$username,$password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo "Conexion réussie";
}
catch(PDOException $e){
echo "Erreur :".$e->getMessage();
}

if(isset($_POST) AND !empty($_POST['nom'])){
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = $_POST['prenom'];
    $pseudo = $_POST['pseudo'];
    $phonenumber = $_POST['phonenumber'];
    $e_mail = $_POST['e_mail'];
    $pass = $_POST['pass'];

    $data = $bdd->prepare('SELECT count(*) as count FROM users WHERE email = ?');
    $data->execute(array($e_mail));
    $dataUser = $data->fetch();

    if($dataUser['count'] > 0){
    $requete = $bdd->prepare('INSERT INTO users (nom, prenom, pseudo, email,phonenumber, password) VALUES (?,?,?,?,?,?)');
    $requete->execute(array($nom,$prenom,$pseudo,$e_mail,$phonenumber,$pass));
    echo 'Success';
    }else{
        echo 'Echec d\'ajout';
    }
   

}else{
    echo 'Remplissez tout les champs';
}
?>