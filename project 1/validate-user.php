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
    setcookie("username_cookie", "dig3134",  time() + 10, "/");
    setcookie("password_cookie", "dig3134pass", time() + 10, "/");
    setcookie("login_state", "true", time() + 10);
    echo $_COOKIE["login_state"];
    echo $_COOKIE["username_cookie"];
    echo $_COOKIE["password_cookie"];
    echo $_COOKIE["username_cookie"];
    echo $_COOKIE["password_cookie"];
    echo 'congrats! you got the right username';
    header("refresh:1; ./index.php");
    echo "<br>";
}

else{
    header("refresh:1; ./index.php");
    echo'Your value was wrong';
}


?>