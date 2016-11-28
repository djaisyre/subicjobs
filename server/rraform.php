<?php
	include("connection.php");

	if(isset($_GET['ins']))
	{	
		$tbl_rra_job = $_POST["tbl_rra_job"];
		$tbl_num_hired = $_POST["tbl_num_hired"];
		$tbl_num_endorsed = $_POST["tbl_num_endorsed"];
		$tbl_duties = $_POST["tbl_duties"];
		$tbl_qualifications = $_POST["tbl_qualifications"];
		$tbl_closing_date = $_POST["tbl_closing_date"];
		$tbl_date_exam = $_POST["tbl_date_exam"];
		$tbl_venue_interview = $_POST["tbl_venue_interview"];
		$tbl_date_hire = $_POST["tbl_date_hire"];
		$tbl_docu = $_POST["tbl_docu"];
		$comp_id = $_POST["comp_id"];

		$ins = $dbh->prepare("INSERT INTO tbl_rra(
		tbl_rra_job, tbl_num_hired, tbl_num_endorsed, tbl_duties, tbl_qualifications, tbl_closing_date, tbl_date_exam, 
		tbl_venue_interview, tbl_date_hire, tbl_docu, comp_id) VALUES 
		(:input2, :input3, :input4, :input5, :input6, :input7, :input8, :input9, :input10, :input11, :input12)");

		$ins->bindParam(":input2", $tbl_rra_job, PDO::PARAM_STR);
		$ins->bindParam(":input3", $tbl_num_hired, PDO::PARAM_INT);
		$ins->bindParam(":input4", $tbl_num_endorsed, PDO::PARAM_INT);
		$ins->bindParam(":input5", $tbl_duties, PDO::PARAM_STR);
		$ins->bindParam(":input6", $tbl_qualifications, PDO::PARAM_STR);
		$ins->bindParam(":input7", $tbl_closing_date, PDO::PARAM_STR);
		$ins->bindParam(":input8", $tbl_date_exam, PDO::PARAM_STR);
		$ins->bindParam(":input9", $tbl_venue_interview, PDO::PARAM_STR);
		$ins->bindParam(":input10", $tbl_date_hire, PDO::PARAM_STR);
		$ins->bindParam(":input11", $tbl_docu, PDO::PARAM_STR);
		$ins->bindParam(":input12", $comp_id, PDO::PARAM_INT);
		$ins->execute();
	}
	
?>