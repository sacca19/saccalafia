	<?php
 
 include ('includes/auth.php');

 
 // tu peux laisser le controle de isset($_post['ok']) ou bien
 // tu peux enléver
 
 /*if (isset($_POST['ok'])) {
   // ICI ON RECUPERE LES VALEURS DES CHAMPS DU FORMULAIRE
	 $titre = htmlspecialchars($_POST['titre']);
	 $contenu = $_POST['contenu'];
	 $date_publication = $_POST['date_publication'];
	   
   if(isset($article, $prix, $description, $quantite, $categorie,) AND !empty($_POST['article'])){
 

	 $reqData = $bdd->prepare('SELECT count(*) as count FROM produits WHERE article = ?');
	 $reqData->execute(array($article));
	 $resultat = $reqData->fetch();
 
	 if ($resultat['count'] > 0) {
		 echo  'article existe déjà !'; 
	   }else{
		 // SI l'EMAIL n'exite pas dans la base de données on fait un contrôle 
		 // pour savoir si le mot de passe fait 8 caractères
 
		 if (strlen($quantite) >= 1) {
				 // si c'est bon, on insert les informations du formulaire dans la base de données
				 $req = $bdd->prepare("INSERT INTO produits(article, prix, descriptions, quantite, categorie) VALUES (?,?,?,?,?)");
				 $req->execute(array($article, $prix,$description,$quantite,$categorie));
				 
				 echo 'Article ajoutée';
		   }else{
		   echo 'echec !';
		 }
	   }
	 }else {
	  echo 'Veillez remplir tous les champs !';
	 }
 }
 $sql= "SELECT id, titre from produits ORDER BY date_publication DESC";
 $bdd = new PDO ("mysql:host=$servername;dbname=connexion",$username,$password);
 $request = $bd->query($sql);
	while($row = $request->fetch())
 if(isset($_POST["titre"], $_POST["contenu"])&& !empty($_POST["titre"]) &&!empty($_POST["contenu"]));
 $titre = htmlspecialchars($_POST['titre']);
 $contenu = htmlspecialchars($_POST['contenu']);
 $now = date("Y-m-d-H:i:s");

 $sql="INSERT INTO produits(titre, contenu,date_publication) VALUES (:titre,:contenu,:date_publication)";
 $request = $bdd->prepare($sql);
 $_request ->bindParam(':titre',$titre);
 $_request ->bindParam(':contenu',$contenu);
 $_request ->bindParam(':date_publication',$now);
 $req->execute();
 header("Location:Ajout.php")*/
 // Données du produit à ajouter
 $titre = $_POST['titre'] ;
 $contenu = $_POST['contenu'];
 $date_publication = $_POST['date_publication'];
 
 // Requête SQL pour insérer un produit
 $requete = "INSERT INTO produits (titre, contenu, date_publication) VALUES (?, ?, ?)";

 // Préparation de la requête
 $statement = $bdd->prepare($requete);

 // Exécution de la requête avec les valeurs du produit
 $statement->execute([$titre, $contenu, $date_publication]);

 echo "Le produit a été ajouté avec succès à la base de données.";

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
// Fermeture de la connexion à la base de données
$bdd = null;
 ?>