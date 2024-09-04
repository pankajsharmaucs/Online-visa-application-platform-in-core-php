<?php 

session_start();

@$f_name=filter_var($_POST['f_name'],FILTER_SANITIZE_STRING);
@$l_name=filter_var($_POST['l_name'],FILTER_SANITIZE_STRING);

@$name=$f_name." ".$l_name;


@$email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
@$age=filter_var($_POST['age'],FILTER_SANITIZE_NUMBER_INT);

@$gender=filter_var($_POST['gender'],FILTER_SANITIZE_STRING);
@$father=filter_var($_POST['father'],FILTER_SANITIZE_STRING);
@$mother=filter_var($_POST['mother'],FILTER_SANITIZE_STRING);
@$birth_place=filter_var($_POST['birth_place'],FILTER_SANITIZE_STRING);


@$date_journey=filter_var($_POST['date_journey'],FILTER_SANITIZE_STRING);



@$dday=$_POST['dday'];
@$dmonth=$_POST['dmonth'];
@$dyear=$_POST['dyear'];

@$dob=date("$dday-$dmonth-$dyear");

@$visa=1;
@$day=$_POST['day'];
@$month=$_POST['month'];
@$year=$_POST['year'];

@$pass_expiry=date("$day-$month-$year");

@$gday=$_POST['gday'];
@$gmonth=$_POST['gmonth'];
@$gyear=$_POST['gyear'];

@$gcc_expiry=date("$gday-$gmonth-$gyear");


@$sday=$_POST['sday'];
@$smonth=$_POST['smonth'];
@$syear=$_POST['syear'];

@$sch_expiry=date("$sday-$smonth-$syear");


@$plan=$_POST['plan'];
@$process=$_POST['process'];
@$total=$_POST['total'];

@$profession=$_POST['profession'];


@$reference=$_SESSION['reference'];





@$country=$_SESSION['country'];
@$mobile=$_SESSION['mobile'];



$img_name=$_FILES['photo']['name'];
$img_tmp=$_FILES['photo']['tmp_name'];

$pass_name=$_FILES['pass']['name'];
$pass_tmp=$_FILES['pass']['tmp_name'];


@$gcc_name=$_FILES['gcc']['name'];
@$gcc_tmp=$_FILES['gcc']['tmp_name'];



@$sch_name=$_FILES['sch']['name'];
@$sch_tmp=$_FILES['sch']['tmp_name'];


@$mar_name=$_FILES['mar']['name'];
@$mar_tmp=$_FILES['mar']['tmp_name'];


@$air_name=$_FILES['air']['name'];
@$air_tmp=$_FILES['air']['tmp_name'];


@$res_name=$_FILES['res']['name'];
@$res_tmp=$_FILES['res']['tmp_name'];


@$hotel_name=$_FILES['hotel']['name'];
@$hotel_tmp=$_FILES['hotel']['tmp_name'];


@$extra_name=$_FILES['extra']['name'];
@$extra_tmp=$_FILES['extra']['tmp_name'];


// include('post.php');
// Mail

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



require_once '../service/db.php';


			      $dbobj=new PDOConnection;
			      $conn=$dbobj->connect();
			      

              $query="INSERT INTO `client` ( `reference`, `name`, `email`, `mobile`, `dob`, `gender`, `father`, `mother`, `birth_place`, `country`, `photo`, `passport`, `pass_expiry`, `gcc`, `gcc_expiry`,`profession`, `sch`,`sch_expiry`, `hotel_ticket`, `air_ticket`, `mar`, `res`, `extra`, `date_journey`,  `visa`, `plan`, `process`, `total_price`) 
              VALUES('$reference','$name','$email',$mobile,'$dob','$gender','$father','$mother','$birth_place','$country','$img_name','$pass_name','$pass_expiry','$gcc_name','$gcc_expiry','$profession','$sch_name','$sch_expiry','$hotel_name','$air_name','$mar_name','$res_name','$extra_name','$date_journey','$visa','$plan','$process','$total')";

              $insert=$conn->prepare($query);
              $insert->execute();

              if($insert)
              {
              	$path='client/'.$reference;
              	
                @mkdir($path,0777,true);

              	move_uploaded_file($img_tmp, "$path/$img_name");
              	move_uploaded_file($pass_tmp, "$path/$pass_name");
                move_uploaded_file($sch_tmp, "$path/$sch_name");
                move_uploaded_file($gcc_tmp, "$path/$gcc_name");
                move_uploaded_file($hotel_tmp, "$path/$hotel_name");
                move_uploaded_file($air_tmp, "$path/$air_name");
                move_uploaded_file($mar_tmp, "$path/$mar_name");
                move_uploaded_file($res_tmp, "$path/$res_name");
                move_uploaded_file($extra_tmp, "$path/$extra_name");


              	$_SESSION['order_id']=$reference;


              	echo "added";

              }  else{echo "no";}

 ?>