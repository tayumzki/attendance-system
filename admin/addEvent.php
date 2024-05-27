<?php 
	include("../config.php");
	$eventName = $_POST['eventName'];
	$postDate = $_POST['eventDate'];
	$dateObj = date_create_from_format('Y-m-d', $postDate);
	$eventDate = date_format($dateObj, 'm-d-y');
	$eventTime = $_POST['eventTime'];
	$sql = "INSERT INTO events (event_name, event_date, event_time) VALUES ('$eventName','$eventDate','$eventTime')";
	$conn->query($sql);
	header("Location: index.php");
?>