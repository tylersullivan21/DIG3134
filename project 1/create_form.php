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
    echo 'The regex for the username has been met';
}
else{
    echo 'the regex is invalid';
}

print_r ($user_entered_data);

?>