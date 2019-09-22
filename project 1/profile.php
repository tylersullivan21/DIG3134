<?php

$name = $_POST["name"];
$shoe_brand = $_POST["shoe-brand"];
$shoe_size = $_POST["shoe-size"];


$profile = array($name, $shoe_brand, $shoe_size);
print_r($profile);
echo "<br>";
echo  count($profile);
echo "<br>";
shuffle($profile);
print_r($profile);

?>