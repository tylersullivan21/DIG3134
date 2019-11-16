<?php
if ( !empty($_POST) ) {
//this script sends an email to captain kirk of the message that the user inputs
$message = $_POST["message"];
mail("CaptainKirk@example.com","User's input",$message);
}
else {
    echo 'the post is empty, try again';
}
?>