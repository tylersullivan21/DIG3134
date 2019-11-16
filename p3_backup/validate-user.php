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
if(isset($_POST))
{
$select = "SELECT password FROM project3 WHERE username='".$_POST['username']."'";

/* working on the password logic here*/

$result= mysqli_query($connection, $select) or die('No matching records found' . mysqli_error($connection));
mysqli_close($connection);
$row = mysqli_fetch_row($result);
if(sha1($_POST['password'])=== $row[0]){
  
    session_start();
   // echo session_id();
    $_SESSION['loggedin'] ='tyler_true';
    
    echo 'Success! The credentials that you entered match our records. You will now be directed...';
    header("refresh:6; ./index.php");
    echo "<br>";
}
else{
    header("refresh:5; ./index.php");
    echo'The credentials that you entered were incorrect, please try again.';
}
}
?>