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
		<table class="table table-bordered">  
                <tr>  
                     <th width="79px" height="37px" style="text-align:center;">Id</th>  
                     <th width="190px" height="37px" style="text-align:center;">Package Name</th>  
					 <th width="320px" height="37px" style="text-align:center;">Detail</th>
                     <th width="95px%" height="37px" style="text-align:center;">Price</th>
					 <th width="30px" height="37px" style="text-align:center;">Delete</th>					 
                </tr>
		</table>
	<?php
	$connect = mysqli_connect("localhost", "root", "", "test");
	$view_package_query="SELECT id,package_name,detail,price FROM tbl_packages"; 
	$run=mysqli_query($connect,$view_users_query);
	
	while($row=mysqli_fetch_array($run)) //while look to fetch the result and store in array
	{
		$id=$row[0];
		$package_name=$row[1];
		$detail=$row[2];
		$price=$row[3];
		
	
	?>
	
	<tr>
		<td><?php echo $id; ?></td>
		<td><?php echo $package_name; ?></td>
		<td><?php echo $detail; ?></td>
		<td><?php echo $price; ?></td>
		
		<td><a href="delete.php?del=<?php echo $id ?>"><button class="btn btn-danger">Delete?</button></a></td>
	</tr>
	
	<?php } ?>
	</table>
		</div>
	</div>
	
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
  </body>
</html> 



