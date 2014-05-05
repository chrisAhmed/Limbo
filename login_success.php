<! DOCTYPE html>
<! -- by Jackie Trivino and Chris Ahmed -->

<?php
		# Includes the helper functions
		require( 'includes/helpers.php' ) ;
		# Includes the auto db and populate functions
		require('includes/autohelpers.php');
		$dbc = init('limbo_db');
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
		
	<?PHP
		show_all_admin_records($dbc);
		mysqli_close($dbc);
	?>
		
</html>
