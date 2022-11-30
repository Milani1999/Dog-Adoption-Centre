<?php 

session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: AdminHome.php");
    exit;
}

	include("config.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$Username = $_POST['Username'];
		$Password = $_POST['Password'];

	
			if (isset($logins[$Username]) && $logins[$Username] == $Password){

					$_SESSION['UserData']['Username']=$logins[$Username];
					header("location:AdminHome.php");
					$_SESSION["loggedin"] = true;
					exit;

					
			}

			//read from database
			$query = "select * from admin where Username = '$Username'";
			$result = mysqli_query($link, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['Password'] === $Password)
					{

						$_SESSION['User_ID'] = $user_data['User_ID'];
						$_SESSION["loggedin"] = true;
						header("Location: AdminHome.php");
						die;
					}
				}
			}
			
			echo "wrong username or Password!";
		}else
		{
			echo "wrong username or Password!";
		}
	

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="dog.css">

</head>
<body>

<!-- Navigation Bar -->

<?php 
    include("Navbar.php"); 
  ?>

<div class="bg">

	<div class="box-form">
	    <div class="box-login">
		    <h4 class="register-topic">Login</h4>
		    <form method="post">

			<input id="text" type="text" name="Username" class="form-login" placeholder="Username"><br><br>
			<input id="text" type="Password" name="Password" class="form-login" placeholder="Password"><br><br>

			<input id="button" type="submit" value="Login" class="btn-login"><br><br>

			<p class="swap">Don't have an account? <a href="register.php">  Click to Signup</a></p><br><br>
		</form>
	</div>
	</div>
</div>

	    <!-- Footer -->

		<?php 
    include("footer.php"); 
  ?>

</body>
</html>