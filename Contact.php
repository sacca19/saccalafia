<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<header class="contact_header">
<nav class="navigation">
    <a  class="logo" href="inscription.php"><strong>CONNEXION </strong></a>  
    <a class="logo" href="Connexion.php"><strong>DECONNEXION</strong></a>
    <?php
        include('includes/header.php');                         
      ?>
    
</nav>

        <div class="container">
            <h1 class="product-title3">CONTACTEZ</h1>
            <h1 class="product-title2"> NOUS</h1>
                  
        </div>
    </header>
    <section  class="formulaire3">
        <div class="contact_forms">
            <div  class="form-control">
                <h1 style="margin-left: 20px;">Entrer en contact</h1>
                <form  class="formulaire_contact">
           
                    <div>
                        <input class="form3" type="text" id="name" placeholder="Fullname">
                    </div>
                  <div>
                    <input class="form3" type="text" id="name" placeholder="Phonename">
                  </div>
                   <div>
                    <input class="form3" type="text" id="name" placeholder="Email">
                   </div>
                  
                   
                </form>
                <form>
                    <textarea id="story" name="story" rows="5" cols="33"  values= "Message">
                    </textarea>
                    <div class="btn-btn"><input  class="button"type="submit" value="Envoyer"></div>
                     
                </form>
               
             </div>
            <div>
            
            <h1>Parlez-nous</h1>
            <div class="email"> 
                        <div class="EMAIL">
                        <i class="fa-regular fa-envelope" style="font-size: 20px; padding: 7px; width: 20px;height:20px;padding-top: -20px "></i>
                    </div>
                    <div class="lot1">
                        <h5>EMAIL</h5>
                    <p class="contactp">something@Omnheath.com</p>
                    </div>
            </div>
            <div class="email"> 
                        <div class="EMAIL">
                        <i class="fa-solid fa-phone-volume" style="font-size: 20px; padding: 7px; width: 20px;height:20px;padding-top: -20px "></i>
                    </div>
                    <div class="lot1">
                        <h5>NUMERO_TELEPHONE</h5>
                        <p class="contactp">52 65 87 12</p>
                    </div>
            </div>
            <div class="email"> 
                <div class="EMAIL">
                <i class="fa-solid fa-location-dot" style="font-size: 20px; padding: 7px; width: 20px;height:20px;padding-top: -20px "></i>
            </div>
            <div class="lot1">
                <h5>ADRESSE</h5>
                <p class="contactp">BENIN</p>
                <P>Parakou</P>
            </div>
    </div>
            <div class="groupe1">
                
                    <p class="Follow">Follow Us</p>
                
                <div class="icons">
                    <div  class="icon1"> 
                        <i class="fa-brands fa-facebook-f" style="font-size: 20px;"></i>
                    </div>
                   <div class="icon2">
                    <i class="fa-brands fa-twitter"style="font-size: 20px;"></i>
                   </div>
                    <div class="icon3">
                        <i class="fa-brands fa-invision"style="font-size: 20px;"></i>
                    </div>
                    <div class="icon4">
                        <i class="fa-solid fa-play"style="font-size: 20px;"></i>
                    </div>
                    
                </div>
            </div>
           
           </div>
        </div>
        
    </section> 
    <?php 
        include ('includes/footer.php');
    ?>
    </body>
    </html>