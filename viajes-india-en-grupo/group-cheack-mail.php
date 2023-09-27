<?php
ob_start();
//FORM ACTION
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($_POST['guest_email_id_2']))
{
	$guest_name 			= test_input($_POST['guest_name_2']);
	$guest_email 			= test_input($_POST['guest_email_id_2']);
	$guest_phone 			= test_input($_POST['guest_contact_no_2']);
	$guest_country 			= test_input($_POST['guest_country_2']);
	$guest_adult 			= test_input($_POST['guest_adults_no_2']);
	$guest_children 		= test_input($_POST['guest_childs_no_2']);
	$guest_arv_date 		= test_input($_POST['guest_arv_date_2']);
	$guest_duration 		= test_input($_POST['guest_travel_duration_2']);
	$guest_hotel_type		= test_input($_POST['guest_selected_type_hotel_2']);
	$guest_detail 			= test_input($_POST['guest_message_2']);
	$sideurl				= test_input($_POST['sideurl']);
	
	/*$error_count = 0;
	if($guest_name==""||$guest_name==null)
	{
		$error_count = 1;
	}
	
	if($guest_email==""||$guest_email==null)
	{
		$error_count = 1;
	}
	
	if(!filter_var($guest_email, FILTER_VALIDATE_EMAIL))
	{
		$error_count = 1;
	}
	
	if($guest_phone==""||$guest_phone==null)
	{
		$error_count = 1;
	}
	
	
	if($guest_country==""||$guest_country==null)
	{
		$error_count = 1;
	}
	
  if($guest_adult==""||$guest_adult==null)
	{
		$error_count = 1;
	}
	
	if($guest_children==""||$guest_children==null)
	{
		$guest_children = '--';
	}
	
	if($guest_arv_date==""||$guest_arv_date==null)
	{
		$error_count = 1;
	}
	
	if($guest_duration==""||$guest_duration==null)
	{
		$error_count = 1;
	}
	
	if($guest_hotel_type==""||$guest_hotel_type==null)
	{
		$error_count = 1;
	}
	
	if($guest_detail==""||$guest_detail==null)
	{
		$error_count = 1;
	}
*/
	if($error_count==1)
	{
		header('location:https://www.tusktravel.com/tts');
		exit;
	}

	$guest_country_name  = explode("_", $guest_country);
	
	//SEND EMAIL TO ADMIN
	$to = "tusktravels@gmail.com";	
	/*$to = "tusktravels@gmail.com, sales.tusktravels@gmail.com";*/
	$subject = "Enquiry Form - $guest_country, $guest_duration - Days, $guest_hotel_type";
	
	//$my = $guest_tentative_year.'-'.$guest_tentative_month;


		    $servername = "localhost";
            $username = "tuskttre_tuskadm";
            $password = "Abcd@98765";
            $dbname = "tuskttre_shoutovp_tuskadmin";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            /*$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[HTTP_REFERER]";
*/

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 
           echo  $sql = "INSERT INTO tbl_tuskenqtravel(name, phone, email, country, message, date_arrival, days, URL, IP)VALUES ('".$guest_name."', '".$guest_phone."','".$guest_email."','".$guest_country."','".$guest_detail."','".date("Y-m-d",strtotime($guest_arv_date))."','".$guest_duration."','".$_SERVER[HTTP_REFERER]."','".$_SERVER['REMOTE_ADDR']."')";

            if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();



	$message = "
	<html>
	<head>
	<title>Enquiry Form</title>
	</head>
	<body>	
	<table border='1' cellpadding='5' style='border-collapse:collapse;'>
	<tr>
	<td>Name:</td><td>".ucwords($guest_name)."</td>
	</tr>
	<tr>
	<td>Email:</td><td>".$guest_email."</td>
	</tr>
	<tr>
	<td>Phone:</td><td>".$guest_phone."</td>
	</tr>
	<tr>
	<td>Country:</td><td>".ucwords($guest_country_name[0])."</td>
	</tr>
	<tr>
	<td>Adult:</td><td>".$guest_adult."</td>
	</tr>
	<tr>
	<td>Children:</td><td>".$guest_children."</td>
	</tr>
	<tr>
	<td>Tentative Date of Travel:</td>".$guest_arv_date."</td>
	</tr>
	<tr>
	<td>No. of Days:</td><td>".$guest_duration."</td>
	</tr>
	<tr>
	<td>Hotel Type:</td><td>".$guest_hotel_type."</td>
	</tr>
	<tr>
	<td>Tour Details:</td><td>".ucwords($guest_detail)."</td>
	</tr>
	<tr>
	<td>Ip Address:</td><td>".$_SERVER['REMOTE_ADDR']."</td>
	</tr>
	<tr>
	<td>URL:</td><td>".ucwords($sideurl)."</td>
	</tr>
	</table>
	</body>
	</html>
	";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: TuskTravel<contact@tusktravel.com>' . "\r\n";
	//$headers .= 'Cc: myboss@example.com' . "\r\n";

	$mailsend = mail($to,$subject,$message,$headers);

	$message2 = "<p><strong>Thank you for trusting and submitting your inquiry to Tusk Travel.</strong></p> 
<p>We have received your message. We appreciate you sharing your travel plans. 
Our destination expert will be in touch shortly to help craft the perfect vacation for you.</p>

<p>-Sincerely, <br />
<strong>Team Tusk Travel</strong></p><br /><hr /><br /><h4>Your Enquiry Details: </h4>";

	$message2 = $message2.$message;
	$mailsend2 = mail($guest_email,"Thank You for Travel Enquiry - Tusk Travel",$message2,$headers);


	
	if($mailsend)
		header('location:https://www.tusktravel.com.mx/thankyou.html');
	else
		header('location:https://www.tusktravel.com.mx/404.html');
	
}
else
	header('location:https://www.tusktravel.com.mx/');
?>	