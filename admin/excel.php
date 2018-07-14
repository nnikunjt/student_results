<?php 
	require_once("../database/connection.php");

	$output = '';

	if(isset($_GET['xls'])){
		$excel = $_GET['xls'];
		$select_query = "SELECT * FROM `$excel` ";
		$select_run = mysqli_query($conn,$select_query);

		$output .= '
			<table class="table" border="1">
				<tr>
					<th>Id</th>
					<th>roll_no</th>
					<th>student_name</th>
					<th>std</th>
					<th>medium</th>
					<th>birthdate</th>
					<th>father_name</th>
					<th>father_no</th>
					<th>mother_name</th>
					<th>mother_no</th>
					<th>address</th>
				</tr>';
			while ($res = mysqli_fetch_array($select_run)){
				$output .='
					<tr>
						<td>'.$res['id'].'</td>
						<td>'.$res['roll_no'].'</td>
						<td>'.$res['student_name'].'</td>
						<td>'.$res['std'].'</td>
						<td>'.$res['medium'].'</td>
						<td>'.$res['birthdate'].'</td>
						<td>'.$res['father_name'].'</td>
						<td>'.$res['father_no'].'</td>
						<td>'.$res['mother_name'].'</td>
						<td>'.$res['mother_no'].'</td>
						<td>'.$res['address'].'</td>
					</tr>';
			}
			$output .= '</table>';

			header("Content-Type: application/xls");
			header("Content-Disposition:attachment; filename='$excel.xls'");
			echo $output;

			//header('location:settings.php');

	}

?>