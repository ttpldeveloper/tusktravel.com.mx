<?php
ob_start();
//FORM ACTION
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($_POST['guest_email_id']))
{
	$guest_name 			= test_input($_POST['guest_name']);
	$guest_email 			= test_input($_POST['guest_email_id']);
	$guest_phone 			= test_input($_POST['guest_contact_no']);
	$guest_country 			= test_input($_POST['guest_country']);
	$guest_adult 			= test_input($_POST['guest_adults_no']);
	$guest_children 		= test_input($_POST['guest_childs_no']);
	$guest_arv_date 		= test_input($_POST['guest_arv_date']);
	$guest_duration 		= test_input($_POST['guest_travel_duration']);
	$guest_hotel_type		= test_input($_POST['guest_selected_type_hotel']);
	$guest_detail 			= test_input($_POST['guest_message']);
	
	$error_count = 0;
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

	if($error_count==1)
	{
		header('location:https://www.tusktravel.com.mx/');
		exit;
	}

	$guest_country_name  = explode("_", $guest_country);
	
	//SEND EMAIL TO ADMIN
	$to = "tusktravels@gmail.com";
	$subject = "Enquiry Form ";
	
	
	//$my = $guest_tentative_year.'-'.$guest_tentative_month;

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
	<td>Tentative Date of Travel:</td>".date("d M Y",strtotime($guest_arv_date))."</td>
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
	</table>
	</body>
	</html>
	";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <contact@tusktravel.com>' . "\r\n";
	//$headers .= 'Cc: myboss@example.com' . "\r\n";

	$mailsend = mail($to,$subject,$message,$headers);
	
	if($mailsend)
		header('location:thankyou.html');
	else
		header('location:2.html');
	
}
else
	header('location:3.html');
?>