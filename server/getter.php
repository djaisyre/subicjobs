<?php
include("connection.php");

if(isset($_GET['datashortlist']))
{
	$id = $_GET['datashortlist'];

	$selectAll = 'SELECT * FROM tbl_short_list WHERE short_list_id = :short_list_id';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->bindParam(':short_list_id', $id, PDO::PARAM_INT);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetch(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}

if(isset($_GET['datainventory']))
{
	$id = $_GET['datainventory'];

	$selectAll = 'SELECT * FROM tbl_skills_inventory WHERE skills_inv_id = :skills_inv_id';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->bindParam(':skills_inv_id', $id, PDO::PARAM_INT);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetch(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}

if(isset($_GET['datapost']))
{
	$id = $_GET['datapost'];

	$selectAll = 'SELECT * FROM tbl_jobs WHERE job_id = :job_id';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->bindParam(':job_id', $id, PDO::PARAM_INT);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetch(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}


if(isset($_GET['dataemployee']))
{
	$id = $_GET['dataemployee'];

	$selectAll = 'SELECT * FROM tbl_apply WHERE apply_id = :apply_id';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->bindParam(':apply_id', $id, PDO::PARAM_INT);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetch(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}


if(isset($_GET['datarra']))
{
	$id = $_GET['datarra'];

	$selectAll = 'SELECT * FROM tbl_rra WHERE tbl_rra_id = :tbl_rra_id';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->bindParam(':tbl_rra_id', $id, PDO::PARAM_INT);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetch(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}

if(isset($_GET['dataadmin']))
{
	$id = $_GET['dataadmin'];

	$selectAll = 'SELECT * FROM tbl_admin WHERE admin_id = :admin_id';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->bindParam(':admin_id', $id, PDO::PARAM_INT);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetch(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}

if(isset($_GET['dataapp']))
{
	$id = $_GET['dataapp'];

	$selectAll = 'SELECT * FROM tbl_applicants WHERE applicant_id = :applicant_id';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->bindParam(':applicant_id', $id, PDO::PARAM_INT);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetch(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}

if(isset($_GET['dataapply']))
{
	$id = $_GET['dataapply'];
	
	$selectAll = 'SELECT * FROM tbl_apply WHERE apply_id = :apply_id';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->bindParam(':apply_id', $id, PDO::PARAM_INT);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetch(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}

if(isset($_GET['datacomp']))
{
	$id = $_GET['datacomp'];

	$selectAll = 'SELECT * FROM tbl_company WHERE comp_id = :comp_id';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->bindParam(':comp_id', $id, PDO::PARAM_INT);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetch(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}

if(isset($_GET['dataeduc']))
{
	$id = $_GET['dataeduc'];
	
	$selectAll = 'SELECT * FROM tbl_app_educ WHERE educ_id = :educ_id';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->bindParam(':educ_id', $id, PDO::PARAM_INT);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetch(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}

if(isset($_GET['dataexp']))
{
	$id = $_GET['dataexp'];

	$selectAll = 'SELECT * FROM tbl_job_exp WHERE job_exp_id = :job_exp_id';
	$selectAllStmt = $dbh->prepare($selectAll);
	$selectAllStmt->bindParam(':job_exp_id', $id, PDO::PARAM_INT);
	$selectAllStmt->execute();
	$selectAllResult = $selectAllStmt->fetch(PDO::FETCH_ASSOC);

	echo json_encode($selectAllResult);	
}
?>