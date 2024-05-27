<?php
	include("../config.php");
	$eventID = $_POST['eventID'];
	$sql = "SELECT * FROM logs WHERE event_id='$eventID'";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
	echo json_encode($data);
?>