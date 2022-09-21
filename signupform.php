


<?php
	$connect=mysqli_connect("localhost","root","","gmail")or die("Connection Failed");

	if(isset($_POST['save']))
	{
	  $fname=$_POST['fname'];
	  $lname=$_POST['lname'];
	  $email=$_POST['email'];
	  $password=$_POST['password'];
	  $repassword=$_POST['repassword'];

	  // $query="select email from signupform where email='$email'";
	  // $result=mysqli_query($connect,$query);
	  // $count=mysqli_num_ros($result);
	  // if($count>0)
	  // {
	  // 	echo "Email already exists";
	  // }
	  // else
   //    {
	    $sql="insert into signupform(firstname,lastname,email,password,againpassword) values('$fname','$lname','$email','$password','$repassword')";
	    if(mysqli_query($connect,$sql))
	    {
	    	echo "record insert";
	    }
	    else
	    {
	    	echo "record not insert";
	    }
	  // }
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>SignUp</title>
</head>
<body>
<div class="container">
	<div class="row d-flex justify-content-center align-items-center " 
	style="height: 100vh; ">
		<div class="col-md-6">
			<form action="login.php" method="post" class="p-5" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
			  <!-- Login -->
			  <div class="text-center">
			    <h2>Sign Up</h2>
			  </div>
			  <!-- Username input -->
			  <div class="form-outline mb-4">
			  	<label class="form-label" for="form2Example1">Firstname</label>
			    <input type="text" id="form2Example1" class="form-control" 
			    name="fname" required />
			    <label class="form-label" for="form2Example1">Lastname</label>
			    <input type="text" id="form2Example1" class="form-control" 
			    name="lname" required />
			  </div>
			  <!-- Email input -->
			  <div class="form-outline mb-4">
			  	<label class="form-label" for="form2Example1">Email address</label>
			    <input type="email" id="form2Example1" class="form-control" 
			    name="email" required />
			  </div>
			  <!-- Password input -->
			  <div class="form-outline mb-4">
			  	<label class="form-label" for="form2Example2">Password</label>
			    <input type="password" id="form2Example2" class="form-control" 
			    name="password" required />   
			  </div>
			 <div class="form-outline mb-4">
			  	<label class="form-label" for="form2Example2">Re-Enter Password</label>
			    <input type="password" id="form2Example1" class="form-control" 
			    name="repassword" required />   
			  </div>
			  <!-- Submit button -->
			  <input type="submit" name="save" value="Sign in" class="btn btn-primary btn-block mb-4"> 
			  <!-- Register buttons -->
			  <div class="text-center">
			    <p>Already have an account? <a href="login.php">Login</a></p>
			  </div>
			</form>
		</div>
		
	</div>
</div>
</body>
</html>