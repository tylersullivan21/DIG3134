<?php
include 'db-connection.php';
/*

$username = $_POST['username'];
$password = $_POST['password'];
*/
/*
$isValidUsername = false;
$isValidPassword = false;
/*
if($_POST['username'] === 'dig3134'){
    $isValidUsername = true;
}
else
*/
$select = "SELECT password FROM project3 WHERE username='".$_POST['username']."'";
  
$connection = getConnection();
mysqli_query($connection, $select) or die('No matching records found' . mysqli_error($connection));
mysqli_close($connection);

/*
echo mysql_result($result,0);
*/

if(isset($_POST) && $_POST['username'] === 'dig3134user' &&  $_POST['password']=== 'dig3134pass'){
    //set the cookie login state to true, store username and passsword and redirect to welcome page
    /*
    $isValidUsername = true;
    $isValidPassword = true; 
    */
    session_start();
   // echo session_id();
    $_SESSION['loggedin'] ='tyler_true';
    
    echo 'Success! The credentials that you entered match our records. You will now be directed...';

    header("refresh:6; ./index.php");
    echo "<br>";
}

else{
    header("refresh:1; ./index.php");
    echo'The credentials that you entered were incorrect, please try again.';
}


?>