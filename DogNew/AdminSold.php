<?php

@include 'configure.php';

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Adopt Dogs</title>
    <link rel="stylesheet" href="Admin.css">
  </head>
<body>

<!-- Navigation Bar -->

 <?php 
include("AdminNav.php"); 

$select = mysqli_query($conn, "SELECT * FROM selling");
?>

   <div class="dog-display">
      <table class="dog-display-table">
        <h1 class="new-heading">Information about reserved dogs</h1>
        <thead>
          <tr>
            <th>Dog ID</th>
            <th>Customer Name</th>
            <th>Customer Address</th>
            <th>Contact Number</th>
          </tr>
        </thead>
        <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><?php echo $row["Dog_ID"]?></td>
            <td><?php echo $row['Customer_Name']; ?></td>
            <td><?php echo $row['Customer_Address']; ?></td>
            <td><?php echo $row['Customer_Contact']; ?></td>
         </tr>
         <?php } ?>
      </table>
   </div>


   <!-- Footer -->

   <?php 
    include("footer.php"); 
  ?>
  
</body>
</html>