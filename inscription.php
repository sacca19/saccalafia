<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Inscription</title>

</head>

<body>
    <div class="title">
    <h1>INSCRIPTION</h1>
    </div>
    <br><br><br>
    <form method="post"action="traitement.php" >
        <label for="nom"> Nom</label>
        <input type="text" id="nom" name="nom" >
        <br>
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom">
        <br>
        <label for="Pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="pseudo">
        <br>
        <label for="e_mail">Phonenumber</label>
        <input type="text" id="phonenumber" name="phonenumber">
        <br>
        <label for="e_mail">e_mail</label>
        <input type="text" id="e_mail" name="e_mail" >
        <br>
        <label for="pass">pass</label>
        <input type="text" id="pass" name="pass">
        <br>
        <div class="btn">
            <input style="background-color: green; color:white;border-radius:9px " type="submit" value="M'inscrire" name="ok">
        </div>
        
    </form>
    
    <footer>
    
   
</body>

</html>