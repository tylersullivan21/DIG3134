<?php
$name = $_POST["name"];
$shoe_brand = $_POST["shoe-brand"];
$camera_brand = $_POST["camera-brand"];
$clothes_brand = $_POST["clothes-brand"];


$profile = array($name, $shoe_brand, $camera_brand, $clothes_brand);
print_r($profile);
echo "<br>";

echo "<br>";
shuffle($profile);

echo "<br>";
print_r($profile);
echo "<br>";
echo  count($profile);
?>