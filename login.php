<?php
include("configuration.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!--
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport UOV</title>
    <link rel="stylesheet" href="loginStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	-->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet"type="text/css"href="style.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/propper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
        
	<div class="container login-register bg-danger">
		<ul class="nav nav-tabs justify-content-center bg-danger font-weight-bold">
			<li class="nav-item">
				<a href="#login"class="nav-link"data-toggle="tab">Login</a>
			</li>
			<li class="nav-item">
				<a href="#register"class="nav-link"data-toggle="tab">Register</a>
			</li>	
		</ul>
		
		<div class="tab-content m-2">
			<div class="tab-pane container"id="login">
				<form method="post">
					<div class="form-group">
						<input type="email"name="login_email"placeholder="login email"class="form-control m-2">
						<input type="password"name="login_password"placeholder="login password"class="form-control m-2">
						<button name="login"class="form-control btn btn-danger font-weight-bold m-2"></button>
					</div>
				</form>
			</div>
		
	
			<div class="tab-pane container fade"id="register">
				<form method="post">
					<div class="form-group">
						<input type="email"name="register_email"placeholder="Register email"class="form-control m-2">
						<input type="password"name="register_password"placeholder="Register password"class="form-control m-2">
						<button name="register"class="form-control btn btn-danger font-weight-bold m-2"></button>
					</div>
				</form>
			</div>
		</div>
		</div>
</body>


<?php
if(isset($_POST["login"]))
{
	echo "pressed";
	$login_email=$_POST["login_email"];
	$login_password=$_POST["login_password"];
	$email_from_database="";
	$password_from_database="";
	$login_query="SELECT * FROM user WHERE email='$login_email' AND password='$login_password'";
	$login_query_result=mysqli_query($conn,$login_query);
	if($login_query_result)
	{
		if(mysqli_num_rows($login_query_result)>0)
		{
			while($row=mysqli_fetch_assoc($login_query_result))
			{
				$email_from_database=$row["email"];
				
			}
		}
	}
	if($email_from_database==$login_email)
	{
		session_start();
		$_SESSION['email']=$login_email;
		header("Location:main.php");	/** connect main.php */
	}
}
?>

<?php
if(isset($_POST["register"]))
{
	echo "pressed";
	$register_email=$_POST["register_email"];
	$register_password=$_POST["register_password"];
	$email_from_database="";
	$password_from_database="";
	$register_query="INSERT INTO user(email,password) VALUES('$register_email','$register_password')";
	$register_query_result=mysqli_query($conn,$register_query);
	if($register_query_result)
	{
		echo "register successful";
	}
	else
	{
		mysqli_error($conn);
	}
}
?>
</html>








<!--
<!DOCTYPE html>
<html lang="en">
<head>
<--
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport UOV</title>
    <link rel="stylesheet" href="loginStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
	--
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet"type="text/css"href="loginStyle.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/propper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    
	 <nav class="navbar"id="navbar1">
		<div class="container-fluid">
			<button class="btnLogin-popup p-2 my-lg-2 my-2 navbar-toggler"><b>Click Here</b></button>
		</div>
	</nav>
   
	<---LOGIN PAGE---
	<div class="wrapper">
		<span class="icon-close"><ion-icon name="close"></ion-icon></span>	
		
		<---LOGIN PAGE---
		<div class="form-box login">
			<h2>Login</h2>
			<form action="#">
					<div class="input-box">
							<span class="icon"><ion-icon name="mail"></ion-icon></span>
						<input type="email"required>
						<label>Email</label>
					</div>
					
					<div class="input-box">
						<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>	
						<input type="password"required>
						<label>Password</label>
					</div>
					
					
					<div class="remember-forgot">
						<label><input type="checkbox">Remember me</label>
						<a href="#">Forgot password?</a>
					</div>
					
					<button type="submit"class="btn">
						<div class="btn_text"><b>Login</b></div>
					</button>
					
					<div class="login-register">
						<p>Don't have an account?	<a href="#"class="register-link">Register</a></p>
					</div>		
			</form>
		</div>
		
		<---REGISTER PAGE---
		<div class="form-box register">
			<h2>Registration</h2>
			<form action="#">
					
					<div class="input-box">
							<span class="icon"><ion-icon name="person"></ion-icon></span> 
						<input type="text"required>
						<label>Username</label>
					</div>
					
					<div class="input-box">
							<span class="icon"><ion-icon name="mail"></ion-icon></span> 
						<input type="email"required>
						<label>Email</label>
					</div>
					
					<div class="input-box">
						<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>	
						<input type="password"required>
						<label>Password</label>
					</div>
					
					
					<div class="remember-forgot">
						<label><input type="checkbox">I agree to the terms & conditions </label>
					</div>
					
					<button type="submit"class="btn">
						<div class="btn_text"><b>Register</b></div>
					</button>
					
					<div class="login-register">
						<p>Already have an account?	<a href="#"class="login-link">Login</a></p>
					</div>		
			</form>
		</div>
	</div>
	
      <---Script copys--
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>	<--from bootstrap--

	<script src="LoginScript.js"></script>	<--script from js-->
	
	<!--script from icon webside--
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>
</html>
-->




















