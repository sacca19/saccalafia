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
        <nav class="contact_navigation">
            <a  class="logo" href="index.php"><strong>EARTH STORE</strong></a>
                <div class="menu">
                <a href="index.php">HOME</a>
                <a href="ABOUT.php">ABOUT</a>
                <a href="SHOP.php">SHOP</a>
                <a href="Contact.php">CONTACT</a>
                <a href="#">
                    <i class="fa-solid fa-bag-shopping" style="font-size: 25px;margin-top: -10px;"></i>
                </a>
                <a href="#">
                    <i class="fa-solid fa-user" style="font-size: 25px;margin-top: -10px;"></i>
                </a>
                
            </div>
           
        </nav>
        <div class="container">
            <h1 class="product-title">CONTACT US</h1>
                  
        </div>
    </header>
    <section  class="formulaire3">
        <div class="contact_forms">
            <div  class="form-control">
                <h2>Get In Touch</h2>
                <form >
           
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
                    <div class="btn-btn"><input  class="button"type="submit" value="SEND NOW"></div>
                     
                </form>
               
             </div>
            <div>
            
            <h1>Talc To Us</h1>
            <div class="email"> 
                        <div class="EMAIL">
                        <i class="fa-regular fa-envelope" style="font-size: 20px; padding: 7px; width: 20px;height:20px;padding-top: -20px "></i>
                    </div>
                    <div class="lot1">
                        <h5>EMAIL</h5>
                    <p>something@tyler.com</p>
                    </div>
            </div>
            <div class="email"> 
                        <div class="EMAIL">
                        <i class="fa-solid fa-phone-volume" style="font-size: 20px; padding: 7px; width: 20px;height:20px;padding-top: -20px "></i>
                    </div>
                    <div class="lot1">
                        <h5>PHONE_NUMBER</h5>
                        <p>202-555-0188</p>
                    </div>
            </div>
            <div class="email"> 
                <div class="EMAIL">
                <i class="fa-solid fa-location-dot" style="font-size: 20px; padding: 7px; width: 20px;height:20px;padding-top: -20px "></i>
            </div>
            <div class="lot1">
                <h5>ADRESS</h5>
                <p>2727_Ocean_road,</p>
                <P>malibu,CA,90264</P>
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
        </div>
          
    </body>