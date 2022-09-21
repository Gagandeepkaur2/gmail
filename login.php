<?php
    $connect=mysqli_connect("localhost","root","","gmail")or die("Connection Failed");
    session_start();
    if (isset($_SESSION['username']))
    {
      header("location: inbox.php");
    }

    if (isset($_POST['login'])) 
    {
	      $email=$_POST['email'];
	      $password=$_POST['password'];

	    $query="select * from signuptable where email= '{$email} and password = '{$password}'";
	    if(mysqli_query($connect,$query))
	    {
	    	while ($row=mysqli_fetch_array($query)) 
	    	{
		    session_start();
		    $_SESSION['email'] = $row['email'];
		    // print_r( $_SESSION['email']);
		    $_SESSION['id'] = $row['id'];
		    print_r($_SESSION['id']);
		    header("location: inbox.php");
	  	    echo "record fetched";
	        }
	    } 
	}   
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<title>LogIn</title>
</head>
<body>
<div class="container">
	<div class="row d-flex justify-content-center align-items-center " 
	style="height: 100vh; ">
		<div class="col-md-6">
			<form action="inbox.php" method="post" class="p-5" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
			  <!-- Login -->
			  <div class="text-center">
			    <h2>Login</h2>
			  </div>
			  <!-- Username input -->
			  <div class="form-outline mb-3">
			  	<label class="form-label">Email address</label>
			    <input type="email" name="email" 
			    class="form-control" />
			  </div>
			  <!-- Password input -->
			  <div class="form-outline mb-3">
			  	<label class="form-label">Password</label>
			    <input type="password" name="password" 
			    class="form-control" />   
			  </div>

			  <!-- Submit button -->
			  <input type="submit" name="login" value="Login" class="btn btn-primary btn-block mb-4"> 
			  <!-- Register buttons -->
			  <div class="text-center">
			    <p>Don't have an account? <a href="signupform.php">Sign Up</a></p>
			  </div>
			</form>
		</div>
		
	</div>
</div>
</body>
</html>