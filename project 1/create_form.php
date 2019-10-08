<?php

$user_entered_data = array(

    "username" => $_POST['username'],
    "password" => $_POST['password'],
    "email" => $_POST['email'],
    "address-line1" => $_POST['address-line1'],
    "city" => $_POST['city'],
    "zip-code" => $_POST['zip-code'],
    "state" => $_POST['state'],
    );

    /************************** */
    /*THE REGEX FOR USER NAME */
    /************************* */


if(preg_match("/[a-z]/",$user_entered_data['username'])){
    echo "The regex for username is matched";
}
else{
    echo 'the regex is invalid';
    }



    /************************** */
    /*THE REGEX FOR ZIP CODE */
    /************************* */


    
if(preg_match("/^\d{5}/", $user_entered_data['zip-code'])){

    echo 'The regex for zip code has been met';
}

else{
    echo 'The regex for zip code failed';
}



    /*
validateUsername($user_entered_data['username']);
validateZip($user_entered_data['zip-code']);
*/
print_r ($user_entered_data);

?>