<?php
// Set delay 1 second. 
//sleep(1);

include("config.in.php");

// Next dropdown list.
$nextList = isset($_GET['nextList']) ? $_GET['nextList'] : '';
$datetrip2 = isset($_GET['datetrip']) ? $_GET['datetrip'] : '';
$lang = isset($_GET['lang']) ? $_GET['lang'] : '';
$datetrip1 = explode("/", $datetrip2);
$datetrip = $datetrip1[0].'-'.$datetrip1[1].'-'.$datetrip1[2];

$data = array();
$data2 = array();


	switch($nextList) {
		case 'numseatD':
			$class_idDepart = isset($_GET['class_idDepart']) ? $_GET['class_idDepart'] : '';
			$fares_idDepart = isset($_GET['fares_idDepart']) ? $_GET['fares_idDepart'] : '';
			$merchant_id = isset($_GET['merchant_id']) ? $_GET['merchant_id'] : '';

			$result = mysql_fetch_array(mysql_query("SELECT * FROM tbl_calfares
					LEFT JOIN tbl_class ON (tbl_class.class_id = tbl_calfares.class_id)
					WHERE tbl_calfares.class_id = '$class_idDepart' AND tbl_calfares.fares_id = '$fares_idDepart'"));

			if($merchant_id!=""){
				$voucher = mysql_fetch_array(mysql_query("SELECT * FROM tbl_voucher 
						LEFT JOIN tbl_class ON tbl_class.class_code = tbl_voucher.classcode
						WHERE tbl_class.class_id = '$class_idDepart'
						AND tbl_voucher.merchant_id = '$merchant_id'
						AND tbl_voucher.passtype_id = '1'"));
				$price = $result['cal_price'] - $voucher['voucher_price'];
			}else{
				$pro = mysql_fetch_array(mysql_query("SELECT * FROM tbl_voucher
						LEFT JOIN tbl_class ON tbl_class.class_code = tbl_voucher.classcode
						WHERE tbl_class.class_id = '$class_idDepart'
						AND tbl_voucher.type_id = '4'
						AND tbl_voucher.voucher_date_start <= '$datetrip'
						AND tbl_voucher.voucher_date_end >= '$datetrip'
						AND tbl_voucher.voucher_st = '0'"));
				if($pro['voucher_id']!=""){
					$price = $result['cal_price'] - (($result['cal_price']*$pro['voucher_discount'])/100);
					if($lang=="thai"){
						$pro_name = $pro['voucher_name_th'];
					}else{
						$pro_name = $pro['voucher_name'];
					}
					$pro_discount = $pro['voucher_discount'];
					$pro_start = $pro['voucher_date_start'];
					$pro_end = $pro['voucher_date_end'];
				}else{
					$price = $result['cal_price'];
					$pro_name = "";
					$pro_discount = "";
					$pro_start = "";
					$pro_end = "";
				}
			}

		break;	

		case 'numseatR':
			$class_idReturn = isset($_GET['class_idReturn']) ? $_GET['class_idReturn'] : '';
			$fares_idReturn = isset($_GET['fares_idReturn']) ? $_GET['fares_idReturn'] : '';
			$merchant_id = isset($_GET['merchant_id']) ? $_GET['merchant_id'] : '';

			$result = mysql_fetch_array(mysql_query("SELECT * FROM tbl_calfares
					LEFT JOIN tbl_class ON (tbl_class.class_id = tbl_calfares.class_id)
					WHERE tbl_calfares.class_id = '$class_idReturn' AND tbl_calfares.fares_id = '$fares_idReturn'"));

			if($merchant_id!=""){
				$voucher = mysql_fetch_array(mysql_query("SELECT * FROM tbl_voucher 
						LEFT JOIN tbl_class ON tbl_class.class_code = tbl_voucher.classcode
						WHERE tbl_class.class_id = '$class_idReturn'
						AND tbl_voucher.merchant_id = '$merchant_id'
						AND tbl_voucher.passtype_id = '1'"));
				$price = $result['cal_price'] - $voucher['voucher_price'];
			}else{
				$pro = mysql_fetch_array(mysql_query("SELECT * FROM tbl_voucher
						LEFT JOIN tbl_class ON tbl_class.class_code = tbl_voucher.classcode
						WHERE tbl_class.class_id = '$class_idReturn'
						AND tbl_voucher.type_id = '4'
						AND tbl_voucher.voucher_date_start <= '$datetrip'
						AND tbl_voucher.voucher_date_end >= '$datetrip'
						AND tbl_voucher.voucher_st = '0'"));
				if($pro['voucher_id']!=""){
					$price = $result['cal_price'] - (($result['cal_price']*$pro['voucher_discount'])/100);
					if($lang=="thai"){
						$pro_name = $pro['voucher_name_th'];
					}else{
						$pro_name = $pro['voucher_name'];
					}
					$pro_discount = $pro['voucher_discount'];
					$pro_start = $pro['voucher_date_start'];
					$pro_end = $pro['voucher_date_end'];
				}else{
					$price = $result['cal_price'];
					$pro_name = "";
					$pro_discount = "";
					$pro_start = "";
					$pro_end = "";
				}
			}

		break;	


	}

	
	//while($rowseat = mysql_fetch_array($result)) {

		$data = $price;
	//}


	// Print the JSON representation of a value
	echo json_encode(array($data,$result['class_code'],$result['seat_amount'],$pro_name,$pro_discount,$pro_start,$pro_end));


?>