<?php
SESSION_START();

 if($_SESSION['user_name'] ==""){
     header('location: ./index.php');
 }



    require_once('../database/connection.php');


    if(isset($_POST['resetok'])){

       $reset_results='DELETE FROM results';
       $reset_students='DELETE FROM students';

       if($conn->query($reset_results) === TRUE){
            $auto="ALTER TABLE results AUTO_INCREMENT = 1";
            if($conn->query($auto) === TRUE){
                    echo "done";
               }
           }
          else {
              echo "result not working";
          }


          if($conn->query($reset_students) === TRUE){
              $auto="ALTER TABLE students AUTO_INCREMENT = 1";
              if($conn->query($auto) === TRUE){
                    echo "done";
               }
          }
          else {
              echo "students not working";
          }

     }


    if(isset($_POST['backup_students'])){
            date_default_timezone_set('Asia/Kolkata');
            $a=date('j-M-Y.g:i A');

            $query = "CREATE TABLE `backup_students_$a` as SELECT * FROM students";

            if($conn->query($query) === TRUE){
                echo "done";
            }
            else {
                echo "not working";
            }
        }

        if(isset($_POST['backup_results'])){
                date_default_timezone_set('Asia/Kolkata');
                $a=date('j-M-Y.g:i A');

                $query = "CREATE TABLE `backup_results_$a` as SELECT * FROM results";

                if($conn->query($query) === TRUE){
                    echo "done";
                }
                else {
                    echo "not working";
                }
            }


            $backup_students = mysqli_query( $conn, "SHOW TABLES LIKE '%backup_students_%' ");
            $backup_results = mysqli_query( $conn, "SHOW TABLES LIKE '%backup_results_%' ");


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
        <style type="text/css">
            h1{
                margin-top: 1rem;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-dark navbar-expand-md bg-dark">
            <div class="container-fluid">
                <a href="../index.php" class="navbar-brand">Yash classes</a>
            </div>
            <ul class="navbar-nav">
                <a href="./logout.php" class="btn btn-primary">Log out</a>
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
                                <a href="add_student.php" class="list-group-item ">Add student</a>
                                <a href="add_result.php" class="list-group-item">Add result</a>
                                <a href="add_user.php" class="list-group-item">Add user</a>
                                <a href="settings.php" class="list-group-item disabled">Settings</a>

                            </ul>
                        </div>
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



                                        <input type="submit" name="backup_students" value="Backup students Table" class="btn btn-primary"><pre>    </pre>
                                        <input type="submit" name="backup_results" value="Backup results Table" class="btn btn-primary"><pre>    </pre>
                                <!--        <input type="submit" name="resetok" value="Reset tables" class="btn btn-primary"><pre>    </pre> -->
                                        <button type="button" class="btn btn-primary"  name="resettable" data-toggle="modal" data-target="#exampleModal">Reset tables</button>

                                    </div>

                                <!--    <input type="submit" class="btn btn-outline-primary btn-lg" name="submit" value="Apply"> -->


                                </form>
                            </div>
                        </div>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h3>Students backup tables</h3>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col" colspan="2">Tables name</th>
                                                    <th scope="col">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php
                                                        while($res = mysqli_fetch_array($backup_students)){
                                                            echo "<tr>";
                                                            echo "<td><a href='excel.php?xls=$res[0]' class='nav-link text-dark'>".$res[0]."</a><td>";
                                                            echo "<td><a href='delete.php?delete=$res[0]' class='btn btn-danger'>X</a></td>";
                                                            echo "</tr>";
                                                            echo "</tr>";
                                                        }
                                                     ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h3>Results backup tables</h3>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col" colspan="2">Tables name</th>
                                                    <th scope="col">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php
                                                        while($res = mysqli_fetch_array($backup_results)){
                                                            echo "<tr>";
                                                            echo "<td><a href='excel.php?excel=$res[0]' class='nav-link text-dark'>".$res[0]."</a><td>";
                                                            echo "<td><a href='delete.php?delete=$res[0]' class='btn btn-danger'>X</a></td>";
                                                            echo "</tr>";
                                                        }
                                                     ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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
        <form class="" action="" method="post">
            <input type="submit" name="resetok" value="Reset Tables" class="btn btn-primary">
        </form>



      </div>
    </div>
  </div>
</div>




 <footer class="footer">
 <div class="container-fluid paddind">
    <div class="row ">
        
        <div class="col-md-4">          
           <p class="text-muted" >B-4, Chitrakoot Society - 2, Opp. Tulsidham Market, Zadeshwar Road, Bharuch.<br>
             Dipesh sir Mo. 96381 92399 </p>
           
        </div>
        <div class="col-md-8" align="right">
            <p> Develop by
            <a href="https://plus.google.com/103929880037258813858" target="_blank">Nikunj,</a>
                  <a href="https://plus.google.com/100510913946087775138" target="_blank"> Kishan</a></p>
        </div>      
</footer>


</body>
</html>
