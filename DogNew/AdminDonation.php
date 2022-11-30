<?php

@include 'configure.php';

?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Donators</title>
    <link rel="stylesheet" href="Admin.css">
  </head>
<body>

<!-- Navigation Bar -->

 <?php 
include("AdminNav.php"); 

$select = mysqli_query($conn, "SELECT * FROM donations");
?>

   <div class="dog-display">
      <table class="dog-display-table">
        <h1 class="new-heading">Information about donators</h1>
        <thead>
          <tr>
            <th>Donator ID</th>
            <th>Donator Name</th>
            <th>Donator Address</th>
            <th>Contact Number</th>
          </tr>
        </thead>
        <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><?php echo $row["d_id"]?></td>
            <td><?php echo $row['d_name']; ?></td>
            <td><?php echo $row['d_material']; ?></td>
            <td><?php echo $row['d_contact']; ?></td>
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