<?php

require_once('../database/connection.php');

if(isset($_POST["import"])){
	include("../PHPExcel/IOFactory.php");

	$object =PHPExcel_IOFactory::load($_FILES['excel_file']['tmp_name']);
	foreach ($object->getWorksheetIterator() as $worksheet) {
		$highestRow = $worksheet -> getHighestRow();

		for ($row=2; $row <=$highestRow ; $row++) { 
			
		}
	}

}
?>