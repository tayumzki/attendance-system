<?php
	include("../config.php");
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM admin WHERE username='$username'";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($result);
	if ($password == $data['password']){
		session_start();
		$_SESSION['admin'] = $username;
		header("Location: ../admin/index.php");
	} else {
		$_SESSION['message'] = "Wrong username/password.";
		header("Location: login.php");
	}
?>