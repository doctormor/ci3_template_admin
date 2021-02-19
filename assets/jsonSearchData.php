<?php
// Set delay 1 second. 
//sleep(1);

include("config.in.php");

// Next dropdown list.
$nextList = isset($_GET['nextList']) ? $_GET['nextList'] : '';
$idpassport = isset($_GET['idpassport']) ? $_GET['idpassport'] : '';

$data = array();
$data2 = array();


	switch($nextList) {
		case 'search7539514':
			$result = mysql_fetch_array(mysql_query("SELECT * FROM tbl_reservedet 
				LEFT JOIN countries ON (countries.country_id = tbl_reservedet.country_id)
				WHERE reservedet_usercode like '%$idpassport%' group by reservedet_usercode desc"));
			$country = mysql_query("SELECT * FROM countries order by name asc");
		break;	
	}
	
	while ($arr = mysql_fetch_array($country)) {
		$data2[] = $arr;
	}
	
	echo json_encode(array(
			$result['reservedet_sex'],
			$result['reservedet_name'],
			$result['reservedet_surname'],
			$result['reservedet_phone'],
			$result['country_id'],
			$result['name'],
			$result['reservedet_usercode'],
			$data2
		));


?>