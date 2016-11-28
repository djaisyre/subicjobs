<?php
include("connection.php");

$user_name = trim($_POST['username']);
$user_password = trim($_POST['password']);

$stmt = $dbh->prepare("SELECT * FROM tbl_applicants WHERE app_username = :app_username");
$stmt->bindParam(':app_username', $user_name, PDO::PARAM_STR);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();

if($count == 1) {
	if($row['app_password'] == $user_password)
	{
		echo $row['applicant_id'];
	}
} else {
	echo "login invalid";
}
?>