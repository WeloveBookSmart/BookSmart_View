<?php
include("../config/db_connection.php")
$delete_id=$_GET['del'];
$delete_query = "DELETE FROM client WHERE id='$delete_id'"; // delete query//revoked it id=$delete_id or user_id=$delete_id
$run=mysqli_query($dbcon,$delete_query);
if($run)
{
//js function to open in the same window
	echo "<script>window.open('view_client.php?deleted=client has been sacked','_SELF')</script>";
}

?>