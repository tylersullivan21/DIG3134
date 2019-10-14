<?php

if (isset($_COOKIE['username_cookie']) && $_COOKIE['login_state'] === 'true') {
echo 'You are already signed in hehehe';
  }

  else{
      echo 'the cookie reset'. $_COOKIE['login_state'];
  }

$username = $_POST['username'];
$password = $_POST['password'];

if($_POST['username'] === 'dig3134' &&  $_POST['password']=== 'dig3134pass'){
    //set the cookie login state to true, store username and passsword and redirect to welcome page
    setcookie("username_cookie", "dig3134",  -5000, "/");
    setcookie("password_cookie", "dig3134pass", -5000, "/");
    setcookie("login_state", "true");
    echo $_COOKIE["login_state"];
    echo $_COOKIE["username_cookie"];
    echo $_COOKIE["password_cookie"];

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