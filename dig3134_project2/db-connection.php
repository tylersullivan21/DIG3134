<?php
$username = "ja240668";
$password = "KumaJake2198!";
$dbname = "ja240668";


$connection = mysqli_connect("localhost", "$username", "$password", "$dbname") or die(mysql_error());

if (!$connection) {
    die("It did not run" . mysqli_connect_error());
} else {

    echo "The php code ran";
}

$sql = "INSERT INTO project3
VALUES (4,'thefourth','wordssap','32696')";

mysqli_query($connection, $sql) or die('Could not create table: ' . mysql_error());

mysqli_close($connection);


?>