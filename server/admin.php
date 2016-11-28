<?php
include("connection.php");

if(isset($_GET['ins']))
{	
	$admin_username	 = $_POST["admin_username"];
	$admin_password = $_POST["admin_password"];
	$admin_fullname = $_POST["admin_fullname"];

	$ins = $dbh->prepare("INSERT INTO tbl_admin (admin_username, admin_password, admin_fullname) VALUES (:input2, :input3, :input4)");

	$ins->bindParam(":input2", $admin_username, PDO::PARAM_STR);
	$ins->bindParam(":input3", $admin_password, PDO::PARAM_STR);
	$ins->bindParam(":input4", $admin_fullname, PDO::PARAM_STR);
	$ins->execute();
}

if(isset($_GET['edt']))
{	
	$admin_username	 = $_POST["admin_username"];
	$admin_password = $_POST["admin_password"];
	$admin_fullname = $_POST["admin_fullname"];
	$admin_id = $_POST["admin_id"];

	$edt = $dbh->prepare("UPDATE tbl_admin SET admin_username = :input2, admin_password = :input3, admin_fullname = :input4 WHERE admin_id = :input5");

	$edt->bindParam(":input2", $admin_username, PDO::PARAM_STR);
	$edt->bindParam(":input3", $admin_password, PDO::PARAM_STR);
	$edt->bindParam(":input4", $admin_fullname, PDO::PARAM_STR);
	$edt->bindParam(":input5", $admin_id, PDO::PARAM_INT);
	$edt->execute();
}	
?>