<?php
	include("connection.php");

	if(isset($_GET['ins']))
	{	
		$comp_establistment_name = $_POST["comp_establistment_name"];
		$comp_address = $_POST["comp_address"];
		$comp_contact = $_POST["comp_contact"];
		$comp_email = $_POST["comp_email"];
		$comp_status = $_POST["comp_status"];
		$comp_type = $_POST["comp_type"];
		$comp_username = $_POST["comp_username"];
		$comp_password = $_POST["comp_password"];

		$ins = $dbh->prepare("INSERT INTO tbl_company (
		comp_establistment_name, comp_address, 
		comp_contact, comp_email, comp_status, comp_type, 
		comp_username, comp_password) VALUES 
		(:input2, :input3, :input4, :input5, :input6, :input7, :input8, :input9)");

		$ins->bindParam(":input2", $comp_establistment_name, PDO::PARAM_STR);
		$ins->bindParam(":input3", $comp_address, PDO::PARAM_STR);
		$ins->bindParam(":input4", $comp_contact, PDO::PARAM_INT);
		$ins->bindParam(":input5", $comp_email, PDO::PARAM_INT);
		$ins->bindParam(":input6", $comp_status, PDO::PARAM_STR);
		$ins->bindParam(":input7", $comp_type, PDO::PARAM_STR);
		$ins->bindParam(":input8", $comp_username, PDO::PARAM_STR);
		$ins->bindParam(":input9", $comp_password, PDO::PARAM_STR);
		$ins->execute();
	}
	
	if(isset($_GET['edt']))
	{
		$comp_establistment_name = $_POST["comp_establistment_name"];
		$comp_address = $_POST["comp_address"];
		$comp_contact = $_POST["comp_contact"];
		$comp_email = $_POST["comp_email"];
		$comp_status = $_POST["comp_status"];
		$comp_type = $_POST["comp_type"];
		$comp_username = $_POST["comp_username"];
		$comp_password = $_POST["comp_password"];
		$comp_id = $_POST["comp_id"];

		$edt = $dbh->prepare("UPDATE tbl_company SET
		comp_establistment_name = :input2, comp_address = :input3, 
		comp_contact = :input4, comp_email = :input5, comp_status = :input6, comp_type = :input7,
		comp_username = :input8, comp_password = :input9 WHERE comp_id = :input10");

		$edt->bindParam(":input2", $comp_establistment_name, PDO::PARAM_STR);
		$edt->bindParam(":input3", $comp_address, PDO::PARAM_STR);
		$edt->bindParam(":input4", $comp_contact, PDO::PARAM_INT);
		$edt->bindParam(":input5", $comp_email, PDO::PARAM_STR);
		$edt->bindParam(":input6", $comp_status, PDO::PARAM_STR);
		$edt->bindParam(":input7", $comp_type, PDO::PARAM_STR);
		$edt->bindParam(":input8", $comp_username, PDO::PARAM_STR);
		$edt->bindParam(":input9", $comp_password, PDO::PARAM_STR);
		$edt->bindParam(":input10", $comp_id, PDO::PARAM_INT);
		$edt->execute();		
	}
?>