<?php
	session_start();
	$id=$_SESSION['id'];
	include('sqlconfig/sqlconfig.php');
	$res=mysqli_query($con,"select * from details where int_id = '$id'");
	$count=mysqli_num_rows($res);
	$obj=mysqli_fetch_object($res);
?>
<html>
	<head>
		<title>Update</title>
		<link rel="stylesheet" type="text/css" href="test.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
		<script src="bootstrap/jquery.min.js"></script>
		<script src="bootstrap/bootstrap.min.js"></script>
	</head>
	<body style="background-color:#3C3B37;">
		<form class="col-md-6 col-md-offset-3" method="POST" action="services/updateservices.php">
			<h1>Update</h1>
			<br>
			<div class="row">
				<label class="col-md-2 col-md-offset-4">Name : </label>
				<input class="col-md-offset-0" type="text" name="name" id="name" value="<?php echo $obj->var_name; ?>">
			</div>
			<br>
			<div class="row">
				<label class="col-md-2 col-md-offset-4">Phone :</label> 
				<input class="col-md-offset-0" type="text" name="phone" id="phone" value="<?php echo $obj->var_phone; ?>">
			</div>
			<br>
			<div class="row">
				<label class="col-md-2 col-md-offset-4">email :</label>  
				<input class="col-md-offset-0" type="text" name="email" id="email" value="<?php echo $obj->var_email; ?>">
			</div>
			<br>
			<div class="row">
				<label class="col-md-2 col-md-offset-4">Gender :</label>
				<input type="radio" name="gender" id="male">male
				<input type="radio" name="gender" id="female">female
			</div>
			<br>
			<div class="row">
				<label class="col-md-2 col-md-offset-4">Hobbies :</label>  
				<select class="col-md-offset-0 col-md-3" name="hobby">
					<option value="Listening">Listening</option>
					<option value="Reading">Reading</option>
					<option value="Browsing">Browsing</option>
					<option value="Playing">Playing</option>
				</select>
			</div>
			<br>
			<div class="row">
				<label class="col-md-2 col-md-offset-4">Pic :</label>  
				<input class="col-md-offset-0" type="file" name="filename" accept="image/gif, image/jpeg, image/png">
			</div>
			<br>
			<div>
				<label class="col-md-2 col-md-offset-4">country :</label>  
				<input class="col-md-offset-0" type="text" name="country" id="country" value="<?php echo $obj->var_country; ?>">	
			</div>
			<br>
			<div>
				<input class="col-md-offset-6 btn btn-success" type="submit" name="Update" id="Update" value="Update">	
			</div>
			<br>
		</form>
	</body>
</html>