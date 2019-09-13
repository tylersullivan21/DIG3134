<?php
/*
    For this exercise I want you to use php to generate a random number between 1 and 100.
    After doing this I want the number 50 and greater to be displayed red while numbers below 50 will be displayed blue;
*/

/*
1) Create a variable to store the random number.
2) Find a php function that generates a random number.
3) Create logic that tests if the reandom number is greater than 50 or not
4) Within the logic use inline styling to change color of text.
*/

$randomNumber = rand(1,100);

if($randomNumber > 50){
    echo "<p style='color: red;'$randomNumber>";
}
else{
    echo "<p style='color: blue;'$randomNumber>";
}

?>