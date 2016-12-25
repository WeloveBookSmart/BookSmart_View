<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Client List</title>

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
	<h1 align="center" style="font-style: Arial">All The Client</h1>
	
	<div class="table-responsive"><!-->this is necessary to adjust responsiveness for device<!--->
		<table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
			<thead>
				<tr>
					<th>Client ID:</th>
					<th>Name:</th>
					<th>Email:</th>
					<th>Social Account:</th>
					<th>Service Provided:</th>
					<th>Package per Service:</th>
					<th>Transaction History:</th>
					<th>Delete Client</th>
				</tr>
			</thead>
	<?php
	include("../config/db_connection.php");
	$view_users_query="SELECT client_id,name,email,social_account_username,service_id,package_id,transaction_history_id FROM users"; 
	$run=mysqli_query($dbcon,$view_users_query);
	
	while($row=mysqli_fetch_array($run)) //while look to fetch the result and store in array
	{
		$client_id=$row[0];
		$name=$row[1];
		$email=$row[2];
		$social_account_username=$row[3];
		$service_id=$row[4];
		$package_id=$row[5];
		$transaction_history_id=$row[6]
	
	?>
	
	<tr>
		<td><?php echo $client_id; ?></td>
		<td><?php echo $name; ?></td>
		<td><?php echo $email; ?></td>
		<td><?php echo $social_account_username; ?></td>
		<td><a href="manage_client.php?service_id="<?php echo $service_id; ?>>"</a></td>
		<td><a href="manage_client.php?package_id="<?php echo $package_id; ?>>"<button class="btn btn-primary">View Package</button></a></td>
		<td><?php echo $transaction_history_id; ?></td>
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
    <script src="../bootstrap/js/bootstrap.min.js"></script>
	<script src="../bootstrap/js/bootstrap.js"></script>
  </body>
</html> 



