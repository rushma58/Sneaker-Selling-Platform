<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
		<title>Registration</title>
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->	
		<link href="css\bootstrap.css" rel="stylesheet">
		<link href="css\style.css" rel="stylesheet">
	</head>
	<body>
		<!-- <a class="nav-link active" href="home_page.php"><img src="img/logo.png" alt="" class="logo"></a> -->
		
		
		

		<?php 
			session_start(); 
			include_once 'include/connection.php';

			
			//$email = "";
			$errors = array();

			if (isset($_POST['save'])) {
			    $fname = mysqli_real_escape_string($conn, $_POST['firstname']);
			    $lname = mysqli_real_escape_string($conn, $_POST['lastname']);
			    $email = mysqli_real_escape_string($conn, $_POST['email']);
			    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
			    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
			    $gender = mysqli_real_escape_string($conn, $_POST['gender']);

			    $username = mysqli_real_escape_string($conn, $_POST['username']);
			    $password = mysqli_real_escape_string($conn, $_POST['password']);
			    $confPassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

			    // Validation
			    if (empty($fname)) {
			        array_push($errors, "First Name is Required");
			    }
			    if (empty($username)) {
			        array_push($errors, "Username is Required");
			    }
			    if (empty($phone)) {
			        array_push($errors, "Phone Number is Required");
			    }
			    if (empty($password)) {
			        array_push($errors, "Password is Required");
			    }
			    if ($password != $confPassword) {
			        array_push($errors, "Confirm password is not match");
			    }
			    //print_r($errors);
			    // Check User
			    $userCheck = "SELECT * FROM userInfo WHERE username='$username' LIMIT 1";
			    $userResult = mysqli_query($conn, $userCheck);
			    $user = mysqli_fetch_assoc($userResult);

			    if ($user) {
			        if ($user['username'] === $username) {
			            array_push($errors, "Username is already exists");
			        }
			    }

			    
			    // finally, register a user
			    if (count($errors) == 0) {
			        $pass = md5($password);
			        // Create User 
			        $sql = "INSERT INTO userInfo (first_name, last_name, email, phone_number, dob, gender, username, u_password, created_on) VALUES('$fname', '$lname', '$email','$phone','$dob','$gender','$username', '$pass','now()')";
			        // var_dump($sql);
			        // die();
			        $register = mysqli_query($conn, $sql);
			        
			        // Create user profile
			        $userId = mysqli_insert_id($conn);
			        $userProfile = "INSERT INTO user_profile (user_id) VALUE('$userId')";
			        $profile = mysqli_query($conn, $userProfile);

			        $_SESSION['email'] = $email;
			        $_SESSION['userId'] = $userId;
			        $_SESSION['username'] = $username;
			        $_SESSION['message'] = "You are Logged in";
			       	header('location: login.php');
			    }
			    else
			    {
			    	//echo"validation error";
			    }

			   	 mysqli_close($conn);
				}
			?>	

<div class="wrapper">

		<div class="container">
			<?php include 'include/message.php'; ?>

	<form class="well form-horizontal" action="registration.php" method="POST"  id="contact_form">
		<fieldset>

		<!-- Form Name -->
		<legend><center><h2>Registration Form</h2></center></legend><br>

		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-5 control-label">First Name</label>  
		  <div class="col-md-5 inputGroupContainer">
		  <div class="input-group">
		  
		  <input  name="firstname" placeholder="First Name" class="form-control" id="firstname"  type="text">
		    </div>
		  </div>
		</div>

		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-5 control-label" >Last Name</label> 
		    <div class="col-md-5 inputGroupContainer">
		    <div class="input-group">
		  <input name="lastname" placeholder="Last Name" class="form-control" id="lastname" type="text">
		    </div>
		  </div>
		</div>

		<div class="form-group">
			  <label class="col-md-5 control-label">Email Address</label>  
				  <div class="col-md-5 inputGroupContainer">
					  <div class="input-group">
					  <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
					  <input  name="email" placeholder="Email Address" class="form-control" id="email"  type="email">
				    </div>
			  </div>
		</div>

		<div class="form-group">
			  <label class="col-md-5 control-label">Phone Number</label>  
				  <div class="col-md-5 inputGroupContainer">
					  <div class="input-group">
					  <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
					  <input  name="phone" placeholder="Phone Number" class="form-control" id="phone"  type="text">
				    </div>
			  </div>
		</div>

		<div class="form-group">
			  <label class="col-md-5 control-label">Date of Birth</label>  
				  <div class="col-md-5 inputGroupContainer">
					  <div class="input-group">
					  <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
					  <input  name="dob" placeholder="Date of Birth" class="form-control" id="dob"  type="date">
				    </div>
			  </div>
		</div>

		<div class="form-group">
			  <label class="col-md-5 control-label">Gender</label>  
				  <div class="col-md-5 inputGroupContainer">
						<div class="input-group">
						  <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
						<select name="gender" class="form-control selectpicker" id="gender">
							  <option value="">Select your Gender</option>
						      <option>Male</option>
						      <option>Female</option>
						      <option>Other</option>
						  </select>

						
				    </div>
			  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-5 control-label">Username</label>  
		  <div class="col-md-5 inputGroupContainer">
		  <div class="input-group">
		  <input  name="username" placeholder="Username" class="form-control" id="username" type="text">
		    </div>
		  </div>
		</div>

		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-5 control-label" >Password</label> 
		    <div class="col-md-5 inputGroupContainer">
		    <div class="input-group">
			  <input name="password" placeholder="Password" class="form-control" id="password" type="password">
		    </div>
		  </div>
		</div>

		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-5 control-label" >Confirm Password</label> 
		    <div class="col-md-5 inputGroupContainer">
		    <div class="input-group">
		  <input name="cpassword" placeholder="Confirm Password" class="form-control" id="cpassword" type="password">
		    </div>
		  </div>
		</div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-5 control-label"></label>
		  <div class="col-md-5"><br>
		    <button type="submit" id="submit" name="save" class="btn btn-lg btn-secondary " >SUBMIT </button>
		    
		  </div>
		</div>

		<div class="form-group" >
			<label for="login" class="col-md-5 control-label">Already have an account?</label>
				<a class="btn btn-lg btn-primary " href="./login.php">Login Here</a> 
			</div>


		</fieldset>
		</form>
		</div>
    </div><!-- /.container -->


	</body>
</html>