<?php
	# Includes the helper functions
	require( 'includes/helpers.php' ) ;
	# Includes the auto db and populate functions
	require('includes/autohelpers.php');
	
	$dbc = init('limbo_db');
	
	//Check connection

	$stuff_id =  $_POST['stuff_id'];
	$stuff_name = mysqli_real_escape_string($dbc, $_POST['stuff_name']);
	$description = mysqli_real_escape_string($dbc, $_POST['description']);
	$location = mysqli_real_escape_string($dbc, $_POST['location']);
	$room_lf = mysqli_real_escape_string($dbc, $_POST['room_lf']);
	$date_lf = mysqli_real_escape_string($dbc, $_POST['date_lf']);
	$name = mysqli_real_escape_string($dbc, $_POST['name']);
	$phone = mysqli_real_escape_string($dbc, $_POST['phone']);
	$dorm = mysqli_real_escape_string($dbc, $_POST['dorm']);
	$room_num = mysqli_real_escape_string($dbc, $_POST['room_num']);
	$status = mysqli_real_escape_string($dbc, $_POST['status']);
	$claimed = mysqli_real_escape_string($dbc, $_POST['claimed']);
	
	$sql="UPDATE stuff SET stuff_name= 'stuff_name' , description= 'description', location= 'location', room_lf= 'room_lf', date_lf= 'date_lf', name= 'name', phone= 'phone', dorm= 'dorm', room_num= 'room_num', status= 'status', claimed= 'claimed' WHERE stuff_id='$stuff_id' ";

	if (!mysqli_query($dbc,$sql)) {
		 die('Error: ' . mysqli_error($dbc));
	}

?>