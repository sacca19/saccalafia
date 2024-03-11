
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Ceci est votre tableau de bord personnalisé.</p>
<?php
                            $reqData = $bdd->prepare('SELECT * FROM dasbord');
                            $reqData->execute();
                            
                            while($resultat = $reqData->fetch()){
                                ?>
                        <div class="form">
                            <a href="Tableau_de_bord.php?id=<?= $resultat['id']?>"></a> 
                            
                        </div>
                        <?php
                        }
?>
</body>
</html>




