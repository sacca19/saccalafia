<?php
include('includes/auth.php');

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" assets/css/Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
    <p>Bonjour<?php
                if (!isset($_SESSION['id'])) {
                    echo ' vous êtes  hors connexion';
                } else {
                    echo $_SESSION['nom'];
                } ?>

    </p>
</head>

<header class="index_header">

<?php
include('includes/header.php');
?>
 
</header>
<body>
   
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
                    <a href="detail.php?id=<?= $resultat['id'] ?>"><img src="<?= $resultat['image'] ?>" alt=""></a> <br>
                    <p><?= $resultat['contenu'] ?></p>
                    <a href="detail.php?id=<?= $resultat['id'] ?>"><?= $resultat['titre'] ?></a>
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
        <h2>What Our Customers Say</h2>
        <div class="services">
            <div>
                <img class="cote" src="assets/img/Côte.png" alt="">
                <p style="color: rgb(71, 71, 71);">Fast shipping and excellent customer<br>service. The product was even better<br>than expected. I will deHnitely be a<br>returning customer.</p>
                <img class="img1" src="assets/img/earth-store-testimonial-avatar-img.jpeg" alt="">
                <p class="say"><strong>JENNIFER LEWIS</strong></p>
            </div>
            <div>
                <img class="cote" src="assets/img/Côte.png" alt="">
                <p style="color: rgb(71, 71, 71);">Great user experience on your website.<br>I found exactly what I was looking for<br>at a great price. I will deHnitely be<br>telling my friends.</p>
                <img class="img1" src="assets/img/earth-store-testimonials-avatar-img-2.jpeg" alt="">
                <p class="say"><strong>ALICIA HEART</strong></p>
            </div>
            <div>
                <img class="cote" src="assets/img/Côte.png" alt="">
                <p style="color: rgb(71, 71, 71);">Thank you for the excellent shopping<br>experience. It arrived quickly and was<br>exactly as described. I will deHnitely be<br>shopping with you again in the future.</p>
                <img class="img1" src="assets/img/earth-store-testimonials-avatar-img-1.jpeg" alt="">
                <p class="say"><strong>JUAN CARLOS</strong></p>
            </div>

        </div>
    </section>
    <section class="section3">
        <div class="section3_div">

            <h3>Give the Gift of a Post card</h3>
            <pre>Give the gift of a lasting memory with a postcard</pre>
            <button class="btn_about">PURCHASE A POST CARD</button>
        </div>
    </section>
    <section class="section4">
        <div class="reference">
            <div style="display: flex;">
                <div class="icons_card">
                    <i class="fa-solid fa-lock" style=" width: 20px;height:20px;  color: white; padding: 17px; padding-top: -20px;"></i>
                </div>
                <div class="index_lot1">

                    <h6>SECURE PAYMENT</h6>
                    <pre>All our payments our SSL secured</pre>
                </div>
                <div style="margin-top: 30px; height: 50px ; border-right: solid 1px rgb(128, 124, 124);">

                </div>
            </div>

            <div>
                <div class="icons_card">
                    <i class="fa-solid fa-truck" style=" width: 20px;height:20px;  color: white; padding: 17px; padding-top: -20px;"></i>
                </div>
                <div class="index_lot2">
                    <h6>DELIVERED WITH CARE</h6>
                    <pre>Super fast shipping to your door</pre>
                </div>
                <div style="margin-top: -40px; height: 50px ; border-right: solid 1px rgb(128, 124, 124);">

                </div>

            </div>
            <div>
                <div class="icons_card">
                    <i class="fa-solid fa-truck" style=" width: 20px; height:20px;  color: white; padding: 17px; padding-top: -20px;"></i>
                </div>
                <div class="index_lot3">
                    <h6>EXCELLENT SERVICE</h6>
                    <pre>Live chat and phone support</pre>
                </div>
            </div>
        </div>
    </section>
    <br><br><br>
    <?php
    include('includes/footer.php');
    ?>
</body>

</html>