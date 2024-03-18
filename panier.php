                     <!DOCTYPE html>
                     <html lang="en">
                     <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" href=" assets/css/Style.css">
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                         <title>Ofashion</title>

                        <style>
                            *{
                                margin: 0;
                                padding: 0;
                                box-sizing: border-box;
                                font-family:'Times New Roman', Times, serif;
                                font-size: 18px;
                            }
                        </style>
                     </head>
                     <body class="bodypanier">
                        <div class="headerpanier">
                            <p class="logo">LOGO</p>
                            <div class="cart"><i class="fa-solid fa-bag-shopping" ></i><p id="count">0</p></div>
                        </div>
                        <div class="containerpanier">
                            <div id="root"></div>
                            <div class="sidebar">
                                <div class="headpanier"><p>Mon Panier</p></div>
                                <div class="cartitem">Votre Panier est 'empty'</div>
                                <div class="foot">
                                <h3>Total</h3>
                                <h3 id="total">0.00 Fcfa</h3>
                                </div>
                            </div>

                        </div>
                        <script src="panier.js"></script>
                     </body>
                     </html> 