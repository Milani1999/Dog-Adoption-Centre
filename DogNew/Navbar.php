
<?php


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Adopt Dogs</title>
    <link rel="stylesheet" href="dog.css">
  </head>

<body>

  <!-- Navigation Bar -->

  <div class="Nav">
    <ul>
      <li class="nav-list"><a href="index.php">Home</a></li>
      <li class="nav-list"><a href="User_about.php">About us</a></li>
      <li class="dropdown">
        <a href="User_services.php" class="dropbtn">Services</a>
          <div class="dropdown-content">
            <a href="street.php">Adopt Dogs</a>
            <a href="adopt.php">Sell dogs</a>
          </div>
      </li>
      <li class="nav-list"><a href="UserDonation.php">Contribute</a></li>
        
        <?php
        if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
        ?>
      
      <li class="nav-list-login"><a href="Logout.php">Signout</a></li>
      
        <?php }else{
        ?>
          <li class="nav-list-login"><a href="Login.php">Login</a></li>
        <?php }
        ?>
    </ul>

  </div>

  </body>
</html>

