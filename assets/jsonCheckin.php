<?php
// Set delay 1 second. 
//sleep(1);

include("config.in.php");

// Next dropdown list.
$rsdID = isset($_POST['rsdID']) ? $_POST['rsdID'] : '';
$status = isset($_POST['status']) ? $_POST['status'] : '';
$user_id = isset($_POST['user_id']) ? $_POST['user_id'] : '';
$note = isset($_POST['note']) ? $_POST['note'] : '';


$data = array();
if($rsdID!=null && $status!=null){
	$order1 = mysql_fetch_array(mysql_query("SELECT max(check_in_order) FROM tbl_check_in WHERE reservedet_id = '$rsdID'"));
	$order = $order1[0] + 1;
	mysql_query("INSERT INTO tbl_check_in VALUES('','".date('Y-m-d H:i:s')."','$note','$rsdID','$user_id','$status','$order')");
	//$arr = mysql_fetch_array(mysql_query("SELECT * FROM tbl_check_in WHERE "))
	$data = array('rsdID' => $rsdID,'status'=>$status);
}	


	// Print the JSON representation of a value
	echo json_encode(array($data));


?>