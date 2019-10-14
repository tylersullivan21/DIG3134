<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

   
<div class="nav-wrapper">
            <nav class="navbar">
  
                   
                   <ul class="nav-links">
                    <li class="nav-item"><a href="index.html">Home</a></li>
                    <li class="nav-item"><a href="inventory.html">Inventory</a></li>
                    <li class="nav-item"><a href="contact.html">Contact</a></li>
                </ul>
                <?php

                        if (isset($_COOKIE['username_cookie']) &&  isset($_COOKIE['password_cookie']) && $_COOKIE['login_state'] === 'true') {
                            echo 'You are already signed in hehehe';

                            }

                        else{
                             echo ' <form class="input-form" action="validate-user.php" method="post">
                
                             <div class="form-field">
                                 <label for="username">Username</label>
                                 <input type="text" name="username" id="shoe-brand" placeholder="Username" required />
                               </div>
             
                               <div class="form-field">
                                 <label for="password">Password</label>
                                 <input type="password" name="password" id="shoe-brand" placeholder="Password" required />
                               </div>
                               <div class="form-field">
                                 <label for="submit"></label>
                                 <input type="submit" value="Submit" name="submit" />
                               </div>
             
                            
                              </nav>
             
                        
             
                          </form>
                          <form action="create_form.php" class="create-account-content">
                          <p>Dont have an account?</p>
                          <label for="submit"></label>
                          <input type="submit" value="Create Account" name="submit" />
                 </form >';
                            }
  ?>
               
                </div>

                        
                 <div class="wrapper">
        <main class="main-content">

            <div class="hero-img">
<img src="images/clothes-crop.png" alt="">
<figcaption>Photo by rawpixel.com from Pexels</figcaption>
            </div>

            <section class="module1">
                <h2 class="mod-header"> Welcome to <span>SullyShop.com!</span>  <br></h2>
                <p>Hey there and welcome to Sully Shop! This store was formed by Tyler Sullivan in the fall of 2019 and carries things from shoes and tech all the way to clothes! Please scroll down and feel free to take a look at some of our always expanding inventory!</p>

            </section>

            <section class="icons">
                <ul class="icons-list">
                    <li class="left-list-item">
                         <div class="icon-img"><img src="images/air-jordan-fashion-feet-2065695.jpg" alt="">
                            <figcaption>Photo by AJ Nakasone from Pexels</figcaption>
                        </div>
                    <div class="icon-text">
                        <h1 class="icon-heading"><a href="inventory.html">Shop Shoes</a></h1>
                             <div class="icon-description">Search our best selection of shoes</div>
                    </div>
                    </li>

                    <li class="center-list-item">
                            <div class="icon-img"><img src="images/black-and-white-cameras-classic-1422220 (1).jpg" alt="">
                                <figcaption>Photo by Free Creative Stuff from Pexels</figcaption>
                            </div>
                       <div class="icon-text">
                        <h1 class="icon-heading"><a href="inventory.html">Shop Cameras</a></h1>
                                <div class="icon-description">Check out our Cameras</div>
                       </div>
                       </li>

                       <li class="right-list-item">
                            <div class="icon-img"><img src="images/apparel-attire-blur-994517.jpg" alt="">
                                <figcaption>Photo by Artem Beliaikin from Pexels</figcaption>
                            </div>
                       <div class="icon-text">
                        <h1 class="icon-heading"><a href="inventory.html">Shop Clothes</a></h1>
                                <div class="icon-description">Check out our clothes</div>
                       </div>
                       </li>
                </ul>

           

           

        </main>


        <footer class="footer">
            <p class="footer-text">Copyright of Tyler Sullivan 2019</p>
        </footer>





    </div>

    <script src="js/test.js"></script>
</body>
</html>