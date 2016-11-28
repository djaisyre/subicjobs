<?php
	include("connection.php");
	
	if(isset($_POST['jobappid'])) {
		$jobappid = $_POST['jobappid'];
		
		$ins = $dbh->prepare("UPDATE tbl_apply SET apply_status = 2 WHERE apply_id = :apply_id");
		$ins->bindParam(":apply_id", $jobappid, PDO::PARAM_INT);
		$ins->execute();
	}
	
	if(isset($_POST['jobarchid'])) {
		$jobarchid = $_POST['jobarchid'];
		
		$ins = $dbh->prepare("UPDATE tbl_apply SET apply_status = 2 WHERE apply_id = :apply_id");
		$ins->bindParam(":apply_id", $jobarchid, PDO::PARAM_INT);
		$ins->execute();		
	}	
	
	if(isset($_GET['ins']))
	{
		$job_title = $_POST["job_title"];
		$job_qualifications = $_POST["job_qualifications"];
		$job_deployment_place = $_POST["job_deployment_place"];
		$job_date_added = $_POST["job_date_added"];
		$job_closing_date = $_POST["job_closing_date"];
		$comp_id = $_POST["comp_id"];

		$ins = $dbh->prepare("INSERT INTO tbl_jobs (
		job_title, job_qualifications, 
		job_deployment_place, job_date_added, 
		job_closing_date, comp_id) VALUES (:input2, :input3, :input4, :input5, :input6, :input7)");

		$ins->bindParam(":input2", $job_title, PDO::PARAM_STR);
		$ins->bindParam(":input3", $job_qualifications, PDO::PARAM_STR);
		$ins->bindParam(":input4", $job_deployment_place, PDO::PARAM_STR);
		$ins->bindParam(":input5", $job_date_added, PDO::PARAM_STR);
		$ins->bindParam(":input6", $job_closing_date, PDO::PARAM_STR);
		$ins->bindParam(":input7", $comp_id, PDO::PARAM_INT);
		$ins->execute();
	}

	if(isset($_GET['edt']))
	{
		$job_title = $_POST["job_title"];
		$job_qualifications = $_POST["job_qualifications"];
		$job_deployment_place	 = $_POST["job_deployment_place"];
		$job_date_added = $_POST["job_date_added"];
		$job_closing_date = $_POST["job_closing_date"];
		$comp_id = $_POST["comp_id"];
		$job_id = $_POST["job_id"];

		$edt = $dbh->prepare("UPDATE tbl_jobs SET
		job_title = :input2, 
		job_qualifications = :input3, 
		job_deployment_place = :input4, 
		job_date_added = :input5, 
		job_closing_date = :input6, 
		comp_id = :input7 WHERE job_id = :input8");

		$edt->bindParam(":input2", $job_title, PDO::PARAM_STR);
		$edt->bindParam(":input3", $job_qualifications, PDO::PARAM_STR);
		$edt->bindParam(":input4", $job_deployment_place, PDO::PARAM_STR);
		$edt->bindParam(":input5", $job_date_added, PDO::PARAM_STR);
		$edt->bindParam(":input6", $job_closing_date, PDO::PARAM_STR);
		$edt->bindParam(":input7", $comp_id, PDO::PARAM_INT);
		$edt->bindParam(":input8", $job_id, PDO::PARAM_INT);
		$edt->execute();		
	}
?>