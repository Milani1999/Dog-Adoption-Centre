<?php

@include 'configure.php';

if(isset($_POST['add_dog'])){

   $adopted_date = $_POST['adopted_date'];
   $adopted_place = $_POST['adopted_place'];
   $dog_image = $_FILES['dog_image']['name'];
   $dog_image_tmp_name = $_FILES['dog_image']['tmp_name'];
   $dog_image_folder = 'uploaded_img/'.$dog_image;

   if(empty($adopted_date) || empty($adopted_place) || empty($dog_image)){
      $message[] = 'please fill out all';
   }else{
      $insert = "INSERT INTO adopted_dogs(Adopted_Date, Adopted_Place, Dog_Image) VALUES('$adopted_date', '$adopted_place', '$dog_image')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($dog_image_tmp_name, $dog_image_folder);
         $message[] = 'new dog added successfully';
      }else{
         $message[] = 'could not add the dog';
      }
   }

};
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="admin.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>


 <!-- Navbar -->

   <?php 
      include("AdminNav.php"); 
        

   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }

   ?>
   <center>
<div class="container">

   <div class="admin-dog-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new dog</h3>
         <input type="date" placeholder="enter dog adoped date" name="adopted_date" class="box">
         <input type="text" placeholder="enter dog adopted place" name="adopted_place" class="box">
         <input type="file" accept="image/png, image/jpeg, image/jpg" name="dog_image" class="box">
         <input type="submit" class="btn" name="add_dog" value="add dog">
      </form>

   </div>

   <?php
      $select = mysqli_query($conn, "SELECT * FROM adopted_dogs");
   ?>

   <div class="col-md-10">
      <table class="table">
         <thead>
         <tr>
            <th scope="col">dog image</th>
            <th scope="col">Adopted date</th>
            <th scope="col">Adopted place</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr scope="row">
            <td><img src="uploaded_img/<?php echo $row['Dog_Image']; ?>" height="100" width="150" alt=""></td>
            <td><?php echo $row['Adopted_Date']; ?></td>
            <td><?php echo $row['Adopted_Place']; ?></td>
         </tr>
      <?php } ?>
      </table>
   </div>

</div>

<center>
   <div>
    <!-- Footer -->

    <?php 
    include("footer.php"); 
  ?>
  </div>
</body>
</html>