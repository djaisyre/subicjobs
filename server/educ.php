<?php
	include("connection.php");
	
	if(isset($_GET['ins']))
	{	
		$educ_type = $_POST["educ_type"];
		$educ_school_name = $_POST["educ_school_name"];
		$educ_school_address = $_POST["educ_school_address"];
		$educ_year_graduated = $_POST["educ_year_graduated"];
		$applicant_id = $_POST["applicant_id"];

		$ins = $dbh->prepare("INSERT INTO tbl_app_educ (
		educ_type, educ_school_name, 
		educ_school_address, educ_year_graduated, 
		applicant_id) VALUES 
		(:input2, :input3, :input4, :input5, :input6)");

		$ins->bindParam(":input2", $educ_type, PDO::PARAM_STR);
		$ins->bindParam(":input3", $educ_school_name, PDO::PARAM_STR);
		$ins->bindParam(":input4", $educ_school_address, PDO::PARAM_STR);
		$ins->bindParam(":input5", $educ_year_graduated, PDO::PARAM_STR);
		$ins->bindParam(":input6", $applicant_id, PDO::PARAM_INT);
		$ins->execute();
	}
	
	if(isset($_GET['edt']))
	{
		$educ_type = $_POST["educ_type"];
		$educ_school_name = $_POST["educ_school_name"];
		$educ_school_address = $_POST["educ_school_address"];
		$educ_year_graduated = $_POST["educ_year_graduated"];
		$applicant_id = $_POST["applicant_id"];
		$educ_id = $_POST["educ_id"];

		$edt = $dbh->prepare("UPDATE tbl_app_educ SET
		educ_type = :input2, educ_school_name = :input3, 
		educ_school_address = :input4, educ_year_graduated = :input5, 
		applicant_id = :input6 WHERE educ_id = :input7");

		$edt->bindParam(":input2", $educ_type, PDO::PARAM_STR);
		$edt->bindParam(":input3", $educ_school_name, PDO::PARAM_STR);
		$edt->bindParam(":input4", $educ_school_address, PDO::PARAM_STR);
		$edt->bindParam(":input5", $educ_year_graduated, PDO::PARAM_STR);
		$edt->bindParam(":input6", $applicant_id, PDO::PARAM_INT);
		$edt->bindParam(":input7", $educ_id, PDO::PARAM_INT);
		$edt->execute();		
	}

?>