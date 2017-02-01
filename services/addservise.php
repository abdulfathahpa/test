<?php
	include('../sqlconfig/sqlconfig.php');
	if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['gender']) && !empty($_POST['hobby']) && !empty($_POST['country']))
	{
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$gender=$_POST['gender'];
		$hobby=$_POST['hobby'];
		$country=$_POST['country'];
		$pic=$_POST['pic'];
		mysqli_query($con,"insert into details values(null,'$name','$phone','$email','$gender','$hobby','$pic','$country')") or die(mysqli_error($con));
	}
	else
		echo "404, no data recieved";
?>