<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <title>Home</title>
  </head>
  <body>
  	<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
     <div class="nav text-center">
     	<div class="form-group">
    <label for="mediumm">Select Medium</label>
    <select class="form-control" id="medium">
      
      <option>Gujarati</option>
      <option>English </option>
      
    </select>
 </div>
 <div class="form-group">
    <label for="search">Enter Roll No.</label>
    <input type="number" class=" main form-control" id="search-box" placeholder="roll no">
  </div>
     </div>
     <div class="form-group main">
     	<button type="button" class="btn btn-outline-info "  data-target="#exampleModalCenter">
  Find Result
</button>

     </div>
     </div>
     <!-- Button trigger modal -->
     <div class="form-group">
      <button type="button" class="btn btn-outline-primary " data-toggle="modal" data-target="#exampleModalCenter">
  Admin
</button>
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
    
          <form class="" action="login.php" method="post">
            <div class="form-group row">
                        <label for="username" class="form-label">User name</label>
                        
                            <input type="text" class="form-control" name="username" value="" autofocus required>
                        
                    </div>
            <div class="form-group row">
                        <label for="password" class="form-label">Password</label>
                       
                            <input type="text" class="form-control" name="password" value="" required>
                       
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

  </body>
</html
