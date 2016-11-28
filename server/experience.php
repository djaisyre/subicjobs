<?php
	include("connection.php");

	if(isset($_GET['ins']))
	{	
		$job_exp_establishment_name = $_POST["job_exp_establishment_name"];
		$job_exp_started = $_POST["job_exp_started"];
		$job_exp_end = $_POST["job_exp_end"];
		$job_exp_titlte = $_POST["job_exp_titlte"];
		$applicant_id = $_POST["applicant_id"];

		$ins = $dbh->prepare("INSERT INTO tbl_job_exp (
		job_exp_establishment_name, job_exp_started, 
		job_exp_end, job_exp_titlte, applicant_id) VALUES 
		(:input2, :input3, :input4, :input5, :input6)");

		$ins->bindParam(":input2", $job_exp_establishment_name, PDO::PARAM_STR);
		$ins->bindParam(":input3", $job_exp_started, PDO::PARAM_STR);
		$ins->bindParam(":input4", $job_exp_end, PDO::PARAM_STR);
		$ins->bindParam(":input5", $job_exp_titlte, PDO::PARAM_STR);
		$ins->bindParam(":input6", $applicant_id, PDO::PARAM_INT);
		$ins->execute();
	}
	
	if(isset($_GET['edt']))
	{
		$job_exp_establishment_name = $_POST["job_exp_establishment_name"];
		$job_exp_started = $_POST["job_exp_started"];
		$job_exp_end = $_POST["job_exp_end"];
		$job_exp_titlte = $_POST["job_exp_titlte"];
		$applicant_id = $_POST["applicant_id"];
		$job_exp_id = $_POST["job_exp_id"];

		$ins = $dbh->prepare("UPDATE tbl_job_exp SET
		job_exp_establishment_name = :input2, job_exp_started = :input3, 
		job_exp_end = :input4, job_exp_titlte = :input5, applicant_id = :input6 WHERE job_exp_id = :input7");

		$ins->bindParam(":input2", $job_exp_establishment_name, PDO::PARAM_STR);
		$ins->bindParam(":input3", $job_exp_started, PDO::PARAM_STR);
		$ins->bindParam(":input4", $job_exp_end, PDO::PARAM_STR);
		$ins->bindParam(":input5", $job_exp_titlte, PDO::PARAM_STR);
		$ins->bindParam(":input6", $applicant_id, PDO::PARAM_INT);
		$ins->bindParam(":input7", $job_exp_id, PDO::PARAM_INT);
		$ins->execute();		
	}		
?>