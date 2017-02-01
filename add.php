<html>
	<head>
		<title>ADD</title>
		<link rel="stylesheet" type="text/css" href="test.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
		<script src="bootstrap/jquery.min.js"></script>
		<script src="bootstrap/bootstrap.min.js"></script>
	</head>
	<body style="background-color:#3C3B37;">
		<form class="col-md-6 col-md-offset-3" method="POST" action="services/addservices.php">
			<h1>ADD</h1>
			<br>
			<div class="row">
				<label class="col-md-2 col-md-offset-4">Name : </label>
				<input class="col-md-offset-0" type="text" name="name" id="name" placeholder:"name">
			</div>
			<br>
			<div class="row">
				<label class="col-md-2 col-md-offset-4">Phone :</label> 
				<input class="col-md-offset-0" type="text" name="phone" id="phone" placeholder:"phone">
			</div>
			<br>
			<div class="row">
				<label class="col-md-2 col-md-offset-4">email :</label>  
				<input class="col-md-offset-0" type="text" name="email" id="email" placeholder:"email">
			</div>
			<br>
			<div class="row">
				<label class="col-md-2 col-md-offset-4">Gender :</label>
				<input type="radio" name="gender" id="male" value="male">male
				<input type="radio" name="gender" id="female" value="female">female
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
				<input class="col-md-offset-0" type="file" name="pic" accept="image/gif, image/jpeg, image/png">
			</div>
			<br>
			<div>
				<label class="col-md-2 col-md-offset-4">country :</label>  
				<input class="col-md-offset-0" type="text" name="country" id="country" placeholder:"country">	
			</div>
			<br>
			<div>
				<input class="col-md-offset-6 btn btn-success" type="submit" name="save" id="save" value="save">	
			</div>
			<br>
		</form>
		<div ><button id="flip" class="col-md-4 col-md-offset-4 btn btn-primary">Click to view member details</button></div>
		<div id="panel"  class="col-md-6 col-md-offset-3"><?php require ("fetch.php"); ?></div>
		<script> 
			$(document).ready(function()
			{
			    $("#flip").click(function()
			    {
			    	$("#panel").slideToggle("slow");
				});
			});
		</script>
	</body>
</html>