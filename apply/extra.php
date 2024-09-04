<?php


$visatype='';

$visafee='';



if($plan==10){$visatype="10 days single entry"; }
if($plan==30){$visatype="30 days single entry"; }
if($plan==1){$visatype="1 year multiple entry"; }
if($plan==28){$visatype="28 days single entry"; }
if($plan=='s30'){$visatype="30 days single entry"; }

if($plan=='s30'){$ex=30; }
if($plan=='28'){$ex=28; }
if($plan=='10'){$ex=10; }
if($plan=='30'){$ex=30; }
if($plan=='1'){$ex=30; }

if($plan=='s30' and $process=='n' ){$visafee=364; }
if($plan=='s30' and $process=='' ){$visafee=364; }

if($plan==28 and $process=='n'){ $visafee=69; }

if($plan==28 and $process=='f'){$visafee=89; }

if($plan==28 and $process=='u'){$visafee=169; }


if($plan==10 and $process=='n'){$visafee=64; }
if($plan==10 and $process=='f'){$visafee=84; }
 if($plan==10 and $process=='u'){$visafee=184; }


 if($plan==30 and $process=='n'){$visafee=99; }
 if($plan==30 and $process=='f'){$visafee=119; }
 if($plan==30 and $process=='u'){$visafee=199; }

 if($plan==1 and $process=='n'){$visafee=199; }
 if($plan==1 and $process=='f'){$visafee=249; }
 if($plan==1 and $process=='u'){$visafee=349; }


$date1=date_create("$day-$month-$year");
date_add($date1,date_interval_create_from_date_string($ex." days"));
$exit_date= date_format($date1,"d-m-Y");

?>