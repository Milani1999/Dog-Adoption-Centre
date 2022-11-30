<?php

@include 'configure.php';

if(isset($_POST['add_donators'])){

   $donator_name = $_POST['donator_name'];
   $donator_contact = $_POST['donator_contact'];
   $d_mateiral = $_POST['d_mateiral'];


   if(empty($d_mateiral) || empty($donator_contact) || empty($d_mateiral)){
      $message[] = 'Please fill out all';
   }else{
      $insert = "INSERT INTO donations(d_name, d_contact, d_material) VALUES('$d_mateiral', '$donator_contact', '$d_mateiral')";
      $upload = mysqli_query($conn,$insert);
      $message[] = 'Thank you for the information. We will contact us soon..';
   }

};

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Contribution
        </title>
        <link rel="stylesheet" href="dog.css">
    </head>

    <body>

        <!-- Navbar -->
    
    <?php 
        include("Navbar.php"); 

        if(isset($message)){
         foreach($message as $message){
            echo '<span class="message">'.$message.'</span>';
         }
      }
    ?>

   

    <div class="container-dog" id="HideOpen">
        <div class="admin-dog-form-container">
            <h3 class="form-heading">Contribute to our centre</h3>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <input type="text" name="donator_name" class="box-street" placeholder="Your full name"/>
                <input type="number" name="donator_contact" class="box-street" placeholder="phone number"/>
                <input type="text" name="d_mateiral" class="box-street" placeholder="Donating material"/>
                <button class="btn" name="add_donators">Inform about donations</button>
            </form>
        </div>

    </div>

     <!-- Footer -->

  <?php 
    include("footer.php"); 
  ?>
  
    </body>
</html>
