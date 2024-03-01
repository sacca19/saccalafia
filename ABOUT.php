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
<header class="about_header">
        <nav class="about_navigation">
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
            <h1 class="product-title">WHO ARE WE?</h1>
        </div>
    </header>
    <section class="banner">
        <div class="about_contenu">
                <img class="image_about" src="assets/img/img1.png" alt="">
            <div class="mision">
                <h1>OUR MISSION</h1>
                <p class="about_paragraph"> Hello, my name  is Tyler Moore and with the help of many <br> people I made this template. I made it so it is super easy<br> to update and so that it flows perfectly with my tutorials.<br>Lots of love and hundreds of hours went into making it. I <br>hope you love it as much as I do. </p><br>
                <p class="about_paragraph"> wish you the best of luck with your business, enjoy the<br> adventure.</p>

            </div>
            
        </div>
    </section>
    <section class="section3">
        <div>
            
            <h3>Give the Gift of a Post card</h3>
            <pre>Give the gift of a lasting memory with a postcard</pre>
            <input class="btn_about" type="submit" value="PURCHASE A POST CARD">
            
        </div>
     </section>
 <br><br><br>
 <footer>
 <?php 
        include ('includes/footer.php');
    ?>
</body>
</html>