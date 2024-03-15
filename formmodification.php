<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<header class="shop_header">
    <?php
    session_start();
    include('includes/auth.php');

    include('includes/header.php');
    ?>
</header>

<body>

    <section class="sectionp">
        <h4>MODIFIER</h4>
        <?php
        $id = $_SESSION['id'];
        $reqData = $bdd->prepare("SELECT * FROM users where id=$id");
        $reqData->execute();

        while ($resultat = $reqData->fetch()) {
        ?>
             <form method="post" action="traitementupdateuser.php" >
        <label for="nom"> Nom</label>
        <br>
        <input type="text" id="nom" name="nom" value="<?= $resultat['nom']?>">
        <br>
        <label for="prenom">Prénom</label>
        <br>
        <input type="text" id="prenom" name="prenom" value="<?= $resultat['prenom']?>">
        <br>
        <label for="Pseudo">Pseudo</label>
        <br>
        <input type="text" id="pseudo" name="pseudo" value="<?= $resultat['pseudo']?>">
        <br>
        <label for="e_mail">Phonenumber</label>
        <br>
        <input type="tel" id="phonenumber" name="phonenumber" value="<?= $resultat['phonenumber']?>">
        <br>
        <label for="e_mail">e_mail</label>
        <br>
        <input type="email" id="email" name="email" value="<?= $resultat['email']?>">
        <br>
        <label for="pass">password</label>
        <br>
        <input type="password" id="passwordd" name="passwordd" >
        <br>
        <div class="btn6">
            <input style="background-color:green; color:white;border-radius:9px " type="submit" value="Modifier" name="ok">
        </div>
</form>
            <?php
        }
?>
            </div>
    </section>
</body>
<footer>
    <?php
    include('includes/footer.php');
    ?>
</footer>

</html>