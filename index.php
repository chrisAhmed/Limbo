<! DOCTYPE html>
<! -- by Jackie Trivino and Chris Ahmed -->

<html>

	<head>
		<title> Limbo </title>
		<link href="css/css.css" rel="stylesheet" type="text/css">
	</head>

	<body>
	
		<div id="title" align=center>
			<img id="img" src="images/limbo_logo.jpg">
			<h1> Welcome to <i>Limbo!</i></h1>
			<p>If you lost or found something, you're in luck: this is the place to report it.</p>		
		</div>

		<br>
		<br>
		<div id="menu" align=center>
			<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="lost.html">Lost Something</a></li>
			<li><a href="found.html">Found Something</a></li>
			<li><a href="main_login.php">Admin</a></li>
			</ul>

		</div>

<br>
<br>
<br>

	</body>
	
	<?php
		# Includes the helper functions
		require( 'includes/helpers.php' ) ;
		# Includes the auto db and populate functions
		require('includes/autohelpers.php');
		$dbc = init('limbo_db');
		show_link_records($dbc);
		mysqli_close($dbc);
	?>
</html>