<?php
session_start();
/*
echo session_id();
echo "init value:: ".$_SESSION['loggedin'];
*/
$_SESSION['loggedin'] ='tyler_false';


echo 'Logging out... value after destroy:: ' .$_SESSION['loggedin'];
echo print_r($_SESSION);
header("refresh:5; ./index.php"); 
session_unset();

?>