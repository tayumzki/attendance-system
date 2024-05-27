<?php
	if(!isset($_SESSION['message'])){
		$message = "";
	}
	else{
		$message = $_SESSION['message'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SLSUBC Attendance System</title>
	<link rel="icon" type="image/png" href="../assets/logo.png">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
	<link rel="stylesheet" type="text/css" href="./assets/custom.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
	<div class="container" style="height: 100vh;">
		<div class="row gx-5 h-100">
			<div class="col-lg-6 d-flex align-items-center">
				<img src="./assets/login-image1.jpg" class="img-fluid">
			</div>
			<div class="col-lg-4 d-flex align-items-center">
				<div>
					<h1 class="title">ATTENDANCE SYSTEM</h1>
					<form action="./login/entry.php" method="post">
					  	<div class="mb-3 mt-3">
					    	<label for="username" class="form-label">Username:</label>
					    	<input type="username" class="form-control" id="username" placeholder="Enter username" name="username">
					  	</div>
					  	<div class="mb-3">
						    <label for="pwd" class="form-label">Password:</label>
						    <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
					  	</div>
					  	<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
			<div class="col-lg-2">
			</div>
		</div>
	</div>
</body>
</html>