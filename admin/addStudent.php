<?php
	date_default_timezone_set('Asia/Manila');
	include("../config.php");
	$studentID = $_POST['studentID'];
	$eventID = $_POST['eventID'];
	$eventTime = date('h:i a');
	$eventDate = date('m-d-y');
	$sql = "INSERT INTO logs (event_id, student_id, log_date, log_time) VALUES ('$eventID','$studentID','$eventDate','$eventTime')";
	if ($conn->query($sql) === TRUE) {
	  echo json_encode("true");
	}
?>