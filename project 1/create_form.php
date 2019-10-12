<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    
    <form action="" method="POST">
    
    <div class="form-field">
        <label for="username">User Name:</label>
        <input type="text" name="username" id="username" placeholder="UserName" required />
      </div>

      <div class="form-field">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Password" required />
      </div>

      <div class="form-field">
        <label for="phone">Phone Number</label>
        <input type="tel" name="phone" id="phone" placeholder="Phone Number" required />
      </div>

      <div class="form-field">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email" required />
      </div>

      <div class="form-field">
        <label for="street">Street Address</label>
        <input type="text" name="street" id="street" placeholder="Street Address" required />
      </div>

      <div class="form-field">
        <label for="city">City</label>
        <input type="text" name="city" id="city" placeholder="City" required />
      </div>

      <div class="form-field">
        <label for="zip-code">Zip Code</label>
        <input type="text" name="zip-code" id="zip-code" placeholder="Zip Code" required />
      </div>

      <div class="form-field">
        <label for="state">State</label>
        <input type="text" name="state" id="state" placeholder="State" required />
      </div>
    


      <input type="submit" value="Submit" name="submit">
      
    </form>
</body>
</html>
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
    header("refresh:5; ./index.html");
    setcookie("username_cookie", "dig3134", time() + 5000, "/");
    setcookie("password_cookie", "dig3134pass", time() + 5000, "/");
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
    if($isValidAddress === true && $isValidPhone === true && $isValidState === true && $isValidZip === true) {
        redirectOnSuccess();
        setcookie("username_cookie", "dig3134", time() + 5000, "/");
        setcookie("password_cookie", "dig3134pass", time() + 5000, "/");
        setcookie("login_state", "true");
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









