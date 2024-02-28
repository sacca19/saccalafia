<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/stylepv1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Document</title>
</head>
<body>
    <?php 
        include ('includes/header.php');
    ?>
        <section class="section1">
            <div class="contenu1">
            <img class="image" src="assets/img/PosteV1.jpg" alt="">
            <div>
                <div class="menu1">
                <a  class="a1"href="index.php">HOME /</a>
                <a class="a1" href="Posters.php">Posters /</a>
                <div style="margin-top: -15px;">
                    <p>Poster V2</p>
                </div>
                </div>
                
                <a class="a2"href="Posters.php">Poster</a>
                <p style= "font-size: xx-large; margin-left:20px ;">Poster V2</p>
                <p style="margin-left:20px ;font-size: 25px;">$17.99</p>
                <p style="color:rgb(60, 57, 57);">Sending a travel postcard to a loved one is truly a thoughtful gesture<br> that can bring joy and inspiration. Inspiration can come in the form of<br> taking a break from the normal routine, while being reminded of the<br> more adventurous and exotic destinations around the world.</p>
                <div class="card">
                    <div class="card">
                        <div  class="realisation">
                        <button id="diminuer">-</button>
                        <p  class="nombre"id="valeur">0</p>
                        <button id="augmenter">+</button>                    
                       <input class="btn" type="submit" value="ADD TO CARD">
                </div>
            <script>
                    // Récupérer les éléments HTML
                    var valeurElement = document.getElementById('valeur');
                    var augmenterButton = document.getElementById('augmenter');
                    var diminuerButton = document.getElementById('diminuer');
    
                    // Définir la valeur initiale
                    var valeur = 0;
    
                    // Mettre à jour la valeur et afficher
                    function mettreAJourValeur() {
                    valeurElement.textContent = valeur;
                    }
    
                    // Augmenter la valeur lors du clic sur le bouton "Augmenter"
                    augmenterButton.addEventListener('click', function() {
                    valeur++;
                     mettreAJourValeur();
                    });
    
                    // Diminuer la valeur lors du clic sur le bouton "Diminuer"
                    diminuerButton.addEventListener('click', function() {
                        if (valeur > 0) {
                    valeur--;
                    mettreAJourValeur();
                    }
                    });
            </script>
                    <p>Categories</p>
                    <div class="lien"><a class="a2"href="">Posters</a></div>
                    
                </div>
                </div>
            </div>
        </div>
        </section>
        <section class="section2">
            <div class=" lien1">
                <a class="a3" href="posterv2.php">Description</a>
                <a class="a3" href="Reviews.php">Reviews(0)</a>
            </div>
            <div class="lot1">
                <p>Paper Type: Matte</p>
            <ul>
                <li>17.5 pt thickness / 120 lb weight / 324 GSM</li>
                <li>Light white, uncoated matte finish with an eggshell texture</li>
                <li>Paper is easy to write on and won’t smudge</li>
                <li>Made and printed in the USA</li>
            </ul>
            </div>
            <div style="margin-top: 50px;">
                <p>Paper Type: Semi-Gloss</p>
                <ul>
                    <li>12.5 pt thickness / 110 lb weight</li>
                    <li>Bright white, semi-gloss finish</li>
                    <li>50% recycled content</li>
                    <li>FSC certified</li>
                    <li>Paper imported from Italy; printed in the USA</li>
                </ul>
                <p style="font-size: 17px; margin-top: 20px;"><strong>Note</strong> :There may be a slight difference in actual color, due to the colors of display.</p>
            </div>
        </section>
        <section class="section3">
            <h1 style="margin-left: 18px; color: black; font-size: 30px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> Related products</h1>
            <div class="Postercard1">
                <div>
                    <a href="posterv6.php"><img src="assets/img/PosteV2.jpg" alt=""></a>                     
                    <p style="color: gray; font-size:large; margin-left:20px ;">Poster</p>
                    <a href="" style="margin-left:20px ; color: black;font-size: 15px;">Poster v6</a>
                    <p style="color:rgb(60, 57, 57); margin-left:20px ;font-size: 16px;">$14.99</p>
                
                </div>
                <div>
                    <a href="posterv1.php"><img src="assets/img/PosteV2.jpg" alt=""></a>                     
                    <p style="color:gray; font-size:large;margin-left:20px ;">Poster</p>
                    <a href=""style="margin-left:20px ; color: black;font-size: 15px;">Poster v1</a>
                    <p style="color:rgb(60, 57, 57);margin-left:20px ;font-size: 16px;">$23.99</p>
                </div>
                <div>
                    <a href="posterv1.php"><img src="assets/img/PosteV1.jpg" alt=""></a>                    
                    <p style="color: gray; font-size:large;margin-left:20px ;">Poster</p>
                    <a href=""style="margin-left:20px ;color: black; font-size: 15px;">Poster v2</a>
                    <p style="color:rgb(60, 57, 57);margin-left:20px ;font-size: 16px;">$17.99</p>
                </div>
            </div>

        </section>
        <?php 
        include ('includes/footer.php');
    ?>
        </body>
        </html>
