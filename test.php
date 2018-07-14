<?php

    require_once('database/connection.php');

   
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
  <link href="css/style.css" rel="stylesheet">
  <script src="js/jspdf.js"></script>
  <script src="js/jquery-2.1.3.js"></script>
  <style media="screen">
        .col-sm-4{
            padding-top: .4rem;
        }
  </style>


    <title>Home</title>
  </head>
  <body>
    <nav class="navbar navbar-dark navbar-expand-md bg-dark">
    <div class=" container-fluid">
      <a href="index.php" class="navbar-brand">Yash classes</a>
    </div>



     
</nav>



<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form class="" action="test.php" method="get">
                        <div class="form-group row" style="padding: .3rem;">
                            <label for="roll_no" class="col-sm-1 col-form-label">Roll no.</label>
                            <div class="col-sm-2">
                                <input type="text" name="roll_no" class="form-control" value="" required>
                            </div>
                            <div class="col-sm-1">
                               <!-- <input type="submit" name="find" class="text-center btn btn-success" value="Find Result">-->
                               <button type="submit" class="btn btn-success">Find Result</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
  
    // showing results
    if (isset($_GET['roll_no'])) {
        $roll_no = $_GET['roll_no'];

        $select_query = "SELECT * FROM students INNER JOIN results ON students.roll_no = results.roll_no WHERE students.roll_no = $roll_no AND results.test_date = (SELECT MAX(test_date) FROM results WHERE roll_no = $roll_no)";
        $select_run = mysqli_query($conn, $select_query);
        $select_row = mysqli_fetch_array($select_run);

        $pdfname= $roll_no."_".$select_row['test_date'];

    echo "<div id='HTMLtoPDF'>
          <div class='container'>
            <div class='row'>
                <div class='col-md-10'>
                    <div class='card'>
                        <div class='card-header' >
                    <h2>Yash Classes</h2>
                      
                    </div>
                    <div class='card-body'>
                    <div class='row'>
                    <form a ></form>

 <p> Name :    " ;       echo $select_row['student_name'];  echo "</p>
 <p> Test Date : " ;echo $select_row['test_date'];echo "   Std :   ";echo $select_row['std'];
                    echo "</div></p>
  <p> Medium :  ";echo $select_row['medium'];
                    echo "
                    <table class='table'>
                        <thead class='thead-light'>
                            <tr>
                                <th>Subject</th>
                                <th>Total marks</th>
                                <th>Obtain marks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>";
                            if ($select_row['math_total'] != 0 && $select_row['math_obtain']) {
                                echo "<td>Math</td>";
                                echo "<td>".$select_row['math_total']."</td>";
                                echo "<td>".$select_row['math_obtain']."</td>";
                            }
                            echo "</tr>
                                    <tr>";
                            if ($select_row['sci_total'] != 0 && $select_row['sci_obtain']) {
                                echo "<td>Science</td>";
                                echo "<td>".$select_row['sci_total']."</td>";
                                echo "<td>".$select_row['sci_obtain']."</td>";
                            }
                            echo "</tr>
                                    <tr>";
                                    if ($select_row['sst_total'] != 0 && $select_row['sst_obtain']) {
                                        echo "<td>Social Science</td>";
                                        echo "<td>".$select_row['sst_total']."</td>";
                                        echo "<td>".$select_row['sst_obtain']."</td>";
                                    }
                        echo "</tr>
                            </tr>
                        </tbody>
                    </table>";
                    echo "<div class='row'>
                    <label class='col-sm-2 col-form-label'>Percentage :</label>
                    <div class='col-sm-4'>";
                        echo $select_row['percentage'];
                    echo "</div>
                        </div>

       </div>
        </div> 
        </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br>


 <footer class="footer">
 <div class="container-fluid paddind">
    <div class="row ">
        
        <div class="col-md-4">          
           <p class="text-muted" >B-4, Chitrakoot Society - 2, Opp. Tulsidham Market, Zadeshwar Road, Bharuch.<br>
             Dipesh sir Mo. 96381 92399 </p>
           
        </div>
        
</footer>

"

;



}




?>
</body>
</html>


<script type="text/javascript">
	window.onload = function() {
  HTMLtoPDF();
};
    
    function HTMLtoPDF(){
var pdf = new jsPDF('p', 'pt', 'letter');
source = $('#HTMLtoPDF')[0];
specialElementHandlers = {
    '#bypassme': function(element, renderer){
        return true
    }
}
margins = {
    top: 50,
    left: 60,
    width: 545
  };
pdf.fromHTML(
    source // HTML string or DOM elem ref.
    , margins.left // x coord
    , margins.top // y coord
    , {
        'width': margins.width // max width of content on PDF
        , 'elementHandlers': specialElementHandlers
    },
    function (dispose) {
      // dispose: object with X, Y of the last line add to the PDF
      //          this allow the insertion of new lines after html
        pdf.save('<?php echo $pdfname; ?>.pdf');
      }
  )     
}
</script>
