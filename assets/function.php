<?php 

function DateDiff($strDate1,$strDate2) 
{ 
return (strtotime($strDate2) - strtotime($strDate1))/ ( 60 * 60 * 24 ); // 1 day = 60*60*24 
}

//$date_name = array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์");
//$month_name = array("มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");

function switchIF($condition,$chk1,$chk2,$text1,$text2)
	{
		if($condition==$chk1){return $text1;}
		if($condition==$chk2){return $text2;}
	}
/* ---------------------------------------------------------------------- *\
  Function		:	For date
  Description	:	แสดงวัน,วันเวลา
  Usage			:	
  Arguments	:	ไม่มี
\* ---------------------------------------------------------------------- */
function _Tdate($d)
	{
		if(is_string($d)){$d=strtotime($d);}

		$date_name = array("อาทิตย์", "จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์");
		$month_name = array("","มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
		return "วัน".$date_name[date("w",$d)]."ที่ ".date("j",$d)." ".$month_name[date("n",$d)]." พ.ศ ".(date("Y",$d)+543);
	}
function _Edate($d)
	{
		if(is_string($d)){$d=strtotime($d);}

		$date_name = array("Sunday", "Monday", "Tuesday", "Wendsday", "Thursday", "Friday", "Satursday");
		$month_name = array("","January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
		return $date_name[date("w",$d)].", ".date("j",$d)." ".$month_name[date("n",$d)]." ".(date("Y",$d));
	}
	
function _Tdates($d)
	{
		if(is_string($d)){$d=strtotime($d);}

		$month_name = array("","มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
		return "วันที่ ".date("j",$d)." ".$month_name[date("n",$d)]." พ.ศ ".(date("Y",$d)+543);
	}
function _Edates($d)
	{
		if(is_string($d)){$d=strtotime($d);}

		$month_name = array("","January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
		return date("j",$d)." ".$month_name[date("n",$d)]." ".(date("Y",$d));
	}
function _Edates2($d)
	{
		if(is_string($d)){$d=strtotime($d);}

		$month_name = array("","JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC");
		return date("j",$d)." ".$month_name[date("n",$d)]." ".(date("Y",$d))." ".date("H",$d).":".date("i",$d);
	}
	
function _Tdates2($d)
	{
		if(is_string($d)){$d=strtotime($d);}

		$month_name = array("","ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
		return "".sprintf("%02d", date("j",$d))." ".$month_name[date("n",$d)]." ".(date("Y",$d)+543);
	}

function _Tdates3($d)
	{
		if(is_string($d)){$d=strtotime($d);}

		$month_name = array("","ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
		return "".sprintf("%02d", date("j",$d))." ".$month_name[date("n",$d)]."".(date("Y",$d)+543)." ".date("H",$d).":".date("i",$d);
	}

function thaiDate($d) 
	{
		if(is_string($d)){$d=strtotime($d);}
		$dateText=date("d",$d)."-".date("m",$d)."-".(date("Y",$d)+543)." ".date("H",$d).":".date("i",$d);
		return $dateText;
	}

function thaiDatenoTime2($d) 
	{
		if(is_string($d)){$d=strtotime($d);}
		$dateText=date("d",$d)."-".date("m",$d)."-".date("Y",$d);
		return $dateText;
	}

function thaiDatenoTime($d) 
	{
		if(is_string($d)){$d=strtotime($d);}
		$dateText=date("d",$d)."-".date("m",$d)."-".(date("Y",$d)+543);
		return $dateText;
	}

function dateslas($d) 
	{
		if(is_string($d)){$d=strtotime($d);}
		$dateText=date("d",$d)."/".date("m",$d)."/".(date("Y",$d));
		return $dateText;
	}
	
function EnDatenoTime($d) 
	{
		$time=explode('-',$d);
		$dateText=$time[2]."-".$time[1]."-".$time[0];
		return $dateText;
	}
//วันเวลา
function getTIME()
	{
		return date("Y-m-d H:i:s");
	}

//วันเวลา
function changeTIMEnosecondEN($strTime)
	{
		//return date("H:i:s");
		$RstrTime = date("g:i a", strtotime($strTime));

		/*$strHour= date("g",strtotime($RstrTime));
		$strMinute= date("i",strtotime($RstrTime));
		$strSeconds= date("s",strtotime($RstrTime));

		#24hour ->  12 hour
		print( date("g:i a", strtotime("13:30:30")) );
		# hour ->  24 hour
		print( date("H:i:s", strtotime("1:30 pm")) );
		*/

		return "$RstrTime";
	}

//วัน
function _getDate()
	{
		return date("Y-m-d");
	}
	
//วัน
function _getMonth($m)
	{
		$month_name = '';
		if($m == '01'){
			$month_name = 'มกราคม';
		} else if($m == '02'){
			$month_name = 'กุมภาพันธ์';
		} else if($m == '03'){
			$month_name = 'มีนาคม';
		} else if($m == '04'){
			$month_name = 'เมษายน';
		} else if($m == '05'){
			$month_name = 'พฤษภาคม';
		} else if($m == '06'){
			$month_name = 'มิถุนายน';
		} else if($m == '07'){
			$month_name = 'กรกฎาคม';
		} else if($m == '08'){
			$month_name = 'สิงหาคม';
		} else if($m == '09'){
			$month_name = 'กันยายน';
		} else if($m == '10'){
			$month_name = 'ตุลาคม';
		} else if($m == '11'){
			$month_name = 'พฤศจิกายน';
		} else if($m == '12'){
			$month_name = 'ธันวาคม';
		}

		return $month_name;
	}

//ลบวัน
function day_diff($first_date,$second_date) 
	{
		 $first_date = strtotime($first_date);
		 $second_date = strtotime($second_date);

		 $time_diff = $second_date-$first_date;
		 $day_diff = $time_diff/86400;
		 return 	$day_diff;
	}

//เพิ่มวัน
function day_sum($first_date,$num) 
	{
		 $first_date = strtotime($first_date);
		 $day_sum = $first_date+(86400*$num);
		 return 	$day_sum;
	}

//นับจำนวนวันเพิ่มจากวันที่เริ่มต้น	
function expdate($startdate,$datenum){
 $startdatec=strtotime($startdate); // ทำให้ข้อความเป็นวินาที
 $tod=$datenum*86400; // รับจำนวนวันมาคูณกับวินาทีต่อวัน
 $ndate=$startdatec+$tod; // นับบวกไปอีกตามจำนวนวันที่รับมา
 return $ndate; // ส่งค่ากลับ.....
}

function callClass($class){
	if($class=='E'){

	}else if($class=='B'){

	}else if($class=='F'){

	}
	
}

function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strHour= date("H",strtotime($strDate));
		$strMinute= date("i",strtotime($strDate));
		$strSeconds= date("s",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
	}

?>