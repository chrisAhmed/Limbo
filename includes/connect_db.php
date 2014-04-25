<?php # CONNECT TO MySQL DATABASE.

	# Connect  on 'localhost' for user 'root' with no password to database 'site_db'.
	$dbc = @mysqli_connect ( 'localhost', 'root', '', 'limbo_db' )

	# Otherwise fail gracefully and explain the error.
	OR die ( mysqli_connect_error() ) ;

	# Set encoding to match PHP script encoding.
	mysqli_set_charset( $dbc, 'utf8' ) ;


	if ( $_SERVER[ 'REQUEST_METHOD' ] == 'GET' ) {
		$stuff_name = "stuff_name" ;
		$description = "description" ;
		$location = "location" ;
		$room_lf = "room_lf";
		$date_lf= "date_lf";
		$name = "name";
		$phone = "phone";
		$dorm = "dorm";
		$room_num = "room_num";
		$status="status";
	}

	if ($_SERVER[ 'REQUEST_METHOD' ] == 'POST') {
		$stuff_name = $_POST['stuff_name'] ;
		$description = $_POST['description'] ;
		$location = $_POST['location'];
		$room_lf = $_POST['room_lf'];
		$date_lf = $_POST['date_lf'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$dorm = $_POST['dorm'];
		$room_num = $_POST['room_num'];
		$status = $_POST['status'];
	}	

?>
