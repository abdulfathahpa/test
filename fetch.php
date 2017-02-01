<?php
	session_start();
	include('sqlconfig/sqlconfig.php');
	$res=mysqli_query($con,"select * from details");
	$count=mysqli_num_rows($res);
?>
<html>
	<head>
		<title>Fetch</title>
	</head>
	<body>
		<table border="5px" align="center" cellspacing="10px">
			<tr>
				<th>
					ID
				</th>
				<th>
					Name
				</th>
				<th>
					Phone
				</th>
				<th>
					E-mail
				</th>
				<th colspan="2">
					Action
				</th>
			</tr>
			<?php
				for($i=0;$i<=$count-1;$i++)
				{
					$obj=mysqli_fetch_object($res);
					$_SESSION['id']=$obj->int_id;
					$id=$obj->int_id;
			?>
					<tr>
						<td><?php echo $obj->int_id; ?></td>
						<td><?php echo $obj->var_name; ?></td>
						<td><?php echo $obj->var_phone; ?></td>
						<td><?php  echo $obj->var_email;?></td>
						<td><a href="update.php">edit</a></td>
						<td><a href="services/deleteservice.php">delete</a></td>
					</tr>
			<?php
				} 
			?>
			</table>
	</body>
</html>