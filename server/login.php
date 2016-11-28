<?php
include("connection.php");

//if(isset($_POST['btn-login']))
//{
	$user_name = trim($_POST['username']);
	$user_password = trim($_POST['password']);
	
	$stmt = $dbh->prepare("SELECT * FROM tbl_admin WHERE admin_username = :admin_username");
	$stmt->bindParam(':admin_username', $user_name, PDO::PARAM_STR);
	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	$count = $stmt->rowCount();
	
	if($count == 1) {
		if($row['admin_password'] == $user_password)
		{
			echo 'valid';
		}
	} else {
		echo "login invalid";
	}
//}

?>