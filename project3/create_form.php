<?php
 session_start();
 include 'create_table.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Account</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/create_account.css?v=1.0">
</head>
<body>
  
<nav>
    <ul class="nav d-flex justify-content-center align-items-center">
     <li class="nav-item">
       <a class="nav-link active" href="index.php">Home</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="inventory.html">Inventory</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="Contact.html">Contact</a>
     </li>
   </ul>
   </nav>

    <div class="main-content">
    <form class="form-grid" action="" method="POST">
<div class="intro">
    <h1>Create An Account</h1>
    <p style="text-align:center; font-size: 18px;" >Please create an account so you do not miss out on exclusive deals and promotions!</p>
</div>

<div style="color:red" class="error-messages">
<?php


    /************************** */
    /*THE REGEX FOR USER NAME */
    /************************* */


//user name can be anything dont need validation, can take it out
/*
if(preg_match("/[a-zA-Z]/",$user_entered_data['username'])){
    echo "The regex for username is matched";
}
else{
    echo 'the regex is invalid';
    }
 */

 function redirectOnSuccess (){
     //TODO :: MAKE COOKIES
    
    header("refresh:5; ./index.php");
    $_SESSION['loggedin'] ='tyler_true';
    echo "<h5>You have sucessfully created an account, <strong>" . $_POST['username'] . "</strong> You will be directed to the home page in 5 seconds</h5>";
    die();
 }


   function validateInput(){
    /************************** */
    /*THE REGEX FOR ZIP CODE */
    /************************* */

    $user_entered_data = array(

        "username" => $_POST['username'],
        "password" => $_POST['password'],
        "phone" => $_POST['phone'],
        "email" => $_POST['email'], 
        "street" => $_POST['street'],
        "city" => $_POST['city'],
        "zip-code" => $_POST['zip-code'],
        "state" => $_POST['state'],
        );
    
        //this code cleans out the user input for phone number
        $user_entered_data['phone'] = preg_replace("/[- \(\)]/", "", $user_entered_data['phone']);

    $isValidPhone = false;
    $isValidAddress = false;
    $isValidZip = false;
    $isValidState = false;

    
   
  /************************** */
    /*THE REGEX FOR ZIP CODE */
    /************************* */

    
if(preg_match("/^\d{5}$/", $user_entered_data['zip-code'])){
    $isValidZip = true;
  
    echo "</br>";
}

else{
    echo 'Your zip code must contain 5 numbers' ;
   // echo preg_match("/mustmatch/", "mustmatch");
    echo "</br>";
}

    /************************** */
    /*THE REGEX FOR STATE */
    /************************* */

if(preg_match("/^[A-Z]{2}$/" , $user_entered_data['state'])){
    $isValidState = true;
    
    echo "</br>";
}

else{
    echo 'State must be two capital letters';
    echo "</br>";
}

if(preg_match("/^\d{1}.*[a-zA-Z]{1}$/" , $user_entered_data['street'])){
    $isValidAddress = true;
    echo "</br>";
}
else {
    echo 'Your street address must start with a number and end with a letter';
    echo "</br>";
}

    /************************** */
    /*THE REGEX FOR PHONE*/
    /************************* */

    if(preg_match("/^\d{10}$/" , $user_entered_data['phone'])){
        $isValidPhone = true;
    
        echo "</br>";
    }
    
    else{
        echo 'Your number must be a US number that contains 10 digits';
        echo "</br>";
    }

    //this conditional checks if all flag variables are true or not, when true it will run the success redirect logic.
    if($isValidAddress === true && $isValidPhone === true && $isValidState === true && $isValidZip === true) {
      //insert into db//
   /*
          $username = mysqli_real_escape_string($connection, $user_entered_data["username"]);
          $password = mysqli_real_escape_string($connection, sha1($user_entered_data["password"]));
          $zip = mysqli_real_escape_string($connection, $user_entered_data["zip-code"]);

          $insert_into = "INSERT INTO project3(username, password,zip)
          VALUES(?,?,?);";
          $stmt = mysqli_stmt_init($connection);

          if(!mysqli_stmt_prepare($stmt, sql)){
            echo'SQL Error';
          }
          else{
            mysqli_stmt_bind_param($stmt, "sss", $username, $password, $zip);
          }
          */
  
      $insert = "INSERT INTO project3 (username, password, zip) VALUES ('"
      .$user_entered_data["username"]
      ."','"
      .sha1($user_entered_data["password"])
      ."','"
      .$user_entered_data["zip-code"]
      ."')";
   
      
      
      $connection = getConnection();
    
      mysqli_query($connection, $insert) or die('Could not insert into data: ' . mysqli_error($connection));
      mysqli_close($connection);
    

        redirectOnSuccess();
        /* SET SESSION VARIABLES INSTEAD OF USING COOKIES JUST FOR THE USERNAME, DONT STORE PASSWORD
        setcookie("username_cookie", "dig3134", time() + 120, "/");
        setcookie("password_cookie", "dig3134pass", time() + 120, "/");
        setcookie("login_state", "true", time() + 120);*/
        header("refresh:5; ./index.php");

    }
    else{
echo 'Please try again';

    }

}

if(isset($_POST['submit']))
{

   validateInput();
} 

    /*
validateUsername($user_entered_data['username']);
validateZip($user_entered_data['zip-code']);
*/


?>
</div>
    <div id="username" class="form-field">
        <label for="username">User Name:</label>
        <input type="text" name="username" id="username" placeholder="UserName" maxlength="20" required />
      </div>

      <div id="password" class="form-field">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password" maxlength="20" required />
      </div>

      <div id="phone" class="form-field">
        <label for="phone">Phone Number</label>
        <input type="tel" name="phone" id="phone" placeholder="Phone Number" maxlength="15" required />
      </div>

      <div id="email" class="form-field">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email" maxlength="25"  required/>
      </div>

      <div id="street" class="form-field">
        <label for="street">Street Address</label>
        <input type="text" name="street" id="street" placeholder="Street Address" maxlength="20" required />
      </div>

      <div id="city" class="form-field">
        <label for="city">City</label>
        <input type="text" name="city" id="city" placeholder="City" maxlength="20" required />
      </div>

      <div id="zip" class="form-field">
        <label for="zip-code">Zip Code</label>
        <input type="text" name="zip-code" id="zip-code" placeholder="Zip Code" maxlength="5" required />
      </div>

      <div id="state" class="form-field">
        <label for="state">State</label>
        <input type="text" name="state" id="state" placeholder="State" maxlength="2" required />
      </div>
      <input style="padding: 4px;" id="submit" type="submit" value="Submit" name="submit"> 
    </form>

    </div>

    <footer class="footer">
            <p class="footer-text">Copyright of Tyler Sullivan 2019</p>
        </footer>


        <script   src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
</html>










