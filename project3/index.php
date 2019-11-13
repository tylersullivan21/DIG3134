<?php
session_start();
/*echo session_id();
 echo "page is loaded :: ".isset($_SESSION);
 print_r($_SESSION);
echo 'result:: '.$_SESSION['loggedin'];*/
include 'create_table.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
   
</head>
<body>
<!--
<nav>
    <ul class="nav d-flex justify-content-center align-items-center">
     <li class="nav-item">
       <a class="nav-link active" href="index.php">Home</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="inventory.html">Inventory</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="contact.html">Contact</a>
     </li>
   </ul>
   </nav>
-->

<?php
//USING UNIQUE PHP ELEMENT HERE TO GET THE TIME ZONE AND STORE INTO VAR so it can be used
date_default_timezone_set('America/New_York');
$date = date('m/d/Y h:i:s a', time());

$today = date("D"); 


/***********************************************/
//LOGGED IN VERSION HERE!!!!!!!!!!!!!//
/********************************************* */
if (isset($_SESSION['loggedin']) &&  $_SESSION['loggedin'] === 'tyler_true') {
  
    echo '
    <nav>
    <ul class="nav d-flex justify-content-center align-items-center">
     <li class="nav-item">
       <a class="nav-link active" href="index.php">Home</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="inventory.html">Inventory</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="contact.html">Contact</a>
     </li>
     <button style="padding: 4px;" class="grid-area:logout;" onclick="logout()" name="logout">Logout </button>
   </ul>

   </nav>
    
    <link rel="stylesheet" href="css/logged-in.css">
    <p class="signed-in-header"> Use code SULLY for free shipping and 10% off your next purchase. This deal is valid as of ' .$date .'   </p>
   
   <div class="hero-img">
   <img src="images/clothes-crop.png" alt="">
   <figcaption>Photo by rawpixel.com from Pexels</figcaption>
</div>
   <section class="module1">

   <h2 class="mod-header"> Hey there, Welcome back! <br></h2>
   <h4 style="text-align:center; line-height: 3em;" >Check out these exclusive deals for being signed in!</h4>
   <ul style="line-height:2em; padding: 2px 0;text-align:center;font-size: 18px">
      <li class="markdown"> Cardigan sweater now <span style="color:red";> $31.50.</span> Was $34.99!  </li>
      <li class="markdown" > Air Jordan 1 now <span style="color:red";> $269.99.</span> Was $299.99!</li>
      <li class="markdown"> Cannon DSLR now <span style="color:red";> $810.00.</span> Was $899.99!</li>

   </ul>

</section>

<main class="main-content">
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
                            <div class="icon-img"><img src="images/kodak.jpg" alt="">
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
    ';

    }
/***********************************************/
//LOGGED OUT VERSION HERE!!!!!!!!!!!!!//
/********************************************* */
else {
     echo '
     <nav class="navbar">
    <ul class="nav-links d-flex justify-content-center align-items-center">
     <li class="nav-item">
       <a class="nav-link active" href="index.php">Home</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="inventory.html">Inventory</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="contact.html">Contact</a>
     </li>
   </ul>
   <form class="input-form" action="validate-user.php" method="post">

   <div class="username_input" class="form-field">
       <label for="username">Username</label>
       <input type="text" name="username" id="shoe-brand" placeholder="Username" required />
     </div>

     <div class="password_input" class="form-field">
       <label for="password">Password</label>
       <input type="password" name="password" id="shoe-brand" placeholder="Password" required />
     </div>
     <div class="submit-btn" class="form-field">
       <label for="submit"></label>
       <input style="padding: 4px; width: 65px;" class="submit-button" type="submit" value="Submit" name="submit" />
     </div>
</form>
   </nav>
     <link rel="stylesheet" href="css/input-form.css?v=1.0">
  
  <form action="create_form.php" class="create-account-content">
  
  <p class="tagline">Need an account?</p>

  <div class="create">
  <label for="submit"></label>
  <input class="create-btn" type="submit" value="Create Account" name="submit" />
  </div>
</form >

<div class="hero-img">
<img src="images/clothes-crop.png" alt="">
<figcaption>Photo by rawpixel.com from Pexels</figcaption>
            </div>

            <section class="module1">
                <h2 class="mod-header"> Welcome to <span>SullyShop.com!</span>  <br></h2>
                <p>Hey there and welcome to Sully Shop! This store was formed by Tyler Sullivan in the fall of 2019 and carries things from shoes and tech all the way to clothes! Please scroll down and feel free to take a look at some of our always expanding inventory!</p>
            </section>
            <main class="main-content">
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
';
    }
?>

   <!--
<div class="nav-wrapper">
            <nav class="navbar">
  
                   
                   <ul class="nav-links">
                    <li class="nav-item"><a href="index.html">Home</a></li>
                    <li class="nav-item"><a href="inventory.html">Inventory</a></li>
                    <li class="nav-item"><a href="contact.html">Contact</a></li>
                </ul>       
  </nav>         
 </div>
 -->    
                 <div class="wrapper">
  
        <footer class="footer">
            <p class="footer-text">Copyright of Tyler Sullivan 2019</p>
        </footer>
    </div>
    
    <script   src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="js/test.js"></script>


    <script type="text/javascript"> 
function logout() { 
  console.log("logout button was pressed onclick function was triggered");

   window.location = "logout.php";
    return true; 
} 
</script>

    
</body>
</html>