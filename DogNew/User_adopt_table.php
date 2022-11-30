<?php

@include 'configure.php';

?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <title>
                Adopt a dog from our center
            </title>
            <link rel="stylesheet" href="admin.css">
        </head>

        <body>

        <!-- Navbar -->

        <?php 
            include("Navbar.php"); 
        ?>

        <div class="Adopt_Description">
            <h1>Select your prefered dog...</h1>   
        </div>

        <?php
            $select = mysqli_query($conn, "SELECT * FROM adopted_dogs");
        ?>

        <div class="dog-display">
            <table class="dog-display-table">
                <thead>
                    <tr>
                        <th>dog image</th>
                        <th>action</th>
                    </tr>
                </thead>

            <?php 
                while($row = mysqli_fetch_assoc($select)){ 
            ?>
            <tr>
                <td><img src="uploaded_img/<?php echo $row['Dog_Image']; ?>" height="100" width="150" alt=""></td>
                <td>
                    <a href="view_dog.php?view=<?php echo $row['Dog_ID']; ?>" class="btn"> View</a>
                </td>
            </tr>
      
            <?php 
                } 
            ?>
      </table>
   </div>

    <!-- Footer -->

  <?php 
    include("footer.php"); 
  ?>


        </body>

    </html>
