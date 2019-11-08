<?php
include 'db-connection.php';
$create_table ="CREATE TABLE IF NOT EXISTS project3 (
    userid int NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(userid),
    username varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    zip int NOT NULL
);";

$connection = getConnection();
mysqli_query($connection, $create_table) or die('Could not create your table ' . mysqli_error($connection));
mysqli_close($connection);



?>