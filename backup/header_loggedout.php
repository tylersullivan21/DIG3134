
<nav class="navbar">
    <ul class="nav-links d-flex justify-content-center align-items-center">
     <li class="nav-item">
       <a class="nav-link active" href="index.php">Home</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="inventory.php">Inventory</a>
     </li>
     <li class="nav-item">
       <a class="nav-link" href="contact.php">Contact</a>
     </li>
   </ul>
   <form class="input-form" action="validate-user.php" method="post">

   <div class="username_input" class="form-field">
       <label for="username">Username</label>
       <input type="text" name="username" id="shoe-brand" placeholder="Username" required />
     </div>

     <div class="password_input" class="form-field">
       <label for="password">Password</label>
       <input type="password" namae="password" id="shoe-brand" placeholder="Password" required />
     </div>
     <div class="submit-btn" class="form-field">
       <label for="submit"></label>
       <input style="padding: 4px; width: 65px;" class="submit-button" type="submit" value="Submit" name="submit" />
     </div>
</form>
   </nav>
   <link rel="stylesheet" href="css/input-form.css?v=1.0">
  
  <form action="create_form.php" class="create-account-content">
  
  <p class="tagline">Need an account?</p>

  <div class="create">
  <label for="submit"></label>
  <input class="create-btn" type="submit" value="Create Account" name="submit" />
  </div>
</form >



