<?php

    require_once('connection.php');


    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $select_query = "SELECT `user_name`, `password` FROM `users` WHERE `user_name` = '$username' AND `password` = '$password'";
        $select_run = mysqli_query($conn, $select_query);
        $select_row = mysqli_fetch_array($select_run, MYSQLI_ASSOC);


        $user = $select_row['user_name'];
        $pass = $select_row['password'];


        if($username == $user && $password == $pass)
        {
            header('location:dashboard.php');
        }
        echo "Invalid username or password.";
    }
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href="CSS/style.css" rel="stylesheet">



    <title>Home</title>
  </head>
  <body>
  	<nav class="navbar navbar-dark navbar-expand-md bg-dark">
    <div class=" container-fluid">
      <a href="index.php" class="navbar-brand">Yash classes</a>
    </div></nav>


    

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log in</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h1 class="card-title">Login</h1>
			<div class="card">
				<div class="card-body">
					<form class="" action="dashboard.php" method="post">
						<div class="form-group row">
		                    <label for="username" class="col-sm-2 col-form-label">User name</label>
		                    <div class="col-sm-10">
		                        <input type="text" class="form-control" name="username" value="" autofocus required>
		                    </div>
		                </div>
						<div class="form-group row">
		                    <label for="password" class="col-sm-2 col-form-label">Password</label>
		                    <div class="col-sm-10">
		                        <input type="text" class="form-control" name="password" value="" required>
		                    </div>
		                </div>
						<input type="submit" class="btn btn-outline-primary btn-lg" name="login" value="Login">
					</form>
				</div>
			</div>
		</div>

	</div>

</div>

<footer class="page-footer font-small unique-color-dark pt-4">

    
      <div class="footer  py-3" align="right">Created by  
      <a href="https://plus.google.com/103929880037258813858" target="_blank">Nikunj,</a>
      <a href="https://plus.google.com/100510913946087775138" target="_blank"> Kishan</a>
    </div>
   

  </footer>

</body>
</html>
