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
			$calIDD = isset($_GET['calIDD']) ? $_GET['calIDD'] : '';
			$calIDR = isset($_GET['calIDR']) ? $_GET['calIDR'] : '';
			$voucher_idDD = isset($_GET['voucher_idD']) ? $_GET['voucher_idD'] : '';
			$voucher_idRR = isset($_GET['voucher_idR']) ? $_GET['voucher_idR'] : '';
			if($voucher_idDD!="")
			{
				$voucher_idD = $voucher_idDD;
			}
			else
			{
				$voucher_idD = 0;
			}
			if($voucher_idRR!="")
			{
				$voucher_idR = $voucher_idRR;
			}
			else
			{
				$voucher_idR = 0;
			}
			$seat = isset($_GET['seat']) ? $_GET['seat'] : '';

			$voucherD = mysql_fetch_array(mysql_query("SELECT * FROM tbl_voucher WHERE voucher_id = '$voucher_idD'"));
			$voucherR = mysql_fetch_array(mysql_query("SELECT * FROM tbl_voucher WHERE voucher_id = '$voucher_idR'"));

			$depart = mysql_fetch_array(mysql_query("SELECT * FROM tbl_calfares
					LEFT JOIN tbl_class ON (tbl_class.class_id = tbl_calfares.class_id)
					WHERE tbl_calfares.cal_id = '$calIDD'"));
			$return = mysql_fetch_array(mysql_query("SELECT * FROM tbl_calfares
					LEFT JOIN tbl_class ON (tbl_class.class_id = tbl_calfares.class_id)
					WHERE tbl_calfares.cal_id = '$calIDR'"));

			if($depart['class_code']=="V")
			{
				$roomD = ceil($seat/$depart['seat_amount']);
				$priced = ($depart['cal_price'] - $voucherD['voucher_price']) * $roomD;
			}
			else
			{
				$priced = ($depart['cal_price'] - $voucherD['voucher_price']) * $seat;
			}
			if($return['class_code']=="V")
			{
				$roomR = ceil($seat/$return['seat_amount']);
				$priceR = ($return['cal_price'] - $voucherR['voucher_price']) * $roomR;
			}
			else
			{
				$priceR = ($return['cal_price'] - $voucherR['voucher_price']) * $seat;
			}
			
			$total = $priced+$priceR;

		break;	


	}

	
	

	$data[] = $total;
	


	// Print the JSON representation of a value
	echo json_encode(array($data));


?>