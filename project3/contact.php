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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    
<link rel="stylesheet" href="css/form.css">

</head>
<body>
<!--THIS NAV IS NOW MADE WITH BOOTSTRAP INSTEAD OF SELF CREATED BASED ON FEEDBACK-->

<?php
 if (isset($_SESSION['loggedin']) &&  $_SESSION['loggedin'] === 'tyler_true'){
     include("header.php");
     include("css/logged-in.css");
 }
 else{
     include("header_loggedout.php");
 }

?>
                 <div class="wrapper">
        <main class="main-content" >

    <div class="hero-img">
<img src="images/phones-header.png" alt="">
    </div>

    <section class="module1">
      <h2 class="mod-header">Want to know more about our products?</h2>
      <p>Please give us your email and send us a message on what it is that you would like to know more about!</p>

  </section>
   

<form class="section-form" action="form.php" method="GET">
  <div class="intro">
    <h1>Want to get in touch?</h1>
    <h2>Send us a message!</h2>
  </div>
  <label  for="email">Email:</label>
  <input class="email" type="text" name="email" placeholder="Enter Your email" value="" tabindex='2'>
  <label for="message">Message:</label>
  <textarea class="message" name="message" placeholder="Enter a message"rows="10"></textarea>
  <input type="submit" name="submit-button" value="Submit">

</form>

        </main>
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


    <script type="text/javascript"> 
function logout() { 
  console.log("logout button was pressed onclick function was triggered");

   window.location = "logout3.php";
    return true; 
} 
</script>
</body>
</html>
