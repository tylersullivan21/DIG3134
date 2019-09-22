<?php

$name = $_POST["full-name"];
$shoe_brand = $_POST["shoe-size"];
$shoe_size = $_POST["shirt-size"];


$profile = array($name, $shoe_brand, $shoe_size);
print_r($profile);
echo "<br>";

echo "<br>";
shuffle($profile);
echo  count($profile);
print_r($profile);

?>