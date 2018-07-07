<<<<<<< HEAD
<?php 


 require_once ('connection.php');

 				if(isset($_POST['submit']))
    {
        $sname = $_POST['s_name'];
        $smedium = $_POST['medium'];
        $std = $_POST['std'];
        $roll_no = $_POST['roll_no'];
        $tdate = $_POST['exam_date'];
        $mtotal = $_POST['mathtotal'];
        $mobtain = $_POST['mathobtain'];
        $stotal = $_POST['sciencetotal'];
        $sobtain = $_POST['scienceobtain'];
        $sstotal = $_POST['sstotal'];
        $ssobtain = $_POST['ssobtain'];
        		        	
        		if ($mtotal=="") {
       	       $mtotal=0;  
       	       $mobtain=0;             	
             }	    

        	if ($stotal=="") {
       	       $stotal=0;  
       	       $sobtain=0;             	
             }	    
             if ($sstotal=="") {
       	       $sstotal=0;  
       	       $ssobtain=0;             	
             }	
            
             $percent=  (( $mobtain+ $ssobtain+ $sobtain)*100)/( $mtotal+ $stotal+ $sstotal);         
            $insert_query = "INSERT INTO 
          student_mark(`name`, `t_date`, `roll_num`, `medium`, `std`, `math_t`, `math_o`, 
                       `science_t`, `science_o`, `ss_t`, `ss_o`, `percent`)
                        VALUES
                        ('$sname','$tdate','$roll_no','$smedium','$std','$mtotal','$mobtain',
                        '$stotal','$sobtain','$sstotal,'$ssobtain','$percent')";

            
            if($conn->query($insert_query) === TRUE)
            {
                echo "Your account has been created successfully !";
            }
            else
            {
                echo "Problem occurd during registration proccess.";
            }
  }

   ?>
=======
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

>>>>>>> 1c73777c8b451664482773228fd5a31e659756b8



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
<<<<<<< HEAD
								   <form class="" action="#" method="post">
=======
								   <form class="" action="" method="post">
>>>>>>> 1c73777c8b451664482773228fd5a31e659756b8
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
<<<<<<< HEAD
										   <label for="student_name" class="col-sm-2 col-form-label">Student name</label>
										   <div class="col-sm-6">
											   <input type="text" class="form-control" name="s_name" value="" required>
										   </div>
									   </div>
									   <div class="form-group row">
										   <label class="col-sm-3 col-form-label header display-4">Subjects :</label>
										  
=======
										   <label class="col-sm-2 col-form-label header">Marks :</label>
>>>>>>> 1c73777c8b451664482773228fd5a31e659756b8
									   </div>
									   <div class="form-group row">
										   <label for="math" class="col-sm-3 col-form-label">Math</label>
										   <div class="col-sm-3">
											   <input type="text" name="mathtotal" class="form-control" value="" placeholder="total mark">
										   </div>
										   <div class="col-sm-3">
											   <input type="text" name="mathobtain" class="form-control" value=""  placeholder="obtain mark">
										   </div>
									   </div>
									   <div class="form-group row">
										   <label for="science" class="col-sm-3 col-form-label">science</label>
										   <div class="col-sm-3">
											   <input type="text" name="sciencetotal" class="form-control" value=""  placeholder="total mark">
										   </div>
										   <div class="col-sm-3">
											   <input type="text" name="scienceobtain" class="form-control" value=""  placeholder="obtain mark">
										   </div>
									   </div>
									   <div class="form-group row">
										   <label for="ss" class="col-sm-3 col-form-label">Social science</label>
										   <div class="col-sm-3">
											   <input type="text" name="sstotal" class="form-control" value=""  placeholder="total mark">
										   </div>
										   <div class="col-sm-3">
											   <input type="text" name="ssobtain" class="form-control" value="" placeholder="obtain mark">
										   </div>
									   </div>
									   <center><input type="submit" name="submit" value="Add Result" class="btn btn-outline-primary btn-lg"></center>
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
