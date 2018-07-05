<?php

 $s_name="kishan";
  $roll_no=1218001;
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

          <form class="" action="dashboard.php" method="post">
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
  </div>
</nav>




<div class="card">
 <div class=" col-sm-8 card-body" >
<div class="form-group row">
       <label class="text-center col-sm-3 form-contro" for="mediumm">Select Medium</label>
    <select class="text-center col-sm-2 form-control" name="medium" id="medium">

                   <option>Gujarati</option>
                   <option>English(GSEB)</option>
                   <option>English(CBSC)</option>
                </select>
          <pre>    </pre>

            <label for="roll_no" class="col-sm-2 col-form-label">Roll no.</label>
                       <div class="col-sm-2">
                         <input type="text" name="roll_no" class="form-control" value="" required>
                       </div>
      <a href="result.php"  type="button" class="text-center  btn btn-success form-contro">
  Find Result</a>
                   </div>
               </div>
            </div>

<table class="table" id="t-main">

    <div class=" row form-group">
   <pre>  </pre>
   <p class="lead"> Name:   <?php echo $s_name; ?></h1> Roll no. <?php echo $roll_no; ?> </p>
       </div>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Subjects</th>
      <th scope="col">Total mark</th>
      <th scope="col">Obtain mark</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>maths</td>
      <td>100</td>
      <td>100</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Science</td>
      <td>100</td>
      <td>95</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Scocial Science</td>
      <td>100</td>
      <td>93</td>
    </tr>
  </tbody>
</table>











      </body>
   </html
