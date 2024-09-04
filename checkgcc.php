<?php 


$name=$_GET['name'];

$gcc=$_GET['gcc'];


require_once 'service/read.php';


$all=getstatusbyname($name);


$status=$all[0]['status'];


if(  $status=='r' and $gcc=='no')
{
	echo 'd';
}


 ?>