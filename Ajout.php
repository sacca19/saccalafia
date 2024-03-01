<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Style.css">
    <title>Inscription</title>

</head>

<body>
    <div class="card">
    <div class="title">
    <h1>Ajout articles</h1>
    </div>
    <br><br><br>
    <form method="post"action="traitementajout.php" >
    
        <label for="nom"> article</label>
        <input type="text" id="article" name="article" >
        <br>
        <label for="">Prix</label>
        <input type="text" id="prix" name="prix">
        <br>
        <label for="">description</label>
        <input type="text" id="descriptions" name="descriptions">
        <br>
       
        <label for="">quantite</label>
        <input type="text" id="quantite" name="quantite" >
        <br>
        <label for="">categorie</label>
        <input type="text" id="categorie" name="categorie">
        <br>
        <div class="btn">
            <input style="background-color: green; color:white;border-radius:9px " type="submit" value="ajouter" name="ok">
        </div>
    </form>
    </div>
    
    <footer>
    
   
</body>

</html>