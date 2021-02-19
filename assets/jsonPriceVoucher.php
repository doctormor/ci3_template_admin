<?php
// Set delay 1 second. 
//sleep(1);

include("config.in.php");

// Next dropdown list.
$nextList = isset($_GET['nextList']) ? $_GET['nextList'] : '';

$data = array();
$data2 = array();


	switch($nextList) {
		case 'numseatD':
			$calID = isset($_GET['calID']) ? $_GET['calID'] : '';
			$voucher_id = isset($_GET['voucher_id']) ? $_GET['voucher_id'] : '';
			$seat = isset($_GET['seat']) ? $_GET['seat'] : '';

			$voucher = mysql_fetch_array(mysql_query("SELECT * FROM tbl_voucher WHERE voucher_id = '$voucher_id'"));

			$cal = mysql_fetch_array(mysql_query("SELECT * FROM tbl_calfares
					LEFT JOIN tbl_class ON (tbl_class.class_id = tbl_calfares.class_id)
					WHERE tbl_calfares.cal_id = '$calID'"));

			if($cal['class_code']=="V")
			{
				$room = ceil($seat/$cal['seat_amount']);
				$price = ($cal['cal_price'] - $voucher['voucher_price']) * $room;
			}
			else
			{
				$price = ($cal['cal_price'] - $voucher['voucher_price']) * $seat;
			}
			
			$total = $price;

		break;	


	}

	
	

	$data[] = $total;
	


	// Print the JSON representation of a value
	echo json_encode(array($data));


?>