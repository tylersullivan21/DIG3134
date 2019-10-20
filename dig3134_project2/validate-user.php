<?php

/*

$username = $_POST['username'];
$password = $_POST['password'];
*/
$isValidUsername = false;
$isValidPassword = false;
/*
if($_POST['username'] === 'dig3134'){
    $isValidUsername = true;
}
else
*/

if(isset($_POST) && $_POST['username'] === 'dig3134user' &&  $_POST['password']=== 'dig3134pass'){
    //set the cookie login state to true, store username and passsword and redirect to welcome page
    $isValidUsername = true;
    $isValidPassword = true;
    setcookie("username_cookie", "dig3134",  time() + 60, "/");
    setcookie("password_cookie", "dig3134pass", time() + 60, "/");
    setcookie("login_state", "true", time() + 60);
    echo 'Success! The credentials that you entered match our records. You will now be directed...';
    header("refresh:2; ./index.php");
    echo "<br>";
}

else{
    header("refresh:1; ./index.php");
    echo'The credentials that you entered were incorrect, please try again.';
}


?>