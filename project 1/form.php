<?php

//this script sends an email to captain kirk of the message that the user inputs
$message = $_POST["message"];
mail("CaptainKirk@example.com","User's input",$message);


$my_array = array("Dog","Cat","Horse");

list($a, $b, $c) = $my_array;
echo "I have several animals, a $a, a $b and a $c.";
?>