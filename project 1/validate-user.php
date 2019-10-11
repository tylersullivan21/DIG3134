<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($_POST['username'] === 'dig3134' &&  $_POST['name']=== 'dig3134pass'){
    //set the cookie login state to true, store username and passsword and redirect to welcome page
    
    setcookie("username_cookie", "dig3134", time() + 5000, "/");
    setcookie("password_cookie", "dig3134pass", time() + 5000, "/");
    echo $_COOKIE["username_cookie"];
    echo $_COOKIE["password_cookie"];
    echo 'congrats! you got the right username';
    echo "<br>";
}

else{
    echo 'your password is wayyy off';
    echo "<br>";
}


?>