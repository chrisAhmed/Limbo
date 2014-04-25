<! DOCTYPE html>
<! -- by Jackie Trivino and Chris Ahmed -->

<html>

	<head>
		<title> Limbo </title>
		<link href="css/css.css" rel"stylesheet" type="text/css">
	</head>

	<body>
	
		<div id="title" align=center-left>
			<a href="lost.html"> [Lost Something] </a>	 <a href="found.html"> [Found Something] </a> 	<a href="main_login.php"> [Admins] </a>
			<h1> Welcome to <i>Limbo!</i></h1>
			<p>If you lost or found something, you're in luck: this is the place to report it.</p>
		</div>

		<div id="query" align=center-left>
			<h2> Lost and Found </h2>
			<form action="">
				Submitted in last 
				<select name="dateQuery">
					<option value="7" selected>7 days</option>
					<option value="14">14 days</option>
					<option value="28">28 days</option>
					<option value="50">50 days</option>
				</select>
			</form>
		</div>
		
	</body>
	
	<?php
		# Connect to MySQL server and the database
		require( 'includes/connect_db.php' ) ;
		# Includes these helper functions
		require( 'includes/helpers.php' ) ;	
		show_link_records($dbc);
		mysqli_close($dbc);
	?>
</html>