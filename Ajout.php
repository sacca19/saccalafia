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
            <a class="logo" href="index.php"><strong>EARTH STORE</strong></a>
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

            </div>
            </nav>
    </header>
<body>
    <div class="card">
    <div class="title">
    <h1>Ajout articles</h1>
    </div>
    <br><br><br>
    <form method="post"action="traitementajout.php" >
    
        <label for="nom"> titre</label>
        <input type="text" id="titre" name="titre" >
        <br>
        <label for="">contenu</label>
        <input type="text" id="contenu" name="contenu">
        <br>
        <label for="nom"> Prix</label>
        <input type="text" id="prix" name="prix" >
        <br>
        <label for="nom"> Categorie</label>
        <input type="text" id="categorie" name="categorie" >
        <br>
        <div class="btn">
            <input type="submit" value="Publier" name="ok">
        </div>
    </form>
    </div>
    
    <footer>
    
    <?php 
        include ('includes/footer.php');
    ?>
</body>

</html>