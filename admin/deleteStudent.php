<?php
	include("../config.php");
	$logID = $_POST['logID'];
	$sql = "DELETE FROM logs WHERE id='$logID'";
	if ($conn->query($sql) === TRUE) {
	  echo json_encode("true");
	}
?>