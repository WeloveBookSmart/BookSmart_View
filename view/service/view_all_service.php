<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>All Services</title>

    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 </head>
 <style>
	.login-panel {
		 margin-top: 150px;
	}
	.table {
		margin-top: 50px;
	}	
 </style>
 
 <body>
 
 <div class="table-scrol">
	<h1 align="center" style="font-style: Arial">All The Service</h1>
	
	<div class="table-responsive"><!-->this is necessary to adjust responsiveness for device<!--->
		<table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
			<thead>
				<tr>
					<th>ID:</th>
					<th>Service Name:</th>
					<th>Client: </th>
					<th>Category:</th>
					<th>Price:</th>
					<th>Delete User</th>
				</tr>
			</thead>
	<?php
	include("../config/db_connection.php");
	$view_services_query="SELECT id,service_name,client_id,client_name,service_category,service_price FROM tbl_services"; 
	$run=mysqli_query($dbcon,$view_services_query);
	
	while($row=mysqli_fetch_array($run)) //while look to fetch the result and store in array
	{
		$id=$row[0];
		$service_name=$row[1];
		$client_id=$row[2];
		$client_name=$row[3];
		$service_category=$row[4];
		$service_price=$row[5];
		
	
	?>
	
	<tr>
		<td><?php echo $id; ?></td>
		<td><?php echo $service_name; ?></td>
		<td><?php echo $client_id; ?></td>
		<td><?php echo $client_name; ?></td>
		<td><?php echo $service_category; ?></td>
		<td><?php echo $service_price; ?></td>

		<td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete?</button></a></td>
	</tr>
	
	<?php } ?>
	</table>
		</div>
	</div>
	
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="jquery.js"></script>
	<script src="jquery.form.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
  </body>
</html> 



