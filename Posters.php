<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <?php 
        include ('includes/header.php');
    ?>
    <section class="recherche">
        <div class="searchs">
            <div class="search">
                <form >
           
                    <div>
                        <input class="form" type="text" id="name" placeholder="search products...">
                        <a href="#">
                            <i class="fa-solid fa-magnifying-glass" style="font-size: 17px;background-color: rgb(8, 183, 8); margin-left: 10px; padding: 20px; color: white;"></i>
                        </a>
                        <form class="multi-range-field my-5 pb-5">
                            <h3>FIlter of price</h3>
                            <input id="multi" class="multi-range" type="range" />
                          </form>
                    </div>
                </form>
                <div class="text">
                    <h3>Categories</h3>
                    <p style="font-size: 13px;"><strong>Posters(6)</strong></p>
                    <p style="font-size: 13px;"><strong>Posters(6)</strong></p>
                </div>
                <div style="margin-top: -90px; height: 900px ; border-right: solid 1px rgb(194, 184, 184);">
               
                </div>
            </div>
            <div class="group">
                <div class="Postcards">
                    <a  class="a1"href="index.html">HOME /</a>
                    <a class="a1" href="SHOP.html">Shop </a>
                    <p style="color: rgb(30, 148, 30); margin-left: 50px;font-size: 50px;">Posters</p>
                    <div class="paragraph">
                        <p style="font-size: 12px; margin-left: 50px; color: gray;">Shawing all 12 result</p>
                        <select class="form-select" aria-label="Default select example" style="margin-left: 55px; border: none;">
                            <option selected>Default sorting</option>
                            <option value="1">Default sorting</option>
                            <option value="2">Sort by popularity</option> 
                            <option value="3">Sort by average rating</option>
                            <option value="1">Sort by latest</option>
                            <option value="2">Sort by price low to high</option> 
                            <option value="3">Sort by price high to low</option>
                         
                          </select>
                    </div>
                    <div class="Postercard3">
                        <div>
                            <a href="posterv1.html"><img src="PosteV2.jpg" alt=""></a> 
                            <p style="color: gray; font-size: small; margin-left:20px ;">Posters</p>
                            <a href="" style="margin-left:20px ;font-size: 14px;">Poster v1</a>
                            <p style="color:rgb(60, 57, 57); margin-left:20px ;font-size: 12px;">$23.99</p>
                        
                        </div>
                        <div>
                            <a href="posterv2.html"><img src="PosteV1.jpg" alt=""></a> 
                            <p style="color:gray; font-size: small;margin-left:20px ;">Posters</p>
                            <a href=""style="margin-left:20px ;font-size: 14px;">Poster v2</a>
                            <p style="color:rgb(60, 57, 57);margin-left:20px ;font-size: 12px;">$17.99</p>
                        </div>
                        <div>
                            <a href="posterv3.html"><img src="PosteV3.jpg" alt=""></a> 
                            <p style="color: gray; font-size: small;margin-left:20px ;">Posters</p>
                            <a href=""style="margin-left:20px ;font-size: 14px;">Poster v3</a>
                            <p style="color:rgb(60, 57, 57);margin-left:20px ;font-size: 12px;">$14.99</p>
                        </div>
                    </div>
                    <div class="Postercard4">
                        <div>
                            <a href="posterv4.html"><img src="img/Banner.jpg" alt=""></a> 
                            <p style="color: gray; font-size: small; margin-left:20px ;">Posters</p>
                            <a href="" style="margin-left:20px ;font-size: 14px;">Poster v4</a>
                            <p style="color:rgb(60, 57, 57); margin-left:20px ;font-size: 12px;">$23.99</p>
                        
                        </div>
                        <div>
                            <a href="posterv5.html"><img src="PosteV2.jpg" alt=""></a> 
                            <p style="color:gray; font-size: small;margin-left:20px ;">Posters</p>
                            <a href=""style="margin-left:20px ;font-size: 14px;">Poster v5</a>
                            <p style="color:rgb(60, 57, 57);margin-left:20px ;font-size: 12px;">$17.99</p>
                        </div>
                        <div>
                            <a href="posterv6.html"><img src="img/imag7.png" alt=""></a> 
                            <p style="color: gray; font-size: small;margin-left:20px ;">Posters</p>
                            <a href=""style="margin-left:20px ;font-size: 14px;">Poster v6</a>
                            <p style="color:rgb(60, 57, 57);margin-left:20px ;font-size: 12px;">$14.99</p>
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
