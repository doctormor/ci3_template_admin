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
	$order1 = mysql_fetch_array(mysql_query("SELECT * FROM tbl_tracking WHERE reservedet_id = '$rsdID'"));
	if($order1['tracking_st']==""){
		mysql_query("INSERT INTO tbl_tracking VALUES('','$rsdID','$status','$user_id','$note')");
	}else{
		mysql_query("UPDATE tbl_tracking SET tracking_st = '$status' , tracking_tv = '$user_id' , tracking_note = '$note' WHERE reservedet_id = '$rsdID'");
	}
	$data = array('rsdID' => $rsdID,'status'=>$status);
}



// Print the JSON representation of a value
echo json_encode(array($data));


?>