<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include('includes/auth.php');

$recupData = $bdd->prepare('SELECT *, count(*) as count,
categorie.nom as catnom,
categorie.id as catid
FROM produits,categorie WHERE categorie.id = produits.id_categorie AND produits.id = ?');
$recupData->execute(array($_GET['id']));
$resultat = $recupData->fetch();
?>
<!DOCTYPE html>
<html lang="fr">

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
        <?php
        include('includes/header.php');
        ?>
    </nav>
</header>
    <section class="post_section">
        <div class="contenu10">
            <img class="imagepost" src="<?= $resultat['image'] ?>" alt="">
            <div>
                <div class="menu1">
                    <a class="a1p" href="index.php">HOME / </a>
                        <a class="a1p" href="categorieproduit.php?id=<?= $resultat['catid'] ?>"> <?= $resultat['catnom'] ?>/</a>
            
                    <div style="margin-top: -20px; font-size:20px; color: gray;">
                        <p><?= $resultat['catnom'] ?> V <?= $resultat['catid'] ?></p>
                    </div>
                </div>
             
                    <a style="color: darkgreen;" href="categorieproduit.php?id=<?= $resultat['catid'] ?>"> <?= $resultat['catnom'] ?></a>
                <p style="color: black;"><?= $resultat['titre'] ?></p>
                <p style="color: rgb(60,71,71 ); font-size:30px;"><?= $resultat['prix'] ?> Fcfa</p>
                <p style="color:rgb(60, 57, 57);"><?= $resultat['contenu'] ?></p>
                <div class="card_trait">
                    <div class="realisation">
                        <button class="button_js" id="diminuer">-</button>
                        <p class="nombre" id="valeur">0</p>
                        <button class="button_js" id="augmenter">+</button>
                        <input class="btn_p" type="submit" value="ADD TO CARD">
                    </div>
                    <div class="relie">
                        <div>
                            <p>Category:</p>
                        </div>
                        <div class="lien">
                          
                                <a class="a4p" href="categorieproduit.php?id=<?= $resultat['catid'] ?>"><?= $resultat['catnom'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section3post">
        <h1 style="margin-left: 300px; color: black; font-size: 30px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> Related products</h1>
        <div class="produitsde">
            <?php
            $reqData = $bdd->prepare('SELECT * FROM produits');
            $reqData->execute();

            while ($resultat = $reqData->fetch()) {
            ?>
                <div class="produitde">
                    <a href="detail.php?id=<?= $resultat['id'] ?>"><img src="<?= $resultat['image'] ?>" alt=""></a>
                    <p><?= $resultat['contenu'] ?></p>
                    <a href="detail.php?id=<?= $resultat['id'] ?>"><?= $resultat['titre'] ?></a><br>
                    <br>
                    
                    <span><?= $resultat['prix'] ?></span>

                </div>
            <?php
            }
            ?>
        </div>

    </section>
    <script>
                        // Récupérer les éléments HTML
                        var valeurElement = document.getElementById('valeur');
                        var augmenterButton = document.getElementById('augmenter');
                        var diminuerButton = document.getElementById('diminuer');

                        // Définir la valeur initiale
                        var valeur = 0;

                        // Mettre à jour la valeur et afficher
                        function mettreAJourValeur() {
                            valeurElement.textContent = valeur;
                        }

                        // Augmenter la valeur lors du clic sur le bouton "Augmenter"
                        augmenterButton.addEventListener('click', function() {
                            valeur++;
                            mettreAJourValeur();
                        });

                        // Diminuer la valeur lors du clic sur le bouton "Diminuer"
                        diminuerButton.addEventListener('click', function() {
                            if (valeur > 0) {
                                valeur--;
                                mettreAJourValeur();
                            }
                        });
                    </script>
<?php include('includes/footer.php'); ?>
</body>
</html>