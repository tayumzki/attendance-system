<?php
	include("../config.php");
	session_start();
	if(!isset($_SESSION['admin'])){
		header("Location: ../login/login.php");
	}
	$sql = "SELECT * FROM events";
	$events = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SLSUBC Admin</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/custom.css">
	<script type="text/javascript" src="../assets/custom.js"></script>
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-6">
				<h1 class="title">DASHBOARD</h1>
			</div>
			<div class="col-lg-6" style="text-align: right;">
				<a href="logout.php"><label><i class="fa-solid fa-right-from-bracket"></i> Logout</label></a>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="card">
				  	<img class="card-img-top" src="../assets/event.jpg" alt="Card image cap">
				  	<div class="card-body">
					  	<div id="event-header">
					    	<h3 class="card-title"><b>EVENTS</b></h3>
					    	<button class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#add-event-modal"><i class="fa fa-plus"></i>&ensp;Add Event</button>
						</div>
					    <table class="table table-hover">
						    <?php
						    	foreach ($events as $event) {
						    ?>
						    	<tr onclick="showEvent('<?php echo $event['event_id']; ?>');">
						    		<td>
						    			<?php echo $event['event_name']; ?>
						    		</td>
						    		<td>
						    			<?php echo $event['event_date']; ?>
						    		</td>
						    	</tr>
						    <?php
						    	}
						    ?>
						</table>
				  	</div>
				</div>
			</div>
			<div class="col-lg-6" id="event-container">
			</div>
		</div>
	</div>
	<div class="modal fade" id="add-event-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title" id="exampleModalLabel">Add Event</h5>
	        	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	      	</div>
	      	<form action="addEvent.php" method="post">
		      	<div class="modal-body">
			      	<div class="row">
			      		<div class="col-lg-12">
			      			<label>Event Name</label>
				        	<input type="text" name="eventName" class="form-control mb-3">
				        </div>
				        <div class="col-lg-6">
				        	<label>Event Date</label>
				        	<input type="date" name="eventDate" class="form-control">
				        </div>
				        <div class="col-lg-6">
				        	<label>Event Time</label>
				        	<input type="time" name="eventTime" class="form-control">
					    </div>
					</div>
		      	</div>
		      	<div class="modal-footer">
			        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			        <button type="submit" class="btn btn-primary">Save changes</button>
		      	</div>
	      	</form>
	    </div>
	  </div>
	</div>
</body>
</html>