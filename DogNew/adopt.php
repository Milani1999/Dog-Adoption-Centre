<?php

@include 'configure.php';

?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>
                Adopt a dog from our center
            </title>
            <link rel="stylesheet" href="dog.css">
        </head>

        <body>

        <!-- Navbar -->

        <?php 
            include("Navbar.php"); 
        ?>

        <div class="Adopt_Description">
            <h1>Inform about street dogs</h1>   
        </div>

        <div class="street-col1">
        <p class="Desc-street">After taking the street dogs to the center, we give them with good food and medicines</p>
            <p class="Desc-street">No need to pay. Just take them home and give love.</p><br/>
            <p class="Desc-street">Follow the steps to adopt a dog from our centre</p><br/>
            <ul class="bullet-street">
                <li>Step 1 : View the dogs in our list by clicking "adopt a dog now"</li>
                <li>Step 2 : Select a dog you wish to adopt</li>
                <li>Step 3 : Click on buy now</li>
                <li>Step 4 : Your dog will be deserved for you</li>
                <li>Step 5 : You can come to our centre and take home for free</li>
            </ul>
        </div>

        <div class="street-col2">
            <img src="images/Dog 9.jpg"/>
        </div>

        <button class="btn-streetdog2"><a href="User_adopt_table.php">Adopt a dog now</a></button>
        
    <!-- Footer -->

  <?php 
    include("footer.php"); 
  ?>


    </body>

</html>
