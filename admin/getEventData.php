<?php
	include("../config.php");
	$eventID = $_POST['eventID'];
	$sql = "SELECT * FROM events WHERE event_id='$eventID'";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);
	echo json_encode($data);
?>