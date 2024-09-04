<?php




if($process=='n'){ $service="Normal Service";}
if($process=='f'){ $service="Fast Service";}
if($process=='u'){ $service="Urgent Service";}
if(empty($process)){ $service="Normal Service";}


if($plan==10){ $visa_type="10 Days single Entry";}
if($plan==30){ $visa_type="30 Days single Entry";}
if($plan==1){ $visa_type="1 Year Multiple Entry";}
if($plan==28){ $visa_type="28 Days single Entry";}
if($plan=='s30'){ $visa_type="30 Days single Entry sponsered";}





$to = "info@omanevisa.org";

// $to = "pankajbpojob@gmail.com";

$subject = "Visa query  form submit on oman-immigration.org for ".$service;





$body="

Number of Visa : $visa  <br>


Order Id: $reference  <br>
Applicant Name: $name  <br>
Email: $email  <br>
Mobile Number: $mobile  <br>
Date of Journey: $date_journey  <br>
Country: $country  <br>
Service : $service  <br>
Visa Type: $visa_type  <br>
Total Fee(USD) :$total  <br>
Profession :$profession  <br>

Applicant Photo : <a href='https://www.oman-immigration.org/apply/client/$reference/$img_name'>Downlaod Link</a><br>
Passport : <a href='https://www.oman-immigration.org/apply/client/$reference/$pass_name'>Downlaod Link</a><br>
GCC Visa : <a href='https://www.oman-immigration.org/apply/client/$reference/$gcc_name'>Downlaod Link</a><br>
Sechnegn Visa : <a href='https://www.oman-immigration.org/apply/client/$reference/$sch_name'>Downlaod Link</a><br>
Hotel Info : <a href='https://www.oman-immigration.org/apply/client/$reference/$hotel_name'>Downlaod Link</a><br>
Air Ticket : <a href='https://www.oman-immigration.org/apply/client/$reference/$air_name'>Downlaod Link</a><br>
Marriage Certificate: <a href='https://www.oman-immigration.org/apply/client/$reference/$mar_name'>Downlaod Link</a><br>
Residence Proof : <a href='https://www.oman-immigration.org/apply/client/$reference/$res_name'>Downlaod Link</a><br>
Extra Doc : <a href='https://www.oman-immigration.org/apply/client/$reference/$extra_name'>Downlaod Link</a><br>

";



// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$email.'>' . "\r\n";

mail($to,$subject,$body,$headers);


 ?> 