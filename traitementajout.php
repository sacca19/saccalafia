	<?php
 
 include ('includes/auth.php');

 
 // tu peux laisser le controle de isset($_post['ok']) ou bien
 // tu peux enléver
 
 if (isset($_POST['ok'])) {
   // ICI ON RECUPERE LES VALEURS DES CHAMPS DU FORMULAIRE
	 $article = htmlspecialchars($_POST['article']);
	 $prix = $_POST['prix'];
	 $description = $_POST['descriptions'];
	 $quantite = $_POST['quantite'];
	 $categorie = $_POST['categorie'];
	   
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
 
 
 ?>