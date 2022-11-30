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

$select = mysqli_query($conn, "SELECT * FROM pending_adopt");
?>

<div class="dog-display">
      <table class="dog-display-table">
        <h1 class="new-heading">Information about street dogs</h1>
        <thead>
          <tr>
            <th>Informer Name</th>
            <th>Contact No</th>
            <th>Dog seen place</th>
            <th>Action</th>
          </tr>
        </thead>
        <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><?php echo $row["Informer_Name"]?></td>
            <td><?php echo $row['Informer_Contact']; ?></td>
            <td><?php echo $row['Place_Dog']; ?></td>
            <td>
               <a href="admin_update.php" class="btn">
               Done
            </a>
            </td>
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