function showEvent(eventID){
	$.ajax({
		url: "../admin/getEventData.php",
		type: "POST",
		data: {
			eventID: eventID
		},
		success: function(result){
			var event = JSON.parse(result);
			$("#event-container").empty();
			$("#event-container").append('\
				<div class="card">\
				  <h5 class="card-header">Event Details</h5>\
				  <div class="card-body">\
				  	<div class="row">\
				  		<div class="col-lg-6">\
						    <h4 class="card-title">'+event.event_name+'</h4>\
						    <p class="card-text">'+event.event_date+'&emsp;&emsp;'+event.event_time+'</p>\
						    <input type="text" class="form-control" placeholder="Student ID" id="studentid">\
						    <input type="hidden" id="eventid" value="'+event.event_id+'">\
						    <a href="#" class="btn btn-primary mt-2" onclick="addStudent()">Add Student</a>\
						</div>\
						<div class="col-lg-6">\
							<h5>Attendance List</h5>\
							<table id="attendance-table" class="table table-bordered"></table>\
						</div>\
				  </div>\
				</div>\
			');
		}
	});
	$.ajax({
		url: "../admin/getAttendanceList.php",
		type: "POST",
		data: {
			eventID: eventID
		},
		success: function(result){
			var events = JSON.parse(result);
			$("#attendance-table").empty();
			events.forEach(function(event) {
		        $("#attendance-table").append('\
					<tr id="log'+event.id+'">\
						<td>'+event.student_id+'</td>\
						<td><i class="fa fa-trash text-danger" onclick="deleteStudent('+event.id+')"></i></td>\
					</tr>\
				');
	    	});
		}
	});
}
function addStudent(){
	var studentID = $("#studentid").val();
	var eventID = $("#eventid").val();
	$.ajax({
		url: "../admin/addStudent.php",
		type: "POST",
		data: {
			studentID: studentID,
			eventID: eventID
		},
		success: function(result){
			
		}
	});
	$.ajax({
		url: "../admin/getAttendanceList.php",
		type: "POST",
		data: {
			eventID: eventID
		},
		success: function(result){
			var events = JSON.parse(result);
			$("#attendance-table").empty();
			events.forEach(function(event) {
		        $("#attendance-table").append('\
					<tr id="log'+event.id+'">\
						<td>'+event.student_id+'</td>\
						<td><i class="fa fa-trash text-danger" onclick="deleteStudent('+event.id+')"></i></td>\
					</tr>\
				');
	    	});
		}
	});
}
function deleteStudent(logID){
	$.ajax({
		url: "../admin/deleteStudent.php",
		type: "POST",
		data: {
			logID: logID
		},
		success: function(result){
			$("#log"+logID).remove();
		}
	});
}