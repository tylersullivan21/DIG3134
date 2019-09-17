<?php
$game = rand(0,3);
$array =array("first", "second", "third","fourth");
if($game === 0){
    echo 'your value returned is ' . $array[0];
}
else if($game === 1){
    echo 'your value returned is ' . $array[1];
}
else if($game === 2){
    echo 'your value returned is ' . $array[2];
}
else if($game === 3){
    echo 'your value returned is ' . $array[3];
}
?>
