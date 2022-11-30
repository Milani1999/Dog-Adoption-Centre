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
  
  <!-- about us section -->

  <div class="row" id="AboutSection">
    <h1 class="AboutTitle">Know about us</h1>
            <p class="quote1">"A dog is the only thing on earth that loves you more than he loves himself."</p>
            <p class="author">-Josh Billings</p>

            <h1 class="subTitleAbout">What we provide ?</h1>

      <div class="row-about">
          <div class="col1">
            <img src="images/DogAdopt2.jpg" class="BlockImage"/>
            <h4 class="container-heading">Adopt Dogs</h4><br/>
            <p>There are many street dogs without owners. We adopt them and give good enviornment for them.</p>
          </div>
        
          <div class="col2">
            <img src="images/DogFood.jpg" class="BlockImage"/>
            <h4 class="container-heading">Give proper foods</h4><br/>
            <p>Street dogs are something who eat only the left orders or old foods. So we provide healthy food for them.</p>
          </div>

          <div class="col3">
            <img src="images/DogMedicine.jpg" class="BlockImage"/>
            <h4 class="container-heading">Medical Needs</h4><br/>
            <p>We can see lots of street dogs injured. We adopt and give good treatment for them and perform weekly
              progress. </p>
          </div>

          <div class="col4">
            <img src="images/DogSell.jpg" class="BlockImage"/>
            <h4 class="container-heading">Sell Dogs</h4><br/>
            <p>Once the adopted dogs are healthy we will sell them free of charge for kind family who is searching for a
              dog.</p>
          </div>
      </div>
  </div>


  <!-- Footer -->

  <?php 
    include("footer.php"); 
  ?>

</body>

</html>