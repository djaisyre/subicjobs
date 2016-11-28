<?php
include("connection.php");

$arrQuali = array();
foreach($_POST["quali"] as $data) {
	array_push($arrQuali, $data);
}

$apply_status = 1;
$applicant_id = $_POST["appusrid"];
$job_id = $_POST["postjobid"];

$sel = $dbh->prepare("SELECT * FROM tbl_jobs WHERE job_id = :job_id");
$sel->bindParam(":job_id", $job_id, PDO::PARAM_INT);
$sel->execute();
$selRes = $sel->fetch(PDO::FETCH_ASSOC);

$jobQuali = explode(" ", $selRes['job_qualifications']);
$apply_qualifications = implode(", ", array_intersect($jobQuali, $arrQuali));

$ins = $dbh->prepare("INSERT INTO tbl_apply (apply_qualifications, apply_date, apply_status, applicant_id, job_id) VALUES (:input2, CURDATE(), :input4, :input5, :input6)");
$ins->bindParam(":input2", $apply_qualifications, PDO::PARAM_STR);
$ins->bindParam(":input4", $apply_status, PDO::PARAM_INT);
$ins->bindParam(":input5", $applicant_id, PDO::PARAM_INT);
$ins->bindParam(":input6", $job_id, PDO::PARAM_INT);
$ins->execute();

$appliedQual = count($arrQuali);
$requiredQual = count($jobQuali);
$average = $requiredQual / 2;
$cosre = $appliedQual.' of '.$requiredQual;

if($appliedQual > $average) {
	echo "short";
	$shrt = $dbh->prepare("INSERT INTO tbl_short_list (short_list_date, short_list_score, short_list_status, applicant_id, job_id) VALUES 
	(CURDATE(), :input2, :input3, :input4, :input5)");
	$shrt->bindParam(":input2", $cosre, PDO::PARAM_STR);
	$shrt->bindParam(":input3", $apply_status, PDO::PARAM_INT);
	$shrt->bindParam(":input4", $applicant_id, PDO::PARAM_INT);
	$shrt->bindParam(":input5", $job_id, PDO::PARAM_INT);
	$shrt->execute();	
} else if($appliedQual < $average) {
	echo "inv";
	$inv = $dbh->prepare("INSERT INTO tbl_skills_inventory (skills_inv_date, skills_inv_score, skills_inv_status, applicant_id, job_id) VALUES 
	(CURDATE(), :input2, :input3, :input4, :input5)");
	$inv->bindParam(":input2", $cosre, PDO::PARAM_STR);
	$inv->bindParam(":input3", $apply_status, PDO::PARAM_INT);
	$inv->bindParam(":input4", $applicant_id, PDO::PARAM_INT);
	$inv->bindParam(":input5", $job_id, PDO::PARAM_INT);
	$inv->execute();
}
?>