<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>View All User</title>

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
	<h1 align="center" style="font-style: Arial">All The User</h1>
	
	<div class="table-responsive"><!-->this is necessary to adjust responsiveness for device<!--->
		<table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
			<thead>
				<tr>
					<th>User ID:</th>
					<th>Username:</th>
					<th>User Email:</th>
					<th>Amount Booked:</th>
					<th>Booking History:</th>
					<th>Delete User</th>
				</tr>
			</thead>
	<?php
	include('../config/db_connection.php');
	$view_users_query="SELECT user_id,user_name,email,amount_booked,booking_history_id FROM user"; 
	$run=mysqli_query($dbcon,$view_users_query);
	
	while($row=mysqli_fetch_array($run)) //while look to fetch the result and store in array
	{
		$user_id=$row[0];
		$user_name=$row[1];
		$user_email=$row[2];
		$amount_booked=$row[3];
		$booking_history_id=$row[4];
		
	
	?>
	
	<tr>
		<td><?php echo $user_id; ?></td>
		<td><?php echo $user_name; ?></td>
		<td><?php echo $user_email; ?></td>
		<td><?php echo $amount_booked; ?></td>
		<td><a href="booking_history.php?view=<?php echo $booking_history_id; ?>"></a></td>
		
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



