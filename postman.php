<?php
	
	echo "<h1>Utalványos email elküldve</h1>";
	//maybe display the email and the header

	$mail->setFrom('utalvanyok@finance-sales.com', 'Admin');
	$mail->addAddress('abel.fenykep@gmail.com', 'Joe User');     //Add a recipient
	$mail->addCC('cc@finance-sales.com');
	$mail->addBCC('bcc@finance-sales.com');

	//Attachments
	$mail->addAttachment('sablon.xls');         //Add attachments

	if (hour less than 12) {
		"ma (" +"06. 02."+  ") zárásig" 
	}
	else{
		"holnap (" +"06. 02."+  ") zárásig" 
	}

	$arrayName = array('january' => 'január',
	'january' => 'január',
	'january' => 'január',
	'january' => 'január',
	'january' => 'január',
	'january' => 'január',
	'january' => 'január',
	'january' => 'január',
	'january' => 'január',
	'january' => 'január',
	'january' => 'január',
	'january' => 'január', );

	var lastdayoflastmonth = date("M", strtotime("-1 month"));
	var curmonth = date("M");
	var deadlineday = 1;
	if (date("d")==1 && date("D")=="Monday") {
		$deadlineday=2;
	}

	//Content
	$mail->isHTML(true);                                  //Set email format to HTML
	$mail->Subject = 'Here is the subject';
	$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
	

	$mail->send();

?>

<?php

// echo "<h2>".$_GET['name']."</h2>";
// //if(isset($_POST['email'])) {

// // Email and subject.
// $email_to = $_GET['mail'];
// $from = "ajanlatkeres@bestsolar.hu";

// $headers = 'Content-type: text/html; charset=utf-8' . "\r\n";
// $headers .= 'Cc: ajanlatkeres@bestsolar.hu' . "\r\n";
// $headers .= 'From: '.$from."\r\n".'Reply-To: '.$from."\r\n".'X-Mailer: PHP/'.phpversion();

// $kosziemail = "Köszönöm szépen, megérkezett a megrendelésed, hamarosan felveszem veled a kapcsolatot.";
// $koszubjekt = "bestsolar";
// $kosziemail = '<html><body style="font-family: sans-serif;width:600px;">
//     <header style="background-color: #0D1316;">
//       <img style="padding: 20px; width:136px;height:38px" src="https://bs.test.autopal.hu/wp-content/uploads/2021/10/bestsolar-logo-1.png">
//       <h1 style="color:#1bc1b3;margin-left: 31px;">Kedves '.$_GET['name'].'</h1>
//         <p style="color:white;margin-left: 31px;margin-bottom: 0;padding-bottom: 20px;">Örömmel vettük, hogy kitöltötte a napelem kalkulátorunkat</p>
//     </header>
//     <div style="padding: 31px;background-color: #e5e5e5;font-weight: bold;">
//       <p style="margin-top: 0;">Az ön által beírt adatok</p>
//       <div style="display: flex;">
//         <p style="color:#666;margin-right: 10px;">Havi villanyszámla:</p>
//         <p style="color:#1bc1b3">'.$_GET['villany'].' FT</p>
//       </div>
//       <p style="border-radius: 20px;background-color: #1BC1B3;color: white; padding: 10px;text-align: center;">A kalkuláció alapján a következő csomagjainkat ajánljuk:</p>

//     </div>
//     <footer></footer>
//   </body></html>';


// //mail
// mail($email_to, $koszubjekt, $kosziemail, $headers, "-f " . $email_to);
// header("location:https://bestsolar.hu");
// exit;

?>

