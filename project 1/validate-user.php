<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($_POST['username'] === 'dig3134'){
    echo 'congrats! you got the right username';
    echo "<br>";
}

else{
    echo 'your password is wayyy off';
    echo "<br>";
}

if ($_POST['password']){
echo 'congrats your password was right';
}

else{
echo 'your password was wrong';
}

?>