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
				<div class="card">
					<div class="card-header">
						Links
					</div>
					<div class="card-body">
						<ul class="list-group">
							<a href="add_student.php" class="list-group-item">Add student</a>
							<a href="#" class="list-group-item disabled">Add result</a>
						</ul>
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
						        	<label for="medium" class="col-sm-2 col-form-label">Medium</label>
						                    <div class="col-sm-4">
						                        <select class="form-control" name="medium">
						                            <option>Gujarati</option>
						                            <option>English(GSEB)</option>
						                            <option>English(CBSC)</option>
						                        </select>
						                    </div>
						                </div>
						            <div class="form-group col-sm-6">
   							 <label for="search">Enter Roll No.</label>
    						<input type="number" class=" main form-control" id="search-box" placeholder="roll no">
  													</div>
						                <div class="select form-group row" align="center">
						                    <label for="std" class="col-sm-2 col-form-label">Std.</label>
						                    <div class="col-sm-5 text-center">
						                        <select class="form-control" name="std">
						                            <option>1</option>
						                            <option>2</option>
						                            <option>3</option>
						                            <option>4</option>
						                            <option>5</option>
						                            <option>6</option>
						                            <option>7</option>
						                            <option>8</option>
						                            <option>9</option>
						                            <option>10</option>
						                        </select>
						                    </div>
						                    </div>
                  <div class="card-body">
			        	<label for="subject" class="col-sm-2 col-form-label">subbject</label>	      <div class="form-group col-sm-6">
   							 <label for="search">maths</label>
    		<input type="text" class=" main form-control" id="search-box" placeholder="mark">
    	</div>
            <center><input type="submit" name="submit" value="Add result " class="btn btn-outline-primary btn-lg"></center>
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
