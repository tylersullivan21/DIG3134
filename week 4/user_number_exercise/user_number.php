<?php
$random_number = rand(0,100);
if($_POST["user_number"] > $random_number){
    print_r($_POST);
    echo 'your number is larger than ' . $random_number;
   
}
else{
    print_r($_POST);
    echo 'your number is less than ' . $random_number;
    /*print_r($_POST["username"]);*/
}
?>
