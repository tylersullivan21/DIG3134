<?php
session_start();
/*
echo session_id();
echo "init value:: ".$_SESSION['loggedin'];
*/
$_SESSION['loggedin'] ='tyler_false';


echo 'Logging out...';
header("refresh:5; ./contact.php"); 
session_unset();

?>