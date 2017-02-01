<?php
	session_start();
	$id=$_SESSION['id'];
	include('../sqlconfig/sqlconfig.php');
	mysqli_query($con,"delete from details where int_id='$id'") or die(mysqli_error($con));
	header("location:../add.php");
?>