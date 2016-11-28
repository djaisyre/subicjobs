<?php
include("connection.php");

if(isset($_GET['jfulldtls'])) {
	$jobId = $_GET['jfulldtls'];
	$selectAll = 'SELECT * FROM tbl_jobs WHERE job_id = :job_id';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->bindParam(':job_id', $jobId, PDO::PARAM_INT);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetch(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}

if(isset($_GET['datainventory']))
{
	$selectAll = 'SELECT * FROM tbl_skills_inventory';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}


if(isset($_GET['dataemployee']))
{
	$selectAll = 'SELECT * FROM tbl_apply';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}

if(isset($_GET['datashortlist']))
{
	$selectAll = 'SELECT * FROM tbl_short_list a, tbl_applicants b, tbl_jobs c WHERE a.applicant_id = b.applicant_id AND a.job_id = c.job_id';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}


if(isset($_GET['datapost']))
{
	$selectAll = 'SELECT * FROM tbl_jobs';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}

if(isset($_GET['datapostbycomp']))
{
	$id = $_GET['datapostbycomp'];
	$selectAll = 'SELECT * FROM tbl_jobs WHERE comp_id = :comp_id';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->bindParam(':comp_id', $id, PDO::PARAM_INT);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}

if(isset($_GET['datarra']))
{
	$selectAll = 'SELECT * FROM tbl_rra';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}


if(isset($_GET['dataadmin']))
{
	$selectAll = 'SELECT * FROM tbl_admin';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}

if(isset($_GET['dataapp']))
{
	$selectAll = 'SELECT * FROM tbl_applicants';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}

if(isset($_GET['dataapply']))
{
	$selectAll = 'SELECT * FROM tbl_apply WHERE apply_status = 1';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}

if(isset($_GET['jobid']))
{
	$jid = $_GET['jobid'];
	$selectAll = 'SELECT * FROM tbl_apply a, tbl_applicants b WHERE a.applicant_id = b.applicant_id AND a.job_id = :job_id AND a.apply_status IN (1)';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->bindParam(':job_id', $jid, PDO::PARAM_INT);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}

if(isset($_GET['hired']))
{
	$selectAll = 'SELECT * FROM tbl_apply a, tbl_applicants b, tbl_jobs c, tbl_company d WHERE a.applicant_id = b.applicant_id AND a.job_id = c.job_id AND c.comp_id = d.comp_id AND a.apply_status = 2';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}

if(isset($_GET['datacomp']))
{
	$selectAll = 'SELECT * FROM tbl_company';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}

if(isset($_GET['dataeduc']))
{
	$selectAll = 'SELECT * FROM tbl_app_educ';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}

if(isset($_GET['dataexp']))
{
	$selectAll = 'SELECT * FROM tbl_job_exp';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetchAll(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}
?>