<?php include('includes/auth.php'); 
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<?php

    $id= $_POST['id'];
	$titre = htmlspecialchars($_POST['titre']);
	$contenu = htmlspecialchars($_POST['contenu']);
	$prix = htmlspecialchars($_POST['prix']);
	$id_categorie = htmlspecialchars($_POST['id_categorie']);

if (isset($titre, $contenu,$prix,$id_categorie)) {

    if ($_FILES['image']['size'] <= 2000000) {
        $fileinfo = pathinfo($_FILES['image']['name']);
        $extension = $fileinfo['extension'];
        $extension_autorisees = array('jpg', 'jpeg', 'png');
        if (in_array($extension, $extension_autorisees)) {

            // on ajoute le ficher dans le dossier 
            move_uploaded_file($_FILES['image']['tmp_name'], 'upload/' . basename($_FILES['image']['name']));
            $filename = 'upload/' . basename($_FILES['image']['name']);
            $req = $bdd->prepare("UPDATE produits SET image=?,titre=?, contenu=?,prix=?,id_categorie=?,date_publication=now() where id=?");
            $req->execute(array($filename, $titre, $contenu, $prix, $id_categorie, $id));
            echo ' Article modifier !';
        } else {
            echo 'Le ficher n\'est pas de type image : jpg, jpeg et png.';
        }
    } else {
        echo 'L\'image ne doit pas dépasser 2Mo.';
    }
} else {
    echo 'Impossible de modifier le fichier.';
}


