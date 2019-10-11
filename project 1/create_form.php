<?php

phpinfo();
$user_entered_data = array(

    "username" => $_POST['username'],
    "password" => $_POST['password'],
    "phone" => $_POST['phone'],
    "email" => $_POST['email'],
    "address-line1" => $_POST['address-line1'],
    "city" => $_POST['city'],
    "zip-code" => $_POST['zip-code'],
    "state" => $_POST['state'],
    );

    //this code cleans out the user input for phone number
    $user_entered_data['phone'] = preg_replace("/[- \(\)]/", "", $user_entered_data['phone']);


    /************************** */
    /*THE REGEX FOR USER NAME */
    /************************* */

    function validateProfile(){
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
}

else{
    echo 'The regex for zip code failed';
}


    /************************** */
    /*THE REGEX FOR STATE */
    /************************* */

if(preg_match("/^[A-Z]{2}$/" , $user_entered_data['state'])){
    echo 'The state regex passed';
}

else{
    echo 'The regex for state failed';
}


    /************************** */
    /*THE REGEX FOR PHONE*/
    /************************* */

    if(preg_match("/^\d{10}$/" , $user_entered_data['state'])){
        echo 'the phone number is clean';
    }
    
    else{
        echo 'The regex for state failed';
    }

    }


    /*
validateUsername($user_entered_data['username']);
validateZip($user_entered_data['zip-code']);
*/
print_r ($user_entered_data);

?>