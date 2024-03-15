<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    include('includes/auth.php');

    $recupData = $bdd->prepare('SELECT * FROM categorie WHERE id = ?');
    $recupData->execute(array($_GET['id']));
    $resultat = $recupData->fetch();
?>
<?php
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
<header class="shop_header">
    <nav class="navigation_shop">
        <?php
        include('includes/header.php');
        ?>
    </nav>
</header>
<body>       
    <section class="recherche">
        <div class="searchs1">
            <div class="search1">
                <form >
                    <div>
                        <input class="form2" type="text" id="name" placeholder="search products...">
                        <a href="#">
                            <i class="fa-solid fa-magnifying-glass" style="font-size: 17px;background-color: rgb(8, 183, 8); margin-left: 10px; padding: 14px; color: white;"></i>
                        </a>
                        <form class="multi-range-field my-5 pb-5">
                            <h3>FIlter of price</h3>
                            <input id="multi" class="multi-range" type="range" />
                          </form>
                    </div>
                </form>
                <div class="text">
                    <h3>Categories</h3>
                    <?php
        $reqData = $bdd->prepare('SELECT *, count(*) as count FROM categorie JOIN produits ON id_categorie = produits.id_categorie ');
        $reqData->execute();

        while ($datacat = $reqData->fetch()) {
            ?>
            <a href="categorieproduit.php?id=<?= $datacat['id'] ?>"><?= $datacat['nom'] ?><?= $datacat['count'] ?></a>
            <?php
            
        }
        ?>
                </div>
              
            </div>
            <div class="group2" style="border-left: solid 1px gray; padding:10px">
                <div class="Postcards">
                <div class="menu1">
                            <a class="a1p" href="index.php">HOME /</a>
                            <a class="a1p" href="Boutiques.php">Boutique /</a>
                            </div>
                    <p style="color: rgb(30, 148, 30); margin-left: 50px;font-size: 50px;">categorie</p>
                    <div class="paragraph">
                        <p style="font-size: 12px; margin-left: 50px; color: gray;">Shawing all 12 result</p>
                        <select class="form-select" aria-label="Default select example" style="margin-left: 55px; border: none;">
                            <option selected>Default sorting</option>
                            <option value="1">Default sorting</option>
                            <option value="2">Sort by popularity</option> 
                            <option value="3">Sort by average rating</option>
                            <option value="1">Sort by latest</option>
                            <option value="2">Sort by price low to high</option> 
                            <option value="3">Sort by price high to low</option>
                         
                          </select>
                    </div>
                    
                    <div class="produits">
                    <?php
                            $reqData = $bdd->prepare('SELECT * FROM produits');
                            $reqData->execute();
                            
                            while($resultat = $reqData->fetch()){
                                ?>
                        <div class="produit">
                            <a href="detail.php?id=<?= $resultat['id']?>"><img src="<?= $resultat['image']?>" alt=""></a> 
                            <p><?= $resultat['contenu']?></p>
                            <a href="detail.php?id=<?= $resultat['id']?>"><?= $resultat['titre']?></a>
                            <span><?= $resultat['prix']?></span>
                            
                        </div>
                        <?php
                        }
                    ?>
                    </div>
                </div>
                    
            </div>
        </div>
    </section>
    
    </body>
    <footer>
    <?php 
        include ('includes/footer.php');
    ?>
</footer>
    </html>
