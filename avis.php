
<?php
include('includes/auth.php');
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<section class="section2" style="border-top: solid 1px rgb(200, 194, 194);">
        <h2>Ce que disent nos clients</h2>
        <div class="commentaires">
          <?php
                            $reqData = $bdd->prepare('SELECT * FROM avis');
                            $reqData->execute();
                            $count = 0; 
                            while($resultat = $reqData->fetch()){
                                if ($count < 8) {
                                ?>
                            <div class="commentaire" style="border: 1px solid black; padding: 1% 1% 1% 1%;">
                                <img class="cotes" src="assets/img/Côte.png" alt="Description de l'image">
                                <p><?= $resultat['commentaire']?></p><br>
                                <a href="index.php?id=<?= $resultat['id']?>"><img src="<?= $resultat['image']?>" alt=""></a> 
                                <p style="font-size:14px;"><strong><?= $resultat['nom']?></strong></p>

                            </div>                        
                        <?php
                         $count++;
                        } else {
                            break;
                        }
                    }
                    ?>
        </div>