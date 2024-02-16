
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UOV-Transport</title>
    <!--bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--font awasome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
    integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <!--css link-->
    <link rel="stylesheet" href="index.css">
</head>
<body>


<!--nav bar--->
<div class="container-fluid"style="font-family: Georgia, serif;">
    <!--first child-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary  fixed-top" id="topNavBar">
            <div class="container-fluid navbar navbar-brand px-4 px-lg-5 ">
                <button class="navbar-toggler btn btn-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
                <img src="R8.png" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy">
					&nbsp;UOV-Transport
                    &nbsp;&nbsp;

               
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link " href="about.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link " href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link " href="login.php">Seat Booking</a></li>
                    </ul>
                    <div class="d-flex align-items-center"></div>
                
				
                <div>
                    <a href="login.php" class="text-reset text-decoration-none  mx-2"><b>Login</b></a> 
                    <a href="register.php" class="text-reset text-decoration-none mx-2"><b>Register</b></a>
                    <a href="admin_frontend/front_login.php" class="text-reset text-decoration-none mx-2"><b>Admin Panel</b></a>
                </div>
            </div>
</nav>
</div>




<!--HOME-->
<section id="home">
		<h1 class="text-center">UOV Transportation</h1>
		<p align="center">Your gateway to any destination in the world.</p>
		<div class="input-group m-4">	<!--Defult bootstrape input-->
			<input type="text"class="form-control" placeholder="Search Here">		<!--default form class-->
            <button class="btn signin">			
                <a href="before_login_cab_available.php"class="text-reset text-decoration-none"style="color:white;">Get Started</a>
            </button>
		</div>
	</section>


<footer class="py-4"style="background:linear-gradient(to right,#00008B,#000000,#00008B 100%);	color:white; text-align: center; width:100%;
	height:30px;
	background:rgba(0,0,0,.8);
	margin-top:-30px;
	text-align:center;
	padding:3px;
	background:linear-gradient(to right,#000000,#00008B 100%);
	left:0;
	 bottom:0;
	 width:100%;
	 position:fixed;">
    <p>All rights reserved &copy; UOV-Transportation 2023</p>
</footer>



    <!--bootstrap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    //*****table 
    <tr>
        <th></th>
        <th>Date</th>
        <th>Pick up</th>
        <th>Drop off</th>
        <th>Email</th>
        <th></th>
    </tr>
</body>
</html>