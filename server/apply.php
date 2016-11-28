<!--
<form action="" method="post">
	<input type="checkbox" name="apply_qualifications[]" id="apply_qualifications" />
	<select name="apply_status" id="apply_status">
	</select>
	<input type="text" name="applicant_id" id="applicant_id" />
	<input type="text" name="job_id" id="job_id" />
	<input type="text" name="apply_id" id="apply_id" />
</form>

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#submitme').click(function() {
		$('#ajaxform').submit(function(e) {
			var postData = $(this).serializeArray();
			
			$.ajax({
				url : 'server/apply.php',
				type: 'POST',
				data : postData,
				success:function(data, textStatus, jqXHR) {
				},
				error: function(jqXHR, textStatus, errorThrown) {
				}
			});

			e.preventDefault();
		});
	});	
	
	livedone();
});

function livedone() {
	setTimeout(function() {
		liveFeed();
		livedone();
	}, 200);
}

function liveFeed() {
	$.getJSON('server/fetcher.php?dataapply=apply', function(jsonData) {
		$('tbody').empty();
		$.each(jsonData, function(idx, obj) {
			$('#tableData').append('<tr>
			<td>'+ obj.apply_id +'</td>
			<td>'+ obj.apply_qualifications +'</td>
			<td>'+ obj.apply_date +'</td>
			<td>'+ obj.apply_status +'</td>
			<td>'+ obj.applicant_id +'</td>
			<td>'+ obj.job_id +'</td>
			</tr>');
		});	
	});	
}

function getApplication(id) {
	var dataId = id;
	$.getJSON('server/getter.php?dataapply='+dataId, function(jsonData) {
		$('#apply_id').val(jsonData.apply_id);
		$('#apply_qualifications').val(jsonData.apply_qualifications);
		$('select[name="apply_status"]').find('option[value="'+jsonData.apply_status+'"]').attr("selected", true);
		$('#applicant_id').val(jsonData.applicant_id);
		$('#job_id').val(jsonData.job_id);
	});	
}
</script>
-->
<?php
	include("connection.php");

	if(isset($_GET['ins']))
	{	
		$apply_qualifications = $_POST["apply_qualifications"];
		$apply_status = $_POST["apply_status"];
		$applicant_id = $_POST["applicant_id"];
		$job_id = $_POST["job_id"];

		$ins = $dbh->prepare("INSERT INTO tbl_apply (
		apply_qualifications, apply_date, 
		apply_status, applicant_id, job_id) VALUES 
		(:input2, CURDATE(), :input4, :input5, :input6)");

		$ins->bindParam(":input2", $apply_qualifications, PDO::PARAM_STR);
		$ins->bindParam(":input4", $apply_status, PDO::PARAM_INT);
		$ins->bindParam(":input5", $applicant_id, PDO::PARAM_INT);
		$ins->bindParam(":input6", $job_id, PDO::PARAM_INT);
		$ins->execute();
	}
	
	if(isset($_GET['edt']))
	{
		$apply_status = $_POST["apply_status"];
		$apply_id = $_POST["apply_id"];

		$edt = $dbh->prepare("UPDATE tbl_apply SET apply_status = :input4 WHERE apply_id = :input5");

		$edt->bindParam(":input4", $apply_status, PDO::PARAM_INT);
		$edt->bindParam(":input5", $apply_id, PDO::PARAM_INT);
		$edt->execute();		
	}		
?>