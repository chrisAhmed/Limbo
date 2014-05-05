<?php
	$debug = true;

	# Shows records after submission
	function show_records($dbc) {

		# Create a query to get the name and price sorted by price
		$query = 'SELECT stuff_name, location, description, name FROM stuff ' ;

		# Execute the query
		$results = mysqli_query( $dbc , $query ) ;

		# Show results
		if( $results )
		{
			# But...wait until we know the query succeeded before
			# starting the table.
			echo '<H1>Item</H1>' ;
			echo '<TABLE  border="1">';
			echo '<TR>';
			echo '<TH>Item Name</TH>';
			echo '<TH>location</TH>';
			echo '<TH>Description</TH>';
			echo '<TH>Submitter Name</TH>';
			echo '</TR>';

			# For each row result, generate a table row
			while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
			{
				echo '<TR>' ;
				echo '<TD>' . $row['stuff_name'] . '</TD>' ;
				echo '<TD>' . $row['location'] . '</TD>' ;
				echo '<TD>' . $row['description'] . '</TD>';
				echo '<TD>' . $row['name'] . '</TD>';
				echo '</TR>' ;
			}

			# End the table
			echo '</TABLE>';

			# Free up the results in memory
			mysqli_free_result( $results ) ;
		}
	}

	# Shows the expanded view of the record select at the main screen
	function show_all_records($passedid, $dbc) {
		# Create a query to get the name and price sorted by price
		$query = 'SELECT * FROM stuff  WHERE stuff_id = '. $passedid ;

		# Execute the query
		$results = mysqli_query( $dbc , $query ) ;

		# Show results
		if( $results ){
			# But...wait until we know the query succeeded before
			# starting the table.
			echo '<H1>Item</H1>' ;
			echo '<H3>Below is an expanded view of the item you just selected: </h3>';
			echo '<TABLE  border="1">';
			echo '<TR>';
			echo '<TH>Item Name</TH>';
			echo '<TH>Description</TH>';
			echo '<TH>Location</TH>';
			echo '<TH>Room Lost/Found In</TH>';
			echo '<TH>Date Lost/Found</TH>';
			echo '<TH>Contact Name</TH>';
			echo '<TH>Phone Number</TH>';
			echo '<TH>Dorm</TH>';
			echo '<TH>Room Number</TH>';
			echo '<TH>L/F?</TH>';
			echo '<TH>Claimed?</TH>';
			echo '</TR>';

			# For each row result, generate a table row
			while ( $row = mysqli_fetch_array( $results , MYSQLI_ASSOC ) )
			{
			echo '<TR>' ;
			echo '<TD>' . $row['stuff_name'] . '</TD>' ;
			echo '<TD>' . $row['description'] . '</TD>' ;
			echo '<TD>' . $row['location'] . '</TD>';
			echo '<TD>' . $row['room_lf'] . '</TD>';
			echo '<TD>' . $row['date_lf'] . '</TD>';
			echo '<TD>' . $row['name'] . '</TD>';
			echo '<TD>' . $row['phone'] . '</TD>';
			echo '<TD>' . $row['dorm'] . '</TD>';
			echo '<TD>' . $row['room_num'] . '</TD>';
			echo '<TD>' . $row['status'] . '</TD>';
			echo '<TD>' . $row['claimed'] . '</TD>';
			echo '</TR>' ;
			}

			# End the table
			echo '</TABLE>';

			# Free up the results in memory
			mysqli_free_result( $results ) ;
		}

	}

	# Shows the expanded view of the record select at the main screen
	function show_all_admin_records($dbc) {
		# Create a query to get the name and price sorted by price
		$query = 'SELECT * FROM stuff ';

		# Execute the query
		$results = mysqli_query( $dbc , $query ) ;

		# Show results
		if( $results ){
			# But...wait until we know the query succeeded before
			# starting the table.
			echo '<H1>Items</H1>' ;
			echo '<H3>Admin Panel</h3>';
			echo '<TABLE  border="1">';
			echo '<TR>';
			echo '<TH>ID</TH>';
			echo '<TH>Item Name</TH>';
			echo '<TH>Description</TH>';
			echo '<TH>Location</TH>';
			echo '<TH>Room Lost/Found In</TH>';
			echo '<TH>Date Lost/Found</TH>';
			echo '<TH>Contact Name</TH>';
			echo '<TH>Phone Number</TH>';
			echo '<TH>Dorm</TH>';
			echo '<TH>Room Number</TH>';
			echo '<TH>L/F?</TH>';
			echo '<TH>Claimed?</TH>';
			echo '</TR>';

			
			while ( $row = mysqli_fetch_array( $results ) )
			{
				
				echo '<TR>' ;
				echo '<TD ALIGN=right>' . $row['stuff_id'] . '</TD>';
				echo '<TD>' . $row['stuff_name'] . '</TD>' ;
				echo '<TD>' . $row['description'] . '</TD>' ;
				echo '<TD>' . $row['location'] . '</TD>';
				echo '<TD>' . $row['room_lf'] . '</TD>';
				echo '<TD>' . $row['date_lf'] . '</TD>';
				echo '<TD>' . $row['name'] . '</TD>';
				echo '<TD>' . $row['phone'] . '</TD>';
				echo '<TD>' . $row['dorm'] . '</TD>';
				echo '<TD>' . $row['room_num'] . '</TD>';
				echo '<TD>' . $row['status'] . '</TD>';
				echo '<TD>' . $row['claimed'] . '</TD>';
				echo '</TR>' ;	
				$_SESSION['stuff_name'] = $row;
			}


			# End the table
			echo '</TABLE>';

			# Free up the results in memory
			mysqli_free_result( $results ) ;
		}

	}		
		
	# Shows a view of records on the main page
	function show_link_records($dbc) {
		# Create a query to get everything from stuff
		$query = 'SELECT * FROM stuff' ;

		# Execute the query
		$results = mysqli_query( $dbc , $query ) ;

		# Show results
		if( $results ){
			# But...wait until we know the query succeeded before
			# starting the table.
			echo '<TABLE  border="1">';
			echo '<TR>';
			echo '<TH>ID</TH>';
			echo '<TH>Date</TH>';
			echo '<TH>Item</TH>';
			echo '<TH>L/F?</TH>';
			echo '</TR>';


			# For each row result, generate a table row
			while ( $row = mysqli_fetch_array( $results ) )
			{
				$alink = '<A HREF=ql.php?id=' . $row['stuff_id'] . '>' . $row['stuff_id'] . '</A>' ;
				echo '<TR>' ; 
				echo '<TD ALIGN=right>' . $alink . '</TD>';
				echo '<TD>' . $row['date_lf'] . '</TD>';
				echo '<TD>' . $row['stuff_name'] . '</TD>';
				echo '<TD>' . $row['status'] . '</TD>';
				echo '</TR>' ;
				$_SESSION['stuff_name'] = $row;
			}

			# End the table
			echo '</TABLE>';

			# Free up the results in memory
			mysqli_free_result( $results ) ;
		}
	}
	
 ?>