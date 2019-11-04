<?php
$username = "root";
$password = "root";
$dbname = "project3";


$connection = mysqli_connect("localhost", "$username", "$password", "$dbname") or die(mysql_error());

if (!$connection) {
    die("It did not run" . mysqli_connect_error());
} else {

    echo "The php code ran";
}
$sql = "INSERT INTO project3
VALUES (3,'thirdtest','password','32632')";

mysqli_query($connection, $sql) or die('Could not create table: ' . mysql_error());

mysqli_close($connection);

?>