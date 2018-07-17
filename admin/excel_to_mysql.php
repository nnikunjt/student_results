<?php

require_once('../database/connection.php');

if(!empty($_FILES["excel_file"])){

	$file_array =explode(".",$_FILES["excel_file"]["name"]);

	if ($file_array[1] == 'xls') {
		include("../PHPExcel/IOFactory.php");

	$object =PHPExcel_IOFactory::load($_FILES["excel_file"]["tmp_name"]);
	foreach ($object->getWorksheetIterator() as $worksheet) {
		$highestRow = $worksheet -> getHighestRow();

		for ($row=2; $row <=$highestRow ; $row++) { 
			$roll_no =mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(1,$row)->getValue());
			$student_name =mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(2,$row)->getValue());
			$std =mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(3,$row)->getValue());
			$medium =mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(4,$row)->getValue());
			$birthdate =mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(5,$row)->getValue());
			$school =mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(6,$row)->getValue());
			$father_name =mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(7,$row)->getValue());
			$father_no =mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(8,$row)->getValue());
			$mother_name =mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(9,$row)->getValue());
			$mother_no =mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(10,$row)->getValue());
			$address =mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(11,$row)->getValue());


			$insert_query ="INSERT INTO students(roll_no,student_name,std,medium,birthdate,school,father_name,father_no,mother_name,mother_no,address
				) VALUES('$roll_no','$student_name','$std','$medium','$birthdate','$school','$f_name','$father_no','$m_name','$mother_no','$address')";

			if ($conn->query($insert_query) === TRUE) {
				echo "Done";
			}
			else{
				echo "string";
			}
		}
	}
	}
	else{
		echo "invalid";
	}

	

}
?>