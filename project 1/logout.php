<?php
setcookie("login_state", "false", time() + 20);
header("refresh:1; ./index.php"); 
echo 'Logging out...';

?>