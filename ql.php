<! DOCTYPE html>
<! -- by Jackie Trivino and Chris Ahmed -->
<html>

	<a href="index.php">[ Home ]</a> <a href="lost.html">   [ Lost Something ]   </a>   <a href="found.html">   [ Found Something ]   </a>   <a href="main_login.php">   [ Admins ]   </a>
	
	<?php
		session_start();
		# Includes the helper functions
		require( 'includes/helpers.php' ) ;
		# Includes the auto db and populate functions
		require('includes/autohelpers.php');
		$dbc = init('limbo_db');

		$passedid = $_GET["id"];
		show_all_records($passedid,$dbc);
	?>

</html>