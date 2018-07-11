<?php
    require_once('../database/connection.php');


    if(isset($_POST['backup'])){
          //  $a=date('D., M jS, Y.g:i A');
          //  echo $a;        
		//	mtsqldump student_results students > backup
	    echo "button1 is working";
        }

     if(isset($_POST['resetok'])){
            
            echo "button is working";        
        }

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Admin</title>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    	<link href="../css/style.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-dark navbar-expand-md bg-dark">
            <div class="container-fluid">
                <a href="../index.php" class="navbar-brand">Yash classes</a>
            </div>
            <ul class="navbar-nav">
            <a href="../index.php" type="button" class="btn btn-primary " >Log out</a>
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
                                <a href="dashboard.php" class="list-group-item ">Dashboard</a>
                                <a href="add_student.php" class="list-group-item">Add student</a>
                                <a href="add_result.php" class="list-group-item">Add result</a>
                                <a href="add_user.php" class="list-group-item ">Add user</a>
                                <a href="settings.php" class="list-group-item disabled">Settings</a>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="container-fluid">
                        <h1>Settings</h1>
                        <div class="card">
                            <div class="card-body">
                                <form class="" action="" method="post">
                                    <div class="form-group row">
                                        <input type="submit" name="backup" value="Backup Tables" class="btn btn-primary"><pre>    </pre>
                                        <button type="button" class="btn btn-primary"  name="resettable" data-toggle="modal" data-target="#exampleModal">Reset tables
                                    </button>
                                    </div>
                                   
                                    <input type="submit" class="btn btn-outline-primary btn-lg" name="submit" value="Apply">
                                    

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reset Tables warning</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        First, Do this you have to Make your backup. If you Don't have made back up, make it.
        <br>
        If you click ok' then you lose all saved data from your tables<br>
        result, students<br>
   
        Did you really want to do that?<br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <input type="submit" name="resetok" value="OK" class="btn btn-primary" data-dismiss="modal" >
       
      </div>
    </div>
  </div>
</div>




<footer>

                   <div class="footer  py-3" align="right">Created by  
      <a href="https://plus.google.com/103929880037258813858" target="_blank">Nikunj,</a>
      <a href="https://plus.google.com/100510913946087775138" target="_blank"> Kishan</a>
    </div>

</footer>



</body>
</html>
