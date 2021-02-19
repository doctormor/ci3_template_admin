<?php
// Set delay 1 second. 
//sleep(1);

include("config.in.php");

// Next dropdown list.
$nextList = isset($_GET['nextList']) ? $_GET['nextList'] : '';

$data = array();


	switch($nextList) {
		case 'numseatD':
			$dates = isset($_GET['dates']) ? $_GET['dates'] : '';
			$faresD = isset($_GET['faresD']) ? $_GET['faresD'] : '';
			$date1 = explode("/", $dates);
			$date = $date1[2]."-".$date1[1]."-".$date1[0];
			$result = mysql_query("SELECT * FROM tbl_fares_time
						LEFT JOIN tbl_fares ON (tbl_fares.fares_id = tbl_fares_time.fares_id)
						LEFT JOIN tbl_ship ON (tbl_ship.ship_id = tbl_fares_time.ship_id)
						WHERE tbl_fares.fares_short = '$faresD'
						AND tbl_fares_time.fares_time_date_start <= '$date'
						AND tbl_fares_time.fares_time_date_end >= '$date'
						GROUP BY tbl_fares_time.fares_id , tbl_fares_time.ship_id ASC");
			

		break;	

		case 'numseatR':
			$datee = isset($_GET['datee']) ? $_GET['datee'] : '';
			$faresR = isset($_GET['faresR']) ? $_GET['faresR'] : '';
			$date1 = explode("/", $datee);
			$date = $date1[2]."-".$date1[1]."-".$date1[0];
			$result = mysql_query("SELECT * FROM tbl_fares_time
						LEFT JOIN tbl_fares ON (tbl_fares.fares_id = tbl_fares_time.fares_id)
						LEFT JOIN tbl_ship ON (tbl_ship.ship_id = tbl_fares_time.ship_id)
						WHERE tbl_fares.fares_short = '$faresR'
						AND tbl_fares_time.fares_time_date_start <= '$date'
						AND tbl_fares_time.fares_time_date_end >= '$date'
						GROUP BY tbl_fares_time.fares_id , tbl_fares_time.ship_id ASC");
			
		break;	


	}

	
	while($rowseat = mysql_fetch_assoc($result)) {

		$data[] = $rowseat;
	}


	// Print the JSON representation of a value
	echo json_encode(array($data));


?>