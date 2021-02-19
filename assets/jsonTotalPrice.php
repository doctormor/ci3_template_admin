<?php
// Set delay 1 second. 
//sleep(1);

include("config.in.php");

// Next dropdown list.
$nextList = isset($_GET['nextList']) ? $_GET['nextList'] : '';
$datetrips2 = isset($_GET['datetrips']) ? $_GET['datetrips'] : '';
$datetrips1 = explode("/", $datetrips2);
$datetrips = $datetrips1[0].'-'.$datetrips1[1].'-'.$datetrips1[2];
$datetripe2 = isset($_GET['datetripe']) ? $_GET['datetripe'] : '';
$datetripe1 = explode("/", $datetripe2);
$datetripe = $datetripe1[0].'-'.$datetripe1[1].'-'.$datetripe1[2];

$data = array();
$data2 = array();


	switch($nextList) {
		case 'numseatD':
			$merchant_id = isset($_GET['merchant_id']) ? $_GET['merchant_id'] : '';
			$class_idDepart = isset($_GET['class_idDepart']) ? $_GET['class_idDepart'] : '';
			$class_idReturn = isset($_GET['class_idReturn']) ? $_GET['class_idReturn'] : '';
			$fares_idDepart = isset($_GET['fares_idDepart']) ? $_GET['fares_idDepart'] : '';
			$fares_idReturn = isset($_GET['fares_idReturn']) ? $_GET['fares_idReturn'] : '';
			$voucherpriceDepart = isset($_GET['voucherpriceDepart']) ? $_GET['voucherpriceDepart'] : '';
			$voucherpriceReturn = isset($_GET['voucherpriceReturn']) ? $_GET['voucherpriceReturn'] : '';
			$seat = isset($_GET['seat']) ? $_GET['seat'] : '';

			$depart = mysql_fetch_array(mysql_query("SELECT * FROM tbl_calfares
					LEFT JOIN tbl_class ON (tbl_class.class_id = tbl_calfares.class_id)
					WHERE tbl_calfares.class_id = '$class_idDepart' AND tbl_calfares.fares_id = '$fares_idDepart'"));
			$voucherd = mysql_fetch_array(mysql_query("SELECT * FROM tbl_voucher 
					LEFT JOIN tbl_class ON tbl_class.class_code = tbl_voucher.classcode
					WHERE tbl_class.class_id = '$class_idDepart'
					AND tbl_voucher.merchant_id = '$merchant_id'
					AND tbl_voucher.passtype_id = '1'"));

			$return = mysql_fetch_array(mysql_query("SELECT * FROM tbl_calfares
					LEFT JOIN tbl_class ON (tbl_class.class_id = tbl_calfares.class_id)
					WHERE tbl_calfares.class_id = '$class_idReturn' AND tbl_calfares.fares_id = '$fares_idReturn'"));
			$voucherr = mysql_fetch_array(mysql_query("SELECT * FROM tbl_voucher 
					LEFT JOIN tbl_class ON tbl_class.class_code = tbl_voucher.classcode
					WHERE tbl_class.class_id = '$class_idReturn'
					AND tbl_voucher.merchant_id = '$merchant_id'
					AND tbl_voucher.passtype_id = '1'"));

			if($depart['class_code']=="V"){
				$roomd = ceil($seat/$depart['seat_amount']);
				$priced = $depart['cal_price'] * $roomd;
			}else{
				if($merchant_id!=""){
					$priced = ($depart['cal_price']-$voucherd['voucher_price']) * $seat;
				}else{
					$prod = mysql_fetch_array(mysql_query("SELECT * FROM tbl_voucher
							LEFT JOIN tbl_class ON tbl_class.class_code = tbl_voucher.classcode
							WHERE tbl_class.class_id = '$class_idDepart'
							AND tbl_voucher.type_id = '4'
							AND tbl_voucher.voucher_date_start <= '$datetrips'
							AND tbl_voucher.voucher_date_end >= '$datetrips'
							AND tbl_voucher.voucher_st = '0'"));
					if($prod['voucher_id']!=""){
						$priced = (($depart['cal_price']-$voucherd['voucher_price'])-(($depart['cal_price']*$prod['voucher_discount'])/100)) * $seat;
					}else{
						$priced = $depart['cal_price'] * $seat;
					}
					
				}
			}

			if($return['class_code']=="V"){
				$roomr = ceil($seat/$return['seat_amount']);
				$pricer = $return['cal_price'] * $roomr;
			}else{
				if($merchant_id!=""){
					$pricer = ($return['cal_price']-$voucherr['voucher_price']) * $seat;
				}else{
					$pror = mysql_fetch_array(mysql_query("SELECT * FROM tbl_voucher
							LEFT JOIN tbl_class ON tbl_class.class_code = tbl_voucher.classcode
							WHERE tbl_class.class_id = '$class_idReturn'
							AND tbl_voucher.type_id = '4'
							AND tbl_voucher.voucher_date_start <= '$datetripe'
							AND tbl_voucher.voucher_date_end >= '$datetripe'
							AND tbl_voucher.voucher_st = '0'"));
					if($pror['voucher_id']!=""){
						$pricer = (($return['cal_price']-$voucherr['voucher_price'])-(($return['cal_price']*$pror['voucher_discount'])/100)) * $seat;
					}else{
						$pricer = $return['cal_price'] * $seat;
					}
				}
			}
			
			$total = $priced + $pricer;

		break;	

		case 'numseatR':
			$merchant_id = isset($_GET['merchant_id']) ? $_GET['merchant_id'] : '';
			$class_idDepart = isset($_GET['class_idDepart']) ? $_GET['class_idDepart'] : '';
			$class_idReturn = isset($_GET['class_idReturn']) ? $_GET['class_idReturn'] : '';
			$fares_idDepart = isset($_GET['fares_idDepart']) ? $_GET['fares_idDepart'] : '';
			$fares_idReturn = isset($_GET['fares_idReturn']) ? $_GET['fares_idReturn'] : '';
			$voucherpriceDepart = isset($_GET['voucherpriceDepart']) ? $_GET['voucherpriceDepart'] : '';
			$voucherpriceReturn = isset($_GET['voucherpriceReturn']) ? $_GET['voucherpriceReturn'] : '';
			$seat = isset($_GET['seat']) ? $_GET['seat'] : '';

			$depart = mysql_fetch_array(mysql_query("SELECT * FROM tbl_calfares
					LEFT JOIN tbl_class ON (tbl_class.class_id = tbl_calfares.class_id)
					WHERE tbl_calfares.class_id = '$class_idDepart' AND tbl_calfares.fares_id = '$fares_idDepart'"));
			$voucherd = mysql_fetch_array(mysql_query("SELECT * FROM tbl_voucher 
					LEFT JOIN tbl_class ON tbl_class.class_code = tbl_voucher.classcode
					WHERE tbl_class.class_id = '$class_idDepart'
					AND tbl_voucher.merchant_id = '$merchant_id'
					AND tbl_voucher.passtype_id = '1'"));

			$return = mysql_fetch_array(mysql_query("SELECT * FROM tbl_calfares
					LEFT JOIN tbl_class ON (tbl_class.class_id = tbl_calfares.class_id)
					WHERE tbl_calfares.class_id = '$class_idReturn' AND tbl_calfares.fares_id = '$fares_idReturn'"));
			$voucherr = mysql_fetch_array(mysql_query("SELECT * FROM tbl_voucher 
					LEFT JOIN tbl_class ON tbl_class.class_code = tbl_voucher.classcode
					WHERE tbl_class.class_id = '$class_idReturn'
					AND tbl_voucher.merchant_id = '$merchant_id'
					AND tbl_voucher.passtype_id = '1'"));

			if($depart['class_code']=="V"){
				$roomd = ceil($seat/$depart['seat_amount']);
				$priced = $depart['cal_price'] * $roomd;
			}else{
				if($merchant_id!=""){
					$priced = ($depart['cal_price']-$voucherd['voucher_price']) * $seat;
				}else{
					$prod = mysql_fetch_array(mysql_query("SELECT * FROM tbl_voucher
							LEFT JOIN tbl_class ON tbl_class.class_code = tbl_voucher.classcode
							WHERE tbl_class.class_id = '$class_idDepart'
							AND tbl_voucher.type_id = '4'
							AND tbl_voucher.voucher_date_start <= '$datetrips'
							AND tbl_voucher.voucher_date_end >= '$datetrips'
							AND tbl_voucher.voucher_st = '0'"));
					if($prod['voucher_id']!=""){
						$priced = (($depart['cal_price']-$voucherd['voucher_price'])-(($depart['cal_price']*$prod['voucher_discount'])/100)) * $seat;
					}else{
						$priced = $depart['cal_price'] * $seat;
					}
					
				}
			}

			if($return['class_code']=="V"){
				$roomr = ceil($seat/$return['seat_amount']);
				$pricer = $return['cal_price'] * $roomr;
			}else{
				if($merchant_id!=""){
					$pricer = ($return['cal_price']-$voucherr['voucher_price']) * $seat;
				}else{
					$pror = mysql_fetch_array(mysql_query("SELECT * FROM tbl_voucher
							LEFT JOIN tbl_class ON tbl_class.class_code = tbl_voucher.classcode
							WHERE tbl_class.class_id = '$class_idReturn'
							AND tbl_voucher.type_id = '4'
							AND tbl_voucher.voucher_date_start <= '$datetripe'
							AND tbl_voucher.voucher_date_end >= '$datetripe'
							AND tbl_voucher.voucher_st = '0'"));
					if($pror['voucher_id']!=""){
						$pricer = (($return['cal_price']-$voucherr['voucher_price'])-(($return['cal_price']*$pror['voucher_discount'])/100)) * $seat;
					}else{
						$pricer = $return['cal_price'] * $seat;
					}
				}
			}
			
			$total = $priced + $pricer;

		break;	


	}

	
	

	$data[] = $total;
	


	// Print the JSON representation of a value
	echo json_encode(array($data));


?>