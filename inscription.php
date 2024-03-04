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
        <nav class="navigation_shop">
            <a  class="logo" href="index.php"><strong>EARTH STORE</strong></a>
                <div class="menu">
                <a href="index.php">HOME</a>
                <a href="ABOUT.php">ABOUT</a>
                <a href="SHOP.php">SHOP</a>
                <a href="Contact.php">CONTACT</a>
                <a href="#">
                    <i class="fa-solid fa-bag-shopping" style="font-size: 25px;margin-top: -10px;"></i>
                </a>
                <a href="#">
                    <i class="fa-solid fa-user" style="font-size: 25px;margin-top: -10px;"></i>
                </a>
                
         </nav>   
        </div>
    </header>       

<body>
    <div class="title">
    <h1>INSCRIPTION</h1>
    </div>
    <br><br><br>
    <form method="post"action="traitementInscription.php" >
        <label for="nom"> Nom</label>
        <input type="text" id="nom" name="nom" >
        <br>
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom">
        <br>
        <label for="Pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="pseudo">
        <br>
        <label for="e_mail">Phonenumber</label>
        <input type="tel" id="phonenumber" name="phonenumber">
        <br>
        <label for="e_mail">e_mail</label>
        <input type="email" id="email" name="email" >
        <br>
        <label for="pass">password</label>
        <input type="password" id="passwordd" name="passwordd">
        <br>
        <div class="btn6">
            <input style="background-color:green; color:white;border-radius:9px " type="submit" value="M'inscrire" name="ok">
        </div>
        <div style="display: flex; gap:15px;">
        <p style="margin-top: 0px; margin-right: 0px;">Vous avez déjà un compte ? </p> 
        <a style="text-decoration: none; color:black; " href="Connexion.php"><strong>Se Connecter</strong> </a>
        </div>
    </form>
</body>       
   
</html>