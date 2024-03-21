<?php
session_start();
include('includes/auth.php');                         

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<p>Bonjour <?php
                if (!isset($_SESSION['status'])){
                    echo ' vous êtes  hors connexion';
                } else {
                    if($_SESSION['status'] == 'styliste'){

                        echo 'Vous êtes styliste et votre nom est : '.$_SESSION['nom'];
                      }elseif($_SESSION['status'] == 'clients'){

                        echo 'Vous êtes clients et votre nom est : '.$_SESSION['nom'];
                      }else{

                        echo 'Vous êtes apprenti et votre nom est : '.$_SESSION['nom'];
                      }
                } ?>

    </p>
<body>
<header class="about_header">
   <nav class="navigation">  
    <a class="logo" href="Deconnexion.php"><strong>DECONNEXION</strong></a>
      <?php
        include('includes/header.php');                         
      ?>
    </nav>
        <div class="container">
            <h1 class="product-title3">QUI SOMME </h1>
            <h1 class="product-title2"> NOUS ?</h1>
        </div>
    </header>
    <section class="banner">
        <div class="about_contenu">
                <img class="image_about" src="assets/img/img54.jpeg" alt="">
            <div class="mision">
                <h1>NOTRE MISSION</h1>
                <p class="about_paragraph"> Bonjour, je m'appelle Om Nhéath et avec l'aide de nombreuses personnes, <br> j'ai créé ce site. Je l'ai conçu pour offrir une expérience x-express, soigné et proposer  <br> un large éventail d'articles. De plus, j'ai souhaité mettre en valeur les tissus locaux.<br>  Beaucoup d'amour et des centaines d'heures ont été consacrés à sa réalisation.<br>J'espère que vous l'apprécierez autant que moi.</p><br>
                <p class="about_paragraph">Je vous souhaite plein de succès dans votre entreprise, profitez bien de <br> la mode.</p>

            </div>                                                                                                                                  
        </div>
    </section>
    <section class="section3">
        <div>
            
            <h3>Offrez le cadeau d'une tenue locale </h3>
            <pre>Offrez le cadeau d'un souvenir durable avec une tenue locale.</pre>
            <input class="btn_about" type="submit" value="ACHETER">
            
        </div>
     </section>
 <br><br><br>
 <?php 
        include ('includes/footer.php');
    ?>
<footer>
</body>
</html>