<?php
$random_number = rand(0,100);
/*print_r($_POST);*/
/*$usernumber = $_GET["username"];*/
/*$array =array("first", "second", "third","fourth");*/
if($_POST["user_number"] > $random_number){
    print_r($_POST);
    echo 'your number is larger than ' . $random_number;
   
}
else{
    print_r($_POST);
    echo 'your number is less than ' . $random_number;
    /*print_r($_POST["username"]);*/
}


/*
else if($game === 1){
    echo 'your value returned is ' . $array[1];
}
else if($game === 2){
    echo 'your value returned is ' . $array[2];
}
else if($game === 3){
    echo 'your value returned is ' . $array[3];
}
*/
?>
