<?php
include("../config/db_connection.php")
$service_id=$_GET['service_id'];
$select_query = "SELECT service_id, package_id FROM client WHERE id='service_id'&& id='$package_id'"; // delete query
$run=mysqli_query($dbcon,$select_query);
if($run)
{
//js function to open in the same window
//appear popup
	echo "<script>window.open('view_client.php?=user has been deleted','_SELF')</script>";
}

?>