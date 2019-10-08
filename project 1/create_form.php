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
print_r ($user_entered_data);

?>