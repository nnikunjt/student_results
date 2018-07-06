<?php
	require_once("connection.php");


	if(isset($_POST['submit'])){
		$roll_no = $_POST['roll_no'];
		$test_date =$_POST['exam_date'];
		$medium = $_POST['medium'];
		$std = $_POST['std'];
		$math =$_POST['math'];
		$science =$_POST['science'];
		$sst = $_POST['ss'];

		$insert_query = "INSERT INTO results(roll_no,test_date,std,medium ,math,science,social_science) VALUES('$roll_no','$test_date','$std','$medium','$math','$science','$sst')";

		if($conn->query($insert_query) === TRUE){
			echo "Your account has been created successfully !";
		}
		else
		{
			echo "This student is not registered ";
		}

	}
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add results</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
	<style media="screen">
		.container{
			padding-top: 1rem;
		}
		.header{
			font-size: 20px;
		}
	</style>
</head>
<body>

	<nav class="navbar navbar-dark navbar-expand-md bg-dark">
		<div class="container-fluid">
			<a href="#" class="navbar-brand">Yash classes</a>
		</div>
		<ul class="navbar-nav">
      		<a href="index.php" type="button" class="btn btn-primary " >Log out</a>
		</ul>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="container">
					<div class="card">
						<div class="card-header">
							Links
						</div>
						<div class="card-body">
							<ul class="list-group">
								<a href="add_student.php" class="list-group-item">Add student</a>
								<a href="" class="list-group-item disabled">Add result</a>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="container">
					<div class="row">
					   <div class="col-md-1"></div>
					   <div class="col-md-10">
						   <h1 class="card-title">Add Result</h1>
						   <div class="card">
							   <div class="card-body">
								   <form class="" action="" method="post">
									   <div class="form-group row">
										   <label for="exam_date" class="col-sm-2 col-form-label">Test date</label>
										   <div class="col-md-4">
											   <input type="date" class="form-control" name="exam_date" value="" required autofocus>
										   </div>
										   <label for="medium" class="col-sm-2 col-form-label">Medium</label>
										   <div class="col-sm-4">
											   <select class="form-control" name="medium">
												   <option>Gujarati</option>
												   <option>English(GSEB)</option>
												   <option>English(CBSC)</option>
											   </select>
										   </div>
									   </div>
									   <div class="form-group row">
										   <label for="std" class="col-sm-2 col-form-label">Std.</label>
										  <div class="col-sm-4">
											  <select class="form-control" name="std">
												  <option value="01">1</option>
												  <option value="02">2</option>
												  <option value="03">3</option>
												  <option value="04">4</option>
												  <option value="05">5</option>
												  <option value="06">6</option>
												  <option value="07">7</option>
												  <option value="08">8</option>
												  <option value="09">9</option>
												  <option>10</option>
												  <option>11</option>
												  <option>12</option>
											  </select>
										  </div>
									   </div>
									   <div class="form-group row">
										   <label for="roll_no" class="col-sm-2 col-form-label">Roll no.</label>
										   <div class="col-sm-4">
											   <input type="text" name="roll_no" class="form-control" value="" required>
										   </div>
									   </div>
									   <div class="form-group row">
										   <label class="col-sm-2 col-form-label header">Marks :</label>
									   </div>
									   <div class="form-group row">
										   <label for="math" class="col-sm-2 col-form-label">Math</label>
										   <div class="col-sm-3">
											   <input type="text" name="math" class="form-control" value="">
										   </div>
									   </div>
									   <div class="form-group row">
										   <label for="science" class="col-sm-2 col-form-label">science</label>
										   <div class="col-sm-3">
											   <input type="text" name="science" class="form-control" value="">
										   </div>
									   </div>
									   <div class="form-group row">
										   <label for="ss" class="col-sm-2 col-form-label">Social science</label>
										   <div class="col-sm-3">
											   <input type="text" name="ss" class="form-control" value="">
										   </div>
									   </div>
									   <center><input type="submit" name="submit" value="Submit" class="btn btn-outline-primary btn-lg"></center>
								   </form>
							   </div>
						   </div>
					   </div>
				   </div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
