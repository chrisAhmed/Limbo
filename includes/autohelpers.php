<?php

# Set this flag to false to disable debug diagnostics.
$debug = true;

function init($dbname){
    # Connect to the database, if we fail assume the DB doesnt exist
    $dbc = @mysqli_connect ( 'localhost', 'root', '', $dbname );

    if($dbc) {
        mysqli_set_charset( $dbc, 'utf8' ) ;

        return $dbc;
    }

    $dbc = @mysqli_connect ( 'localhost', 'root', '', '' );

    $query = 'CREATE DATABASE ' . $dbname;

    $results = mysqli_query($dbc, $query);
    check_results($results);

    # Close connection since we dont need it
    mysqli_close( $dbc );

    # Connect to the (newly created) database
    $dbc = @mysqli_connect ( 'localhost', 'root', '', $dbname )
        OR die ( mysqli_connect_error() ) ;

    # Set encoding to match PHP script encoding.
    mysqli_set_charset( $dbc, 'utf8' ) ;

    $sql= file_get_contents('C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\Limbo\includes\limbo.sql');
    $results = mysqli_multi_query($dbc, $sql);
    mysqli_close( $dbc );

    # Ggives mysql some time to run through all the queries
    # If the database needs more time to load, then there are probably other problems with the computer
    sleep(1);
	
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
		$claimed="claimed";
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
		$claimed = $_POST['claimed'];
	}	
    # Recursive so I can guarantee a working connection
    return init($dbname);
}
# Checks the query results as a debugging aid
function check_results($results) {
  global $dbc;

  if($results != true)
    echo '<p>SQL ERROR = ' . mysqli_error( $dbc ) . '</p>'  ;
}

?>