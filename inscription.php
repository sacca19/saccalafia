<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<header class="shop_header">
        <?php 
        include ('includes/header.php');
        ?>
    </header>       

<body>
    <div class="formauth">
    <h1>INSCRIPTION</h1>
   
    <br><br><br>
    <form method="post"action="traitementInscription.php" >
        <label for="nom"> Nom</label>
        <br>
        <input type="text" id="nom" name="nom" >
        <br>
        <label for="prenom">Prénom</label>
        <br>
        <input type="text" id="prenom" name="prenom">
        <br>
        <label for="Pseudo">Pseudo</label>
        <br>
        <input type="text" id="pseudo" name="pseudo">
        <br>
        <label for="e_mail">Phonenumber</label>
        <br>
        <input type="tel" id="phonenumber" name="phonenumber">
        <br>
        <label for="e_mail">e_mail</label>
        <br>
        <input type="email" id="email" name="email" >
        <br>
        <label for="pass">password</label>
        <br>
        <input type="password" id="passwordd" name="passwordd">
        <br>
        <label for="ville">Ville*</label>
        <br>
        <input type="text" id="ville" name="ville">
        <br>
        <label for="quartier">Quartier*</label>
        <br>
        <input type="text" id="quartier" name="quartier">
        <div class="btn6">
            <input style="background-color:green; color:white;border-radius:9px " type="submit" value="M'inscrire" name="ok">
        </div>
        <div style="display: flex; gap:15px;">
        <p style="margin-top: 0px; margin-right: 0px;">Vous avez déjà un compte ? </p> 
        <a style="text-decoration: none; color:blue; font-size:15px; " href="Connexion.php"><strong>Se Connecter</strong> </a>
        </div>
    </form>
    </div>
    <?php 
        include ('includes/footer.php');
    ?>
</body>       
   
</html>