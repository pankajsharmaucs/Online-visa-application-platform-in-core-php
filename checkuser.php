<?php 


$country=$_POST['country'];

if ($country) {

		@$gcc=$_POST['gcc'];

		@$sch=$_POST['sch'];



		require_once 'service/read.php';

		$data=getstatusbyname($country);


		@$status=$data[0]['status'];



		if($status=='d' and $gcc=='yes'){ echo "<script>window.open('apply/applyform.php?country=$country&status=d&gcc=yes','_self');</script>"; }

		if($status=='d' and $gcc=='no'){ echo "<script>window.open('apply/applyform.php?country=$country&status=d&gcc=no','_self');</script>"; }



		if($status=='r' and $gcc=='yes'){ echo "<script>window.open('apply/applyform.php?country=$country&status=r&gcc=yes','_self');</script>"; }

		if($status=='r' and $gcc=='no' and $sch=='yes')
			{ echo "<script>window.open('apply/applyform.php?country=$country&status=r&gcc=no&sch=yes','_self');</script>"; }

		if($status=='r' and $gcc=='no' and $sch=='no')
			{ echo "<script>window.open('apply/applyform.php?country=$country&status=r&gcc=no&sch=no','_self');</script>"; }




		if($status=='b' and $gcc=='yes'){ echo "<script>window.open('apply/applyform.php?country=$country&status=b&gcc=yes','_self');</script>"; }
		if($status=='b' and $gcc=='no'){ echo "<script>alert('We are sorry but we are not processing evisa for this nationality');window.open('index.php','_self');</script>"; }



		if($status=='' and $gcc=='yes'){ echo "<script>window.open('apply/applyform.php?country=$country&status=u&gcc=yes','_self');</script>"; }

		if($status=='' and $gcc=='no'){ echo "<script>window.open('apply/applyform.php?country=$country&status=u&gcc=no','_self');</script>"; }

}
else{ header('location:index.php');}






 ?>