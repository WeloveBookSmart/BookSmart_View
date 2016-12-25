<?php
include("../config/db_connection.php")
$delete_id=$_GET['del'];
$delete_query = "DELETE FROM user WHERE id='$delete_id'"; // delete query
$run=mysqli_query($dbcon,$delete_query);
if($run)
{
//js function to open in the same window
	echo "<script>window.open('view_users.php?deleted=user has been deleted','_SELF')</script>";
}

?>