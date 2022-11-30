<?phpNa

@include 'configure.php';

if(isset($_POST['reserve_now'])){

   $Customer_Name = $_POST['Customer_Name'];
   $Customer_Address = $_POST['Customer_Address'];
   $Cusomer_Phone = $_POST['Cusomer_Phone'];


   if(empty($Customer_Name) || empty($Customer_Address) || empty($Cusomer_Phone)){
      $message[] = 'Please fill out all';
   }else{
      $insert = "INSERT INTO selling(Customer_Name, Customer_Address,Customer_Contact) VALUES('$Customer_Name', '$Customer_Address', '$Cusomer_Phone')";
      $upload = mysqli_query($conn,$insert);
      $message[] = 'Thank you for the reservation. You can collect your dog now';
   }

};

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Dog Adoption
        </title>
        <link rel="stylesheet" href="dog.css">
    </head>

    <body>

        <!-- Navbar -->
    
    <?php 
        include("Navbar.php"); 
    ?>

    <div class="message-new">
    <?php
    if(isset($message)){
   foreach($message as $message){
      echo '<span class="message">'.$message.'</span>';
   }
}
?>
</div>
    <div class="container-dog" id="HideOpen">
        <div class="admin-dog-form-container">
            <h3 class="form-heading">Reserve Now</h3>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <input type="text" name="Customer_Name" class="box-street" placeholder="Your full name"/>
                <input type="text" name="Customer_Address" class="box-street" placeholder="phone number"/>
                <input type="number" name="Cusomer_Phone" class="box-street" placeholder="contact number"/>
                <button class="btn" name="reserve_now">Reserve Now</button>
            </form>
        </div>

    </div>

     <!-- Footer -->

  <?php 
    include("footer.php"); 
  ?>
  
    </body>
</html>
