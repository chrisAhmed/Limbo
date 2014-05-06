<?php
	# Includes the helper functions
	require( 'includes/helpers.php' ) ;
	# Includes the auto db and populate functions
	require('includes/autohelpers.php');
	$dbc = init('limbo_db');
	$stuff_id = $_POST['stuff_id'];
	
	if (isset($_POST['EDIT'])) {
		echo '<a href="index.php">[ Home ]</a> <a href="lost.html">   [ Lost Something ]   </a>   <a href="found.html">   [ Found Something ]   </a>   <a href="main_login.php">   [ Admins ]   </a>';
		$sql="SELECT * FROM stuff WHERE stuff_id = " . $stuff_id;
		$result=mysqli_query($dbc,$sql);
		$rows=mysqli_fetch_array($result);
		echo '
			<body>
				<br>
				<br>
				<br>
				<br>
				<table border="0" cellspacing="1" cellpadding="0">
					<form name="update" method="post" action="update.php">
						<td>
						<table width="100%" border="0" cellspacing="1" cellpadding="0">
						<tr>
						<td>&nbsp;</td>
						<td ><strong>Update Item Details</strong> </td>
						</tr>
						<tr>
							<td align="center">&nbsp;</td>
						</tr>
						<tr>
							<td align="center"><strong>Name</strong></td>
							<td align="center">
								<input name="stuff_name" type="text" id="stuff_name" value="'. $rows['stuff_name'] . '"/>
							</td>
						</tr>
						
						<tr>
							<td align="center"><strong>Description</strong></td>
							<td align="center">
								<input name="description" type="text" id="description" value="'. $rows['description'] .'"/>
							</td>
						</tr>
						
						<tr>
							<td align="center"><strong>Location</strong></td>
							<td align="center">
								<input name="location" type="text" id="location" value="' . $rows['location'] .'"/>
							</td>
						</tr>
						
						<tr>
							<td align="center"><strong>Room Lost/Found</strong></td>
							<td align="center">
								<input name="room_lf" id="room_lf" value="' . $rows['room_lf'] .'"/>
							</td>
						</tr>
						
						<tr>
							<td align="center"><strong>Date Lost/Found</strong></td>
							<td align="center">
								<input name="date_lf" id="date_lf" value="' . $rows['date_lf'] .'"/>
							</td>
						</tr>
						
						<tr>
							<td align="center"><strong>Contact Name</strong></td>
							<td align="center">
								<input name="name" type="text" id="name" value="' . $rows['name'] .'"/>
							</td>
						</tr>

						<tr>
							<td align="center"><strong>Phone</strong></td>
							<td align="center">
								<input name="phone" id="phone" value="' . $rows['phone'] .'"/>
							</td>
						</tr>

						<tr>
							<td align="center"><strong>Dorm</strong></td>
							<td align="center">
								<input name="dorm" type="text" id="dorm" value="' . $rows['dorm'] .'"/>
							</td>
						</tr>

						<tr>
							<td align="center"><strong>Room Number</strong></td>
							<td align="center">
								<input name="room_num" id="room_num" value="' . $rows['room_num'] .'"/>
							</td>
						</tr>
						
						<tr>
							<td align="center"><strong>Status</strong></td>
							<td align="center">
								<input name="status" type="text" id="status" value="' . $rows['status'] .'"/>
							</td>
						</tr>

						<tr>
							<td align="center"><strong>Claimed?</strong></td>
							<td align="center">
								<input name="claimed" type="text" id="claimed" value="' . $rows['claimed'] .'"/>
							</td>
						</tr>
						
						<tr>
							<input name="stuff_id" type="hidden" id="stuff_id" value="'. $rows['stuff_id'] .'"/>
							<td align="center">&nbsp;</td>
							<td><input type="submit" name="Submit" value="Submit" /></td>
							<td align="center">&nbsp;</td>
						</tr>
					
					</form>
				</table>
			</body> ';
			
		
	} else if (isset($_POST['DELETE'])) {
		
		$sql="DELETE FROM stuff WHERE stuff_id = " . $stuff_id; 

		if (!mysqli_query($dbc,$sql)) {
		  die('Error: ' . mysqli_error($dbc));
		}
		
		header("Location: login_success.php");
		die();
	}
?>