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
            <img class="image" src="assets/img/imag.png" alt="">
            <div>
                <div class="menu1">
                <a  class="a1"href="index.php">HOME /</a>
                <a class="a1" href="Postcards.php">Postcard /</a>
                <div style="margin-top: -15px;">
                    <p>Postercardv1</p>
                </div>
                </div>
                <a class="a2"href="Postcards.php">Postcards</a>
                <p style= "font-size: xx-large; margin-left:20px ;">Postcards V1</p>
                <p style="margin-left:20px ;font-size: 25px;">$23.99</p>
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

                <div class="relie">
                    <p>Categories</p>
                    <div class="lien"><a class="a2"href="">Postcards</a></div>
                    
                </div>
                </div>
            </div>
        </div>
        </section>
        <section class="section2">
            <div class=" lien1">
                <a class="a3" href="Postcardv1.php">Description</a>
                <a class="a3" href="Reviews.php">Reviews(0)</a>
            </div>
            <div class="card1">
                <p><strong>Be the first to review “Postcard V1”</strong></p>
                <p>Your email address will not be published. Required fields are marked *</p>
                <p>Your rating *</p>
                <form>
                    <label for="story">Your review *</label>
                    <textarea id="story" name="story" rows="6" cols="160"  values= "">
                    </textarea>  
                    <form >
                      <div class="formulaire">
                           <div class="texte">
                             <label for="name">Name *</label><br>
                             <input class="form" type="text" id="name">
                           </div>
                           <div class="text">
                             <label for="e-mail">e-mail *</label><br>
                             <input class="form" type="text" id="e-mail">
                            </div>
                      </div>
                      <label class="checkbox">
                      <input type="checkbox" cols="1">
                      <option >Save my name, email, and website in this browser for the next time I comment.</option>
                      </label>
                      <button class="button">Submit</button>
                    </form> 
                </form>
                    
                
        
            </div>
            
        </section>
        <section class="section3">
            <h1 style="margin-left: 18px; color: black; font-size: 30px; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif"> Related products</h1>
            <div class="Postercard1">
                <div>
                    <img class="img" src="assets/img/imag.png" alt="">
                    <p style="color: gray; font-size:large; margin-left:20px ;">Postcards</p>
                    <a href="" style="margin-left:20px ; color: black;font-size: 15px;">Postcard v1</a>
                    <p style="color:rgb(60, 57, 57); margin-left:20px ;font-size: 16px;">$23.99</p>
                
                </div>
                <div>
                    <img class="img" src="assets/img/img3.png" alt="">
                    <p style="color:gray; font-size:large;margin-left:20px ;">Postcards</p>
                    <a href=""style="margin-left:20px ; color: black;font-size: 15px;">Postcard v2</a>
                    <p style="color:rgb(60, 57, 57);margin-left:20px ;font-size: 16px;">$17.99</p>
                </div>
                <div>
                    <img class="img"src="assets/img/imag3.png" alt="">
                    <p style="color: gray; font-size:large;margin-left:20px ;">Postcards</p>
                    <a href=""style="margin-left:20px ;color: black; font-size: 15px;">Postcard v3</a>
                    <p style="color:rgb(60, 57, 57);margin-left:20px ;font-size: 16px;">$14.99</p>
                </div>
            </div>

        </section>
        <?php 
        include ('includes/footer.php');
    ?>
        </body>
        </html>
