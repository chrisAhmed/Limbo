<! DOCTYPE html>
<! -- by Jackie Trivino and Chris Ahmed -->
<html>

	<a href="index.php">[ Home ]</a> <a href="lost.html">   [ Lost Something ]   </a>   <a href="found.html">   [ Found Something ]   </a>   <a href="main_login.php">   [ Admins ]   </a>
	
	<?php
		# Includes the helper functions
		require( 'includes/helpers.php' ) ;
		# Includes the auto db and populate functions
		require('includes/autohelpers.php');
		$dbc = init('limbo_db');
				
		//Check connection
		if (mysqli_connect_errno()) {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		// escape variables for security
		$stuff_name = mysqli_real_escape_string($dbc, $_POST['stuff_name']);
		$description = mysqli_real_escape_string($dbc, $_POST['description']);
		$location = mysqli_real_escape_string($dbc, $_POST['location']);
		$room_lf = mysqli_real_escape_string($dbc, $_POST['room_lf']);
		$date_lf = mysqli_real_escape_string($dbc, $_POST['date_lf']);
		$name = mysqli_real_escape_string($dbc, $_POST['name']);
		$phone = mysqli_real_escape_string($dbc, $_POST['phone']);
		$dorm = mysqli_real_escape_string($dbc, $_POST['dorm']);
		$room_num = mysqli_real_escape_string($dbc, $_POST['room_num']);
		$status = "lost";
		$claimed = "unclaimed";


		$sql="INSERT INTO stuff (stuff_name, description, location, room_lf, date_lf, name, phone, dorm, room_num, status, claimed)
									VALUES ('$stuff_name', '$description', '$location', '$room_lf', '$date_lf', '$name', '$phone', '$dorm', '$room_num','$status','$claimed')"; 

		if (!mysqli_query($dbc,$sql)) {
		  die('Error: ' . mysqli_error($dbc));
		}
        
		echo '<br>';
		echo '<br>';
		echo '<br>';
		echo '<h3> Thank you for submitting your lost item. Hopefully someone will get back to you soon! </h3>';

	?>
</html>