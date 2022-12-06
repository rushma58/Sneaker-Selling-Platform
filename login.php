<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>Login</title>

	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	 <link href="css\bootstrap.css" rel="stylesheet"> -->
	<link href="css\bootstrap.css" rel="stylesheet">
		<link href="css\style.css" rel="stylesheet">
</head>

<?php
	session_start();
	include_once 'include/connection.php';

	if(isset($_SESSION['username'])){
     	//header('location: dashboard.php');
	}
	$errors =array();

	if (isset($_POST['login'])) {
	    $username =mysqli_real_escape_string($conn, $_POST['username']);
	    $password = mysqli_real_escape_string($conn,$_POST['password']);
	    $admin_pass = md5("admin");

	   if (empty($username)){
	    array_push($errors,"Username is Required");
	    }
	    if (empty($password)){
	    array_push($errors,"Password is Required");
	    }
	    if (count($errors) == 0){
        $pass= md5($password); 
        $query ="SELECT * FROM userInfo WHERE username= '$username' AND u_password= '$pass'";
        //var_dump($query);
        //die();

        if($username =="admin" && $pass == $admin_pass){
        	header('location: admin_panel.php');
        }


        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            // var_dump($row);
            // die();
            $_SESSION['username'] = $username;
            $_SESSION['userId'] = $row['user_id'];
            $_SESSION['message']="You are Logged in";
            
            header('location: home_page.php');
        }else{
            array_push($errors, "Wrong Email and Password");
        }
    }
}
?>

<body>
	
<!-- 	<div class="wrapper fadeInDown">
		<fieldset>
			
			<form method= "POST" action="login.php">
				<div class="mb-3 mt-3">
					<label for="username" class="form-label">Username: </label>
					<input type="text" class="form-control" id="username" name="username">
				</div>
				<div class="mb-3 ">
					<label for="password" class="form-label">Password:</label>
					<input type="password" class="form-control" id="password" name="password">
				</div>
				
				<input class="btn btn-primary" type="submit" id="submit" name="login" value="Login"><br><br>
				<label for="registration">Don't have an account? </label>
				
				<a class="btn btn-info" href="./registration.php">Register Now</a>
			</form>
		</fieldset>
	</div>
	
</body>
</html> -->


 <div class="wrapper">
 	
    <form class="well form-horizontal" method= "POST" action="login.php">       
      <h1 class="form-signin-heading">Please login</h1>
      <?php include 'include/message.php'; ?>

      <div class="form-group">
		  <label class="col-md-5 control-label">Username</label>  
		  <div class="col-md-3 inputGroupContainer">
		  <div class="input-group">		  
		  <input type="text" class="form-control" name="username" placeholder="Username" id ="username">
		    </div>
		  </div>
		</div>

		<div class="form-group">
		  <label class="col-md-5 control-label">Password</label>  
		  <div class="col-md-3 inputGroupContainer">
		  <div class="input-group">		  
		  <input type="password" class="form-control" name="password" placeholder="password" id ="password">
		    </div>
		  </div>
		</div>
      
      	<div class="form-group">
		  <label class="col-md-5 control-label"></label>
		  <div class="col-md-3"><br>
		    <input type="submit" class="btn btn-lg btn-secondary " id="login" name="login" value="Login">
		  </div>
		</div>
      
      <div class="form-group" >
			<label for="registration" class="col-md-5 control-label">Don't have an account?</label>
				<a class="btn btn-lg btn-primary " href="./registration.php">Register Now</a> 
			</div>
      
      

    </form>
  </div>
	</body>
</html>
