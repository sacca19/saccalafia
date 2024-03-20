<?php
include('includes/auth.php');
error_reporting(E_ALL);
ini_set("display_errors", 1);
if (isset($_GET['id']) && !empty($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM produits where id=?";
  $req = $bdd->prepare($sql);
  if ($req->execute(array($id))) echo "<h2 style='background-color: red;'>Votre article à bien été supprimer avec succès !</h2>";
  else {
    echo "<h2 style='background-color: red; color:white;'>Votre article n'a pas encore été supprimer !</h2>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>

</head>

<body>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        <th scope="col">Prix</th>
        <th scope="col">image</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $reqData = $bdd->prepare('SELECT * FROM produits');
      $reqData->execute();

      while ($resultat = $reqData->fetch()) {

      ?>
        <tr>
          <th scope="row"><?= $resultat['id'] ?></th>
          <td><?= $resultat['titre'] ?></td>
          <td><?= $resultat['prix'] ?></td>
          <td><img width="80" src="<?= $resultat['image'] ?>"></td>
          <td><a href="ajoutupdate.php?id=<?= $resultat['id'] ?>" class="btn btn-warning btn-sm text-white">Modifier</a></td>
          <td><a  href="liste.php?id=<?= $resultat['id'] ?>"class="btn btn-danger btn-sm text-white">Supprimer </a></td>
        </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</body>

</html>