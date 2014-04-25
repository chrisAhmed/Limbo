<! DOCTYPE html>
<! -- by Jackie Trivino and Chris Ahmed -->

<?php
	# Connect to MySQL server and the database
	require( 'includes/connect_db.php' ) ;
	# Includes these helper functions
	require( 'includes/helpers.php' ) ;
	session_start();
	if(!$_SESSION['myusername']){
		header("location:main_login.php");
	}
?>

<html>

	<body>
		<a href="index.php">[ Home ]</a> <a href="lost.html">   [ Lost Something ]   </a>   <a href="found.html">   [ Found Something ]   </a>   <a href="main_login.php">   [ Admins ]   </a>
		<h1>Welcome Mr. Stark</h1>
	</body>

</html>
