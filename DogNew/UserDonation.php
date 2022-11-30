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
 
    <!-- Contribute Section -->

  <div id="ContributeSection">

      <h1 class="ContributeTitle">Contribute for our centre</h1>
      <hr id="three"/>
      <p class="ContributeDesc">Please do not contribute money.
        We need dog foods, medicines, small kenels and materialized donations.
      </p>
      <button class="Contribute-Btn"><i class="fa fa-diamond"></i><br/><a href="Donation.php">Contribute</a></button>
  </div>

  <!-- Footer -->

  <?php 
    include("footer.php"); 
  ?>

</body>

</html>