<?php
	session_start();
	$id=$_SESSION['id'];
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
		mysqli_query($con,"update details set var_name='$name',var_phone='$phone',var_email='$email',var_gender='$gender',var_hobby='$hobby',var_image='$pic',var_country='$country' where int_id = '$id' 	") or die(mysqli_error($con));
		header("location:../add.php");
	}
	else
		echo "404, no data recieved";
?>