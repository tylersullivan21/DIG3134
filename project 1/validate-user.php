<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($_POST['username'] === 'dig3134' &&  ($_POST['name']=== 'dig3134pass'){
    //set the cookie login state to true, store username and passsword and redirect to welcome page
    setcookie("username", "I am a cookie", time() + 3600, '/');
    echo 'congrats! you got the right username';
    echo "<br>";
}

else{
    echo 'your password is wayyy off';
    echo "<br>";
}


?>