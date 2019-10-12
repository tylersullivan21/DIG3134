<?php

if (isset($_COOKIE['username'])) {
    setcookie("username", "", time()-3600);
    echo $_COOKIE['username'];
  }

  else{
      echo 'the cookie reset';
  }

$username = $_POST['username'];
$password = $_POST['password'];

if($_POST['username'] === 'dig3134' &&  $_POST['password']=== 'dig3134pass'){
    //set the cookie login state to true, store username and passsword and redirect to welcome page
    setcookie("username_cookie", "dig3134", time() + 5000, "/");
    setcookie("password_cookie", "dig3134pass", time() + 5000, "/");
    setcookie("login_state", "true");
    echo $_COOKIE["login_state"];
    echo $_COOKIE["username_cookie"];
    echo $_COOKIE["password_cookie"];
    header("refresh:5; ./index.html");
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