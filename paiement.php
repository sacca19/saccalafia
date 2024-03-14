<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Document</title>
    </head>
    <style>
        table {
            width: 550px;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>

<header class="shop_header">
        <?php
        include('includes/auth.php');

        include('includes/header.php');
        ?>
    </header>
<body>
   
    <section class="sectionp">
    <h4>PAIEMENT</h4> 
    <div class="entete2">
    <label class="checkbox">
     <input type="checkbox" cols="1">
     <option >"Vous avez un coupon ? Cliquez ici pour entrer votre code."</option>
    </label>
    
    </div>
        <?php
        $reqData = $bdd->prepare('SELECT * FROM dasbord');
        $reqData->execute();

        while ($resultat = $reqData->fetch()) {
        ?>
        <div style="display: flex; ">
            <div>
            <h4>Coordonnées de facturation</h4>
            <div style="display: flex; gap:15px;">
                    <div>
                        <label  type="nom">nom*</label>
                        <br>
                        <input style="height: 70px; width: 450px;" type="text" name="nom" value="">
                    </div>
                    <div>
                        <label for="prenom">Prénom*</label>
                        <br>
                        <input style="height: 70px; width: 450px;" type="text" name="prenom" value="">
                    </div>
                </div>
                <div>
                    <label for="e_mail">Phonenumber*</label>
                    <br>
                    <input style="height: 70px; width: 920px;" type="tel" id="phonenumber" name="phonenumber" value="">
                </div>
                <div>
                    <label for="e_mail">e_mail*</label>
                    <br>
                    <input style="height: 70px; width: 920px;" type="email" id="email" name="email" value="">
                </div>
                <div>
                    <label for="ville">Ville*</label>
                    <br>
                    <input style="height: 70px; width: 920px;" type="text" id="ville" name="ville" value="">
                </div>
                <div>
                    <label for="quartier">Quartier*</label>
                    <br>
                    <input style="height: 70px; width: 920px;" type="text" id="quartier" name="quartier" value="">
                </div>
            </div>
            <div style="margin-left: 50px;">
                <h4>Mon Panier</h4>
                <table>
                    <thead>
                        <tr>
                            <th>Produit</th>
                            <th>Prix</th>
                            <th>Quantité</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody id="cart">
                        <!-- Les éléments du panier seront ajoutés ici via JavaScript -->
                    </tbody>
                </table>
                <script>
                    // Exemple de produits
                    const products = [
                        <?php
                            $reqData = $bdd->prepare('SELECT * FROM produits');
                            $reqData->execute();
                            
                            while($resultat = $reqData->fetch()){
                                ?>
                        <div class="produit">
                            <a href="produit.php?id=<?= $resultat['id']?>"><img src="<?= $resultat['image']?>" alt=""></a> 
                            <p><?= $resultat['contenu']?></p>
                            <a href="produit.php?id=<?= $resultat['id']?>"><?= $resultat['titre']?></a>
                            <span><?= $resultat['prix']?></span>
                            
                        </div>
                        <?php
                        }
                    ?>
                    ];

                    // Fonction pour afficher le panier
                    function displayCart() {
                        const cartElement = document.getElementById('cart');
                        let total = 0;
                        cartElement.innerHTML = ''; // Effacer le contenu actuel du panier
                        products.forEach(product => {
                            const quantity = Math.floor(Math.random() * 5) + 1; // Quantité aléatoire pour chaque produit
                            const subtotal = quantity * product.price;
                            total += subtotal;
                            cartElement.innerHTML += `
                    <tr>
                        <td>${product.name}</td>
                        <td>${product.price} €</td>
                        <td>${quantity}</td>
                        <td>${subtotal} €</td>
                    </tr>
                `;
                        });
                        // Ajouter la ligne du total
                        cartElement.innerHTML += `
                <tr>
                    <td colspan="3">Total</td>
                    <td>${total} €</td>
                </tr>
            `;
                    }

                    // Appel initial pour afficher le panier
                    displayCart();
                </script>
              </div>
              </div>
        <?php
        }
        ?>
    </div>
    </section>
</body>
<nav class="footer">
    <?php 
        include ('includes/footer.php');
    ?>
</nav>
</html>