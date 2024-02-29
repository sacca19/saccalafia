<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Style.css">
    <title>Connexion</title>

</head>

<body>
    <div class="card">
        <div class="title">
            <h1>CONNEXION</h1>
        </div>

        <form method="post" action="traitementConnexion.php">
            <label for="e_mail">e_mail ou ID</label>
            <input type="text" id="email" name="email">
            <br>
            <label for="pass"> password</label>
            <input type="password" id="passwordd" name="passwordd">
            <br>
            <a style="color: black;text-decoration:none;padding: top 20px;; " href="">Mot de pase oublié?</a>
            <div class="btn">
                <input style="background-color: green; color:white;border-radius:9px;padding:7px;padding-bottom: 20pxS;" type="submit" value="Connexion" name="ok">
            </div>
            <div style="display: flex; gap: 15px;">
                <p style="margin-top: 0px; margin-right: 0px;">vous n'avez pas un compte ? </p>
                <a style="text-decoration: none; color:black;" href="inscription.php"><strong>S'inscrire </strong></a>
            </div>
        </form>

    </div>

    <footer>


</body>

</html>