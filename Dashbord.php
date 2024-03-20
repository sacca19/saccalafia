<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
include('includes/auth.php');
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/Style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery -->
        <script src="cart.js"></script>
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

        <section class="recherche">
            <div class="searchs2">
                <div class="menu_dashbord">
                    <div class="avis4">
                        <a href="Dashbord.php">Profil</a><br>
                    </div>
                    <div class="avis4">
                        <a href="modificationusers.php">modifier mes informations</a><br>
                    </div>
                    <div class="avis4">
                        <a href="liste.php">Aticles publiés</a><br>
                    </div>
                    <div class="avis4">
                        <a href="Ajout.php">Ajouter des articles</a><br>
                    </div>
                    <div class="avis4">
                        <a href="ajoutupdate.php">Modifier un article</a><br>
                    </div>
                    <div class="avis4">
                        <a href="commentaire.php">Ajouter un commentaire</a><br>
                    </div>
                    <div class="avis4">
                        <a href="updatecommentaire.php">Modifier un commentaire</a><br>
                    </div>
                    <div class="avis4">
                        <a href="updatecommentaire.php">Supprimer un commentaire</a>
                    </div>
                </div>
                <div  style="padding-top: -100px;"class="group_dasbord">
                    <h4>VOS INFORMATIONS</h4>

                    <?php
                    $reqData = $bdd->prepare('SELECT * FROM users where id=?');
                    $reqData->execute(array($_SESSION['id']));

                    while ($resultat = $reqData->fetch()) {
                    ?>
                        <div>
                            <h4> VOS Coordonnées </h4>
                            <div style="display: flex; gap:15px;">
                                <div>
                                    <label type="nom">nom*</label>
                                    <br>
                                    <input style="height: 70px; width: 450px;" type="text" name="nom" value="<?= $resultat['nom'] ?>">
                                </div>
                                <div>
                                    <label for="prenom">Prénom*</label>
                                    <br>
                                    <input style="height: 70px; width: 450px;" type="text" name="prenom" value="<?= $resultat['prenom'] ?>">
                                </div>
                            </div>
                            <div>
                                <label for="e_mail">Pseudo*</label>
                                <br>
                                <input style="height: 70px; width: 920px;" type="tel" id="pseudo" name="pseudo" value="<?= $resultat['pseudo'] ?>">
                            </div>
                            <div>
                                <label for="e_mail">Phonenumber*</label>
                                <br>
                                <input style="height: 70px; width: 920px;" type="tel" id="phonenumber" name="phonenumber" value="<?= $resultat['phonenumber'] ?>">
                            </div>
                            <div>
                                <label for="e_mail">e_mail*</label>
                                <br>
                                <input style="height: 70px; width: 920px;" type="email" id="email" name="email" value="<?= $resultat['email'] ?>">
                            </div>
                            <div>
                                <label for="ville">Ville*</label>
                                <br>
                                <input style="height: 70px; width: 920px;" type="text" id="ville" name="ville" value="<?= $resultat['ville'] ?>">
                            </div>
                            <div>
                                <label for="quartier">Quartier*</label>
                                <br>
                                <input style="height: 70px; width: 920px;" type="text" id="quartier" name="quartier" value="<?= $resultat['quartier'] ?>">
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
        </section>
        <footer>
            <?php
            include('includes/footer.php');
            ?>
        </footer>
    </body>

    </html>


















    <section class="sectionp">
        <div style="display: flex;">