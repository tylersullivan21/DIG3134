
<?php
 date_default_timezone_set('America/New_York');
 $date = date('m/d/Y h:i:s a', time());
 
 $today = date("D"); 
 ?>
 <?php
 echo'
<nav>
    <ul class="nav d-flex justify-content-center align-items-center">
     <li class="nav-item">
       <a class="nav-link active" href="index.php">Home</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="inventory.php">Inventory</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="contact.php">Contact</a>
     </li>
     <button style="padding: 4px;" class="grid-area:logout;" onclick="logout()" name="logout">Logout </button>
   </ul>
   <link rel="stylesheet" href="css/logged-in.css">
      <p class="signed-in-header"> Use code SULLY for free shipping and 10% off your next purchase. This deal is valid as of ' .$date .'  </p>
   </nav>
   '
   ?>