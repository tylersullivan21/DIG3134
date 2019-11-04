<?php

function getConnection()
{
    $username = "ja240668";
    $password = "KumaJake2198!";
    $dbname = "ja240668";

    $connection = mysqli_connect("localhost", "$username", "$password", "$dbname") or die(mysqli_error($connection));

    define('mysqlconn',$connection);

    if (!$connection) {
        die("It did not run" . mysqli_connect_error());
    } else {
        return $connection;
        echo "The php code ran";
    }
}



/*
$sql = "INSERT INTO project3
VALUES (4,'thefourth','wordssap','32696')";

mysqli_query($connection, $sql) or die('Could not create table: ' . mysqli_error($connection));

mysqli_close($connection);
*/



?>