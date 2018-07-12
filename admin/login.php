<?php

?>




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
					<form class="" action="login.php" method="post">
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
    <div class="footer  py-3">
     
            <div align="left">
             <span class="text-muted" >B-9, Chitrakoot Society, Zadeshwar Road,Bharuch.</span>
                </div></div>
    <div class="footer py-3 " style="background-color: transparent;" >
       <div align="right"> Created by
                  <a href="https://plus.google.com/103929880037258813858">Nikunj,</a>
                  <a href="https://plus.google.com/100510913946087775138"> Kishan</a>
            </div>
        </div>
    
  </footer>
</body>
</html>
