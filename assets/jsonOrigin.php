<?php
// Set delay 1 second. 
//sleep(1);

include("config.in.php");

// Next dropdown list.
$nextList = isset($_GET['nextList']) ? $_GET['nextList'] : '';

$data = array();


	switch($nextList) {
		case 'numseatD':
			$date = isset($_GET['dates']) ? $_GET['dates'] : '';
			$origin = isset($_GET['origin']) ? $_GET['origin'] : '';
			$destination = isset($_GET['destination']) ? $_GET['destination'] : '';
			/*$date1 = explode("/", $dates);
			$date = $date1[2]."-".$date1[1]."-".$date1[0];*/
			$result = mysql_query("SELECT * FROM tbl_fares_time
						LEFT JOIN tbl_fares ON (tbl_fares.fares_id = tbl_fares_time.fares_id)
						LEFT JOIN tbl_ship ON (tbl_ship.ship_id = tbl_fares_time.ship_id)
						WHERE tbl_fares.fares_from = '$origin'
						AND tbl_fares.fares_to = '$destination'
						AND tbl_fares_time.fares_time_date_start <= '$date'
						AND tbl_fares_time.fares_time_date_end >= '$date'
						GROUP BY tbl_fares_time.fares_id , tbl_fares_time.ship_id ASC");
			

		break;	

		case 'numseatR':
			$date = isset($_GET['dates']) ? $_GET['dates'] : '';
			$origin = isset($_GET['origin']) ? $_GET['origin'] : '';
			$destination = isset($_GET['destination']) ? $_GET['destination'] : '';
			/*$date1 = explode("/", $dates);
			$date = $date1[2]."-".$date1[1]."-".$date1[0];*/
			$result = mysql_query("SELECT * FROM tbl_fares_time
						LEFT JOIN tbl_fares ON (tbl_fares.fares_id = tbl_fares_time.fares_id)
						LEFT JOIN tbl_ship ON (tbl_ship.ship_id = tbl_fares_time.ship_id)
						WHERE tbl_fares.fares_from = '$destination'
						AND tbl_fares.fares_to = '$origin'
						AND tbl_fares_time.fares_time_date_start <= '$date'
						AND tbl_fares_time.fares_time_date_end >= '$date'
						GROUP BY tbl_fares_time.fares_id , tbl_fares_time.ship_id ASC");
			
		break;	

		case 'numseatTo':
			$origin = isset($_GET['origin']) ? $_GET['origin'] : '';
			$result = mysql_query("SELECT * FROM tbl_fares as a
						LEFT JOIN tbl_place as b ON (b.place_id = a.fares_from)
						LEFT JOIN tbl_place as c ON (c.place_id = a.fares_to)
						WHERE a.fares_from = '$origin'");
			
		break;	


	}

	
	while($rowseat = mysql_fetch_assoc($result)) {

		$data[] = $rowseat;
	}


	// Print the JSON representation of a value
	echo json_encode(array($data));


?>