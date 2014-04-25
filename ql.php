<! DOCTYPE html>
<! -- by Jackie Trivino and Chris Ahmed -->
<html>

	<a href="index.php">[ Home ]</a> <a href="lost.html">   [ Lost Something ]   </a>   <a href="found.html">   [ Found Something ]   </a>   <a href="main_login.php">   [ Admins ]   </a>
	
	<?php
		session_start();
		# Connect to MySQL server and the database
		require( 'includes/connect_db.php' ) ;
		# Includes these helper functions
		require( 'includes/helpers.php' ) ;

		$passedid = $_GET["id"];
		show_all_records($passedid,$dbc);
	?>

</html>