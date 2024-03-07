<?php
 
 // CONNEXION A LA BASE DE DONNEES
 
 include ('includes/auth.php');

// tu peux laisser le controle de isset($_post['ok']) ou bien
// tu peux enléver

if (isset($_POST['ok'])) {
  // ICI ON RECUPERE LES VALEURS DES CHAMPS DU FORMULAIRE
    $nom = htmlspecialchars($_POST['nom']);
   
  if(isset($nom) AND !empty($_POST['nom'])){

                $req = $bdd->prepare("INSERT INTO categorie(nom) VALUES (?)");
                $req->execute(array($nom));
                
                echo 'insertion reussir';
          }
          
        }
?>