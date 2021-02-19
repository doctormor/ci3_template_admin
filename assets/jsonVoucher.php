<?php
// Set delay 1 second. 
//sleep(1);

include("config.in.php");

// Next dropdown list.
$nextList = isset($_GET['nextList']) ? $_GET['nextList'] : '';

$data = array();


	switch($nextList) {
		case 'numseatD':
			$voucher_id = isset($_GET['voucher_id']) ? $_GET['voucher_id'] : '';
			$dates = isset($_GET['dates']) ? $_GET['dates'] : '';
			$date1 = explode("/", $dates);
			$date = $date1[2]."-".$date1[1]."-".$date1[0];
			$route = mysql_query("select * from tbl_voucher where voucher_id = '$voucher_id'");
			$routers = mysql_fetch_array($route);

			$result = mysql_query("SELECT * FROM tbl_fares_time
						JOIN tbl_fares ON (tbl_fares.fares_id = tbl_fares_time.fares_id)
						JOIN tbl_ship ON (tbl_ship.ship_id = tbl_fares_time.ship_id)
						JOIN tbl_class ON (tbl_class.ship_id = tbl_ship.ship_id)
						WHERE tbl_fares.route_id = '".$routers['route_id']."'
						AND tbl_class.class_code = '".$routers['classcode']."'
						AND tbl_fares_time.fares_time_date_start <= '".$date."'
						AND tbl_fares_time.fares_time_date_end >= '".$date."'
						GROUP BY tbl_fares.fares_id , tbl_ship.ship_id ASC");
			

		break;	


	}

	
	while($rowseat = mysql_fetch_assoc($result)) {

		$data[] = $rowseat;
	}


	// Print the JSON representation of a value
	echo json_encode(array($data));


?>