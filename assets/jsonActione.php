<?php
// Set delay 1 second. 
//sleep(1);

include("config.in.php");

// Next dropdown list.
$nextList = isset($_GET['nextList']) ? $_GET['nextList'] : '';
$faresID = isset($_GET['faresID']) ? $_GET['faresID'] : '';
$destination = isset($_GET['destination']) ? $_GET['destination'] : '';
$chkprice = isset($_GET['chkprice']) ? $_GET['chkprice'] : '';
$classID = isset($_GET['classID']) ? $_GET['classID'] : '';
$reservedetID = isset($_GET['reservedetID']) ? $_GET['reservedetID'] : '';

$data = array();
$data2 = array();


	switch($nextList) {
		case 'numseatD':
			$classID = isset($_GET['classID']) ? $_GET['classID'] : '';
			//$trip = isset($_GET['trip']) ? $_GET['trip'] : '';
			$date11 = isset($_GET['datetrip']) ? $_GET['datetrip'] : '';
			$date1 = explode("/",$date11);
			$date = $date1[2]."-".$date1[1]."-".$date1[0];
			$trip = '';

			$reserveD = array();
			$reserveR = array();

			$sqlreserveD = mysql_query("SELECT * FROM tbl_reserve
						LEFT JOIN tbl_calfares ON (tbl_calfares.cal_id = tbl_reserve.cal_id)
						WHERE tbl_calfares.fares_id = '$faresID' AND tbl_reserve.reserve_status!='D' AND tbl_reserve.reserve_cancel = '0' ");
			$numrowsD = mysql_num_rows($sqlreserveD);
			if($numrowsD > 0){
				while($rowD=mysql_fetch_assoc($sqlreserveD)){
					array_push($reserveD,$rowD['reserve_id']);
				}
			}

				$reserveID = array_merge($reserveD);

				if(empty($reserveID)){
						$reserveID ='';
						$strReserveID='';

						$result = mysql_query("SELECT * FROM tbl_seat
						WHERE tbl_seat.class_id = '$classID' AND seat_st = '1'
						ORDER BY ABS(seat_id) ASC");
				}else{
					$strReserveID = implode(",",$reserveID);

			

				
					$seatID = array();
					$sqldet1 = mysql_query("SELECT * FROM tbl_seat_other WHERE seat_other_date = '$date' AND fares_id = '$faresID'");
					$numdetrows1 = mysql_num_rows($sqldet1);

					$sqldet = mysql_query("SELECT * FROM tbl_reservedet
							WHERE reserve_id IN ($strReserveID)
							AND reservedet_date = '$date'
							AND reservedet_st != '3'
							AND reservedet_id != '$reservedetID'
							AND seat_id != ''");
					$numdetrows = mysql_num_rows($sqldet);

					if($numdetrows > 0 || $numdetrows1 > 0){
						while($rowdet=mysql_fetch_assoc($sqldet)){
							array_push($seatID,$rowdet['seat_id']);
						}
						while($rowdet1=mysql_fetch_assoc($sqldet1)){
							array_push($seatID,$rowdet1['seat_id']);
						}

						$strSeatID = implode(",",$seatID);
						$result = mysql_query("SELECT * FROM tbl_seat 
								WHERE class_id = '$classID' AND seat_st = '1' AND seat_id NOT IN ($strSeatID)
								ORDER BY ABS(seat_id) ASC");

					}else{
						$result = mysql_query("SELECT * FROM tbl_seat
						WHERE tbl_seat.class_id = '$classID' AND seat_st = '1'
						ORDER BY ABS(seat_id) ASC");

					}
				}

		break;	


	}

	
	while($rowseat = mysql_fetch_assoc($result)) {

		$data[] = $rowseat;
	}

	$resultfares = mysql_query("SELECT * FROM tbl_calfares 
						WHERE class_id = '$classID'");
	$rowfares = mysql_fetch_assoc($resultfares);

		$data2[] = $rowfares;


	// Print the JSON representation of a value
	echo json_encode(array($data,$data2));


?>