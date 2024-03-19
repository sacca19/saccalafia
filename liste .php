<?php
    include('includes/auth.php')
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
      <td><a href="ajoutupdate.php?id=<?= $resultat['id'] ?>"> Modifier</a></td>
    </tr>
    <?php
        }
    ?>
  </tbody>
</table>
</body>
</html>