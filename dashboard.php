<?php
    require_once('connection.php');

    $select_query="SELECT * FROM students";
    $select_run = mysqli_query($conn,$select_query);
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
    	<link href="style.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-dark navbar-expand-md bg-dark">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">Yash classes</a>
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
                                <a href="" class="list-group-item disabled">Dashboard</a>
                                <a href="add_student.php" class="list-group-item">Add student</a>
                                <a href="add_result.php" class="list-group-item">Add result</a>
                                <a href="add_user.php" class="list-group-item">Add user</a>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="container-fluid">
                        <h1>Student details</h1>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Roll no.</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">std.</th>
                                        <th scope="col">Medium</th>
                                        <th scope="col">Father Name</th>
                                        <th scope="col">Mobile no.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        while($select_row = mysqli_fetch_array($select_run)){
                                            echo "<tr>";
                                            echo "<td>".$select_row['id']."</td>";
                                            echo "<td>".$select_row['roll_no']."</td>";
                                            echo "<td>".$select_row['student_name']."</td>";
                                            echo "<td>".$select_row['std']."</td>";
                                            echo "<td>".$select_row['medium']."</td>";
                                            echo "<td>".$select_row['father_name']."</td>";
                                            echo "<td>".$select_row['father_no']."</td>";
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

        <footer class="page-footer font-small unique-color-dark pt-4">

    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer  py-3" align="right">Created by  
      <a href="https://plus.google.com/103929880037258813858">Nikunj,</a>
      <a href="https://plus.google.com/100510913946087775138"> Kishan</a>
    </div>
    <!-- Copyright -->

  </footer>
    </body>
</html>
