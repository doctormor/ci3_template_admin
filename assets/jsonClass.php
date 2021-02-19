<?php
// Set delay 1 second. 
//sleep(1);

include("config.in.php");

// Next dropdown list.
$nextList = isset($_GET['nextList']) ? $_GET['nextList'] : '';

$data = array();


	switch($nextList) {
		case 'numseatD':
			$fares_time_id = isset($_GET['fares_time_id_D']) ? $_GET['fares_time_id_D'] : '';

			$fares = mysql_fetch_array(mysql_query("select * from tbl_fares_time where fares_time_id = '$fares_time_id'"));
			$result = mysql_query("SELECT * FROM tbl_class
						LEFT JOIN tbl_ship ON (tbl_ship.ship_id = tbl_class.ship_id)
						WHERE tbl_class.ship_id = '".$fares['ship_id']."'");
			

		break;	

		case 'numseatR':
			$fares_time_id = isset($_GET['fares_time_id_R']) ? $_GET['fares_time_id_R'] : '';

			$fares = mysql_fetch_array(mysql_query("select * from tbl_fares_time where fares_time_id = '$fares_time_id'"));
			$result = mysql_query("SELECT * FROM tbl_class
						LEFT JOIN tbl_ship ON (tbl_ship.ship_id = tbl_class.ship_id)
						WHERE tbl_class.ship_id = '".$fares['ship_id']."'");
		break;	


	}

	
	while($rowseat = mysql_fetch_assoc($result)) {

		$data[] = $rowseat;
	}


	// Print the JSON representation of a value
	echo json_encode(array($data));


?>