<?php
    require_once(dashboard.php);


    if(isset($_GET['del'])){
        $id = $_GET['del'];

        $delete_query = "DELETE FROM students WHERE id = $id";

        if($conn->query($delete_query) === TRUE){
            header(location : dashboard.php)
        }
    }

?>
