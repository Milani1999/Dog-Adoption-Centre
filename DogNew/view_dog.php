<?php

@include 'configure.php';

$id = $_GET['view'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Reserve Dog</title>
   <link rel="stylesheet" href="admin.css">
</head>
<body>

<!-- Navbar -->

<?php 
   include("Navbar.php"); 
?>

<div class="container-dog">
   <div class="admin-dog-form-container">
      <?php
         $select = mysqli_query($conn, "SELECT * FROM adopted_dogs WHERE Dog_ID = '$id'");
         while($row = mysqli_fetch_assoc($select)){
      ?>
   
      <form action="" method="post" enctype="multipart/form-data">

         <img src="uploaded_img/<?php echo $row['Dog_Image']; ?>" class="box-image" height="200px" width="200px">
         <p class="box">Adopted Date  : <?php echo $row['Adopted_Date']; ?></p>
         <p class="box">Adopted Place : <?php echo $row['Adopted_Place']; ?></p>

         <p class="em">Please note that we don't have delivery services.<br/>
         <p>Please come to our place to get your dog</p>

         
         <a href="reserve.php?reserve=<?php echo $row['Dog_ID']; ?>" class="btn">Reserve Now</a></button>
         <a href="User_adopt_table.php" class="btn">go back!</a>
      </form>
   


      <?php 
         }; 
      ?>
   </div>
</div>

    <!-- Footer -->

   <?php 
    include("footer.php"); 
   ?>

</body>
</html>