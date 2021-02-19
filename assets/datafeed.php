<?php
include("connect_db.php");
date_default_timezone_set('Asia/Bangkok');

        $bid = $_POST['Ref'];
        echo "OK";

	    $successCode = $_POST['successcode'];
        $payRef = $_POST['PayRef'];
        $Ord = $_POST['Ord'];
        $Holder = $_POST['Holder'];
        $Amt = $_POST['Amt'];
        $Cur1 = $_POST['Cur'];
        $src = $_POST['src'];//สถานะของธนาคารเจ้าของบัตรลำดับที่1
        $prc = $_POST['prc'];//สถานะของธนาคารเจ้าของบัตรลำดับที่2


        if($Cur1=="764")
        {
            $Cur = "THB";
        }
        else if($Cur1=="840")
        {
            $Cur = "USD";
        }
        $note = "เลขที่อ้างอิงการชำระเงินธนาคารกรุงเทพ:".$payRef."<br>
        เลขอ้างอิงของธนาคาร - หมายเลขประจำใบสั่งซื้อ:".$Ord."<br>
        ชื่อเจ้าของบัญชีชำระเงิน:".$Holder."<br>
        สกุลเงินที่ทำรายการ:".$Cur;

        $uname = "";

        $priceRE = 0;
        $sqlr = "select * from tbl_reservedet inner join tbl_reserve on tbl_reserve.reserve_id=tbl_reservedet.reserve_id where tbl_reserve.bid = '$bid'";
        $qrr = mysql_query($sqlr);
        while($arrr = mysql_fetch_array($qrr))
        {
            $priceRE = $priceRE + $arrr['ticket_price'];
        }

        $pay_priceold = 0;
        $sqlpp = "select * from tbl_payment where bid = '$bid' and pay_status = 'Y'";
        $qrpp = mysql_query($sqlpp);
        while($arrpp = mysql_fetch_array($qrpp))
        {
            $pay_priceold = $pay_priceold + $arrpp['pay_price'];
        }

        $total = $priceRE - $pay_priceold;

        $bookingID = mysql_fetch_array(mysql_query("select * from tbl_booking inner join tbl_user on tbl_user.user_id=tbl_booking.user_id where bid='$bid'"));
        $rdate1 = explode(" ", $bookingID['booking_dateadd']);
        $rdate = explode("-", $rdate1[0]);
        $OrderID = substr($rdate[0],2,4).$bookingID['bid'];

        if($successCode=="0")
        {
            if($bookingID['bid']!="" && $total<=$Amt)
            {
                $sql = "select * from tbl_reserve inner join tbl_reservedet on tbl_reservedet.reserve_id=tbl_reservedet.reserve_id where tbl_reserve.bid = '$bid' order by tbl_reservedet.reservedet_id";
                $qr = mysql_query($sql);
                $arr = mysql_fetch_array($qr);

                $sex = $arr['reservedet_sex'];
                $name = $arr['reservedet_name'];
                $surname = $arr['reservedet_surname'];
                $code = $arr['reservedet_usercode'];
                $phone = $arr['reservedet_phone'];
                $user_id = $arr['user_id'];

                $user = mysql_fetch_array(mysql_query("select * from tbl_user where user_id='$user_id'"));
                $uname = $user['name'];
                if($uname=="")
                {
                    mysql_query("update tbl_user set sex='$sex' , name = '$name' , surname = '$surname' , code = '$code' , tel = '$phone' where user_id='$user_id'");
                }

                mysql_query("insert into tbl_payment values ('','$bid','1','".date("Y-m-d")."','".date("H:i:s")."','$Amt','$note','','".date("Y-m-d H:i:s")."','C','Y')");

                //////////////////////////////Check Payment//////////////////////////////////

                $pay_price = 0;
                $sqlp = "select * from tbl_payment where bid = '$bid' and pay_status = 'Y'";
                $qrp = mysql_query($sqlp);
                while($arrp = mysql_fetch_array($qrp))
                {
                    $pay_price = $pay_price + $arrp['pay_price'];
                }

                $Yprice = $priceRE - $pay_price;
                
                //////////////////////////////Check Payment//////////////////////////////////
                if($Yprice<=0)
                {
                    mysql_query("update tbl_reserve set reserve_status='W' where bid='$bid'");
                }

                $tomail = $bookingID['email'];
                /*$body             = file_get_contents('contents.html');
                $body             = preg_replace('/\\\\/','', $body); //Strip backslashes*/
                $csst = "CUSTOMER SECTION";
                $bs = "BOAT SCHEDULE";
                $bp = "BOOKING & PAYMENT";
                $tc = "TERM & CONDITION";
                $cu = "CONTACT US";
                $ho = "HOME";
                $body = '
                    <div style="background-color: #55a3dc;text-align: center;">
                        <br><img src="https://www.royalferrygroup.com/ferrybooking/assets/images/logo.png"><h3 style="color:#193e88;">Hello! '.$bookingID['name'].' '.$bookingID['surname'].'</h3><br>
                    </div>
                    <div style="background-color: #E0FFFF;text-align: center;">
                        <br><img src="https://www.royalferrygroup.com/images/EN01.png">
                        <h3>Information your booking</h3>
                        <h3>Your Booking ID #'.$OrderID.' is Pending.</h3>
                        <p style="color:red;">* Please wait until the transaction is confirmed from RoyalFerryGroup.com within 24 hours, and you are can check your information on booking website.</p>
                        <p style="color:red;">* Please bring your PASSPORT or ID CARD for Check-in.</p>
                        <p style="color:red;">* Arrival at the pier for check-in at least 1 hours before actual departure time.</p>
                        <p style="color:red;">* The Ticket purchase is final, Ticket connot be refund or change.</p>
                        <p><a href="https://www.royalferrygroup.com/ferrybooking/member/login" target="_blank" style="color:red;">*** Go to website click here.***</a></p>
                        <h3>Thank you for booking.</h3>
                        <h4>Royal Passenger Liner Co.,Ltd.</h4>
                        <img src="https://www.royalferrygroup.com/images/EN03.png"><br>
                    </div>
                    <div style="background-color: #2d3033;text-align: center;color: #fff;">
                        <br>
                        <a href="https://www.royalferrygroup.com/ferrybooking/home" style="color: #fff;" target="_blank">'.$ho.'</a> | <a href="https://www.royalferrygroup.com/ferrybooking/booking/schedule" style="color: #fff;" target="_blank">'.$bs.'</a> | <a href="https://www.royalferrygroup.com/ferrybooking/booking/howtobooking" style="color: #fff;" target="_blank">'.$bp.'</a> | <a href="https://www.royalferrygroup.com/ferrybooking/booking/team_condition" style="color: #fff;" target="_blank">'.$tc.'</a> | <a href="https://www.royalferrygroup.com/ferrybooking/member/member_account" style="color: #fff;" target="_blank">'.$csst.'</a> | <a href="https://www.royalferrygroup.com/ferrybooking/booking/contact" style="color: #fff;" target="_blank">'.$cu.'</a>
                        <br>
                        <a href="https://www.facebook.com/RoyalPassengerLiner" target="_blank" style="color: #fff;">Facebook FERRY Pattaya-Huahin เรือเฟอร์รี่ข้ามอ่าวไทย พัทยา-หัวหิน</a>
                        <br>
                        <a href="https://www.youtube.com/channel/UCeHOF29dmF9NnVz12SsbeHQ" target="_blank" style="color: #fff;">Youtube Royal Ferry Group Channel</a>
                        <br>
                        Line Official : @royalferry
                        <br>
                        Walk-in to office at Pattaya Pier (Bali Hai). Tel. 038-488-999, 098-625-9949
                        <br>
                        Walk-in to office at Hua Hin Pier (Khaotakiab). Tel. 093-495-9499
                        <br>
                        ©2017 Royal Passenger Liner company limited. All RIGHTS RESERVED.
                        <br><br>
                    </div>';

                //START SMS
                function send_postsmslCURL($_param=''){
                    
                    $_url='https://www.royalferrygroup.com/ferrybooking/assets/curl_msgpush.php';
                    $postData = '';
                    //create name value pairs seperated by &
                    foreach($_param as $k => $v) 
                    { 
                      $postData .= $k . '='.$v.'&'; 
                    }
                    rtrim($postData, '&');

                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL,$_url);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                    curl_setopt($ch, CURLOPT_HEADER, false); 
                    curl_setopt($ch, CURLOPT_POST, count($postData));
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    

                    $output=curl_exec($ch);

                    curl_close($ch);

                    return (bool)$output;//$output;
                } 
                if(is_numeric($bookingID['tel']) && strlen($bookingID['tel'])>6)
                {
                    $_param = array(
                       "sender" => "RPLFerry",
                       "cmd" => "sms",
                       "phone" => $bookingID['tel'],
                       "msg" => "Information your booking number #$OrderID is Pending. Please wait until the transaction is confirmed within 24 hr."
                    );      
                    send_postsmslCURL($_param);
                }
                //END SMS
            }
        }
        else
        {
            if($bookingID['bid']!="" && $total<=$Amt)
            {
                $sql = "select * from tbl_reserve inner join tbl_reservedet on tbl_reservedet.reserve_id=tbl_reservedet.reserve_id where tbl_reserve.bid = '$bid' order by tbl_reservedet.reservedet_id";
                $qr = mysql_query($sql);
                $arr = mysql_fetch_array($qr);

                $sex = $arr['reservedet_sex'];
                $name = $arr['reservedet_name'];
                $surname = $arr['reservedet_surname'];
                $code = $arr['reservedet_usercode'];
                $phone = $arr['reservedet_phone'];
                $user_id = $arr['user_id'];

                $user = mysql_fetch_array(mysql_query("select * from tbl_user where user_id='$user_id'"));
                $uname = $user['name'];
                if($uname=="")
                {
                    mysql_query("update tbl_user set sex='$sex' , name = '$name' , surname = '$surname' , code = '$code' , tel = '$phone' where user_id='$user_id'");
                }

                mysql_query("insert into tbl_payment values ('','$bid','1','".date("Y-m-d")."','".date("H:i:s")."','$Amt','$note','','".date("Y-m-d H:i:s")."','C','N')");

                //////////////////////////////Check Payment//////////////////////////////////

                $pay_price = 0;
                $sqlp = "select * from tbl_payment where bid = '$bid' and pay_status = 'Y'";
                $qrp = mysql_query($sqlp);
                while($arrp = mysql_fetch_array($qrp))
                {
                    $pay_price = $pay_price + $arrp['pay_price'];
                }

                $Yprice = $priceRE - $pay_price;
                
                //////////////////////////////Check Payment//////////////////////////////////
                if($Yprice<=0)
                {
                    mysql_query("update tbl_reserve set reserve_status='W' where bid='$bid'");
                }

                $tomail = $bookingID['email'];
                /*$body             = file_get_contents('contents.html');
                $body             = preg_replace('/\\\\/','', $body); //Strip backslashes*/
                $csst = "CUSTOMER SECTION";
                $bs = "BOAT SCHEDULE";
                $bp = "BOOKING & PAYMENT";
                $tc = "TERM & CONDITION";
                $cu = "CONTACT US";
                $ho = "HOME";
                $body = '
                    <div style="background-color: #55a3dc;text-align: center;">
                        <br><img src="https://www.royalferrygroup.com/ferrybooking/assets/images/logo.png"><h3 style="color:#193e88;">Hello! '.$bookingID['name'].' '.$bookingID['surname'].'</h3><br>
                    </div>
                    <div style="background-color: #E0FFFF;text-align: center;">
                        <br><img src="https://www.royalferrygroup.com/images/EN01.png">
                        <h3>Information your booking</h3>
                        <h3>Your Booking ID #'.$OrderID.' is Payment Fail.</h3>
                        <p style="color:red;">*** Please make a new payment. ***</p>
                        <p><a href="https://www.royalferrygroup.com/ferrybooking/member/login" target="_blank" style="color:red;">*** Go to website click here.***</a></p>
                        <h4>Royal Passenger Liner Co.,Ltd.</h4>
                        <img src="https://www.royalferrygroup.com/images/EN03.png"><br>
                    </div>
                    <div style="background-color: #2d3033;text-align: center;color: #fff;">
                        <br>
                        <a href="https://www.royalferrygroup.com/ferrybooking/home" style="color: #fff;" target="_blank">'.$ho.'</a> | <a href="https://www.royalferrygroup.com/ferrybooking/booking/schedule" style="color: #fff;" target="_blank">'.$bs.'</a> | <a href="https://www.royalferrygroup.com/ferrybooking/booking/howtobooking" style="color: #fff;" target="_blank">'.$bp.'</a> | <a href="https://www.royalferrygroup.com/ferrybooking/booking/team_condition" style="color: #fff;" target="_blank">'.$tc.'</a> | <a href="https://www.royalferrygroup.com/ferrybooking/member/member_account" style="color: #fff;" target="_blank">'.$csst.'</a> | <a href="https://www.royalferrygroup.com/ferrybooking/booking/contact" style="color: #fff;" target="_blank">'.$cu.'</a>
                        <br>
                        <a href="https://www.facebook.com/RoyalPassengerLiner" target="_blank" style="color: #fff;">Facebook FERRY Pattaya-Huahin เรือเฟอร์รี่ข้ามอ่าวไทย พัทยา-หัวหิน</a>
                        <br>
                        <a href="https://www.youtube.com/channel/UCeHOF29dmF9NnVz12SsbeHQ" target="_blank" style="color: #fff;">Youtube Royal Ferry Group Channel</a>
                        <br>
                        Line Official : @royalferry
                        <br>
                        Walk-in to office at Pattaya Pier (Bali Hai). Tel. 038-488-999, 098-625-9949
                        <br>
                        Walk-in to office at Hua Hin Pier (Khaotakiab). Tel. 093-495-9499
                        <br>
                        ©2017 Royal Passenger Liner company limited. All RIGHTS RESERVED.
                        <br><br>
                    </div>';
            }
        }
        
        /**
        * Simple example script using PHPMailer with exceptions enabled
        * @package phpmailer
        * @version $Id$
        */
        include ("function.php");
        require '../PHPMailer/class.phpmailer.php';

        try {
            $mail = new PHPMailer(true); //New instance, with exceptions enabled

            $mail->IsSMTP();                           // tell the class to use SMTP
            $mail->SMTPAuth   = true;                  // enable SMTP authentication
            $mail->Port       = 25;                    // set the SMTP server port
            $mail->Host       = "mail.royalferrygroup.com"; // SMTP server
            $mail->Username   = "reservation@royalferrygroup.com";     // SMTP server username
            $mail->Password   = "rpl1153";            // SMTP server password

            $mail->IsSendmail();  // tell the class to use Sendmail

            $mail->AddReplyTo("reservation@royalferrygroup.com","Royal Passenger Liner");

            $mail->From       = "reservation@royalferrygroup.com";
            $mail->FromName   = "Royal Passenger Liner";

            $to = $tomail;

            $mail->AddAddress($to);

            $mail->Subject  = "Information your booking";

            $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
            $mail->WordWrap   = 80; // set word wrap

            $mail->MsgHTML($body);

            $mail->IsHTML(true); // send as HTML

            if($mail->Send())
            {
                echo $data['updatepwd'] = 'success!';

            }else{
                echo $data['updatepwd'] = 'fail!';
            }

            //echo 'Message has been sent.';
        } catch (phpmailerException $e) {
            echo $e->errorMessage();
        }
?>