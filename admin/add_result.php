<?php
	require_once("../database/connection.php");


	if(isset($_POST['submit'])){
		$roll_no = $_POST['roll_no'];
		$test_date =$_POST['exam_date'];
		$math =$_POST['math'];
		$science =$_POST['science'];
		$sst = $_POST['ss'];
		$math_to = $_POST['math_to'];
		$science_to = $_POST['science_to'];
		$ss_to = $_POST['ss_to'];
		$mess;

          if ($math_to=="") {
       	       $math_to=0;
       	       $math=0;
             }

        	if ($science_to=="") {
       	       $science_to=0;
       	       $science=0;
             }
             if ($ss_to=="") {
       	       $ss_to=0;
       	       $sst=0;
             }



		$per = (($math+$science+$sst)*100)/($math_to+$science_to+$ss_to);



		$insert_query = "INSERT INTO results(roll_no,test_date,math_obtain,sci_obtain,sst_obtain,math_total,sci_total,sst_total,percentage) VALUES('$roll_no','$test_date','$math','$science','$sst','$math_to','$science_to','$ss_to','$per')";

		if($conn->query($insert_query) === TRUE){
			$mess = "Your account has been created successfully !";

		}
		else
		{
			$mess= "This student is not registered ";
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
	<link href="../css/style.css" rel="stylesheet">
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
      		<a href="../index.php" type="button" class="btn btn-primary " >Log out</a>
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
								<a href="dashboard.php" class="list-group-item">Dashboard</a>
								<a href="add_student.php" class="list-group-item">Add student</a>
								<a href="" class="list-group-item disabled">Add result</a>
								<a href="add_user.php" class="list-group-item">Add user</a>
						        <a href="settings.php" class="list-group-item">Settings</a>

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
								   <form class="" action="" method="post" >
									   <div class="form-group row">
										   <label for="roll_no" class="col-sm-2 col-form-label">Roll no.</label>
								   <div class="col-sm-4">
											   <input type="text" name="roll_no" class="form-control" value="" required autofocus>
										   </div>
									   </div>
									   <div class="form-group row">
										   <label for="exam_date" class="col-sm-2 col-form-label">Test date</label>
										   <div class="col-md-4">
											   <input type="date" class="form-control" name="exam_date" value="" required>
										   </div>
									   </div>
									   <div class="form-group row">
										   <label class="col-sm-2 col-form-label header">Marks :</label>
									   </div>
									   <div class="form-group row">
										   <label for="math" class="col-sm-2 col-form-label">Math</label>
										   <div class="col-sm-2">
											   <input type="text" name="math" class="form-control" value="">
										   </div>
										   <label for="" class="col-sm-2 col-form-label">out of</label>
										   <div class="col-sm-2">
											   <input type="text" name="math_to" class="form-control" value="">
										   </div>
									   </div>
									   <div class="form-group row">
										   <label for="science" class="col-sm-2 col-form-label">science</label>
										   <div class="col-sm-2">
											   <input type="text" name="science" class="form-control" value="">
										   </div>
										   <label for="" class="col-sm-2 col-form-label">out of</label>
										   <div class="col-sm-2">
											   <input type="text" name="science_to" class="form-control" value="">
										   </div>
									   </div>
									   <div class="form-group row">
										   <label for="ss" class="col-sm-2 col-form-label">Social science</label>
										   <div class="col-sm-2">
											   <input type="text" name="ss" class="form-control" value="">
										   </div>
										   <label for="" class="col-sm-2 col-form-label">out of</label>
										   <div class="col-sm-2">
											   <input type="text" name="ss_to" class="form-control" value="">
										   </div>
									   </div>
									   <center><input type="submit" name="submit" value="Add result" class="btn btn-outline-primary btn-lg">
									   </center>
								</form>
							   </div>
						   </div>
					   </div>
				   </div>
				</div>
			</div>
		</div>
	</div>





<!-- Footer -->
<footer class="page-footer font-small unique-color-dark pt-4">

    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer  py-3" align="right">Created by  
      <a href="https://plus.google.com/103929880037258813858" target="_blank">Nikunj,</a>
      <a href="https://plus.google.com/100510913946087775138" target="_blank"> Kishan</a>

    <!-- Copyright -->

  </footer>


</body>
</html>