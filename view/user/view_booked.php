<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>View All Booking</title>

    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 </head>
 <body>
 
 <div class="table-scroll" id="booking_data">
	<h1 align="center" style="font-style: Arial">All The Booking For $service_name</h1>
	
	<div class="table-responsive"><!-->this is necessary to adjust responsiveness for device<!--->
		<table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
			<thead>
				<tr>
					<th>ID:</th>
					<th>Package Name:</th>
					<th>User Book:</th>
					<th>Price:</th>
					<th>Payment_Status:</th>
					<th>Delete User</th>
				</tr>
			</thead>
	<?php
	include('config.php');
	include('service_booked.php');
	$view_book_query="SELECT * FROM service_booked WHERE id?='$b_id'"; 
	$run=mysqli_query($dbcon,$view_book_query);
	
	while($row=mysqli_fetch_array($run)) //while look to fetch the result and store in array
	{
		$package_id=$row[0];
		$package_name=$row[1];
		$user_book=$row[2];
		$price=$row[3];
		$payment_status=$row[4];
		
	
	?>
	
	<tr>
		<td><?php echo $package_id; ?></td>
		<td><?php echo $package_name; ?></td>
		<td><?php echo $user_book; ?></td>
		<td><?php echo $price; ?></td>
		<td><?php echo $payment_status; ?></td>
		
		<td><a href="delete.php?del=<?php echo $package_id ?>"><button class="btn btn-danger">Delete?</button></a></td>
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
	<script>
		if(document.getElementById(div#booking_data))
		{
			alert('This Is The Booking Data');
		}
		else{
			echo "You Have No Data Within This Table. Please Upload Your Business Service and Wait For User To Book";
		}
	</script>
  </body>
</html> 



