<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Adopt Dogs</title>
    <link rel="stylesheet" href="dog.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>

<body>

  <!-- Navigation Bar -->

  <?php 
    include("Navbar.php"); 
  ?>

  <!-- services section -->

  <div id="ServiceSection">
      <div class="row">
        <h1 class="ServiceTitle">Explore our services</h1>
        <p class="quote1 ">"Buying expensive dogs and ignoring the street ones, does not make you a dog lover."</p>
          
        <div class="column-1">
          <img src="images/Dogss.jpg"/>
        </div>
          
        <div class="column-2">
          <h1 class="ServiceDesc">Inform us if there is a street dog</h1>
          <button class="services-btn"><a href="street.php">Adopt street dogs</a></button>
          <h1 class="ServiceDesc">Buy a dog for free</h1>
          <button class="services-btn"><a href="adopt.php">Sell dogs for free</a></button>
        </div>
  </div>
          
  <!-- Footer -->

  <?php 
    include("footer.php"); 
  ?>

</body>

</html>