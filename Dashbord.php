<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
include('includes/auth.php');

if (isset($_SESSION['status'])) {
    if ($_SESSION['status'] == 'styliste') {
        header('location: Dashbord.php');
      }elseif($_SESSION['status'] == 'clients') {
         header('location: Dashbordclients.php');
      }else{
         header('location: Dashbordclients.php');
      }
}else{
    header('location:Connexion.php');
}
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
        <a class="logo2" href="index.php">Ofashion</a> 
            <?php
            include('includes/header.php');
            ?>
        </nav>
    </header>

    <section class="recherche">
        <div class="searchs1">
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
                    <a href="commentaire.php">Ajouter un commentaire</a><br>
                </div>
                <div class="avis4">
                    <a href="updatecommentaire.php">Modifier un commentaire</a><br>
                </div>
                <div class="avis4">
                    <a href="updatecommentaire.php">Supprimer un commentaire</a>
                </div>
            </div>
            <div class="group_dasbord">
                <div class="entete1">
                <h4 style="margin-left: 50px;">VOS INFORMATIONS</h4>
                 <h4 style="margin-left: 50px;"> Vos Coordonnées </h4>
                </div>
              <div class="info">
             <?php
                     $id= $_SESSION['id'];
                    $reqData = $bdd->prepare('SELECT * FROM users where id=?');
                    $reqData->execute(array($_SESSION['id']));

                    while ($resultat = $reqData->fetch()) {
                    ?>
                        <div>
                        <div  class="div_class1">
                            <div style="display: flex; gap:5px; margin-left:50px; font-size:20px;">
                                <div>

                                    <p style="font-weight: bolder;">nom*</p>
                                    <p><?= $resultat['nom'] ?></p>
                                    <br>
                                    <p style="font-weight: bolder;">Prénom*</p>
                                    <p><?= $resultat['prenom'] ?></p>
                                    <br>
                                    <p style="font-weight: bolder;">Pseudo*</p>
                                    <p><?= $resultat['pseudo'] ?></p>
                                    <br>
                                    <p style="font-weight: bolder;">Phonenumber*</p>
                                    <p><?= $resultat['phonenumber'] ?>"</p>
                                    <br>
                                    <p style="font-weight: bolder;">e_mail*</p>
                                    <p><?= $resultat['email'] ?>"</p>
                                </div>
                                <div style="margin-left: 200px;">
                                <p style="font-weight: bolder;">Ville*</p>
                                <p><?= $resultat['ville'] ?></p>
                                <br>
                                <p style="font-weight: bolder;">Quartier*</p>
                                <p><?= $resultat['quartier'] ?></p>
                                </div>
                            </div>                      
                                
                        </div>
                    <?php
                    }
                    ?>
                </div>
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