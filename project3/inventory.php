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
// USER LOGGED IN, ADD MARKUP FOR UNIQUE  VIEW
if (isset($_SESSION['loggedin']) &&  $_SESSION['loggedin'] === 'tyler_true') {
   echo 'if cond met:: logged in ='.$_SESSION['loggedin'];
    echo '
    <nav>
    <ul class="nav d-flex justify-content-center align-items-center">
     <li class="nav-item">
       <a class="nav-link active" href="index.php">Home</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="inventory.php">Inventory</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="contact.html">Contact</a>
     </li>
     <button style="padding: 4px;" class="grid-area:logout;" onclick="logout()" name="logout">Logout </button>
   </ul>

   </nav>
    
    <link rel="stylesheet" href="css/logged-in.css">
    <p class="signed-in-header">'.$_COOKIE['username_cookie'] .', Use code SULLY for free shipping and 10% off your next purchase. This deal is valid as of ' .$date .'   </p>
    <main class="main-content">
<h1>THE SIGNED IN VIEWWWWWWW</h1>
            <div class="hero-img">
<img src="images/inventory-header.png" alt="">

            </div>
<section class="shoe-section">
            <h1 class="shoe-head">
                Shoes
            </h1>
            <!--CARD 1 BEGINS HERE-->
            <div class="shoe-cards">
                <div class="card1">
                    <img src="images/air-jordan-fashion-feet-2065695.jpg" alt="">
                    <figcaption>Photo by AJ Nakasone from Pexels</figcaption>
                    <div class="card1-text">
                        <h5>Air jordan 1</h5>
                        <p>This shoe is an ageless wonder</p>
                        <span class="price">$299.99</span>
                    </div>
                </div>
                <!--CARD 1 ENDS HERE-->
                <div class="card2">
                    <img src="images/air-jordan-fashion-feet-2065695.jpg" alt="">
                    <figcaption>Photo by AJ Nakasone from Pexels</figcaption>
                    <div class="card2-text">
                        <h5>Air jordan 1</h5>
                        <p>This shoe is an ageless wonder</p>
                        <span class="price">$299.99</span>
                    </div>
                </div>

                <div class="card3">
                    <img src="images/air-jordan-fashion-feet-2065695.jpg" alt="">
                    <figcaption>Photo by AJ Nakasone from Pexels</figcaption>
                    <div class="card3-text">
                        <h5>Air jordan 1</h5>
                        <p>This shoe is an ageless wonder</p>
                        <span class="price">$299.99</span>
                    </div>
                </div>

                <div class="card4">
                    <img src="images/air-jordan-fashion-feet-2065695.jpg" alt="">
                    <figcaption>Photo by AJ Nakasone from Pexels</figcaption>
                    <div class="card4-text">
                        <h5>Air jordan 1</h5>
                        <p>This shoe is an ageless wonder</p>
                        <span class="price">$299.99</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="camera-section">
            <h1 class="camera-head">Cameras</h1>
             <!--CARD 1 BEGINS HERE-->
            <div class="camera-cards">
                <div class="card1">
                    <img src="images/analogue-aperture-black-and-white-1203819.jpg" alt="">
                    <figcaption>Photo by Alex Andrews from Pexels</figcaption>
                    <div class="card1-text">
                        <h5>Cannon DSLR</h5>
                        <p>This camera is one of the best DSLRs on the market</p>
                        <span class="price">$899.99</span>
                    </div>
                </div>
                <!--CARD 1 ENDS HERE-->

                    <!--CARD 2 BEGINS HERE-->
          
                <div class="card2">
                        <img src="images/analogue-aperture-black-and-white-1203819.jpg" alt="">
                        <figcaption>Photo by Alex Andrews from Pexels</figcaption>
                    <div class="card2-text">
                        <h5>Cannon DSLR</h5>
                        <p>This camera is one of the best DSLRs on the market</p>
                        <span class="price">$899.99</span>
                 
                </div>
                </div>
                <!--CARD 2 ENDS HERE-->

                   <!--CARD 3 BEGINS HERE-->
          
                   <div class="card3">
                        <img src="images/analogue-aperture-black-and-white-1203819.jpg" alt="">
                        <figcaption>Photo by Alex Andrews from Pexels</figcaption>
                    <div class="card3-text">
                        <h5>Cannon DSLR</h5>
                        <p>This camera is one of the best DSLRs on the market</p>
                        <span class="price">$899.99</span>
                 
                </div>
                </div>
                <!--CARD 3 ENDS HERE-->

                  <!--CARD 4 BEGINS HERE-->
          
                  <div class="card4">
                        <img src="images/analogue-aperture-black-and-white-1203819.jpg" alt="">
                        <figcaption>Photo by Alex Andrews from Pexels</figcaption>
                    <div class="card4-text">
                        <h5>Cannon DSLR</h5>
                        <p>This camera is one of the best DSLRs on the market</p>
                        <span class="price">$899.99</span>
                 
                </div>
                </div>
                <!--CARD 4 ENDS HERE-->

            </div>

        </section>
<section class="clothes-section">
            <h1 class="clothes-head">Clothes</h1>
            <!--CARD 1 BEGINS HERE-->
            <div class="clothes-cards">
                <div class="card1">
                    <img src="images/cardigan-clothes-sweater-45982.jpg" alt="">
                    <figcaption>Photo by Dom J from Pexels</figcaption>
                    <div class="card-body">
                        <h5>Cardigan Sweater</h5>
                        <p>The perfect sweater as cold weather approaches</p>
                        <span class="price">$34.99</span>
                    </div>
                </div>
                <!--CARD 1 ENDS HERE-->

    <!--CARD 2 BEGINS HERE-->
 
    <div class="card2">
        <img src="images/cardigan-clothes-sweater-45982.jpg" alt="">
        <figcaption>Photo by Dom J from Pexels</figcaption>
        <div class="card-body">
            <h5>Cardigan Sweater</h5>
            <p>The perfect sweater as cold weather approaches</p>
            <span class="price">$34.99</span>
        </div>
    </div>
        <!--CARD 2 ENDS HERE-->

        <!--CARD 3 BEGINS HERE-->
  
        <div class="card3">
            <img src="images/cardigan-clothes-sweater-45982.jpg" alt="">
            <figcaption>Photo by Dom J from Pexels</figcaption>
                    <div class="card-body">
                        <h5>Cardigan Sweater</h5>
                        <p>The perfect sweater as cold weather approaches</p>
                        <span class="price">$34.99</span>
            </div>
        </div>
        <!--CARD 3 ENDS HERE-->

         <!--CARD 4 BEGINS HERE-->
         <div class="card4">
            <img src="images/cardigan-clothes-sweater-45982.jpg" alt="">
            <figcaption>Photo by Dom J from Pexels</figcaption>
                    <div class="card-body">
                        <h5>Cardigan Sweater</h5>
                        <p>The perfect sweater as cold weather approaches</p>
                        <span class="price">$34.99</span>
            </div>
        </div>
        <!--CARD 4 ENDS HERE-->

        
     
        </section>

        
        </main>

    ';

    }
//no user logged in SHOW COMMON VIEW
else {
     echo '
     <nav class="navbar">
    <ul class="nav-links d-flex justify-content-center align-items-center">
     <li class="nav-item">
       <a class="nav-link active" href="index.php">Home</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="inventory.php">Inventory</a>
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

////////////new inventory content when signed out goes here
<link rel="stylesheet" href="css/inventory.cssv=?1.0">
<main class="main-content">

<div class="hero-img">
<img src="images/inventory-header.png" alt="">

</div>
<section class="shoe-section">
<h1 class="shoe-head">
    Shoes
</h1>
<!--CARD 1 BEGINS HERE-->
<div class="shoe-cards">
    <div class="card1">
        <img src="images/air-jordan-fashion-feet-2065695.jpg" alt="">
        <figcaption>Photo by AJ Nakasone from Pexels</figcaption>
        <div class="card1-text">
            <h5>Air jordan 1</h5>
            <p>This shoe is an ageless wonder</p>
            <span class="price">$299.99</span>
        </div>
    </div>
    <!--CARD 1 ENDS HERE-->
    <div class="card2">
        <img src="images/air-jordan-fashion-feet-2065695.jpg" alt="">
        <figcaption>Photo by AJ Nakasone from Pexels</figcaption>
        <div class="card2-text">
            <h5>Air jordan 1</h5>
            <p>This shoe is an ageless wonder</p>
            <span class="price">$299.99</span>
        </div>
    </div>

    <div class="card3">
        <img src="images/air-jordan-fashion-feet-2065695.jpg" alt="">
        <figcaption>Photo by AJ Nakasone from Pexels</figcaption>
        <div class="card3-text">
            <h5>Air jordan 1</h5>
            <p>This shoe is an ageless wonder</p>
            <span class="price">$299.99</span>
        </div>
    </div>

    <div class="card4">
        <img src="images/air-jordan-fashion-feet-2065695.jpg" alt="">
        <figcaption>Photo by AJ Nakasone from Pexels</figcaption>
        <div class="card4-text">
            <h5>Air jordan 1</h5>
            <p>This shoe is an ageless wonder</p>
            <span class="price">$299.99</span>
        </div>
    </div>
</div>
</section>

<section class="camera-section">
<h1 class="camera-head">Cameras</h1>
 <!--CARD 1 BEGINS HERE-->
<div class="camera-cards">
    <div class="card1">
        <img src="images/analogue-aperture-black-and-white-1203819.jpg" alt="">
        <figcaption>Photo by Alex Andrews from Pexels</figcaption>
        <div class="card1-text">
            <h5>Cannon DSLR</h5>
            <p>This camera is one of the best DSLRs on the market</p>
            <span class="price">$899.99</span>
        </div>
    </div>
    <!--CARD 1 ENDS HERE-->

        <!--CARD 2 BEGINS HERE-->

    <div class="card2">
            <img src="images/analogue-aperture-black-and-white-1203819.jpg" alt="">
            <figcaption>Photo by Alex Andrews from Pexels</figcaption>
        <div class="card2-text">
            <h5>Cannon DSLR</h5>
            <p>This camera is one of the best DSLRs on the market</p>
            <span class="price">$899.99</span>
     
    </div>
    </div>
    <!--CARD 2 ENDS HERE-->

       <!--CARD 3 BEGINS HERE-->

       <div class="card3">
            <img src="images/analogue-aperture-black-and-white-1203819.jpg" alt="">
            <figcaption>Photo by Alex Andrews from Pexels</figcaption>
        <div class="card3-text">
            <h5>Cannon DSLR</h5>
            <p>This camera is one of the best DSLRs on the market</p>
            <span class="price">$899.99</span>
     
    </div>
    </div>
    <!--CARD 3 ENDS HERE-->

      <!--CARD 4 BEGINS HERE-->

      <div class="card4">
            <img src="images/analogue-aperture-black-and-white-1203819.jpg" alt="">
            <figcaption>Photo by Alex Andrews from Pexels</figcaption>
        <div class="card4-text">
            <h5>Cannon DSLR</h5>
            <p>This camera is one of the best DSLRs on the market</p>
            <span class="price">$899.99</span>
     
    </div>
    </div>
    <!--CARD 4 ENDS HERE-->

</div>

</section>
<section class="clothes-section">
<h1 class="clothes-head">Clothes</h1>
<!--CARD 1 BEGINS HERE-->
<div class="clothes-cards">
    <div class="card1">
        <img src="images/cardigan-clothes-sweater-45982.jpg" alt="">
        <figcaption>Photo by Dom J from Pexels</figcaption>
        <div class="card-body">
            <h5>Cardigan Sweater</h5>
            <p>The perfect sweater as cold weather approaches</p>
            <span class="price">$34.99</span>
        </div>
    </div>
    <!--CARD 1 ENDS HERE-->

<!--CARD 2 BEGINS HERE-->

<div class="card2">
<img src="images/cardigan-clothes-sweater-45982.jpg" alt="">
<figcaption>Photo by Dom J from Pexels</figcaption>
<div class="card-body">
<h5>Cardigan Sweater</h5>
<p>The perfect sweater as cold weather approaches</p>
<span class="price">$34.99</span>
</div>
</div>
<!--CARD 2 ENDS HERE-->

<!--CARD 3 BEGINS HERE-->

<div class="card3">
<img src="images/cardigan-clothes-sweater-45982.jpg" alt="">
<figcaption>Photo by Dom J from Pexels</figcaption>
        <div class="card-body">
            <h5>Cardigan Sweater</h5>
            <p>The perfect sweater as cold weather approaches</p>
            <span class="price">$34.99</span>
</div>
</div>
<!--CARD 3 ENDS HERE-->

<!--CARD 4 BEGINS HERE-->
<div class="card4">
<img src="images/cardigan-clothes-sweater-45982.jpg" alt="">
<figcaption>Photo by Dom J from Pexels</figcaption>
        <div class="card-body">
            <h5>Cardigan Sweater</h5>
            <p>The perfect sweater as cold weather approaches</p>
            <span class="price">$34.99</span>
</div>
</div>
<!--CARD 4 ENDS HERE-->



</section>


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