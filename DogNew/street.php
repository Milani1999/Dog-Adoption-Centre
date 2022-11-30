<?php

@include 'configure.php';

if(isset($_POST['add_information'])){

   $inform_name = $_POST['inform_name'];
   $inform_contact = $_POST['inform_contact'];
   $inform_place = $_POST['inform_place'];


   if(empty($inform_name) || empty($inform_contact) || empty($inform_place)){
      $message[] = 'Please fill out all';
   }else{
      $insert = "INSERT INTO pending_adopt(Informer_Name, Informer_contact, Place_Dog) VALUES('$inform_name', '$inform_contact', '$inform_place')";
      $upload = mysqli_query($conn,$insert);
      $message[] = 'Thank you for the information. We will contact us soon..';
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

    <div class="Adopt_Description">
        <h1>Inform about street dogs</h1>
        <p class="Desc-street">Street dogs may be stray dogs, 
            pets which have strayed from or are abandoned by their owners, 
            or may be feral animals that have never been owned.
            The best thing to do for a stray dog is to capture them, 
            provide medical care that includes spay or neuter procedures, 
            vaccines and finding the stray a home.</p>
            
    </div>
    

    <div class="street-col1">
        <h4 class="sub-street">Let's do this together</h4>
        <h3 class="sub-list-street">If you see a stray dog please don't hesitate to contact us. 
            <br/>Few steps to secure a dog. They too have the rights to live. 
        </h3>
            <ul class="bullet-street">
                <li>Step 1 : Fille the below form and click "Inform about street dogs"</li>
                <li>Step 2 : Fill the necessary information and click submit</li>
                <li>Step 3 : Make sure to give a valid phone number so that our employee can contact you</li>
                <li>Step 4 : Please route our employee to the place where you saw the dog</li>
                <li>Step 5 : Be happy that you saved a life of a dog</li>
            </ul>
    </div>

    <div class="street-col2">
        <img src="images/StreetDog.jpg"/>
    </div>
    <hr/>
    
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
            <h3 class="form-heading">Inform About Street Dogs</h3>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <input type="text" name="inform_name" class="box-street" placeholder="Your full name"/>
                <input type="number" name="inform_contact" class="box-street" placeholder="phone number"/>
                <input type="text" name="inform_place" class="box-street" placeholder="Place you saw the dog"/>
                <button class="btn" name="add_information">Inform about street dogs</button>
            </form>
        </div>

    </div>

     <!-- Footer -->

  <?php 
    include("footer.php"); 
  ?>
  
    </body>
</html>
