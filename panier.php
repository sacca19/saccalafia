<?php
session_start();

// Ajouter un produit au panier
/*if(isset($_POST['add_to_cart'])) {
    addToCart($_POST['produits_id']);
}

function addToCart($produitId) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    
    // Votre logique d'ajout au panier ici
    
    // Exemple simple pour ajouter un produit
    if (!isset($_SESSION['cart'][$produitId])) {
        $_SESSION['cart'][$produitId] = 1;
    } else {
        $_SESSION['cart'][$produitId]++;
    }
}
?>
 */
                                    