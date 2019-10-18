<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
    <link rel="stylesheet" href="css/create_account.css">
</head>
<body>
  
<div class="nav-wrapper">
            <nav class="navbar">
                   
                   <ul class="nav-links">
                    <li class="nav-item"><a href="index.html">Home</a></li>
                    <li class="nav-item"><a href="inventory.html">Inventory</a></li>
                    <li class="nav-item"><a href="contact.html">Contact</a></li>
                </ul>
  </nav>
               
 </div>

    <div class="main-content">
    <form class="form-grid" action="" method="POST">
<div class="intro">
    <h1>Create An Account</h1>
    <p>Feel free to create account to get a unique experience</p>
</div>

<div class="error-messages">
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
    setcookie("username_cookie", "dig3134", time() + 20, "/");
    setcookie("password_cookie", "dig3134pass", time() + 20, "/");
    setcookie("login_state", "true", time() + 20);
    echo "You have sucessfully created an account, " . $_POST['username'] . " You will be directed to the home page in 5 seconds";
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
        "email" => filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
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



    $isValidEmail = false;
 
    if (!filter_var($user_entered_data['email'], FILTER_VALIDATE_EMAIL) === false) {
        echo($user_entered_data['email']." is a valid email address");
        $isValidEmail = true;
    } else {
        echo($user_entered_data['email']." is not a valid email address");
    }
    
   
if(preg_match("/^\d{5}$/", $user_entered_data['zip-code'])){
    $isValidZip = true;
    echo 'The regex for zip code has been met';
    echo "</br>";
}

else{
    echo 'Your zip code must contain 5 numbers:: '.$user_entered_data['zip-code'] ;
    echo preg_match("/mustmatch/", "mustmatch");
    echo "</br>";
}

    /************************** */
    /*THE REGEX FOR STATE */
    /************************* */

if(preg_match("/^[A-Z]{2}$/" , $user_entered_data['state'])){
    $isValidState = true;
    echo 'The state regex passed';
    echo "</br>";
}

else{
    echo 'State must be two capital letters';
    echo "</br>";
}

if(preg_match("/^\d{1}.*[a-zA-Z]{1}$/" , $user_entered_data['street'])){
    $isValidAddress = true;
    echo 'The regex for address passed';
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
        echo 'the phone number is clean';
        echo "</br>";
    }
    
    else{
        echo 'Your number must be a US number that contains 10 digits';
        echo "</br>";
    }

    //this conditional checks if all flag variables are true or not, when true it will run the success redirect logic.
    if($isValidAddress === true && $isValidPhone === true && $isValidState === true && $isValidZip === true && $isValidEmail === true) {
        redirectOnSuccess();
        setcookie("username_cookie", "dig3134", time() + 120, "/");
        setcookie("password_cookie", "dig3134pass", time() + 120, "/");
        setcookie("login_state", "true", time() + 120);
        header("refresh:5; ./index.php");
        echo $_COOKIE["login_state"];
        echo $_COOKIE["username_cookie"];
        echo $_COOKIE["password_cookie"];
    }
    else{
echo 'your values are wrong';

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
print_r ($user_entered_data);

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
      <input id="submit" type="submit" value="Submit" name="submit"> 
    </form>

    </div>

    <footer class="footer">
            <p class="footer-text">Copyright of Tyler Sullivan 2019</p>
        </footer>

</body>
</html>










