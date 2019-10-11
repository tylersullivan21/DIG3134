<?php
header("refresh:5; ./index.html");
echo "You have sucessfully created an account, " . $_POST['username'] . " You will be directed to the home page in 5 seconds";
die();

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

   
    /************************** */
    /*THE REGEX FOR ZIP CODE */
    /************************* */
if(preg_match("/^\d{5}$/", $user_entered_data['zip-code'])){
    echo 'The regex for zip code has been met';
    echo "</br>";
}

else{
    echo 'The regex for zip code failed';
    echo "</br>";
}

    /************************** */
    /*THE REGEX FOR STATE */
    /************************* */

if(preg_match("/^[A-Z]{2}$/" , $user_entered_data['state'])){
    echo 'The state regex passed';
    echo "</br>";
}

else{
    echo 'The regex for state failed';
    echo "</br>";
}

if(preg_match("/^\d{1}.*[a-zA-Z]{1}$/" , $user_entered_data['street'])){
    echo 'The regex for address passed';
    echo "</br>";
}
else {
    echo 'the regex for address failed';
    echo "</br>";
}

    /************************** */
    /*THE REGEX FOR PHONE*/
    /************************* */

    if(preg_match("/^\d{10}$/" , $user_entered_data['phone'])){
        echo 'the phone number is clean';
        echo "</br>";
    }
    
    else{
        echo 'The regex forphone number failed';
        echo "</br>";
    }





    /*
validateUsername($user_entered_data['username']);
validateZip($user_entered_data['zip-code']);
*/
print_r ($user_entered_data);

?>