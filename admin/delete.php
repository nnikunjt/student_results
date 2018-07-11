<?php
    require_once('../database/connection.php');


    if(isset($_GET['del'])){
        $roll_no = $_GET['del'];



        $delete ="DELETE FROM results WHERE roll_no = $roll_no ";

        if($conn->query($delete) === TRUE){
            $delete_query = "DELETE FROM students WHERE roll_no = $roll_no";
            if ($conn->query($delete_query) === TRUE) {
                header('location:dashboard.php');
            }
        }
    }

?>
