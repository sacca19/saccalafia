<?php 
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
 include ('includes/auth.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=" assets/css/Style.css">
    <title>Document</title>
</head>

<body >
    <section>
 <header class="shop_header">
        <nav class="entete2">
            <a class="logo2" href="index.php">Ofashion</a>
            <a class="logo2" href="index.php">Profil</a>
            <div class="menu1">
            <a  href="liste.php">article Publié</a>
            <a  href="Ajout.php">Ajouter Article</a>
            <a  href="ajoutupdate.php">Modifier Article</a>
            </div>
        </nav>
    </header>

    <section class="sectionp">
    <h4>vos Coordonnées</h4> 
    
        <?php
        $reqData = $bdd->prepare('SELECT * FROM users where id=?');
        $reqData->execute(array($_SESSION['id']));

        while ($resultat = $reqData->fetch()) {
        ?>
            <div>
            <h4>Coordonnées de facturation</h4>
            <div style="display: flex; gap:15px;">
                    <div>
                        <label  type="nom">nom*</label>
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
    </section>
    </section>
    <footer>
    <?php 
        include ('includes/footer.php');
    ?>
</footer>
</body>
</html>