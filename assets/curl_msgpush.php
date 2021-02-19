<?php
	if(isset($_POST))
	{
		@require '../PHPMailer/class.phpmailer.php';
		@require '../bulksms/sms.class.php';
		
		if($_POST['cmd']=='sms')
		{
			sms::send_sms('0624279949','q9w6e3a8s5d2',$_POST['phone'],$_POST['msg'],$_POST['sender'],'','premium');
		}else if($_POST['cmd']=='onlinemarket'){
			try {
				$mail = new PHPMailer(true); //New instance, with exceptions enabled

				$mail->IsSMTP();                           // tell the class to use SMTP
				$mail->SMTPAuth   = true;                  // enable SMTP authentication
				$mail->Port       = 25;                    // set the SMTP server port
				$mail->Host       = "mail.royalferrygroup.com"; // SMTP server
				$mail->Username   = "onlinemarketing@royalferrygroup.com";     // SMTP server username
				$mail->Password   = "rpllogin2017";            // SMTP server password

				$mail->IsSendmail();  // tell the class to use Sendmail

				$mail->AddReplyTo("onlinemarketing@royalferrygroup.com","Royal Passenger Liner Co.,Ltd.");

				$mail->From       = "onlinemarketing@royalferrygroup.com";
				$mail->FromName   = "Royal Passenger Liner Co.,Ltd.";

				$mail->AddAddress($_POST['email']);

				$mail->Subject  = $_POST['subject'];

				$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
				$mail->WordWrap   = 80; // set word wrap

				$mail->MsgHTML($_POST['body']);

				$mail->IsHTML(true); // send as HTML

				if($mail->Send())
				{
					$response = (bool)TRUE;

				}else{
					$response = (bool)FALSE;
				}

				//echo 'Message has been sent.';
			} catch (phpmailerException $e) {
				//$data['msg'] = $e->errorMessage();
				$response = (bool)FALSE;
			}
			//print_r($data['msg']);				
		}else{
			try {
				$mail = new PHPMailer(true); //New instance, with exceptions enabled

				$mail->IsSMTP();                           // tell the class to use SMTP
				$mail->SMTPAuth   = true;                  // enable SMTP authentication
				$mail->Port       = 25;                    // set the SMTP server port
				$mail->Host       = "mail.royalferrygroup.com"; // SMTP server
				$mail->Username   = "it@royalferrygroup.com";     // SMTP server username
				$mail->Password   = "adminrpl2017";            // SMTP server password

				$mail->IsSendmail();  // tell the class to use Sendmail

				$mail->AddReplyTo("account_ar@royalferrygroup.com","Royal Passenger Liner");

				$mail->From       = "account_ar@royalferrygroup.com";
				$mail->FromName   = "Royal Passenger Liner";

				$mail->AddAddress($_POST['email']);

				$mail->Subject  = $_POST['subject'];

				$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
				$mail->WordWrap   = 80; // set word wrap

				$mail->MsgHTML($_POST['body']);

				$mail->IsHTML(true); // send as HTML

				if($mail->Send())
				{
					$response = (bool)TRUE;

				}else{
					$response = (bool)FALSE;
				}

				//echo 'Message has been sent.';
			} catch (phpmailerException $e) {
				//$data['msg'] = $e->errorMessage();
				$response = (bool)FALSE;
			}
			//print_r($data['msg']);				
		}

		echo $response;
	}
	
?>