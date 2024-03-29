<?php
include('includes/auth.php');
error_reporting(E_ALL);
ini_set("display_errors", 1);

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
    $sql="DELETE FROM avis where id=?";
    $req= $bdd->prepare($sql);
    if($req->execute(array($id)))echo "<h2 style='background-color: red;'>Votre commentaire à bien été supprimer avec succès !</h2>";
    else{
        echo "<h2 style='background-color: red;'>Votre commentaire n'a pas encore été supprimer !</h2>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" assets/css/Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ofashion</title>
</head>
<body>
<header class="index_header">
    <nav class="navigationindex">
    <a class="logo2" href="index.php">Ofashion</a> 
    <div class="menu1">
    <a  href="inscription.php">INSCRIPTION</a>
    <a href="Connexion.php">CONNEXION</a>
    <a href="formation.php">FORMATION</a>
    </div>
    </nav>
    <div class="container">
        <h1 class="product-title1">MAGASIN </h1>
        <h1 class="product-title1">POLYVALENT</h1>
    </div>
</header>
    <div class="produits">
        <?php
        $reqData = $bdd->prepare('SELECT * FROM produits');
        $reqData->execute();

        $count = 0; // Variable de comptage initialisée à zéro
        while ($resultat = $reqData->fetch()) {
            // Vérifie si le nombre d'éléments affichés est inférieur à 15
            if ($count < 40) {
        ?>
                <div class="produit">
                    <a href="detail.php?id=<?= $resultat['id'] ?>"><img src="<?= $resultat['image'] ?>" alt=""></a> 
                    <p><?= $resultat['contenu'] ?></p>
                    <a href="detail.php?id=<?= $resultat['id'] ?>"><?= $resultat['titre'] ?></a><br>
                    <span><?= $resultat['prix'] ?></span>
                </div>
        <?php
                $count++; // Incrémente le compteur après l'affichage de chaque élément
            } else {
                break; // Sortir de la boucle une fois que 15 éléments ont été affichés
            }
        }
        ?>

    </div>

    <section class="section2" style="border-top: solid 1px rgb(200, 194, 194);">
        <h2>Ce que disent nos clients</h2>
        <div class="commentaires">
          <?php
                            $reqData = $bdd->prepare('SELECT * FROM avis');
                            $reqData->execute();
                            $count = 0; 
                            while($resultat = $reqData->fetch()){
                                if ($count < 8) {
                                ?>
                            <div class="commentaire" style="border: 1px solid black; padding: 1% 1% 1% 1%;">
                                <img class="cotes" src="assets/img/Côte.png" alt="Description de l'image">
                                <p><?= $resultat['commentaire']?></p><br>
                                <a href="index.php?id=<?= $resultat['id']?>"><img src="<?= $resultat['image']?>" alt=""></a> 
                                <p style="font-size:14px;"><strong><?= $resultat['nom']?></strong></p>

                            </div>                        
                        <?php
                         $count++;
                        } else {
                            break;
                        }
                    }
                    ?>
        </div>

    
            <div class="avis1">
                <a href="avis.php">voir plus</a>
            </div>
    

    </section>
    <section class="section3">
        <div class="section3_div">

            <h3>Offrez le cadeau d'une tenue locale </h3>
            <pre>Offrez le cadeau d'un souvenir durable avec une tenue locale.</pre>
            <button class="btn_about">Achetez</button>
        </div>
    </section>
    <section>
        <div class="reference">
            <div style="display: flex;">
                <div class="icons_card">
                    <i class="fa-solid fa-lock" style=" width: 20px;height:20px;  color: white; padding: 17px; padding-top: -20px;"></i>
                </div>
                <div class="index_lot1">

                    <h6>PAIEMENT SECURISE</h6>
                    <pre>TOUS NOS PAIEMENTS SONT SÉCURISÉS.</pre>
                </div>
                <div style="margin-top: 35px; height: 55px ; border-right: solid 1px rgb(128, 124, 124);">

                </div>
            </div>

            <div>
                <div class="icons_card">
                    <i class="fa-solid fa-truck" style=" width: 20px;height:20px;  color: white; padding: 17px; padding-top: -20px;"></i>
                </div>
                <div class="index_lot2">
                    <h6>LIVRÉ AVEC SOIN</h6>
                    <pre>Livraison ultra rapide à votre porte. </pre>
                </div>
                <div style="margin-top: -35px; height: 55px ; border-right: solid 1px rgb(128, 124, 124);">

                </div>

            </div>
            <div>
                <div class="icons_card">
                    <i class="fa-solid fa-truck" style=" width: 20px; height:20px;  color: white; padding: 17px; padding-top: -20px;"></i>
                </div>
                <div class="index_lot3">
                    <h6>SERVICE EXCELLENT</h6>
                    <pre>Support par chat en direct et par téléphone</pre>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
    <footer>
        <div class="postcard">

            <nav class="footerindex">
            <a class="logo2" href="index.php">Ofashion</a> 
                <div class="menu2">
                <a href="Boutiques.php">INSCRIPTION</a>
                <a href="Connexion.php">CONNEXION</a> 
                <a href="Formation.php">FORMATION</a> 
                </div>
                <div>
               <a class="logo" href=""> Copyright © 2024 Ofashion magasin</a>
                    <a  class="logo" href="Deconnexion.php"><strong>Deconnexion </strong></a>  
                </div>
        </nav>
        </div>
        </footer>
</body>
</html>