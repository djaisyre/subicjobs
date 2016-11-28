<?php
	include("connection.php");

	if(isset($_GET['ins']))
	{	
		$app_firstname = $_POST["app_firstname"];
		$app_middlename = $_POST["app_middlename"];
		$app_lastname = $_POST["app_lastname"];
		$app_address = $_POST["app_address"];
		$app_contact = $_POST["app_contact"];
		$app_email = $_POST["app_email"];
		$app_dob = $_POST["app_dob"];
		$app_pob = $_POST["app_pob"];
		$app_sex = $_POST["app_sex"];
		$app_civilstatus = $_POST["app_civilstatus"];
		$app_status = $_POST["app_status"];
		$app_username = $_POST["app_username"];
		$app_password = $_POST["app_password"];

		$ins = $dbh->prepare("INSERT INTO tbl_applicants (
		app_firstname, app_middlename, app_lastname, app_address, app_contact, app_email, 
		app_dob, app_pob, app_sex, app_civilstatus, app_date_registered, app_status, app_username, app_password) VALUES 
		(:input2, :input3, :input4, :input5, :input6, :input7, :input8, :input9, :input10, :input11, CURDATE(), :input13, :input14, :input15)");

		$ins->bindParam(":input2", $app_firstname, PDO::PARAM_STR);
		$ins->bindParam(":input3", $app_middlename, PDO::PARAM_STR);
		$ins->bindParam(":input4", $app_lastname, PDO::PARAM_STR);
		$ins->bindParam(":input5", $app_address, PDO::PARAM_STR);
		$ins->bindParam(":input6", $app_contact, PDO::PARAM_INT);
		$ins->bindParam(":input7", $app_email, PDO::PARAM_STR);
		$ins->bindParam(":input8", $app_dob, PDO::PARAM_STR);
		$ins->bindParam(":input9", $app_pob, PDO::PARAM_STR);
		$ins->bindParam(":input10", $app_sex, PDO::PARAM_STR);
		$ins->bindParam(":input11", $app_civilstatus, PDO::PARAM_STR);
		$ins->bindParam(":input13", $app_status, PDO::PARAM_INT);
		$ins->bindParam(":input14", $app_username, PDO::PARAM_STR);
		$ins->bindParam(":input15", $app_password, PDO::PARAM_STR);
		$ins->execute();
	}
	
	if(isset($_GET['edt']))
	{
		$app_firstname = $_POST["app_firstname"];
		$app_middlename = $_POST["app_middlename"];
		$app_lastname = $_POST["app_lastname"];
		$app_address = $_POST["app_address"];
		$app_contact = $_POST["app_contact"];
		$app_email = $_POST["app_email"];
		$app_dob = $_POST["app_dob"];
		$app_pob = $_POST["app_pob"];
		$app_sex = $_POST["app_sex"];
		$app_civilstatus = $_POST["app_civilstatus"];
		$app_status = $_POST["app_status"];
		$app_username = $_POST["app_username"];
		$app_password = $_POST["app_password"];
		$applicant_id = $_POST["applicant_id"];

		$edt = $dbh->prepare("UPDATE tbl_applicants SET
		app_firstname = :input2, app_middlename = :input3, app_lastname = :input4, app_address = :input5, app_contact = :input6, app_email = :input7, 
		app_dob = :input8, app_pob = :input9, app_sex = :input10, app_civilstatus = :input11, app_status = :input13, app_username = :input14, app_password = :input15 WHERE applicant_id = :input16");

		
		$edt->bindParam(":input2", $app_firstname, PDO::PARAM_STR);
		$edt->bindParam(":input3", $app_middlename, PDO::PARAM_STR);
		$edt->bindParam(":input4", $app_lastname, PDO::PARAM_STR);
		$edt->bindParam(":input5", $app_address, PDO::PARAM_STR);
		$edt->bindParam(":input6", $app_contact, PDO::PARAM_INT);
		$edt->bindParam(":input7", $app_email, PDO::PARAM_STR);
		$edt->bindParam(":input8", $app_dob, PDO::PARAM_STR);
		$edt->bindParam(":input9", $app_pob, PDO::PARAM_STR);
		$edt->bindParam(":input10", $app_sex, PDO::PARAM_STR);
		$edt->bindParam(":input11", $app_civilstatus, PDO::PARAM_STR);
		$edt->bindParam(":input13", $app_status, PDO::PARAM_INT);
		$edt->bindParam(":input14", $app_username, PDO::PARAM_STR);
		$edt->bindParam(":input15", $app_password, PDO::PARAM_STR);
		$edt->bindParam(":input16", $applicant_id, PDO::PARAM_INT);
		$edt->execute();		
	}		
?>