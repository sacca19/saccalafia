<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Style.css">
    <title>Connexion</title>

</head>

<body>

    <div class="title">
    <h1>CONNEXION</h1>
    </div>
    <form method="post"action="traitementConnexion.php" >
        <label for="e_mail">e_mail ou ID</label>
        <input type="text" id="email" name="email">
        <br>
        <label for="pass"> password</label>
        <input type="password" id="passwordd" name="passwordd">
        <br>
        <a  class="logo" href="">Mot de pase oublié?</a> 
        <div class="btn">
            <input style="background-color: green; color:white;border-radius:9px " type="submit" value="Me Connecter" name="ok">
        </div>
        
    </form>
    
    <footer>
    
   
</body>

</html>