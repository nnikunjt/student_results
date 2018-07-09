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
  <link href="style.css" rel="stylesheet">



    <title>Home</title>
  </head>
  <body>
  	<nav class="navbar navbar-dark navbar-expand-md bg-dark">
    <div class=" container-fluid">
      <a href="index.php" class="navbar-brand">Yash classes</a>
    </div>



     <div class="form-group">
      <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModalCenter" >
  Admin
</button></div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Sing in</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">

          <form class="" action="" method="post">
            <div class="form-group row">
                        <label for="username" class="form-label">User name</label>

                            <input type="text" class="form-control" name="username" value="" autofocus required>

                    </div>
            <div class="form-group row">
                        <label for="password" class="form-label">Password</label>

                            <input type="password" class="form-control" name="password" value="" required>

                    </div>
            <input type="submit" class="btn btn-outline-primary btn-lg" name="login" value="Login">
          </form>
        </div>
      </div>
    </div>
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</nav>


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form class="" action="result.php" method="post">
                        <div class="form-group row">
                            <label for="roll_no" class="col-sm-1 col-form-label">Roll no.</label>
                            <div class="col-sm-2">
                                <input type="text" name="roll_no" class="form-control" value="" required>
                            </div>
                            <div class="col-sm-1">
                                <input type="submit" name="find" class="text-center btn btn-success" value="Find Result">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

      </body>
   </html
