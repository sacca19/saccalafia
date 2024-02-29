<?php

try {

    // On se connecte à MySQL

    $bdd = new PDO('mysql:host=localhost;dbname=connexion', 'root', '');
} catch (Exception $e) {

    // En cas d'erreur, on affiche un message et on arrête tout

    die('Erreur : ' . $e->getMessage());
}



// Si tout va bien, on peut continuer


// On récupère tout le contenu de la table jeux_video

$reponse = $bdd->query('SELECT * FROM users');


// On affiche chaque entrée une à une

while ($donnees = $reponse->fetch()) {

?>

    <p>

        <strong>users</strong> : <?php echo $donnees['nom']; ?><br />



    <?php

}



$reponse->closeCursor(); // Termine le traitement de la requête


    ?>