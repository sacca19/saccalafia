<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Connexion</title>

</head>

<body>
    <?php
    $servername = "loclahost";
    $username = "root";
    $password = "";
    try{
        $bdd = new PDO("mysql:host=$servername;dbname=connection",$username,$password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //echo "Conexion réussie !";
    }
    catch(PDOException $e){
    echo "Erreur :".$e->getMessage();
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $e_mail = $_POST['e_mail'];
        $password = $_POST['password'];
        if($e_mail !="" && $password !=""){
            // connexion a la bdd
            $req = $bdd->query("SELECT * FROM users WHERE email = '$e_mail' AND  password");
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
        <label for="pass"> Mot de Pass</label>
        <input type="text" id="pass" name="pass">
        <br>
        <a  class="logo" href="">Mot de pase oublié?</a> 
        <div class="btn">
            <input style="background-color: green; color:white;border-radius:9px " type="submit" value="Me Connecter" name="ok">
        </div>
        
    </form>
    
    <footer>
    
   
</body>

</html>