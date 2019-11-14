<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inventory</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/inventory.css?v=1.0">
</head>
<body>
<!--THIS NAV IS NOW MADE WITH BOOTSTRAP INSTEAD OF SELF CREATED BASED ON FEEDBACK-->

  <?php
  date_default_timezone_set('America/New_York');
  $date = date('m/d/Y h:i:s a', time());
  
  $today = date("D"); 
  
  if (isset($_SESSION['loggedin']) &&  $_SESSION['loggedin'] === 'tyler_true'){
      echo'
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
     </ul>
  
     </nav>
      <link rel="stylesheet" href="css/logged-in.css">
      <p class="signed-in-header"> Use code SULLY for free shipping and 10% off your next purchase. This deal is valid as of ' .$date .'  </p>
    <div class="wrapper">
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
                        <span class="reduced-price">$270.00</span>
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
                        <span class="reduced-price">$270.00</span>
                    </div>
                </div>

                <div class="card3">
                    <img src="images/air-jordan-fashion-feet-2065695.jpg" alt="">
                    <figcaption>Photo by AJ Nakasone from Pexels</figcaption>
                    <div class="card3-text">
                        <h5>Air jordan 1</h5>
                        <p>This shoe is an ageless wonder</p>
                        <span class="price">$299.99</span>
                        <span class="reduced-price">$270.00</span>
                    </div>
                </div>

                <div class="card4">
                    <img src="images/air-jordan-fashion-feet-2065695.jpg" alt="">
                    <figcaption>Photo by AJ Nakasone from Pexels</figcaption>
                    <div class="card4-text">
                        <h5>Air jordan 1</h5>
                        <p>This shoe is an ageless wonder</p>
                        <span class="price">$299.99</span>
                        <span class="reduced-price">$270.00</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="camera-section">
            <h1 class="camera-head">Cameras</h1>
             <!--CARD 1 BEGINS HERE-->
            <div class="camera-cards">
                <div class="card1">
                    <img src="images/kodak.jpg" alt="">
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
                    <img src="images/kodak.jpg" alt="">
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
                    <img src="images/kodak.jpg" alt="">
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
                    <img src="images/kodak.jpg" alt="">
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

  else{
      echo'
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
  <div class="wrapper">
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
              <img src="images/kodak.jpg" alt="">
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
              <img src="images/kodak.jpg" alt="">
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
              <img src="images/kodak.jpg" alt="">
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
              <img src="images/kodak.jpg" alt="">
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






        <footer class="footer">

            <p class="footer-text">Copyright of Tyler Sullivan 2019</p>
        </footer>

    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="js/test.js"></script>
</body>


</html>